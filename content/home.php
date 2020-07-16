<?php
    if(!defined("INDEX")) die("page not found");
    include("db/config.php");

    $page = isset($_GET['page']) ? $_GET['page'] : 1;
    // line -> batas (jumlah article)
    $line = 1;
    $position = ($page-1) * $line;

    $article = mysqli_query($conn, "SELECT * FROM blog_article 
                                    ORDER BY article_id 
                                    DESC LIMIT $position, $line");
    while($data = mysqli_fetch_array($article)):
        $content = substr($data['content'],0,800); ?>
        <div class="article">
            <h2 class="title"><?= $data['title'] ?></h2>
            <p>
                <?php if($data['image_name'] != "") ?>
                <img src="image/article/<?= $data['image_name'] ?>" class="image-article" height="100"">
            </p>
            <p class=content-article><?= $content ?>
                <a href="?preview=article_detail&id=<?= $data['article_id'] ?>">full-read</a>
            </p>
        </div>
    <?php endwhile;

    $all = mysqli_query($conn, "SELECT * FROM blog_article");
    $all_article = mysqli_num_rows($all);
    // bulatkan all_page dgn ceil
    $all_page = ceil($all_article/$line);
    $previous = $page-1;
    $next = $page + 1;

    echo "<div class='paging'>";
    //bagian 1
    if($page > 1){
        echo "<span><a href='?preview=home&page=1'>
            First</a></span>";
        echo "<span><a href='?preview=home&page=$previous'>
            Previous</a></span>";
    }else{
        echo "<span>First</span>";
        echo "<span>Previous</span>";
    }
    //bagian 2
    for($i=1; $i<=$all_page; $i++){
        if($i == $page)
        echo "<span><b>$i</b></span>";
        else echo "<span><a href='?preview=home&page=$i'>$i</a></span>";
    }
    //bagian 3
    if($page < $all_page){
        echo "<span><a href='?preview=home&page=$next'>
            Next</a></span>";
        echo "<span><a href='?preview=home&page=$all_page'>
            Last</a></span>";
    }else{
        echo "<span>Next</span>";
        echo "<span>Last</span>";
    }
    echo "</div>";
?>