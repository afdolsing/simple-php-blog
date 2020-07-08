<h2>Data Menu</h2>

<a href="?preview=menu_add">Add Menu</a><br><br>

<table width="100%" cellspacing="0" class="data" border="1">
    <tr>
        <th>No</th>
        <th>Title</th>
        <th>Link</th>
        <th>Thread</th>
        <th>Action</th>
    </tr>

    <?php
    include('../db/config.php');

    $no = 1;
    $sql = mysqli_query($conn,"SELECT * FROM blog_menu ORDER BY thread");
    while($data=mysqli_fetch_array($sql)):
     ?>
    <tr>
        <td><?= $no++; ?></td>
        <td><?= $data['title']; ?></td>
        <td><?= $data['link']; ?></td>
        <td><?= $data['thread']; ?></td>
        <td>
            <a href="?preview=menu_edit&id=<?= $data['menu_id']; ?>">Edit</a>
            <a href="?preview=menu_delete&id=<?= $data['menu_id']; ?>">Delete</a>
        </td>
    </tr>
        <?php endwhile ?>
</table>