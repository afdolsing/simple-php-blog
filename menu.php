<?php
    if (!defined("INDEX")) die("page not found");
?>

<ul class="nav">
    <?php
        $menu = mysqli_query($conn, "SELECT * FROM blog_menu ORDER BY thread");
        while ($data = mysqli_fetch_array($menu)) :
    ?>
        <li>
            <a href="<?= $data['link'] ?>"><?= $data['title'] ?></a>
            <ul>
                <?php
                    $submenu = mysqli_query($conn, "SELECT * FROM blog_submenu WHERE menu_id ='$data[menu_id]'");
                    while ($datasub = mysqli_fetch_array($submenu)) : ?>
                        <li>
                            <a href="<?= $datasub['link'] ?>"><?= $datasub['title'] ?></a>
                        </li>
                    <?php endwhile ?>
            </ul>
        </li>
        <?php endwhile ?>
</ul>