<?php 
    $title = "Price Search";
    require_once '../view/headerInclude.php'; 
    require_once '../view/navInclude.php';
?>  

<div class="custDetail center">
    <h1 class="fontColorWhite">Search Prices</h1>
    
    <div class="formRow">
        <label class="fontColorWhite customerDisplay">Select a Package</label>
        <select id="PackageSelect" onchange="packageLookup()">
            <option value="0">Select a Package</option>
            
            <?php foreach ($priceResults as $row){ ?>
                    <option value="<?php echo $row['PackageID']?>"><?php echo $row['PackageName'] ?></option>
            <?php } ?>
        </select>
        <input type="button" onclick="packageLookup()" value="Search" />
    </div>
    
    <div class="formRow">
        <a class="fontColorWhite customerDisplay" href="../Controller/Controller.php?action=Pricing&Season=FallWinter">Fall/Winter Prices</a>
    </div>
    <div class="formRow">
        <a class="fontColorWhite customerDisplay" href="../Controller/Controller.php?action=Pricing&Season=SpringSummer">Spring/Summer Prices</a>
    </div> 
</div>

<div class="clearable"></div>   >
<?php require_once '../view/footerInclude.php';?>

<script>
    function packageLookup ()
    {
        document.location = "../Controller/Controller.php?action=DisplayPrices&PackageID=" + 
                $('#PackageSelect').val();
    }
</script>



       

