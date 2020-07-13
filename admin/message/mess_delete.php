<?php
include("../db/config.php");
// id dari ?preview=menu_delete&id=
mysqli_query($conn, "DELETE FROM blog_message WHERE mess_id = '$_GET[id]'");

echo "delete success";
echo "<meta http-equiv='refresh'
content='1; url=?preview=message'>";
