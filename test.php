<?php
// +----------------------------------------------------------------------
// | EvaEngine
// +----------------------------------------------------------------------
// | Author: Mr.5 <mr5.simple@gmail.com>
// +----------------------------------------------------------------------
// + Datetime: 15/6/12 下午4:23
// +----------------------------------------------------------------------
// + test.php
// +----------------------------------------------------------------------
foreach(glob(__DIR__ . '/config/config.*.php') as $file) {
    $fileName =  substr($file, strrpos($file, '/') + 1) . PHP_EOL;
    $matches  = array();
    preg_match('/config\.(.+)\.php/', $fileName, $matches);
    var_dump($matches[1]);
}