<?php 
    $title = "Files";
    require_once '../view/headerInclude.php'; 
    require_once '../view/navInclude.php';
?> 

<h1 class="fontColorWhite text-center">Files</h1>
 <?php
            $dir = "../Documents/";

            // Open a directory, and read its contents
            if (is_dir($dir))
            {
                if ($dh = opendir($dir))
                {
                    while (($file = readdir($dh)) !== false)
                    {
                        if ($file != "." && $file != "..")
                        {
                            echo "<p class='uploadFiles'><a class='fontColorWhite' href='../Documents/$file'>$file</a></p>"; 
                        } 
                    }
                    closedir($dh);
                }
            }
        ?>

