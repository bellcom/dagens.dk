#!/bin/bash

cd /var/www/dagens.dk/ritzau_feed_fetcher

mv tmp/feed.xml tmp/feed_old.xml

wget -q 'http://json.ritzau.dk/ritzaurest/Services.svc/xml/news/NewsList?user=it@dagens.dk&password=dyGbc7A&maksantal=7' -O tmp/feed.xml

DIFF=$(diff tmp/feed.xml tmp/feed_old.xml) 
if [ "$DIFF" != "" ] 
then
  cp tmp/feed.xml feeds/feed.xml
  drush --quiet -r /var/www/dagens.dk/public_html/ scr /var/www/dagens.dk/ritzau_feed_fetcher/ritzau_feed_importer.php &>/dev/null
fi
