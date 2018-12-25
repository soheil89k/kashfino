<?php
$Dir = dirname(__FILE__) . '/ImagesBackup.tar';
if (file_exists($Dir)) {
    unlink ($Dir);
}


$phar = new PharData('ImagesBackup.tar');
// add all files in the project
$phar->buildFromDirectory(dirname(__FILE__) . '/UploadFolder' );

//$file_url = 'http://www.asankade.com/img/ImagesBackup.tar';
$tar = 'ImagesBackup.tar';
$tar_path = $tar;
$size = filesize($tar_path);

header("Content-Type: application/x-tar");
header("Content-Disposition: attachment; filename=".$tar."");
header("Content-Length: $size");
header("Content-Transfer-Encoding: binary");

readfile($tar_path);