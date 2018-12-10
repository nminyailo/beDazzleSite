<?php
require_once 'core/init.php';
include 'index.php';
$sql = "Select * from product where item=4";
$img_source = $db->query($sql);
?>
<?php
$sql = "Select * from category where id=4";
$names = $db->query($sql);?>
<?php include 'categoryContent.php'; ?>
