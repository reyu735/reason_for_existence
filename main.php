<?php
/**
 * 
 */
require_once 'vendor/autoload.php';

/**
 * 設定ファイル読み込み
 */
$iniFilePath = dirname(__FILE__) . '/config/config.ini';
if(@file_exists($iniFilePath))
{
    $ini = parse_ini_file($iniFilePath);
} else {
    exit('設定ファイルが存在しません.');
}

/**
 * 設定ファイルの項目を取得し代入
 */
$c_key = &$ini['consumer_key'];
$c_secret = &$ini['consumer_secret'];
$a_token = &$ini['access_token'];
$a_secret = &$ini['access_token_secret'];
$s_name = &$ini['screen_name'];
$o_name = &$ini['owner_screen_name'];
?>