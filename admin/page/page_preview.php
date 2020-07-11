<h2>Data Halaman</h2>

<a href="?preview=page_add">Add Page</a><br><br>

<table width="100%" cellspacing="0" class="data" border="1">
    <tr>
        <th>No</th>
        <th>Page Title</th>
        <th>Page Link</th>
        <th>Action</th>
    </tr>

    <?php
    include('../db/config.php');

    $no = 1;
    $sql = mysqli_query($conn,"SELECT * FROM blog_page");
    while($data=mysqli_fetch_array($sql)):
     ?>
    <tr>
        <td><?= $no++; ?></td>
        <td><?= $data['title']; ?></td>
        <td>?preview=page&id<?= $data['id_page']; ?></td>
        <td>
            <a href="?preview=page_edit&id=<?= $data['page_id']; ?>">Edit</a>
            <a href="?preview=page_delete&id=<?= $data['page_id']; ?>">Delete</a>
        </td>
    </tr>
        <?php endwhile ?>
</table>