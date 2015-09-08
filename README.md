Master Of Code
============

A Symfony project created on September 5, 2015, 1:53 pm.

============

The steps to install Project:

1. Download project from GIT and configure Symfony2 (http://masterofcode.com/web/config.php)
2. In file /app/config/config.yml configure DB connect and connect to RabbitMQ server
3. Update table in DB (php app/console doctrine:schema:update --force)

How to use system:

1. For work with RabbitMQ server you must start command in terminal (php app/console rabbitmq:consumer test). DO NOT CLOSE PROCESS
2. If you need convert file - set file in client console (php app/console client:setFile /home/stas/108ebcccb13f42.mp3)
3. If you wont get status of session - write in terminal (client:getStatus 404) "404" - session if; or check in website: http://masterofcode.com/web/app_dev.php/status/404
4. if you need download file (php app/console client:downloadFile 404 /home/stas/) "404" - id, "/home/stas/" - directory to load; or use website: http://masterofcode.com/web/app_dev.php/download/404
5. list of job you can see on web site (http://masterofcode.com/web/app_dev.php)