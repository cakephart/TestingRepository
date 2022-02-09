
    
<footer>
    <div class="container-fluid footerText center">
        <?php
            $file= "../QuoteFiles/QuoteFile.txt";
            $quotes = file($file);
            srand((double)microtime()*1000000);
            $randomquote = rand(0, count($quotes)-1);
            echo "<p class='text-center'>$quotes[$randomquote]</p>"; 
        ?> 
        <p class="text-center">        
            Powerline Practice Facility 511 Adams Street Philipsburg, PA 16866 <a class="footerText" href='mailto:powerlinepracticefacility@gmail.com'>Contact Us</a>
            <br>
            <?php echo " Last modified: " . date ("F d Y", getlastmod());?>
        </p>
    </div>    
</footer>




