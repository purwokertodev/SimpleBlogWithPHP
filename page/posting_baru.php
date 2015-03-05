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
        <link href="../styles/kendo.common.min.css" rel="stylesheet"/>
        <link href="../styles/kendo.default.min.css" rel="stylesheet"/>
        <link href="../styles/examples-offline.css" rel="stylesheet"/>
        <link type="text/css" href="../js/themes/base/jquery.ui.all.css" rel="stylesheet"/>
        <script type="text/javascript" src="../js/bootstrap.js"></script>
        <script type="text/javascript" src="../js/bootstrap.min.js"></script>
        <script type="text/javascript" src="../js/ui/bootstrap-modal.js"></script>
        <script type="text/javascript" src="../js/jquery-1.8.2.js"></script>
        <script type="text/javascript" src="../js/ui/jquery.ui.core.js"></script>
        <script type="text/javascript" src="../js/ui/jquery.ui.widget.js"></script>
        <script type="text/javascript" src="../js/ui/jquery.ui.datepicker.js"></script>
        <script type="text/javascript" src="../js/jquery.min.js"></script>
        <script type="text/javascript" src="../js/kendo.web.min.js"></script>
        <script type="text/javascript" src="../js/kendo.editor.min.js"></script>
        <script type="text/javascript" src="../js/kendo.editor.js"></script>
        <script type="text/javascript" src="../js/ui/console.js"></script>
        <script type="text/javascript" src="../SpryAssets/SpryValidationTextField.js"></script>
        <script>
            $(document).ready(function() {
                $("#editor").kendoEditor();
            });
        </script>
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
                        <li><a href="home_author.php">Home</a></li>
                        <li class="active"><a href="posting_baru.php">Posting baru</a></li>
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
            <div class="panel panel-success">
                <div class="panel-heading">Buat tulisan baru anda</div>
                <div class="panel-body">
                    <form action="posting_baru_finish.php" method="post" class="form-horizontal">
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Judul tulisan</label>
                            <div class="col-sm-4">
                                <input type="text" class="form-control" name="judul"/>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Isi</label>
                            <div class="col-sm-7">
                                <textarea class="form-control" name="isi"  rows="10"></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-4">
                                <input type="submit" value="Post.." name="Posting" class="btn btn-success"/>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div><!-- Container -->
    </body>
</html>
