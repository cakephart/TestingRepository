<?php
	$title = "Image Upload";
	require '../view/headerInclude.php';
?>
<h1 class='filesHeadings uploadFiles'>Image Upload</h1>

<?php
    echo "<h3 class='fontColorWhite uploadFiles'>$message</h3>";
    echo "<p class='uploadFiles'><a class='goBackButton' href='../Controller/Controller.php?action=AdminGallery'>Go Back</a></p>";
    foreach ($imageArray as $file) 
    {
        echo "<li class='fontColorWhite'>$file'</li>" ;
    }
    echo "</ol>";
?>
<?php
	require '../view/footerInclude.php';
?>
