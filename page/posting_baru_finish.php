<?php
session_start();
include "model/kelas_post.php";
include "validasi/kelas_validasi.php";
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
if (isset($_SESSION['username_author']) && isset($_SESSION['password_author']) && isset($_SESSION['id_author'])) {
    if (isset($_POST['Posting'])) {
        $judul = filter_input(INPUT_POST, 'judul');
        $isi = filter_input(INPUT_POST, 'isi');

        if (empty($judul)) {
            Validasi::pesan_validasi_posting();
        } else if(empty($isi)){
            Validasi::pesan_validasi_posting();
        }else{
            $pd = new Post_dao_impl();
            $tanggal = date("Y-m-d");
            $id_author = $_SESSION['id_author'];
            $pd->save($id_author,$judul, $isi);
            header("location:home_author.php");
        }
    }
}
