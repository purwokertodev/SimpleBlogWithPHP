<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$host = "localhost";
$user = "root";
$password = "";
$database_name = "blogging_db";

$conn = mysql_connect($host, $user, $password);
if($conn){
    $ambil = mysql_select_db($database_name);
    if(!$ambil){
        die("Gagal konek ke database");
    }
}  else {
    die("Gagal konek ke server");
}