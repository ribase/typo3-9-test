# Serveur apache
FROM debian:jessie

RUN echo 'deb http://ftp.fr.debian.org/debian/ jessie non-free' >> /etc/apt/sources.list
RUN echo 'deb-src http://ftp.fr.debian.org/debian/ jessie non-free' >> /etc/apt/sources.list
RUN apt-get update
RUN apt-get -y install apache2 libapache2-mod-fastcgi

RUN apt-get -y install curl wget apt-transport-https
RUN echo 'deb http://packages.dotdeb.org jessie all' > /etc/apt/sources.list.d/dotdeb.list
RUN curl http://www.dotdeb.org/dotdeb.gpg | apt-key add -

RUN wget -O /etc/apt/trusted.gpg.d/php.gpg https://packages.sury.org/php/apt.gpg
RUN echo "deb https://packages.sury.org/php/ jessie main" | tee /etc/apt/sources.list.d/php.list

RUN apt-get update -y
RUN apt-get install -y php7.2 libapache2-mod-php7.2 php7.2-apcu php7.2-curl php7.2-xml php7.2-zip php7.2-mbstring php7.2-gd php7.2-mysql php7.2-soap libpcre3 libpcre3-dev
RUN apt-get install -y php7.2-intl
RUN rm /etc/apache2/sites-enabled/*

ENV VIRTUALHOST www.typo3.local

ADD conf-available /etc/apache2/conf-available
ADD sites-available /etc/apache2/sites-available

ADD utils/php.ini /etc/php/7.2/apache2/php.ini
ADD utils/cli-php.ini /etc/php/7.2/cli/php.ini

EXPOSE 80

ADD apache.sh /usr/bin/apache.sh
RUN chmod +x /usr/bin/apache.sh
ENTRYPOINT apache.sh

WORKDIR /var/www/web
