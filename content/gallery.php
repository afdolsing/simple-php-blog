<?php
    if(!defined("INDEX")) die("page not found");
    include('db/config.php');
?>
<h2>Galerry</h2>
<div class="gallery">
    <table cellpading="5">
        <tr>
            <?php
                $no = 1;
                $article = mysqli_query($conn, "SELECT * FROM blog_gallery 
                                                ORDER BY gallery_id DESC LIMIT 12");
                while($data = mysqli_fetch_array($article)): ?>
                    <td align="center">
                        <img src="image/gallery/<?= $data['image']; ?>" height="100">
                        <br>
                        <?= $data['title']; ?>
                    </td>
            <?php
                if($no%4 == 4) echo"<tr><tr>";
                $no++;
                endwhile ?>    
        </tr>
    </table>
</div>