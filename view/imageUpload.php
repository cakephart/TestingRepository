<?php
	$title = "Gallery Upload";
	require './headerInclude.php';
?>
<h1>Upload Logo File to the Server</h1>

<form enctype="multipart/form-data" 
      action="processImageUpload.php" method="post">
    Select a Logo File: 
    <input name="userfile" type="file" />
    <input type="submit" value="Send File" />
</form>
<p> </p>
    
<?php
	require './footerInclude.php';
?>


