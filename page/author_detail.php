<?php
include "model/kelas_author.php";
include "model/kelas_post.php";

if(isset($_GET['id_author'])){
    $id_author = filter_input(INPUT_GET, 'id_author');
    
    $ad = new Author_dao_impl();
    $pd = new Post_dao_impl();
    
    $a = $ad->find_one($id_author);
    $nama = $a->getNama_author();
    $email = $a->getEmail();
    $website = $a->getWeb_site();
    $jumlah_post = $pd->jumlah_post_by_author($id_author);
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
                        <li class="active"><a href="home.php">Home</a></li>
                        <li><a href="registrasi.php">Registrasi</a></li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <li class="active"><a href="login_author.php">Login</a></li>
                    </ul>
                </div>
            </div> <!-- Navbar -->
            <div class="jumbotron">
                <h1>Ngeblog Aja</h1>
                <p>Ngeblog aja dari pada bengong....</p>
            </div>
            <div class="panel panel-success">
                <div class="panel-heading">Author Detail</div>
                <div class="panel-body">
                    <table border="0">
                        <tr>
                            <td><label class="col-sm-7 control-label">Nama</label></td>
                            <td>:</td>
                            <td><label class="label label-primary"><? echo $nama; ?></label></td>
                        </tr>
                        <tr>
                            <td><label class="col-sm-7 control-label">Email</label></td>
                            <td>:</td>
                            <td><label class="label label-primary"><? echo $email; ?></label></td>
                        </tr>
                        <tr>
                            <td><label class="col-sm-7 control-label">Website</label></td>
                            <td>:</td>
                            <td><label class="label label-primary"><? echo $website; ?></label></td>
                        </tr>
                        <tr>
                            <td><label class="col-sm-7 control-label">Jumlah Posting</label></td>
                            <td>:</td>
                            <td><label class="label label-primary"><? echo $jumlah_post; ?></label></td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </body>
</html>
