Master Of Code
============

A Symfony project created on September 5, 2015, 1:53 pm.

============

The steps to install Project:

1. Download project from GIT and configure Symfony2 (http://masterofcode.com/web/config.php)
2. In file /app/config/config.yml configure DB connect and connect to RabbitMQ server
3. Update table in DB (php app/console doctrine:schema:update --force)