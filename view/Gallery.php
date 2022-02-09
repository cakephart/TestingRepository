<?php 
    $title = "Gallery";
    require_once '../view/headerInclude.php'; 
    require_once '../view/navInclude.php';
?>

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


<!--<span class="gallery">
    <img class="galleryPictures" src="../Images/GalleryImages/Side_1.1.jpg" alt="Side 2.1 (Open)">
    <img class="galleryPictures" src="../Images/GalleryImages/Side_1.1_(in_use).jpg" alt="Side 1.1 (in use)">
    <img class="galleryPictures" src="../Images/GalleryImages/Side_1.2.jpg" alt="Side 1.2">
    <img class="galleryPictures" src="../Images/GalleryImages/Side_1.3.jpg" alt="Side 1.3">
    <img class="galleryPictures" src="../Images/GalleryImages/Ground_view_side_1_in_use_.jpg" alt="Side 1 In use">
    <img class="galleryPictures" src="../Images/GalleryImages/Side_1.5.jpg" alt="Side 1.5">
    <img class="galleryPictures" src="../Images/GalleryImages/SIde_1.4.jpg" alt="Side 1.4">
    <img class="galleryPictures" src="../Images/GalleryImages/Side_2.3_(Open).jpg" alt="side 2 open">
    <img class="galleryPictures" src="../Images/GalleryImages/Side_2.1_(open_in_use).jpg" alt="Side 2 in use">
    <img class="galleryPictures" src="../Images/GalleryImages/Side_2.1_(BG_Half).jpg" alt="Side 2 BG half">
    <img class="galleryPictures" src="../Images/GalleryImages/Side_2.1_(BG_Full)(1).jpg" alt="Side 2 BG Full">
    <img class="galleryPictures" src="../Images/GalleryImages/Side_2_in_use_1.1.jpg" alt="Side 2 in use">
    <img class="galleryPictures" src="../Images/GalleryImages/Side_2.1_(BG_Full).jpg" alt="Side 2 BG Full">
    <img class="galleryPictures" src="../Images/GalleryImages/Arial_full_in_use_.jpg" alt="Arial full in use">
    <img class="galleryPictures" src="../Images/GalleryImages/Ground_view_side_1_in_use_.jpg" alt="Ground view side one in use">
</span>-->

</body>
</html>

<?php
        require_once '../view/footerInclude.php';
?>       