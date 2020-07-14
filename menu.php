<?php
if(!defined("INDEX")) die("page not found");
include("db/config.php");
?>

<ul class="nav">
    <?php
    $menu = mysqli_query($conn, "SELECT * FROM blog_menu ORDER BY thread");
    while($data = mysqli_fetch_array($menu)):
    ?>
    <li>
        <a href="<?= $data['link']; ?>">
        <?= $data['title']; ?>
    </a>
    </li>
    <?php endwhile ?>
</ul>