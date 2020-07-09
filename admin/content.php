<?php

if(isset($_GET['preview'])){
    $preview = $_GET['preview'];
}else{
    $preview = "home";
}

if($preview == "home"){
    include("home.php");
}elseif($preview == "quit"){
    include("quit.php");

}elseif($preview == "menu"){
    include("menu/menu_preview.php");
}elseif($preview == "menu_add"){
    include("menu/menu_add.php");
}elseif($preview == "menu_edit"){
    include("menu/menu_edit.php");
}elseif($preview == "menu_delete"){
    include("menu/menu_delete.php");

}elseif($preview == "page"){
    include("page/page_preview.php");
}elseif($preview == "page_add"){
    include("page/page_add.php");
}elseif($preview == "page_edit"){
    include("page/page_edit.php");
}elseif($preview == "page_delete"){
    include("page/page_delete.php");

}elseif($preview == "article"){
    include("article/article_preview.php");
}elseif($preview == "article_add"){
    include("article/article_add.php");
}elseif($preview == "article_add_process"){
    include("article/article_add_process.php");
}elseif($preview == "article_edit"){
    include("article/article_edit.php");
}elseif($preview == "article_edit_process"){
    include("article/article_edit_process.php");
}elseif($preview == "article_delete"){
    include("article/article_delete.php");

}elseif($preview == "gallery"){
    include("gallery/gallery_preview");
}elseif($preview == "gallery_add"){
    include("gallery/gallery_add.php");
}elseif($preview == "gallery_edit"){
    include("gallery/gallery_edit.php");
}elseif($preview == "gallery_delete"){
    include("gallery/gallery_delete.php");

}elseif($preview == "message"){
    include("message/message_preview");
}elseif($preview == "message_foward"){
    include("message/message_foward.php");
}elseif($preview == "message_add_process"){
    include("message/message_add_process.php");
}elseif($preview == "message_edit"){
    include("message/message_edit.php");
}