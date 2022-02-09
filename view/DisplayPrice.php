<?php 
    $title = "Admin Customers";
    require_once '../view/headerInclude.php'; 
?>  

<div class="custDetail fontColorWhite customerDisplay">
    
    <h1>Package:</h1>
    
    <div class="priceFormRow">
        <label>Package ID:</label>
        <?php echo $row['PackageID'] ?>
    </div>
    <div class="priceFormRow">
        <label>Package Name:</label>
        <?php echo $row['PackageName'] ?> 
    </div>
    <div class="priceFormRow">
        <label>Price:</label>
        <?php echo $row['Price'] ?> 
    </div>
</div>
  <?php if ($row['PriceImagePath'] != "") { ?>
<div id="priceImage">
    <img src="<?php echo $row['PriceImagePath'] ?>" alt="Price Image" height="300" width="300">
    
</div>
<?php } ?>
<div class="clearable"></div>   
<?php
        require_once '../view/footerInclude.php';
?>       



