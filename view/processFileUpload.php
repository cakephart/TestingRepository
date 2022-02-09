<?php 
    $title = "File Upload";
    require '../view/headerInclude.php'; 
?>

<h1 class="filesHeadings">Your Files</h1>

<?php
    echo "<h3 class='fontColorWhite uploadFiles'>$message</h3>";
    echo "<p class='uploadFiles'><a class='goBackButton' href='../Controller/Controller.php?action=AdminFiles'>Go Back</a></p>";
?>

<?php
        require '../view/footerInclude.php';
?>    

