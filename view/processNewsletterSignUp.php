<?php                        
    $title = "Sign Up Successful";
    require_once '../view/headerInclude.php';
    require_once '../view/navInclude.php';
?>

<?php

    echo "<h3 class='fontColorWhite'>Current members are:</h3><ol>";
    echo "<p class='uploadFiles'><a class='goBackButton' href='../Controller/Controller.php?action=Home'>Go Back</a></p>";
    foreach ($memberArray as $member) 
    {
        echo "<li class='fontColorWhite'><a class='fontColorWhite' href='mailto:$member[2]'>" .
        "$member[0] $member[1]</a></li>" ;
    }
    echo "</ol>";

    echo "<h3 class='fontColorWhite uploadFiles'>$firstName, $message</h3>";
    
   
?>

<?php
        require_once '../view/footerInclude.php';
?>    
