<?php

include 'init.php';
if(isset($_SESSION['user'])){
    include 'content_master_judul_ujian.php';
}else{
    header('location:login.php');
}

?>