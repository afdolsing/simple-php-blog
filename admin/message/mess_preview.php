<h2>Data Message</h2>

<table width="100%" cellspacing="0" class="data" border="1">
    <tr>
        <th>No</th>
        <th>Name</th>
        <th>Date</th>
        <th>Email</th>
        <th>Subject</th>
        <th>Message</th>
        <th>Action</th>
    </tr>

    <?php

    $no = 1;
    $sql = mysqli_query($conn,"SELECT * FROM blog_message");
    while($data=mysqli_fetch_array($sql)):
     ?>
    <tr>
        <td><?= $no++; ?></td>
        <td><?= $data['name']; ?></td>
        <td><?= $data['date']; ?></td>
        <td><?= $data['email']; ?></td>
        <td><?= $data['subject']; ?></td>
        <td><?= $data['message']; ?></td>
        <td>
            <a href="?preview=mess_reply&id=<?= $data['mess_id']; ?>">Reply</a>
            <a href="?preview=mess_delete&id=<?= $data['mess_id']; ?>">Delete</a>
        </td>
    </tr>
        <?php endwhile ?>
</table>