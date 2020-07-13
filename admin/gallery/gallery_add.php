<h2>Add Gallery</h2>

<form action="?preview=gallery_add_process" method="POST" enctype="multipart/form-data">
    <table>
        <tr>
            <td>Gallery Title</td>
            <td><input type="text" name="title" size="50" required></td>
        </tr>
        <tr>
            <td>Image</td>
            <td><input type="file" name="image"></td>
        </tr>
        <tr>
            <td></td>
            <td><button type="submit" name="add">Add</button></td>
        </tr>
    </table>
</form>