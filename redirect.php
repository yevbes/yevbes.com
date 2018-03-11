<?php
// current address
$oldurl = strtolower($_SERVER['REQUEST_URI']);
// new redirect address
$newurl = '';

if ($newurl != '') {
    header('HTTP/1.1 301 Moved Permanently');
    header("Location: $newurl");
    exit();
}