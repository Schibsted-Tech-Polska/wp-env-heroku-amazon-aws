<?php

namespace Frc\WP\Env\Heroku\AWS;

$aws_access_key_id = getenv('DBI_AWS_ACCESS_KEY_ID');
$aws_secret_access_key = getenv('DBI_AWS_SECRET_ACCESS_KEY');
if ( $aws_access_key_id and $aws_secret_access_key ) {
    define('DBI_AWS_ACCESS_KEY_ID', $aws_access_key_id);
    define('DBI_AWS_SECRET_ACCESS_KEY', $aws_secret_access_key);
}
