<?php 
    $title = "Admin Home";
    require_once '../view/headerInclude.php'; 
?>

<div class="container-fluid">
    <span class="row">
        <div class="col-10 text-center"> <p class="top-left">Welcome To Powerline Practice Facility</p></div>
    </span>
</div>

<?php
    require_once '../view/AdminNavInclude.php';
?>    


<div class="container-fluid">
    <p class="paragraph">
        <?php
            $current_dir = '../Images/GalleryImages/';
            $dir = opendir($current_dir);
            while(false !== ($file = readdir($dir)))
            {
                //strip out the two entries of . and ..
                if($file != "." && $file != "..")
                {
                    $homeArray[] = $file;
                }
            }
            closedir($dir);
            $homeImg = "../Images/GalleryImages/" . $homeArray[array_rand($homeArray)];			
        ?>
        Welcome to Powerline Practice Facility. This facility can be used  <img src="<?php echo $homeImg;?>" alt="Home Image" width="700" height="700" class="inTextPictures"> for a variety of baseball or softball practices. The Facility is 40 Feet wide and 100 ft long, plenty of room for your team
        To begin to reserve a practice time click on the Calendar tab above!!
        <br>
        <br>
    <p class="textcenter paragraph">
        Powerline Practice Facility <br> 511 Adams Street Philipsburg, PA 16866
    </p>
    <br>
    <p class="textcenter paragraph">
        Michelle Chverchko
        <br>
        (814) 496 1278
        <br>
        <a class="paragraph" href="mailto:powerlinepracticefacility@gmail.com"> powerlinepracticefacility@gmail.com</a>
    </p>

</div>
</body>
</html>

<?php
        require_once '../view/footerInclude.php';
?>       