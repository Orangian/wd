<?php 
$current = 'id="currentpage"'; $return = 'tabHome="0" onclick="return false;"';
$Homecurrent = ""; $Homereturn = "";
$Aboutcurrent = ""; $Aboutreturn = "";
$Postscurrent = ""; $Postsreturn = "";
$pageinclude = '';
$pginclude = '';
switch ($pagetitle) {
    case "Home":
        $Homecurrent = $current;
        $Homereturn = $return;
        $pginclude = 1;
        break;
    case "About":
        $Aboutcurrent = $current;
        $Aboutreturn = $return;
        $pginclude = 0;
        break;
    case "Posts":
        $Postscurrent = $current;
        $Postsreturn = $return;
        $pginclude = 0;
        break;
        default:
};

if ($pginclude == 1) {
    $pageinclude = "<link type='text/css' rel='stylesheet' href='{$include}.css'>";
}
?>

<?php require_once('couch/cms.php'); ?>




<!DOCTYPE HTML>
<html>
    <head>
        <title><?= $pagetitle ?> | Qern Web Portal</title>
        <link type="text/css" rel="stylesheet" href="generic.css">
        <link rel="preload stylesheet" href="https://fonts.googleapis.com/css2?family=GFS+Didot&family=Fira+Sans&family=Zilla+Slab&family=Zilla+Slab+Highlight" as="style" crossorigin="anonymous"/>
        <link rel="prefetch" href="index.php">
        <link rel="prefetch" href="about.php">
        <link rel="prefetch" href="posts.php">
        <?= $pageinclude ?>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="icon" type="image/x-icon" href="favicon.svg">
        <cms:load_edit />
        <!--https://markdotto.com/2018/11/05/css-dark-mode/-->
    </head>
    <body>
        <div class="logotext" id="toplogotext"></div>
        <nav id="headnavbar" class="navbar">
            <ul>
                <li <?= $Homecurrent ?>><a href="index.php" <?= $Homereturn ?>>Home</a></li>
                <li <?= $Aboutcurrent ?>><a href="about.php" <?= $Aboutreturn ?>>About</a></li>
                <li <?= $Postscurrent ?>><a href="posts.php" <?= $Postsreturn ?>>Posts</a></li>
            </ul>
        </nav>