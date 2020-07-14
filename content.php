<?php
if(!defined("INDEX")) die("...");


if(isset($_GET['preview'])) $preview = $_GET['preview'];
else $preview = "home";
?>

<div class="box">
    <?php
    if($preview == "home") include("content/home.php");

    elseif($preview == "page")
    include("content/page.php");
    elseif($preview == "gallery")
    include("content/gallery.php");
    elseif($preview == "article_detail")
    include("content/article_detail.php");
    elseif($preview == "contact")
    include("content/contact.php");

    else echo "page not found";
    ?>
</div>