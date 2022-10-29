<?php
$REQ = urldecode($_SERVER["REQUEST_URI"]);

if($REQ == "/"){
    require "core/index.php";
}
else if($REQ == "/error/access/"){
    require "error/accessdenied.php";
}
else if($REQ == "/error/sql/"){
    require "error/sqlinjection.php";
}
else if($REQ == "/error/login/"){
    require "error/loginerror.php";
    header("refresh:3;url=/");
}
else if (str_contains($REQ, "'") || str_contains($REQ, "\"") || str_contains($REQ, "`")){
    ?>
        <script>
            location.href = "/error/sql/";
        </script>
    <?php
}
else{
    $REQ = str_replace("/", "", $REQ);
    if(str_contains($REQ, "?")){
        $REQ = explode("?", $REQ)[0];
    }
    if(str_contains($REQ, ".php")){
        require "error/notfound.php";
    }
    else{
        $REQ = $REQ.".php";
        if(!file_exists("core/".$REQ) && !file_exists($REQ)){
            require "error/notfound.php";
        }
        else{
            require "core/".$REQ;
        }
    }
    
}
?>