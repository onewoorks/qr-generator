<?php
include 'phpqrcode/qrlib.php';

$code = $_REQUEST['code'];
$size = $_REQUEST['size'];
define('IMAGE_WIDTH', $size);
define('IMAGE_HEIGHT', $size);

QRcode::png($code, false, QR_ECLEVEL_L, 3, 1);
?>
