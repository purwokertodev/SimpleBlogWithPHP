<?php
session_start();
include "model/kelas_post.php";
include "model/kelas_komentar.php";
include "validasi/kelas_validasi.php";
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

if(!isset($_SESSION['username_author']) && !$_SESSION['password_author'] && !$_SESSION['id_author']){
    Validasi::pesan_validasi_harus_login();
}else{
    if(isset($_GET['id_post'])){
        $id_post = filter_input(INPUT_GET, 'id_post');
        $id_author = $_SESSION['id_author'];
        
        $pd = new Post_dao_impl();
        $kd = new Komentar_dao_impl();
        $pd->delete($id_post, $id_author);
        $kd->delete_by_post($id_post);
        header("location:home_author.php");
    }
}