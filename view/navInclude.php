       
<nav class="navbar navbar-expand-sm navbar-dark bg-dark">
               <a class="navbar-brand" href="#">
                   <img src='../Images/PowerlinePracticeFacilityLogo.jpg' alt='Logo' style='width:40px;'>
               </a>
               <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-list-3" aria-expanded="false" aria-label="Toggle navigation">
                     <span class="navbar-toggler-icon"></span>
               </button>
                      <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link" style="font-size: 30px; padding-left: 30px;" href="../Controller/Controller.php?action=Home">Home</a>
                            </li>
                            <li class="nav-item dropdown">
                                   <a class="nav-link dropdown-toggle" style="font-size: 30px; padding-left: 30px;" href="#" id="bookingNavbarDropdownMenu" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                           Booking
                                   </a>
                                   <div class="dropdown-menu" aria-labelledby="bookingNavbarDropdownMenu">
                                       <a class="dropdown-item"  style="font-size: 30px; padding-left: 30px;" href="../Controller/Controller.php?action=UserCalendar">Calendar</a>
                                       <a class="dropdown-item" style="font-size: 30px; padding-left: 30px;" href="../Controller/Controller.php?action=User30MinRental">30 Minute Rental</a>
                                       <a class="dropdown-item" style="font-size: 30px; padding-left: 30px;"  href="../Controller/Controller.php?action=User1HourRental">1 Hour Rental</a>
                                       <a class="dropdown-item" style="font-size: 30px; padding-left: 30px;" href="../Controller/Controller.php?action=User1Hour30MinRental">1 Hour and 30 Minute Rental</a>
                                       <a class="dropdown-item" style="font-size: 30px; padding-left: 30px;"  href="../Controller/Controller.php?action=User2HourRental">2 Hour Rental </a>
                                   </div>
                            </li>
                            <li class="nav-item dropdown">
                                   <a class="nav-link dropdown-toggle" style="font-size: 30px; padding-left: 30px;" href="#" id="pricingNavbarDropdownMenu" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                           Pricing
                                   </a>
                                   <div class="dropdown-menu" aria-labelledby="pricingNavbarDropdownMenu">
                                       <a class="dropdown-item"  style="font-size: 30px; padding-left: 30px;" href="../Controller/Controller.php?action=Pricing">Prices</a>
                                       <a class="dropdown-item" style="font-size: 30px; padding-left: 30px;" href="../Controller/Controller.php?action=PriceSearch">Price Search</a>
                                   </div>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" style="font-size: 30px; padding-left: 30px;" href="../Controller/Controller.php?action=Files">Files</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" style="font-size: 30px; padding-left: 30px;" href="../Controller/Controller.php?action=Gallery">Gallery</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" style="font-size: 30px; padding-left: 30px;" href="../Controller/Controller.php?action=About">About</a>
                            </li> 
                 </ul>
                 <ul class="nav navbar-nav">
                     <li><a href="../Controller/Controller.php?action=Newsletter"><i class="fa fa-bell newsletterIcon" style="font-size:36px"></i></a></li>
                        <li>
                            <div id="adminLogin">
                                <a href="../Controller/Controller.php?action=AdminLogin"><span class="glyphicon glyphicon-log-in"></span> Admin Login</a>
                            </div>    
                        </li>
                 </ul>
         </nav>