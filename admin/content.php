<?php

if(!defined("INDEX")) die("page not found");
if (isset($_GET['preview'])) {
    $preview = $_GET['preview'];
} else {
    $preview = "home";
}

if ($preview == "home") {
    include("home.php");
} elseif ($preview == "quit") {
    include("quit.php");
// menu
} elseif ($preview == "menu") {
    include("menu/menu_preview.php");
} elseif ($preview == "menu_add") {
    include("menu/menu_add.php");
} elseif ($preview == "menu_edit") {
    include("menu/menu_edit.php");
} elseif ($preview == "menu_delete") {
    include("menu/menu_delete.php");
// submenu  
} elseif ($preview == "submenu") {
    include("submenu/submenu_preview.php");
} elseif ($preview == "submenu_add") {
    include("submenu/submenu_add.php");
} elseif ($preview == "submenu_edit") {
    include("submenu/submenu_edit.php");
} elseif ($preview == "submenu_delete") {
    include("submenu/submenu_delete.php");
// page   
}
elseif ($preview == "page") {
    include("page/page_preview.php");
} elseif ($preview == "page_add") {
    include("page/page_add.php");
} elseif ($preview == "page_edit") {
    include("page/page_edit.php");
} elseif ($preview == "page_delete") {
    include("page/page_delete.php");
// article
} elseif ($preview == "article") {
    include("article/article_preview.php");
} elseif ($preview == "article_add") {
    include("article/article_add.php");
} elseif ($preview == "article_add_process") {
    include("article/article_add_process.php");
} elseif ($preview == "article_edit") {
    include("article/article_edit.php");
} elseif ($preview == "article_edit_process") {
    include("article/article_edit_process.php");
} elseif ($preview == "article_delete") {
    include("article/article_delete.php");
// gallery
} elseif ($preview == "gallery") {
    include("gallery/gallery_preview.php");
} elseif ($preview == "gallery_add") {
    include("gallery/gallery_add.php");
} elseif ($preview == "gallery_add_process") {
    include("gallery/gallery_add_process.php");
}elseif ($preview == "gallery_edit") {
    include("gallery/gallery_edit.php");
}elseif ($preview == "gallery_edit_process") {
    include("gallery/gallery_edit_process.php");
}elseif ($preview == "gallery_delete") {
    include("gallery/gallery_delete.php");
// message
} elseif ($preview == "message") {
    include("message/mess_preview.php");
} elseif ($preview == "mess_reply") {
    include("message/mess_reply.php");
} elseif ($preview == "mess_delete") {
    include("message/mess_delete.php");

// profile
} elseif ($preview == "user_edit") {
    include("user/user_edit.php");
}
else{
    echo "content not found";
}
