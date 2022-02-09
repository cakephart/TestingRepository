<?php 
    $title = "Admin Customers";
    require_once '../view/headerInclude.php'; 
    require_once '../view/AdminNavInclude.php';
?>  

<div class="custDetail fontColorWhite customerDisplay">
    
    <h1>Customer:</h1>
    
    <div class="formRow">
        <label>Customer Name:</label>
        <?php echo $row['Name'] ?>
    </div>
    <div class="formRow">
        <label>Email:</label>
        <?php echo $row['Email'] ?> 
    </div>
    <div class="formRow">
        <label>Phone Number:</label>
        <?php echo $row['PhoneNumber'] ?> 
    </div>
    <div class="formRow">
        <label>Coach:</label>
        <?php echo $row['Coach'] ?>
    </div>
        <div class="formRow">
        <label>Current Balance:</label>
        <?php echo $row['CurrentBalance'] ?>
    </div>
    <div class="formRow">
        <label>Date Added:</label>
        <?php echo toDisplayDate($row['DateAdded']) ?>
    </div>  
</div>

<?php if ($row['CustomerImagePath'] != "") { ?>
<div id="customerImage">
    <img src="<?php echo $row['CustomerImagePath'] ?>" alt="Customer Image" height="220" width="220">
    
</div>
<?php } ?>
<div class="clearable"></div>    
<?php
        require_once '../view/footerInclude.php';
?>       

