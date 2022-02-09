<?php 
    $title = "Admin Search Customers";
    require_once '../view/headerInclude.php'; 
    require_once '../view/AdminNavInclude.php';
?>  

<div class="custDetail center">
    <h1 class="fontColorWhite">Search Customers</h1>
    
    <div class="formRow">
        <label class="fontColorWhite customerDisplay">Select a Customer</label>
        <select id="CustomerSelect" onchange="customerLookup()">
            <option value="0">Select a Customer</option>
            
            <?php foreach ($results as $row){ ?>
                    <option value="<?php echo $row['CustomerID']?>"><?php echo $row['Name'] ?></option>
            <?php } ?>
        </select>
        <input type="button" onclick="customerLookup()" value="Search" />
    </div>
    
    <div class="formRow">
        <label class="fontColorWhite customerDisplay">Search Criteria</label> 
        <input type="text" id="Criteria" />
        <input type="button" value="General Search" onclick="generalSearch()"/>
    </div>
    
    <div class="formRow">
        <a class="fontColorWhite customerDisplay" href="../Controller/Controller.php?action=AdminCustomers&Coach=Coach">Coaches</a>
    </div>
    <div class="formRow">
        <a class="fontColorWhite customerDisplay" href="../Controller/Controller.php?action=AdminCustomers&Coach=nonCoach">Non Coaches</a>
    </div>


    <div class="innerFormRow">
        <?php require_once '../view/footerInclude.php';?>
    </div>
</div>

<script>
    function customerLookup ()
    {
        document.location = "../Controller/Controller.php?action=DisplayCustomer&CustomerID=" + 
                $('#CustomerSelect').val();
    }
    function generalSearch()
    {
        document.location = "../Controller/Controller.php?action=AdminCustomers&Coach=GeneralSearch&Criteria=" + 
                encodeURIComponent($('#Criteria').val());
    }
</script>



       