<?php ob_start();?>
<?php include (MCHN_DIR_HTML . 'html.header.php'); ?>
<?php 
$buffer = ob_get_contents();
ob_end_clean();
$buffer =str_replace("%BBT2013%", "Baby Bedding Sets : Crib Sheets : Nursery Boy Bedding : Cribs for Babies : Stanley Kids Furniture : Baby Bedding Town", $buffer);
echo $buffer;
?>
<?php include (MCHN_DIR_HTML . 'html.pages.php'); ?>
<?php include (MCHN_DIR_HTML . 'html.footer.php'); ?>