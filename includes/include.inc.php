<?php 
if(file_exists('includes')){
    include 'header.inc.php';
    include 'footer.inc.php';
}else {
    include '../includes/header.inc.php';
    include '../includes/footer.inc.php';
}