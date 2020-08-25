<?php 
if(count($_POST)>0){
    require_once("config.php");
    $sql="INSERT IN details(productname,text,stock,accept,color,size,shipping) VALUES('".$_POST['productname']."','".$_POST['text']."','".$_POST['stock']."','".$_POST['accept']."','".$_POST['color']."','".$_POST['size']."','".$_POST['shipping']."')";

}
?>