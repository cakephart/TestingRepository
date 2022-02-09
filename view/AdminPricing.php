<?php 
    $title = "Pricing";
    require_once '../view/headerInclude.php';
    require_once '../view/AdminNavInclude.php';
?>

<div class="customerList">
    <table class="center" id='customersTable'>
        <tr>
            <th>Package Name</th>
            <th>Price</th>
        </tr>
        
        <?php 
            $i = 0;
            foreach($priceResults as $row) { 
            $i++;    
        ?>      
                <tr>
                    <td>
                        <a href="../Controller/Controller.php?action=DisplayPrices&PackageID=<?php echo $row['PackageID'] ?>">
                            <?php echo $row['PackageName'] ?>
                        </a>    
                    </td>    
                    <td class="textCenter"><?php echo $row['Price'] ?></td> 
                </tr>
                
        <?php } ?>            
    </table>
</div>
</body>
</html>

<?php
        require_once '../view/footerInclude.php';
?>       


