<?php
/*
 * script for running feeds cron, only.
 * so we dont need to run drush cron often
 */

variable_set('feeds_reschedule', TRUE);
$feeds = feeds_cron();
