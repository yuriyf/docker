#NGINX 1.9.5

FROM debian:jessie

MAINTAINER NGINX Docker Maintainers "docker-maint@nginx.com"

RUN apt-key adv --keyserver hkp://pgp.mit.edu:80 --recv-keys ABF5BD827BD9BF62
RUN echo "deb http://nginx.org/packages/mainline/debian/ jessie nginx" >> /etc/apt/sources.list

ENV NGINX_VERSION 1.9.5-1~jessie

RUN apt-get update && \
    apt-get install -y wget make libpcre3 libpcre3-dev openssl gcc zlib1g-dev libgeoip-dev libssl-dev ca-certificates nginx=${NGINX_VERSION} && rm -rf /var/lib/apt/lists/*


COPY nginx195.sh /nginx195.sh
RUN /bin/bash /nginx195.sh


# forward request and error logs to docker log collector
RUN ln -sf /dev/stdout /var/log/nginx/access.log
RUN ln -sf /dev/stderr /var/log/nginx/error.log

VOLUME ["/var/cache/nginx"]
WORKDIR /usr/share/nginx/html/

EXPOSE 80 443

CMD ["nginx", "-g", "daemon on;"]


