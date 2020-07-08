<?php
include("config.php");
mysqli_query($conn, "DELETE FROM blog_menu WHERE menu_id = '$_GET[id]'");

echo "delete success";
echo "<meta http-equiv='refresh'
content='1; url=?preview=menu'>";
