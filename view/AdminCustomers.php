<?php 
    $title = "Admin Customers";
    require_once '../view/headerInclude.php'; 
    require_once '../view/AdminNavInclude.php';
?>  
<div class="customerList">
    <table class="center" id='customersTable'>
        <tr>
            <th>Customer Name</th>
            <th>Phone Number</th>
            <th>Email</th>
            <th>Coach</th>
            <th>Current Balance</th>
            <th>Date Added</th>
        </tr>
        
        <?php 
            $i = 0;
            foreach($results as $row) { 
            $i++;
        ?>      
                <tr>
                    <td>
                        <a href="../Controller/Controller.php?action=DisplayCustomer&CustomerID=<?php echo $row['CustomerID'] ?>">
                            <?php echo $row['Name'] ?>
                        </a>    
                    </td>
                    
                    <td class="textCenter"><?php echo $row['PhoneNumber'] ?></td> 
                    <td><?php echo $row['Email'] ?></td> 
                    <td><?php echo $row['Coach'] ?></td>
                    <td><?php echo $row['CurrentBalance'] ?></td>
                    <td class="textCenter"><?php echo toDisplayDate($row['DateAdded']) ?></td>
                </tr>
                
        <?php } ?>            
    </table>
</div>
</body>
</html>

<?php
        require_once '../view/footerInclude.php';
?>       