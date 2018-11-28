<?php
$str1 = '{
    "data":[

    {"first_name":"jake","last_name":"bennett","age":31,"email":"jake@bennett.com","secret":"VXNlIHRoaXMgc2VjcmV0IHBocmFzZSBzb21ld2hlcmUgaW4geW91ciBjb2RlJ3MgY29tbWVudHM="},
    {"first_name":"jordon","last_name":"brill","age":85,"email":"jordon@brill.com","secret":"YWxidXF1ZXJxdWUuIHNub3JrZWwu"}

    ]}';


/**
 * Instructions:
 *
 * Given the above JSON, build a simple PHP script to import it.
 *
 * Your script should create two variables:
 *
 * - a comma-separated list of email addresses
 * - the original data, sorted by age descending, with a new field on each record
 *   called "name" which is the first and last name joined.
 *
 * Please deliver your code in either a GitHub Gist or some other sort of web-hosted code snippet platform.
 */


$arr = json_decode($str1,true);




$email[] ="";
foreach ($arr['data'] as $field => $value) {

    $email[]                           = $value['email'] ;
    $arr['data'][$field]['name']       = $value['first_name'] ." ".$value['last_name'];
}
/*

Sorting array based on age descending order

*/
array_multisort( array_column($arr['data'], "age"), SORT_DESC, $arr['data'] );


echo  "Variable 1 : " .implode(" , ",$email).' <br />';
echo  "Variable 2 : " . json_encode($arr);
?>
