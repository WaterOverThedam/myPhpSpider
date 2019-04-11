<?php
$url = "http://www.thelittlegym.com.cn/";
$content = file_get_contents($url);
preg_match_all("/<h1>(.*?)</h1>/is", $content, $matchs);
print_r($matchs[0]);

