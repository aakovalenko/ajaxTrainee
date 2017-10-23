<?php
/**
 * Created by PhpStorm.
 * User: andri
 * Date: 23.10.17
 * Time: 15:09
 */



$dir = new DirectoryIterator('common');

foreach ($dir as $key => $file) {
    if ($file -> isFile())
    {
        //echo $key . ': ' . $file->getPathname() . '<br>';
        $files[] = clone $file;
    }
}
echo $files[1]->getFilename();