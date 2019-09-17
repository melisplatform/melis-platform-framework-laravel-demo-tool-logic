<?php
/**
 * Melis Technology (http://www.melistechnology.com)
 *
 * @copyright Copyright (c) 2015 Melis Technology (http://www.melistechnology.com)
 *
 */

$zipFile = 'lara.zip';
$f = file_put_contents($zipFile, fopen("http://marketplace.melisplatform.com/frameworks/laravel-6-skeleton-melis.zip", 'r'), LOCK_EX);
if(FALSE === $f)
    print "\e[0;31mCouldn't write to file." . PHP_EOL;

$zip = new ZipArchive;
$res = $zip->open($zipFile);
if ($res === TRUE) {
    $zip->extractTo('thirdparty/');
    $zip->close();
    unlink($zipFile);
} else
    print "\e[0;31m,Couldn't unzip the file."  . PHP_EOL;
