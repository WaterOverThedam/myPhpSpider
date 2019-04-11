<?php

function test( $condition,Array $params=[]){
    print_r($condition);


}
$a=['a','b'];
print_r($a);

test(array("$conditon"=>'id=:id',array(":id"=>3)));