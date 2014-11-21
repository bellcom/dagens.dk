#!/bin/bash
# shellscript wrapper for dagens_cron.php, drush php script 

sleep 3
#cd /var/www/dagens.dk/public_html/sites/all/modules/custom_dagens/
#drush php-script dagens_cron.php
wget -O - -q -t 1 http://www.dagens.dk/sites/all/modules/elysia_cron/cron.php?cron_key=i5s10r8JRS1oL9jqKMToKo1sJ6xc1PDHV-Zy6RMDt40
