<?php
$data = array();

$data[0][0]= 10;
$data[0][1]= 20;
$data[0][2] = 30;

$data[1][0]=56;
$data[1][1]= 27;
$data[1][2] = 39;

$data[2][0]=67;
$data[2][1]= 58;
$data[2][2] = 89;

foreach ($data as $v_data){
   echo $v_data[0];
}

