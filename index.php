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
        <title></title>
        <link href="./styles/bootstrap.css" rel="stylesheet"/>
        <link href="./styles/bootstrap.min.css" rel="stylesheet"/>
        <link type="text/css" href="./js/themes/base/jquery.ui.all.css" rel="stylesheet"/>
        <script type="text/javascript" src="./js/jquery-1.8.2.js"></script>
        <script type="text/javascript" src="./js/ui/jquery.ui.core.js"></script>
        <script type="text/javascript" src="./js/ui/jquery.ui.widget.js"></script>
        <script type="text/javascript" src="./js/ui/jquery.ui.datepicker.js"></script>
        <script type="text/javascript">
            $(function() {
                $("#tanggal").datepicker();
            });

        </script>
    </head>
    <body>
        <?php
        header("location:page/home.php");
        ?>
    </body>
</html>
