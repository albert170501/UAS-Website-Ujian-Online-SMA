<?php

include 'init.php';
if(isset($_SESSION['user'])){
    include 'content_master_kelas.php';
}else{
    header('location:login.php');
}

?>