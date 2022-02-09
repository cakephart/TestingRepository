<?php 
    $title = "Admin Files";
    require_once '../view/headerInclude.php'; 
    require_once '../view/AdminNavInclude.php';
?>



<div class="row col-container">
    <div class="col">
        <h1 class="text-center filesHeadings">Your Files</h1>
        <form class="uploadFiles" enctype="multipart/form-data"
            action="../Controller/Controller.php?action=ProcessFileUpload" method="post">
            <p class='fontColorWhite'>Send this File:</p>
            <input class="fontColorWhite" name="userfile" type="file" accept=".txt, .html"/>
            <input type="submit" value="Send File" />
        </form>
        <?php
            foreach ($fileArray as $file) 
            {
                echo "<li class='fontColorWhite uploadFiles'>$file</li>" ;
            }
            echo "</ol>";
        ?>
    </div>
    <div class="col">
        <h1 class="text-center filesHeadings">Your Quotes</h1>
        <form class="uploadFiles" enctype="multipart/form-data"
              action="../Controller/Controller.php?action=ProcessQuoteUpload" method="post">
            <p class='fontColorWhite'>Send this File:</p>
            <input class="fontColorWhite" name="userfile" type="file" accept=".txt" />
            <input type="submit" value="Send File" />
        </form>
        <?php
            foreach ($quoteArray as $file) 
            {
                echo "<li class='fontColorWhite'><a class='fontColorWhite uploadFiles' href=../Controller/Controller.php?action=Quotes>$file</a></li>" ; 
            }
            echo "</ol>";
        ?>
    </div>
    <div class="col">
        <h1 class="text-center filesHeadings">Your Newsletters</h1>
        <form class="uploadFiles" enctype="multipart/form-data"
              action="../Controller/Controller.php?action=ProcessNewsletterUpload" method="post">
            <p class='fontColorWhite'>Send this File:</p>
            <input class="fontColorWhite" name="userfile" type="file" accept=".html" />
            <input type="submit" value="Send File" />
        </form>
    </div>
</div>

</body>
</html>

<?php
        require_once '../view/footerInclude.php';
?>       