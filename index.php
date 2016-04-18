<!doctype html>
<html lang="ja">
<head>
<meta charset="utf-8">
</head>
<body>
<h1>hello</h1>

<h1><?php echo date("y/m/d");?></h1>

</body>
</html>

<?php
$inipath = php_ini_loaded_file();

if ($inipath) {
    echo 'Loaded php.ini: ' . $inipath;
} else {
    echo 'A php.ini file is not loaded';
}
?>
