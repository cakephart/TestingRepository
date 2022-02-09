<?php
	$title = "Delete Image";
	require '../view/headerInclude.php';
?>

<form name="form1" method="post">
    <?php
        echo "<p class='uploadFiles'><a class='goBackButton' href='../Controller/Controller.php?action=AdminGallery'>Go Back</a></p>";
        foreach ($deleteImageArray as $file) 
        {
            echo "<li class='fontColorWhite'><input type=CHECKBOX name='file[]' value='$file'><img src='../Images/GalleryImages' . $file alt='$file'><br /></li>" ;
            //echo "<lim class='fontColorWhite'><input type='checkbox' id='$file' name='$file' value='$file'><label for='$file'> $file</label><br>";
        }
        //echo "</ol>";
    ?>    
<input type="submit" name="Delete" value="Delete">
</form>    





