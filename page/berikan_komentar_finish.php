<?php
include "model/kelas_komentar.php";
include "validasi/kelas_validasi.php";
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

if(isset($_POST['Komen'])){
    $id_posting = filter_input(INPUT_POST, 'id_posting');
    $pengirim = filter_input(INPUT_POST, 'nama');
    $isi = filter_input(INPUT_POST, 'isi');
    if(empty($pengirim)){
        Validasi::pesan_validasi_komen();
    }else if(empty ($isi)){
        Validasi::pesan_validasi_komen();
    }else{
        $kd = new Komentar_dao_impl();
        $kd->save($id_posting, $pengirim, $isi);
        header("location:home.php");
    }
}