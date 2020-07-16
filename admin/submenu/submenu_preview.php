<h2>Data SubMenu</h2>

<a href="?preview=submenu_add">Add SubMenu</a><br><br>

<table width="100%" cellspacing="0" class="data" border="1">
    <tr>
        <th>No</th>
        <th>Submenu Title</th>
        <th>Menu Parent</th>
        <th>Link</th>
        <th>Thread</th>
        <th>Action</th>
    </tr>

    <?php

    $no = 1;
    $sql = mysqli_query($conn,"SELECT * FROM blog_submenu ORDER BY thread");
    
    while($data=mysqli_fetch_array($sql)):
        $sqlmenu = mysqli_query($conn, "SELECT * FROM blog_menu WHERE menu_id='$data[menu_id]'");
        $datamenu = mysqli_fetch_array($sqlmenu);
     ?>
    <tr>
        <td><?= $no++; ?></td>
        <td><?= $data['title']; ?></td>
        <td><?= $datamenu['title']; ?></td>
        <td><?= $data['link']; ?></td>
        <td><?= $data['thread']; ?></td>
        <td>
            <a href="?preview=submenu_edit&id=<?= $data['submenu_id']; ?>">Edit</a>
            <a href="?preview=submenu_delete&id=<?= $data['submenu_id']; ?>">Delete</a>
        </td>
    </tr>
        <?php endwhile ?>
</table>