<?php 
    $title = "Newsletter Upload";
    require_once '../view/headerInclude.php'; 
?>

<h1 class="filesHeadings">Your Newsletters</h1>

<?php
    echo "<h3 class='fontColorWhite uploadFiles'>$message</h3>";
    echo "<p class='uploadFiles'><a class='goBackButton' href='../Controller/Controller.php?action=AdminFiles'>Go Back</a></p>";
?>

<?php
        require_once '../view/footerInclude.php';
?>    



