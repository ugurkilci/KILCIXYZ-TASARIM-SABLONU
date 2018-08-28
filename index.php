<?php

$baslik = "Başlık";
$solgan = "Slogan";
$logo = "";
$copyright = "Şablon";

$link = $_SERVER['HTTP_HOST']."".$_SERVER['REQUEST_URI'];

if ($logo == "") {
    $logox = '<a href="'.$link.'" title="'.$baslik.' '.$slogan.'"><h1>'.$baslik.'</h1></a>';
} else {
    $logox = '<a href="'.$link.'" title="'.$baslik.' '.$slogan.'"><img src="'.$logo.'" alt="'.$baslik.'"></a>';
}


?>
<!DOCTYPE html>
<html lang="tr">
<head>
    <base href="<?php echo $base; ?>">
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">    
    <title><?php echo $baslik; ?> - KILCI.XYZ</title>
    <link rel="stylesheet" type="text/css" href="../css/normalize.css">
    <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../css/bootstrap-grid.min.css">
    <link rel="stylesheet" type="text/css" href="../css/bootstrap-reboot.min.css">
    <meta name="MobileOptimized" content="450">
	<style>
		body{
			background:#efefef;
			font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif;
		}
        h1, h1:hover, h1:focus{
            color:#000;
        }
    </style>
</head>
<body>

    <header class="container">
        <div class="row">
            <div class="col-sm-12"><br />
                <?php echo $logox; ?>
                <h1 style="font-size:0px;display:none;"><?php echo $baslik; ?></h1>
                <p><?php echo $slogan; ?></p>
                <a href="/" class="btn btn-dark">KILCI.XYZ</a>
                <br /><br />
            </div>
        </div>
    </header>

    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                Text
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <hr><small>
                 <?php echo $copyright . ' &copy; ' . date("Y"); ?><br />
                </small>
                <br /><br />
            </div>
        </div>
    </div>
</body>
</html>
