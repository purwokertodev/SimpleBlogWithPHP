<?php
include "model/kelas_post.php";
include "validasi/kelas_validasi.php";
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

if(isset($_POST['Ubah'])){
    $id = filter_input(INPUT_POST, 'id_post');
    $id_author = filter_input(INPUT_POST, 'id_author');
    $judul = filter_input(INPUT_POST, 'judul');
    $isi = filter_input(INPUT_POST, 'isi');
    
    if(empty($judul)){
        Validasi::pesan_validasi_ubah_posting();
    }else if(empty ($isi)){
        Validasi::pesan_validasi_ubah_posting();
    }else{
        $pd = new Post_dao_impl();
        $pd->update($id, $id_author, $judul, $isi);
        header("location:home_author.php");
    }
    
}