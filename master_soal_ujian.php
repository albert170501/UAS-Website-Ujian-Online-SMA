<?php

include 'init.php';
if(isset($_SESSION['user'])){
    include 'content_master_soal_ujian.php';
}else{
    header('location:login.php');
}

?>