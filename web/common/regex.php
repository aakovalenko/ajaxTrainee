<?php
$files = new RecursiveDirectoryIterator('.', FilesystemIterator::UNIX_PATHS);
$files = new RecursiveIteratorIterator($files);
$files = new RegexIterator($files, '/\.(?:jpg|png)$/i');
foreach ($files as $file) {
    echo $file->getPathname() .'<br>';
}