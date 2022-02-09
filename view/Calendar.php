<?php 
    $title = "Calendar"; 
    require_once '../view/navInclude.php';
    require_once '../view/headerInclude.php';
?>

</body>
</html>

<div class="container-fluid googlecalendar">
    <span class="row">
        <p class="googlecalendar">
            <iframe src="https://calendar.google.com/calendar/embed?height=600&amp;wkst=1&amp;bgcolor=%23ffffff&amp;ctz=America%2FNew_York&amp;src=cG93ZXJsaW5lcHJhY3RpY2VmYWNpbGl0eUBnbWFpbC5jb20&amp;src=YWRkcmVzc2Jvb2sjY29udGFjdHNAZ3JvdXAudi5jYWxlbmRhci5nb29nbGUuY29t&amp;color=%23039BE5&amp;color=%2333B679&amp;showCalendars=0&amp;showTz=0" style="border:solid 1px #777" width="1500" height="1000" frameborder="0" scrolling="no"></iframe>
        </p>
    </span>   
</div>

<?php
        require_once '../view/footerInclude.php';
?>       