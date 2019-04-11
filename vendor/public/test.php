<?php
require_once __DIR__ . '/../autoload.php';
use phpspider\core\phpspider;
 
/* Do NOT delete this comment */
/* 不要删除这段注释 */
 
$configs = array(
    'name' => '糗事百科',
    'log_show' => true,
    'log_file' => "/opt/data/wwwroot/phpspider/vendor/data/qiushibaike.log",
    'tasknum' => 1,
    //'save_running_state' => true,
    'domains' => array(
        'qiushibaike.com',
        'www.qiushibaike.com'
    ),
    'scan_urls' => array(
        'http://www.qiushibaike.com/'
    ),
    'list_url_regexes' => array(
        "http://www.qiushibaike.com/8hr/page/\d+\?s=\d+"
    ),
    'content_url_regexes' => array(
        "http://www.qiushibaike.com/article/\d+",
    ),
    'max_try' => 5,
    //'proxies' => array(
        //'http://H784U84R444YABQD:57A8B0B743F9B4D2@proxy.abuyun.com:9010'
    //),
    'export' => array(
        'type' => 'csv',
        'file' => '../data/qiushibaike.csv',
    ),
    //'export' => array(
        //'type'  => 'sql',
        //'file'  => '../data/qiushibaike.sql',
        //'table' => 'content',
    //),
//     'export' => array(
//         'type' => 'db', 
//         'table' => 'content',
//     ),
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
            'name' => "article_title",
            'selector' => "//*[@id='single-next-link']//div[contains(@class,'content')]/text()[1]",
            'required' => true,
        ),
        array(
            'name' => "article_author",
            'selector' => "//div[contains(@class,'author')]//h2",
            'required' => true,
        ),
        array(
            'name' => "article_headimg",
            'selector' => "//div[contains(@class,'author')]//a[1]",
            'required' => true,
        ),
        array(
            'name' => "article_content",
            'selector' => "//*[@id='single-next-link']//div[contains(@class,'content')]",
            'required' => true,
        ),
        array(
            'name' => "article_publish_time",
            'selector' => "//div[contains(@class,'author')]//h2",
            'required' => true,
        ),
        array(
            'name' => "url",
            'selector' => "//div[contains(@class,'author')]//h2",   // 这里随便设置，on_extract_field回调里面会替换
            'required' => true,
        ),
    ),
);
 
$spider = new phpspider($configs);
 
$spider->start();
