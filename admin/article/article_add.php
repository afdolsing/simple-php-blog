<h2>Add Article</h2>

<form action="?preview=article_add_process" method="POST" enctype="multipart/form-data">
    <table>
        <tr>
            <td>Article Title</td>
            <td><input type="text" name="title" size="50" required></td>
        </tr>
        <tr>
            <td>Image</td>
            <td><input type="file" name="image"></td>
        </tr>
        <tr>
            <td>Content</td>
            <td><textarea name="content" cols="100" rows="15" required></textarea></td>
        </tr>
        <tr>
            <td></td>
            <td><button type="submit" name="add">Add</button></td>
        </tr>
    </table>
</form>