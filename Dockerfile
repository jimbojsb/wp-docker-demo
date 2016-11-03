FROM phusion/baseimage

EXPOSE 80

CMD ["/site/docker/serve.sh"]

ENV PATH /usr/local/sbin:/usr/local/bin:/usr/sbin:/usr/bin:/sbin:/bin

RUN locale-gen --no-purge en_US.UTF-8
ENV LC_ALL en_US.UTF-8
ENV LANG en_US.UTF-8
ENV DEBIAN_FRONTEND noninteractive

RUN apt-add-repository -y ppa:ondrej/php \
    && apt-get update \
    && DEBIAN_FRONTEND=noninteractive \
       apt-get install -qqy --force-yes --no-install-recommends \
                    git \
                    php-cli \
                    php-common \
                    php-fpm \
                    php-mbstring \
                    php-mysql \
                    php-xml \
                    ca-certificates \
                    nginx \
    && apt-get clean \
    && rm -rf /var/lib/apt/lists/* /tmp/* /var/tmp/*


COPY ./docker/nginx.conf /etc/nginx/sites-available/default

ADD . /site