<?php

include "model/kelas_author.php";
include "validasi/kelas_validasi.php";
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
if (isset($_POST['Registrasi'])) {
    $nama = filter_input(INPUT_POST, 'nama');
    $email = filter_input(INPUT_POST, 'email');
    $website = filter_input(INPUT_POST, 'website');
    $username = filter_input(INPUT_POST, 'username');
    $password = filter_input(INPUT_POST, 'password');

    if (empty($nama)) {
        Validasi::pesan_validasi_registrasi();
    } else if (empty($email)) {
        Validasi::pesan_validasi_registrasi();
    } else if (empty($website)) {
        Validasi::pesan_validasi_registrasi();
    } else if (empty($username)) {
        Validasi::pesan_validasi_registrasi();
    } else if (empty($password)) {
        Validasi::pesan_validasi_registrasi();
    } else {
        $ad = new Author_dao_impl();
        $ad->save($nama, $email, $website, $username, $password);
        header("location:login_author.php");
    }
}
