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
                        <li><a href="home.php">Home</a></li>
                        <li class="active"><a href="registrasi.php">Registrasi</a></li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="login_author.php">Login</a></li>
                    </ul>
                </div>
            </div> <!-- Navbar -->
            <div class="jumbotron">
                <h1>Ngeblog Aja</h1>
                <p>Ngeblog aja dari pada bengong....</p>
            </div>
            <div class="panel panel-success">
                <div class="panel-heading">Registrasi untuk menjadi penulis</div>
                <div class="panel-body">
                    <form action="registrasi_finish.php" method="post" class="form-horizontal">
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Nama lengkap :</label>
                            <div class="col-sm-4">
                                <input type="text" class="form-control" name="nama" placeholder="Nama lengkap"/>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Email :</label>
                            <div class="col-sm-4">
                                <input type="email" class="form-control" name="email" placeholder="Email"/>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Website :</label>
                            <div class="col-sm-4">
                                <input type="text" class="form-control" name="website" placeholder="Website"/>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Username :</label>
                            <div class="col-sm-4">
                                <input type="text" class="form-control" name="username" placeholder="Username anda"/>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Password :</label>
                            <div class="col-sm-4">
                                <input type="text" class="form-control" name="password" placeholder="Password anda"/>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-4">
                                <input type="submit" value="Registrasi" class="btn btn-success" name="Registrasi"/>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>
