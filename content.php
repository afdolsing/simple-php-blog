<?php
if (!defined("INDEX")) die("page not found");

if (isset($_GET['preview'])) $preview = $_GET['preview'];
else $preview = "home";
?>

<div class="box">
    <?php
    if ($preview == "home") include("content/home.php");

    elseif ($preview == "page")
        include("content/page.php");
    elseif ($preview == "gallery")
        include("content/gallery.php");
    elseif ($preview == "article_detail")
        include("content/article_detail.php");
    elseif ($preview == "contact")
        include("content/contact.php");
    elseif ($preview == "search")
        include("content/search.php");
    elseif ($preview == "comment_process")
        include("content/comment_process.php");  

    else echo "page not found in content";
    ?>
</div>