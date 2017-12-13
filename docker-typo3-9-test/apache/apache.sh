a2enmod rewrite
a3enmod headers
a2enmod expires
a2enmod deflate
a2enmod proxy
a2enmod proxy_fcgi
a2enmod php7.0
a2ensite 000-default

apachectl -e debug -DFOREGROUND --verbose