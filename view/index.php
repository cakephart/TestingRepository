<!-- Header File and title-->
<?php 
    $title = "Powerline Practice Facility";
    require_once '../view/headerInclude.php'
?>

<section class="col-12 text-center">
    <p class="top-left">Welcome To Powerline Practice Facility</p>
</section>     

<?php 
    require_once '../view/navInclude.php';
?>
            
    <!--About Paragraph and Picture-->
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
            Welcome to Powerline Practice Facility. <img src="<?php echo $homeImg;?>" alt="Home Image" width="900" height="900" class="inTextPictures"> This facility can be used for a variety of baseball or softball practices. The Facility is 40 Feet wide and 100 ft long, plenty of room for your team
            To begin to reserve a practice time click on the Calendar tab above!!
        </p>    

        <p class="textcenter paragraph"><a  class="fontColorWhite" href="../Controller/Controller.php?action=Newsletter">View our latest Newsletter</a></p>
            
        <!--Contact Information-->
        <p class="textcenter paragraph">
            Powerline Practice Facility <br> 511 Adams Street Philipsburg, PA 16866
        </p>        
        <br>

       <div class="text-center">
                <button class="open-button" onclick="openForm()">Sign Up To Receive Our Newsletter</button>
       </div>   
        <div class="hover_bkgr_fricc" id="myForm">
            <span class="helper" id="closeMyForm"></span>
            <div>
                <div class="container-fluid">
                    <form action="../Controller/Controller.php?action=ProcessNewsletterSignUp" class="form-container" method="post">
                        <h1>We just need some info</h1>

                        <label for="firstName"><b>First Name</b></label>
                        <input id="firstName" type="text" placeholder="Enter First Name" name="firstName" required>

                        <label for="lastName"><b>Last Name</b></label>
                        <input id="lastName" type="text" placeholder="Enter Last Name" name="lastName" required>
        
                        <label for="email"><b>Email</b></label>
                        <input id="email" type="text" placeholder="Enter Email" name="userEmail" required>

                        <button type="submit" class="btn">Sign Up</button>
                        <button type="button" class="btn cancel" onclick="closeForm()">Cancel</button>
                </form>
                </div>
            </div>
        </div>
        
        <p class="textcenter paragraph">
            Michelle Chverchko
            <br>
            (814) 496 1278
            <br>
            <a class="paragraph" href="mailto:powerlinepracticefacility@gmail.com"> powerlinepracticefacility@gmail.com</a>
        </p>
</div>


<?php
        require_once '../view/footerInclude.php';
?>

</body>
</html>