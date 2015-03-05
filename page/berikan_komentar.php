
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
                <div class="panel-heading">Komentar</div>
                <div class="panel-body">
                    <?php
                    include "model/kelas_komentar.php";

                    if (isset($_GET['id_post'])) {
                        $id_posting = filter_input(INPUT_GET, 'id_post');
                        $kd = new Komentar_dao_impl();
                        $list_komentar = $kd->find_by_post($id_posting);
                        
                        for ($i = 0; $i < count($list_komentar); $i++) {
                            $k = $list_komentar[$i];
                            $pengirim = $k->getPengirim();
                            $tanggal = $k->getTanggal();
                            $isi = $k->getIsi();

                            if($i % 2 != 0){
                                echo "<div class='alert alert-success'><p><h4>$isi</h4></p><p><h6>Dikirim oleh $pengirim, pada tanggal $tanggal</h6></p></div>";
                            }else{
                                echo "<div class='alert alert-info'><p><h4>$isi</h4></p><p><h6>Dikirim oleh $pengirim, pada tanggal $tanggal</h6></p></div>";
                            }
                        }
                    }
                    ?>
                    <form action="berikan_komentar_finish.php" method="post" class="form-horizontal">
                        <input type="hidden" value="<? echo $id_posting ?>" name="id_posting"/>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Masukan nama anda :</label>
                            <div class="col-sm-4">
                                <input type="text" class="form-control" name="nama" placeholder="Nama anda"/>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Komentar :</label>
                            <div class="col-sm-4">
                                <textarea class="form-control" name="isi" rows="4"></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-4">
                                <input type="submit" value="Komentari" class="btn btn-success" name="Komen"/>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>
