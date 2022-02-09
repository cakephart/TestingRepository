<?php 
    $title = "About";
    require_once '../view/headerInclude.php'; 
    require_once '../view/navInclude.php';
?>

<html>
<body>

<!--Contact us section--> 
<div class="container-fluid">
    <span class="row">
        <div class="col-12 accordion" id="accordionExample">
        <div class="card">
        <div class="card-header" id="headingOne">
        <h5 class="mb-0">
        <button class="btn btn-link aboutHeadings" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
          Contact Us 
        </button>
        </h5>
        </div>

        <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
         <div class="card-body">
          <h3 class="aboutContent">Owner: Michelle Chevercko></h3>
          <h3 class="aboutContent">Email: <a class="aboutConent" href='mailto:powerlinepracticefacility@gmail.com'>powerlinepracticefacility@gmail.com</a></h3>
        </div>
        </div>
        </div>
        </div>  
    </span>
</div>
        
  <!--Developer section-->  
<div class="container-fluid"> 
    <span class="row">
        <div class="col-12 card">
        <div class="card-header" id="headingTwo">
        <h5 class="mb-0">
        <button class="btn btn-link collapsed aboutHeadings" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
          Developers
        </button>
        </h5>
        </div>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
        <div class="card-body">
        <h3><a class="aboutContent" href='mailto:b.m.bizzarri@eagle.clarion.edu'>Brady Bizzarri</a></h3>
        <h3><a class="aboutContent" href='mailto:c.a.kephart@eagle.clarion.edu'>Chandler Kephart</a></h3>
        </div>
        </div>
        </div>
    </span>
</div>    
    
  
  
    <!--Google map -->
    <div class="container-fluid">
        <span class="row">
            <div class="col-12" id="map"></div>
        </span>    
    </div>
    


<h4 class="headings">Last Updated: Jan 2021</h4>

</body>
</html>

<?php
        require_once '../view/footerInclude.php';
?>       