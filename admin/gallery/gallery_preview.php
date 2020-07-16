<h2>Data Gallery</h2>

<a href="?preview=gallery_add">Add Gallery</a><br><br>

<table width="100%" cellspacing="0" class="data" border="1">
    <tr>
        <th>No</th>
        <th>Title</th>
        <th>Image</th>
        <th>Date</th>
        <th>Action</th>
    </tr>

    <?php
        $no = 1;
        $sql = mysqli_query($conn,"SELECT * FROM blog_gallery");
        while($data=mysqli_fetch_array($sql)):
        ?>
        <tr>
            <td><?= $no++; ?></td>
            <td><?= $data['title']; ?></td>
            <td><img src="../image/gallery/<?= $data['image']; ?>" width="200"></td>
            <td><?= $data['date']; ?></td>
            <td>
                <a href="?preview=gallery_edit&id=<?= $data['gallery_id']; ?>">Edit</a>
                <a href="?preview=gallery_delete&id=<?= $data['gallery_id']; ?>">Delete</a>
            </td>
        </tr>
        <?php endwhile ?>
</table>