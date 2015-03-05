<?php
session_start();
include "model/kelas_author.php";
include "validasi/kelas_validasi.php";
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

if(isset($_POST['Login'])){
    $username = filter_input(INPUT_POST, 'username');
    $password = filter_input(INPUT_POST, 'password');
    if(empty($username) && empty($password)){
        Validasi::pesan_validasi_login_author();
    }else{
        $ad = new Author_dao_impl();
        $a = $ad->login($username, $password);
        if($a->getUsername()== $username && $a->getPassword()==$password){
            $_SESSION['username_author'] = $a->getUsername();
            $_SESSION['password_author'] = $a->getPassword();
            $_SESSION['id_author'] = $a->getId();
            header("location:./home_author.php");
        }else{
            Validasi::pesan_validasi_login_author();
        }
    }
}