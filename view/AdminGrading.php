<?php 
    $title = "Admin Grading";
    require_once '../view/headerInclude.php'; 
    require_once '../view/AdminNavInclude.php';
?>

<table class="center">
    <tr>
        <th>Specific Requirement</th>
        <th>Works Completely (Yes/No) How to Test?</th>
    </tr>
    <tr>
        <td>1. Convert your web application to use the simple MVC pattern demonstrated in class.</td>
        <td> Yes, implemented a model and controller into our current layout.</td>
    </tr>
    <tr>
        <td>a. Add a controller.php that is called any time a request is made to a new page in your site.</td>
        <td> Yes, in the Controller Folder there is a file called Controller.php</td>
    </tr>
    <tr>
        <td>b. Organize your model, view, and controller code in the appropriate folders.</td>
        <td> Yes, Have a Controller folder for the controller and a model folder for the model</td>
    </tr>
    <tr>
        <td>c. Go back and modify the file processing pages (email registration) to use MVC and fix the links in your navigation system.</td>
        <td> Yes, Updated  file upload, quote upload, newsletter upload, image upload, and image deletion to all use the MVC pattern</td>
    </tr>
    <tr>
        <td>2. Create a database using phpMyAdmin.</td>
        <td>Yes, database is called s_bmbizzarri</td>
    </tr>
    <tr>
        <td>a. Include at least 6 columns (or fields) with a variety of data types including at least one of each of the following: character string, date, integer, decimal, and Yes/No values</td>
        <td> Yes, there is a customerID (int), Name (varchar), Email (varchar), PhoneNumber (varchar), Coach (char), CurrentBalance (float), and DateAdded (date)</td>
    </tr>
    <tr>
        <td>b. Add at least 15 rows of data into that table</td>
        <td> Yes, there are 30 rows of data for customers that consistently use the practice facility </td>
    </tr>
    <tr>
        <td>3. Create a simple PHP page that will display a list of the most important columns for all rows in your table.</td> 
        <td>Yes, </td>
    </tr>
    <tr>
        <td>a. Use an HTML table to show your column headings and data values.</td>
        <td> Yes</td>
    </tr>
    <tr>
        <td>b. Add formatting where appropriate for dates, phone numbers, SSNs, Y/N values, etc...</td>
        <td> Yes, there is data formatting for the DateAdded field</td>
    </tr>
    <tr>
        <td>4. Make a page that allows the user to Search for subsets of your records.</td>
        <td> Yes, There is an option to filter the customers and view only view customers who are coaches and an option to view customers that are not coaches</td>
    </tr>
    <tr>
        <td>a. Search using a Selection box with values pre-loaded in a logical order (like a dropdown of names in alphabetical order).</td>
        <td> Yes, All of the current customers names are in the dropdown list in alphabetical order</td>
    </tr>
    <tr>
        <td>b. A general search that searches all character fields for any subset of characters.</td>
        <td> Yes, the search box will return results with any subsets of characters in the Name or in the Email field</td>
    </tr>
    <tr>
        <td>c. Links to show natural subsets of data ( like "Clearance Items" or "New Listing's")</td>
        <td>Yes, There is an option to filter the customers and view only view customers who are coaches and an option to view customers that are not coaches</td>
    </tr>
    <tr>
        <td>d. Never show a list of only one item - automatically proceed to details view if only one item is found.</td>
        <td>Yes, if only one item is found then it will take you right to the customer display page which will show you all of the details for that customer</td>
    </tr>
    <tr>
        <td>5. Make a page that shows a Details view of a single row of your data.</td>
        <td>Yes, If you click on any of the customer names in the table or select a name from the dropdown it will take you to a page that shows you all of the details of that specific customer</td>
    </tr>
    <tr>
        <td>a. Listing screen should automatically link to this screen passing primary key as a querying parameter.</td>
        <td>Yes</td>
    </tr>
    <tr>
        <td> b. Include the display of your binary data (or player or link if no visual component).</td>
        <td>Yes, there is a logo/avatar for each customer that is displayed with the customer details page</td>
    <tr>
        <td>6. Use PHP Data Objects instead of mysql or mysqli interfaces to access your data.</td>
        <td>Yes</td>
    </tr>
    <tr>
        <td>a. Use prepared statements to execute your parameterized queries to avoid SQL injection.</td>
        <td>Yes</td>
    </tr>
     <tr>
        <td>7. This sheet linked in your site under the Admin menu and filled out properly so I can grade it.</td>
        <td>Yes</td>
    </tr>
      <tr>
        <td>8. Complete site published to cisprod public_html folder (including redirection to this assignment).</td>
        <td>Yes</td>
    </tr>
    <tr> 
        <td>a. Create a .zip file of your whole site and turn it in to the appropriate folder on D2L.</td>
        <td>Yes</td>
    </tr>
    <tr>
        <th>Extra Credit</td>
        <th>Works Completely (Yes/No) How to Test?</th>
    </tr>    
    <tr>
        <td>9. Add a second table in your database to keep track of category-type information that  you can use to feed into a selection box.</td>
        <td>Yes, added a table for the pricing along with the dropdown to view certain packages and subsets to view fall/winter rates and spring/summer rates. </td>
    </tr>
    <tr>
        <td>10. Make your general search mechanisms work for date ranges and numeric column matches as well as searching your string data fields.</td>
        <td>N/A </td>
    </tr>
    <tr>
        <td>11. Include a mechanism to choose a initial sort order for the list entries whenever you search your records.</td>
        <td>N/A</td>
    </tr>
    <tr>
        <td>a. The sort order should default to a natural (or common) value and affect the results regardless of which mechanism they used to create the list.</td>
        <td>N/A </td>
    </tr>
    <tr>
        <td>b. This must be a server-side sort (from the database) and avoid SQL injection attacks.</td>
        <td>N/A</td>
    </tr>
    <tr>
        <td>12. Allow the user to click any of the column headers to sort the data shown on the client-side.</td>
        <td>N/A</td>
    </tr>
</table>

</body>
</html>

<?php
        require_once '../view/footerInclude.php';
?>       