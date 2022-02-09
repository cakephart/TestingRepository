<?php 
    $title = "Admin Login";
    require_once '../view/headerInclude.php'; 
?>


<div class="container-fluid">
    <span class="row">
        <h1 class="col-12 loginHeading text-center">Admin Login</h1>
    </span>
</div>

<div class="container-fluid textboxes">
        <!--Username and password textboxes-->
            <div>
                <!--Username Textbox-->
                <input type="text" placeholder="Enter Username" id="txtUsernameInput" required>
            </div>    
</div> 
<div class="container-fluid textboxes">
            <div>
                <!--Password Textbox-->
                <input type="password" placeholder="Enter Password" id="txtPasswordInput" required>
            </div>       
</div>

<div class="container-fluid">
    <span class="row">
        <p id="passwordFeedback" class="passwordFeedback text-center"></p>
    </span>    
</div>

<!--buttons to login and sign up-->
<div class="container-fluid">
    <span class="row">
        <!--Login Button-->
        <button id="btnLogin" class="loginButton" type="button">Login</button>
    </span>
    <span class="row"> 
        <!--Back Button-->
        <button id="btnBack" class="loginButton" type="button">Back</button>  
    </span>    
</div>
</body>
</html>