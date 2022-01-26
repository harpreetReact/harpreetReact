<?php
define('PFAD_ROOT', '/usr/www/users/jdumek/');
define('URL_SHOP', 'https://mens-shop24.shop-template.de');
define('DB_HOST','localhost');
define('DB_NAME','jdumek_db1');
define('DB_USER','jdumek_1');
define('DB_PASS','nzTJ64TFHsWC4hck');

define('BLOWFISH_KEY', '0ded2b9025633ea8ee68d3c42e80ab');

define('EVO_COMPATIBILITY', false);

//enables printing of warnings/infos/errors for the shop frontend
define('SHOP_LOG_LEVEL', E_ALL);
//enables printing of warnings/infos/errors for the dbeS sync
define('SYNC_LOG_LEVEL', E_ALL ^ E_NOTICE ^ E_DEPRECATED ^ E_WARNING);
//enables printing of warnings/infos/errors for the admin backend
define('ADMIN_LOG_LEVEL', E_ALL);
//enables printing of warnings/infos/errors for the smarty templates
define('SMARTY_LOG_LEVEL', E_ALL);
//excplicitly show/hide errors
ini_set('display_errors', 0);
