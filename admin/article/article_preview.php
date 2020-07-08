<h2>Data Article</h2>

<a href="?preview=article_add">Add Article</a><br><br>

<table width="100%" cellspacing="0" class="data" border="1">
    <tr>
        <th>No</th>
        <th>Title</th>
        <th>Date</th>
        <th>Action</th>
    </tr>

    <?php
    include('../db/config.php');

    $no = 1;
    $sql = mysqli_query($conn,"SELECT * FROM blog_article ORDER BY article_id DESC ");
    while($data=mysqli_fetch_array($sql)):
     ?>
    <tr>
        <td><?= $no++; ?></td>
        <td><?= $data['title']; ?></td>
        <td><?= $data['date']; ?></td>
        <td>
            <a href="?preview=article_edit&id=<?= $data['article_id']; ?>">Edit</a>
            <a href="?preview=article_delete&id=<?= $data['article_id']; ?>">Delete</a>
        </td>
    </tr>
        <?php endwhile ?>
</table>