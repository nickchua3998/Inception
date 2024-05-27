#!/bin/bash

wait_for_mariadb() {
    echo "Waiting for MariaDB to be ready ..."
    until mysqladmin ping -u root -p"${MYSQL_ROOT_PASSWORD}" --silent; do
        echo "Waiting ..."
        sleep 10
    done
    echo "MariaDB is ready!"
}

echo "Creating directories and setting permissions..."
mkdir -p /var/log/mysql
chown -R mysql:mysql /var/log/mysql
mkdir -p /var/lib/mysql
chown -R mysql:mysql /var/lib/mysql

# Check if MariaDB data directory is empty (first run)
if [ -z "$(ls -A /var/lib/mysql)" ]; then
    echo "Starting MariaDB service for the first time..."
    mysqld_safe --datadir='/var/lib/mysql' &

    wait_for_mariadb

    # Create database and user if not exists
    echo "Creating database and user..."
    mysql -u root -p"${MYSQL_ROOT_PASSWORD}" <<EOSQL
CREATE DATABASE IF NOT EXISTS ${MYSQL_DATABASE};
CREATE USER IF NOT EXISTS '${MYSQL_USER}'@'%' IDENTIFIED BY '${MYSQL_PASSWORD}';
GRANT ALL PRIVILEGES ON ${MYSQL_DATABASE}.* TO '${MYSQL_USER}'@'%';
FLUSH PRIVILEGES;
EOSQL

    echo "MariaDB setup completed!"
else
    echo "MariaDB data directory is not empty, skipping initial setup..."
fi

# Start MariaDB normally
echo "Starting MariaDB service..."
exec mysqld_safe --datadir='/var/lib/mysql'










