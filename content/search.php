<?php
    if(!defined("INDEX")) die("page not found");

    $page = isset($_GET['page']) ? $_GET['page'] : 1;
    // line -> batas (jumlah article)
    $line = 2;
    $position = ($page-1) * $line;
    $search = $_POST['word'];

    $article = mysqli_query($conn, "SELECT * FROM blog_article 
                                    WHERE content LIKE '%$search%' 
                                    ORDER BY article_id DESC LIMIT $position, $line");
    $all_article = mysqli_num_rows($article);
    if($all_article > 0):
        echo "result : <b>$search</b>";
        while($data = mysqli_fetch_array($article)):
            $content = substr($data['content'],0,800); ?>

            <div class="article">
                <h2 class="title"><?= $data['title']; ?></h2>
                <p>
                    <?php if($data['image_name'] != "") ?>
                    <img src="image/article/<?= $data['image_name']; ?>" class="image-article" height="100"">

                    <?= $content; ?>
                    <a href="?preview=article_detail&id=
                    <?= $data['article_id']; ?>
                    ">full</a>
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

    endif;
?>

