<?php 
    $title = "Admin Gallery";
    require_once '../view/headerInclude.php'; 
    require_once '../view/AdminNavInclude.php';
?>

<h1 class="text-center filesHeadings">Upload Image to the Server</h1>

<form class="uploadFiles" enctype="multipart/form-data" 
      action="../Controller/Controller.php?action=ProcessImageUpload" method="post">
    <p class='fontColorWhite'>Select a Image:</p> 
    <input class='fontColorWhite' name="userfile" type="file" accept="image/jpeg, image/gif, image/png" />
    <input type="submit" name="submit" value="Send File" />
    <button type="submit" formaction="../Controller/Controller.php?action=DeleteImage">Delete Image</button>
</form>
<p> </p>
 <?php
            $dir = "../Images/GalleryImages/";

            // Open a directory, and read its contents
            if (is_dir($dir))
            {
                if ($dh = opendir($dir))
                {
                    while (($file = readdir($dh)) !== false)
                    {
                        if ($file != "." && $file != "..")
                        {
                            echo "<img class='galleryPictures' src='../Images/GalleryImages/" . $file . "' alt='img'>";
                        } 
                    }
                    closedir($dh);
                }
            }
        ?>
</body>
</html>

<?php
        require_once '../view/footerInclude.php';
?>       