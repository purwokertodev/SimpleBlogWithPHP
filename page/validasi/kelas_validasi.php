<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Validasi {

    public static function pesan_validasi_registrasi() {
        ?>
        <script language="javascript">alert("Masukan data dengan benar !!!");</script>
        <script>document.location.href = './registrasi.php';</script>
        <?php
    }
    
    public static function pesan_validasi_login_author() {
        ?>
        <script language="javascript">alert("Username atau password tidak valid !!!");</script>
        <script>document.location.href = './login_author.php';</script>
        <?php
    }
    
    public static function pesan_validasi_posting() {
        ?>
        <script language="javascript">alert("Masukan data dengan benar !!!");</script>
        <script>document.location.href = './posting_baru.php';</script>
        <?php
    }
    
    public static function pesan_validasi_ubah_posting() {
        ?>
        <script language="javascript">alert("Masukan data dengan benar !!!");</script>
        <script>document.location.href = './home_author.php';</script>
        <?php
    }
    
    public static function pesan_validasi_harus_login() {
        ?>
        <script language="javascript">alert("Anda harus login terlebih dahulu !!!");</script>
        <script>document.location.href = './login_author.php';</script>
        <?php
    }
    
    public static function pesan_validasi_komen() {
        ?>
        <script language="javascript">alert("Isi data dengan benar !!!");</script>
        <script>document.location.href = './home.php';</script>
        <?php
    }
    
    public static function pesan_validasi_ubah_author() {
        ?>
        <script language="javascript">alert("Isi data dengan benar !!!");</script>
        <script>document.location.href = './my_profil.php';</script>
        <?php
    }

}
