<?php
$filename=“alex-shires-cv.pdf";
header('Content-type: application/pdf');
header('Content-Disposition: inline; filename="' . basename($filename) .'"');
header('Content-Length: ' . filesize($filename));
header('Content-Transfer-Encoding: binary');
readfile($filename);
?>
