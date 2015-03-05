<?php
session_start();
include "validasi/kelas_validasi.php";
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
if(!isset($_SESSION['username_author']) && !isset($_SESSION['password_author']) && !isset($_SESSION['id_author'])){
    Validasi::pesan_validasi_harus_login();
}else{
    unset($_SESSION['username_author']);
    unset($_SESSION['password_author']);
    unset($_SESSION['id_author']);
    header("location:./login_author.php");
}
