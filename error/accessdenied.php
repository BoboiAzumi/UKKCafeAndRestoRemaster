<?php
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Akses Ditolak</title>
        <link rel="stylesheet" href="/css/edit_web/error.css">
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <link rel="shortcut icon" href="/img/logo.ico">
        <link rel="stylesheet" href="/css/bootstrap.min.css">
        <link rel="stylesheet" href="/css/all.min.css">
        <script src="/js/jquery-3.6.0.min.js"></script>
        <script src="/js/bootstrap.min.js"></script>
        <script src="/js/fontawesome.js"></script>
    </head>
    <body>
        <div class="kotak">
            <div style="margin-left:0px;margin-top:5px;font-size:22px;margin-bottom:15px;">Error</div>
            <img src="/img/denied.jpg" alt="Logonya Error Bang" width="200px" height="200px" style="margin-left:14px;">
            <div style="margin-left:0px;margin-top:35px;font-size:22px;margin-bottom:15px;">Access Denied<br>(Akses Ditolak)</div>
            <button class="btn btn-success mb-4" id="kembali">Kembali</button>
        </div>
        <script>
            $(document).ready(function(){
                $("#kembali").on("click", function(){
                    location.href = "/dashboard/";    
                });
            });
        </script>
    </body>
</html>

<?php
?>