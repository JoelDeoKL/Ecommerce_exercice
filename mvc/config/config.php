<?php
/**
 * Created by PhpStorm.
 * User: Pascal Mwamba K
 * Date: 04/06/2020
 * Time: 11:35 AM
 */
session_start();

if (!defined('DB_SERVER')) define('DB_SERVER', "localhost");
if (!defined('DB_USER')) define('DB_USER', "root");
if (!defined('DB_PWD')) define('DB_PWD', "");
if (!defined('DB_NAME')) define('DB_NAME', "tatim");
if (!defined('DSN')) define('DSN', 'mysql:host='.DB_SERVER.'; dbname='.DB_NAME);