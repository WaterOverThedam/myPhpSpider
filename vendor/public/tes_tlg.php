<?php
require_once __DIR__ . '/../autoload.php';
use phpspider\core\phpspider;
 
/* Do NOT delete this comment */
/* 不要删除这段注释 */
 
$configs = array(
    'name' => 'TLG',
    'log_show' => true,
    'tasknum' => 1,
    //'save_running_state' => true,
    'input_encoding' => 'utf-8',
    'output_encoding' => 'utf-8',
    'domains' => array(
        'thelittlegym.com.cn',
        'www.thelittlegym.com.cn'
    ),
    'scan_urls' => array(
        'https://www.thelittlegym.com.cn/'
    ),
    'list_url_regexes' => array(
        "https://www.thelittlegym.com.cn/news\?id=\d+",
    ),
    'content_url_regexes' => array(
        "https://www.thelittlegym.com.cn/news\?id=\d+",
    ),
    'max_try' => 5,
    //'proxies' => array(
        //'http://H784U84R444YABQD:57A8B0B743F9B4D2@proxy.abuyun.com:9010'
    //),
    'export' => array(
        'type' => 'csv',
        'file' => '/opt/data/wwwroot/phpspider/vendor/data/tlg.csv',
    ),
    //'export' => array(
        //'type'  => 'sql',
        //'file'  => '../data/qiushibaike.sql',
        //'table' => 'content',
    //),
     'export' => array(
         'type' => 'db',
         'table' => 'content',
     ),
    'db_config' => array(
        'host'  => '127.0.0.1',
        'port'  => 3306,
        'user'  => 'root',
        'pass'  => '123456',
        'name'  => 'spider',
    ),
    //'queue_config' => array(
        //'host'      => '127.0.0.1',
        //'port'      => 6379,
        //'pass'      => '',
        //'db'        => 5,
        //'prefix'    => 'phpspider',
        //'timeout'   => 30,
    //),
    'fields' => array(
        array(
            'name' => "title",
            'selector' => "//h1[contains(@class,'title')]",

        ),
        array(
            'name' => "meta",
            'selector' => "//div[contains(@class,'meta')]//span[contains(@class,'cat')]",

        ),
        array(
            'name' => "content",
            'selector' => "//div[contains(@class,'content')]",
//            'required' => true,
        ),

    ),
);
 
$spider = new phpspider($configs);
 
$spider->start();
