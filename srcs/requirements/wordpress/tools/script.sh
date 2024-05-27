#!bin/bash

# Install Wordpress
if [ ! -f /var/www/html/wp-config.php ]; then
    wp config create --dbname=${MYSQL_DATABASE} --dbuser=${MYSQL_USER} \
        --dbpass=${MYSQL_PASSWORD} --dbhost=${MYSQL_HOST} --allow-root --skip-check
    wp core install --url=${WP_URL} --title=${WP_TITLE} --admin_user=${MYSQL_USER} \
        --admin_password=${MYSQL_PASSWORD} --admin_email=${MYSQL_EMAIL} --allow-root
    wp user create ${MYSQL_USER} --role=author --user_pass=${MYSQL_PASSWORD} --allow-root
    chmod 777 /var/www/html/wp-content

    # install theme
    wp theme install twentyfifteen
    wp theme activate twentyfifteen
    wp theme update twentyfifteen
    
fi


/usr/sbin/php-fpm7.3 -F
