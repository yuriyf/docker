# VERSION 0.1
# Debian 8 php 5.6.12+dfsg-0+deb8u1

#PHP 5.6.12-0+deb8u1 (cli) (built: Aug 16 2015 12:16:02) 
#Copyright (c) 1997-2015 The PHP Group
#Zend Engine v2.6.0, Copyright (c) 1998-2015 Zend Technologies
#with Zend OPcache v7.0.6-dev, Copyright (c) 1999-2015, by Zend Technologies


FROM docker-registry.smile-magento.com/smile/debian:8-jessie-base
MAINTAINER Yuriy Furko "<iufur@smile.fr>"

RUN apt-get install -y mc nano wget curl && \
    apt-get -y upgrade && \
    apt-get -y install php5 && \
    apt-get -y install php5-fpm && \
    apt-get -y install php5-cli && \
    apt-get -y install php5-redis && \
    apt-get -y install php5-mysql && \
    apt-get -y install php5-mysqlnd && \
    apt-get -y autoremove && \
    apt-get -y clean && \

EXPOSE 9000

ADD ./supervisord/supervisord.conf /etc/supervisor/conf.d/supervisord.conf
CMD ["/usr/bin/supervisord"]



#--------------------------------
# Start Supervisord ADD ./start.sh /start.sh
RUN chmod 755 /start.sh

#запуск команди з папки
#CMD ["/bin/bash", "/start.sh"]


