#!/bin/sh
exec /usr/sbin/php-fpm7.0 --nodaemonize -R --fpm-config /site/docker/php-fpm.conf