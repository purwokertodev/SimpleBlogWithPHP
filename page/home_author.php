<?php
session_start();
include "validasi/kelas_validasi.php";
if (!isset($_SESSION['username_author']) && !isset($_SESSION['password_author']) && !isset($_SESSION['id_author'])) {
    Validasi::pesan_validasi_harus_login();
}
?>
<!DOCTYPE html>
<!--
Program ini dibuat oleh wuriyanto.
Apabila anda menggunakan aplikasi ini untuk keperluan selain pembelajaran selalu sertakan nama pembuat.
Terima kasih.

   ** By Wuriyanto                                                     
   ** EMAIL/FACEBOOK : wuriyanto48@yahoo.co.id  OR  Prince Wury        
   ** WEBSITE : wuriyantoinformatika.blogspot.com                      
   ** CITY : BANJARNEGARA CENTRAL JAVA INDONESIA                       
   ** COMPUTER SCIENCE                                                 
   ** MUHAMMADIYAH UNIVERSITY OF PURWOKERTO 

Purwokerto 17 November 2014
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>ngeBlog</title>
        <link href="../styles/bootstrap.css" rel="stylesheet"/>
        <link href="../styles/bootstrap.min.css" rel="stylesheet"/>
        <link type="text/css" href="../js/themes/base/jquery.ui.all.css" rel="stylesheet"/>
        <script type="text/javascript" src="../js/bootstrap.js"></script>
        <script type="text/javascript" src="../js/bootstrap.min.js"></script>
        <script type="text/javascript" src="../js/ui/bootstrap-modal.js"></script>
        <script type="text/javascript" src="../js/jquery-1.8.2.js"></script>
        <script type="text/javascript" src="../js/ui/jquery.ui.core.js"></script>
        <script type="text/javascript" src="../js/ui/jquery.ui.widget.js"></script>
        <script type="text/javascript" src="../js/ui/jquery.ui.datepicker.js"></script>
        <script type="text/javascript" src="../SpryAssets/SpryValidationTextField.js"></script>
    </head>
    <body>

        <div class="container">
            <div class="navbar navbar-default" role="navigation">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <label class="navbar-brand label-primary">ngeBlog</label>
                </div>
                <div class="navbar-collapse collapse">
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="home_author.php">Home</a></li>
                        <li><a href="posting_baru.php">Posting baru</a></li>
                        <li><a href="my_profil.php">Profil saya</a></li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="logout_author.php" onclick="return confirm('Anda yakin ?');">Logout</a></li>
                    </ul>
                </div>
            </div> <!-- Navbar -->
            <div class="jumbotron">
                <h1>Ngeblog Aja</h1>
                <p>Ngeblog aja dari pada bengong....</p>
            </div>
            <?php
            include "model/kelas_post.php";
            include "model/kelas_author.php";
            include "model/kelas_komentar.php";

            $ad = new Author_dao_impl();
            $pd = new Post_dao_impl();
            $kd = new Komentar_dao_impl();

            $id_author = $_SESSION['id_author'];

            $p_list = $pd->find_by_author($id_author);

            if (count($p_list) == 0) {
                echo "<div class='well well-lg'><h3>Belum ada postingan</h3></div>";
            } else {
                for ($i = 0; $i < count($p_list); $i++) {
                    $p = $p_list[$i];
                    $id = $p->getId();
                    $id_author = $p->getId_author();
                    $tanggal = $p->getTanggal();
                    $judul = $p->getJudul_post();
                    $isi = $p->getIsi();

                    $author = $ad->find_one($id_author);
                    $author_id = $author->getId();
                    $author_name = $author->getNama_author();

                    $jumlah_koment = $kd->hitung_jumlah_komentar($id);

                    if ($i % 2 != 0) {
                        echo "<div class='alert alert-info'>"
                        . "<p><h3>$judul</h3></p><p>$isi</p><p><h5>Dikirim pada tanggal $tanggal. <a href='ubah_post_by_author.php?id_post=$id'>Ubah posting</a>, <a href='lihat_komentar_by_author.php?id_post=$id'>Jumlah komentar $jumlah_koment</a>, <a href='hapus_posting_by_author.php?id_post=$id' onclick='return confirm('Anda yakin ?');'>Hapus Posting</a></h5></p>"
                        . "</div>";
                    } else {
                        echo "<div class='alert alert-success'>"
                        . "<p><h3>$judul</h3></p><p>$isi</p><p><h5>Dikirim pada tanggal $tanggal. <a href='ubah_post_by_author.php?id_post=$id'>Ubah posting</a>, <a href='lihat_komentar_by_author.php?id_post=$id'>Jumlah komentar $jumlah_koment</a>, <a href='hapus_posting_by_author.php?id_post=$id' onclick='return confirm('Anda yakin ?');'>Hapus Posting</a></h5></p>"
                        . "</div>";
                    }
                }
            }
            ?>
        </div><!-- Container -->
    </body>
</html>
