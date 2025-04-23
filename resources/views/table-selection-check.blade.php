
<html>
<head>
	<title>Catch35</title>
	<link rel="stylesheet" href="../css/header-footer.css">
	<link rel="stylesheet" href="../css/catch35_general.css">
	<link rel="stylesheet" href="../css/table_selection.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />

<style>
    .seat {
        width: 50px;
        height: 50px;
        background-color: gray;
        border: 1px solid black;
    }

    .booked {
        background-color: red;
    }
</style>

</head>
<body>
<script type="text/javascript" src="../js/table_reservation.js"></script>


	<header class="cf-tr-header">
        <div class="cf-wrapper">
            <div class="cf-container cf-section "> 
                <div class="cf-logo">
                    <img class="cf-logo-img" src="images/catch35_logo.png" alt="Logo">
                </div>
                <nav>
                    <ul class="cf-menu">
                        <li><a href="#" class="cf-nav-menu-item" >Home</a></li>
                        <li><a href="#" class="cf-nav-menu-item" >Menu</a></li>
                        <li><a href="#" class="cf-nav-menu-item">About Us</a></li>
                        <li><a href="#" class="cf-nav-menu-item" >Contact Us</a></li>
                        <li><a href="{{ url('/table_reservation') }}" class="reserve-btn">Reserve</a></li>
                    </ul>
                </nav>
                <div class="cf-icons">
                    <div class="cf-cart-whishlist">
                         <a href="#" class="cart-icon"><i class="fas fa-shopping-cart"></i></a>
                         <a href="#" class="cart-icon"><i class="fas fa-light fa-heart"></i></a>
                    </div>
                    <div class="cf-register">
                        <a href="#" class="login-icon">Login</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="cf-hero cf-section ">
            <div>
                <h1> Reservation</h1>
                <p>If you have a food allergy, intolerance or sensitivity, please speak to your server about ingredients in our dishes before you order your meal.</p>
            </div>
    </div>
	</header>
	<main>
        <form method="get" action="/checkAvailability">
            @csrf
        


        <section class="form-section">
            <div class="cf-booking-form-container">
                    <div class="cf-booking-form-header">
                        <p class="sub-title">Book A Table</p>
                        <h2>Make a reservation</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    </div>
                <div class="cf-select-table ">
                    <ul class="showcase">
                        <li>
                            <div class="seat"></div>
                            <small>Available</small>
                        </li>
                        <li>
                            <div class="seat selected"></div>
                            <small>Selected</small>
                        </li>
                        <li>
                            <div class="seat sold"></div>
                            <small>Reserved</small>
                        </li>
                    </ul>
                </div>


                <div class="confrim-btn">
                        <a href="/table_selection" class="confirm-booking"> Back </a>
                </div>



                @foreach ($tables as $table)

                @if ($tables->contains('table', 'Table 1'))
                <div class="cf-table-container">
                   <div class="table-stucture">
                        <div>
                            <div class="table-grid table-row-1">
                            <table>
                                <tr>
                                    <th class="seat @if(isset($tables) && $tables->contains('table', 'Table 1')) booked @else available @endif"></th>
                                    <th class="seat @if(isset($tables) && $tables->contains('table', 'Table 1')) booked @else available @endif"></th>
                                </tr>
                                <tr>
                                    <td class="table_middle @if(isset($tables) && $tables->contains('table', 'Table 1')) booked @else available @endif" colspan="2">Table 1</td>
                                </tr>
                                <tr>
                                    <th class="seat @if(isset($tables) && $tables->contains('table', 'Table 1')) booked @else available @endif"></th>
                                    <th class="seat @if(isset($tables) && $tables->contains('table', 'Table 1')) booked @else available @endif"></th>
                                </tr>
                            </table>
                @endif

                @if ($tables->contains('table', 'Table 2'))
                <div class="table-grid table-row-2">
                    <table>
                        <tr>
                            <th class="seat @if($tables->contains('table', 'Table 2')) booked @else available @endif"></th>
                            <th class="seat @if($tables->contains('table', 'Table 2')) booked @else available @endif"></th>
                            <th class="seat @if($tables->contains('table', 'Table 2')) booked @else available @endif"></th>
                            <th class="seat @if($tables->contains('table', 'Table 2')) booked @else available @endif"></th>
                            <th class="seat @if($tables->contains('table', 'Table 2')) booked @else available @endif"></th>
                            <th class="seat @if($tables->contains('table', 'Table 2')) booked @else available @endif"></th>
                        </tr>
                        <tr>
                            <td class="table_middle @if($tables->contains('table', 'Table 2')) booked @else available @endif" colspan="6">Table 2</td>
                        </tr>
                        <tr>
                            <th class="seat @if($tables->contains('table', 'Table 2')) booked @else available @endif"></th>
                            <th class="seat @if($tables->contains('table', 'Table 2')) booked @else available @endif"></th>
                            <th class="seat @if($tables->contains('table', 'Table 2')) booked @else available @endif"></th>
                            <th class="seat @if($tables->contains('table', 'Table 2')) booked @else available @endif"></th>
                            <th class="seat @if($tables->contains('table', 'Table 2')) booked @else available @endif"></th>
                            <th class="seat @if($tables->contains('table', 'Table 2')) booked @else available @endif"></th>
                        </tr>
                    </table>
                </div>
            @endif


            @if ($tables->contains('table', 'Table 3'))
                                <table>
                                    <tr>
                                        <th class=<th class="seat @if($tables->contains('table', 'Table 3')) booked @else available @endif"></th>></th>
                                        <th class=<th class="seat @if($tables->contains('table', 'Table 3')) booked @else available @endif"></th>></th>
                                    </tr>
                                    <tr>
                                        <td class="table_middle @if($tables->contains('table', 'Table 3')) booked @else available @endif" colspan="2">Table 3</td>
                                    </tr>
                                    <tr>
                                        <th class=<th class="seat @if($tables->contains('table', 'Table 3')) booked @else available @endif"></th>></th>
                                        <th class=<th class="seat @if($tables->contains('table', 'Table 3')) booked @else available @endif"></th>></th>
                                    </tr>
                                </table>

            @endif

            @if ($tables->contains('table', 'Table 4'))
                                <table>
                                    <tr>
                                        <th class="seat"></th>
                                        <th class="seat"></th>
                                    </tr>
                                    <tr>
                                        <td class="table_middle @if($tables->contains('table', 'Table 4')) booked @else available @endif" colspan="2">Table 4</td>
                                    </tr>
                                    <tr>
                                        <th class="seat"></th>
                                        <th class="seat"></th>
                                    </tr>
                                </table>
                                @endif

    
                    @if ($tables->contains('table', 'Table 5'))
                                <table>
                                <input type="checkbox" name="table" value="Table 5">
                                    <tr>
                                        <th class=<th class="seat @if($tables->contains('table', 'Table 5')) booked @else available @endif"></th>></th>
                                        <th class=<th class="seat @if($tables->contains('table', 'Table 5')) booked @else available @endif"></th>></th>
                                    </tr>
                                    <tr>
                                        <td class="table_middle @if($tables->contains('table', 'Table 5')) booked @else available @endif" colspan="2">Table 5</td>
                                    </tr>
                                    <tr>
                                        <th class=<th class="seat @if($tables->contains('table', 'Table 5')) booked @else available @endif"></th>></th>
                                        <th class=<th class="seat @if($tables->contains('table', 'Table 5')) booked @else available @endif"></th>></th>
                                    </tr>
                                </table>
                    @endif

                    @if ($tables->contains('table', 'Table 6'))
                                <table>
                                <input type="checkbox" name="table" value="Table 6">
                                    <tr>
                                        <th class="seat"></th>
                                        <th class="seat"></th>
                                        <th class="seat"></th>
                                        <th class="seat"></th>
                                        <th class="seat"></th>
                                        <th class="seat"></th>
                                    </tr>
                                    <tr>
                                        <td class="table_middle @if($tables->contains('table', 'Table 6')) booked @else available @endif" colspan="6">Table 6</td>
                                    </tr>
                                    <tr>
                                        <th class="seat"></th>
                                        <th class="seat"></th>
                                        <th class="seat"></th>
                                        <th class="seat"></th>
                                        <th class="seat"></th>
                                        <th class="seat"></th>
                                    
                                    </tr>
                                </table>
                            </div>
                    @endif

                    @if ($tables->contains('table', 'Table 7'))
                            <div class="table-grid table-row-3">
                                <table>
                                <input type="checkbox" name="table" value="Table 7">
                                    <tr>
                                        <th class="seat"></th>
                                        <th class="seat"></th>
                                        <th class="seat"></th>
                                        <th class="seat"></th>
                                        <th class="seat"></th>
                                        <th class="seat"></th>
                                    </tr>
                                    <tr>
                                        <td class="table_middle @if($tables->contains('table', 'Table 7')) booked @else available @endif" colspan="6">Table 7</td>
                                    </tr>
                                    <tr>
                                        <th class="seat"></th>
                                        <th class="seat"></th>
                                        <th class="seat"></th>
                                        <th class="seat"></th>
                                        <th class="seat"></th>
                                        <th class="seat"></th>
                                    
                                    </tr>
                                </table>
                                @endif

                                @if ($tables->contains('table', 'Table 8'))
                                <table>
                                <input type="checkbox" name="table" value="Table 8">
                                    <tr>
                                        <th class="seat"></th>
                                        <th class="seat"></th>
                                    </tr>
                                    <tr>
                                        <td class="table_middle @if($tables->contains('table', 'Table 8')) booked @else available @endif" colspan="2">Table 8</td>
                                    </tr>
                                    <tr>
                                        <th class="seat"></th>
                                        <th class="seat"></th>
                                    </tr>
                                </table>
                                @endif
                                
                                @if ($tables->contains('table', 'Table 9'))
                                <table>
                                <input type="checkbox" name="table" value="Table 9">
                                    <tr>
                                        <th class="seat"></th>
                                        <th class="seat"></th>
                                    </tr>
                                    <tr>
                                        <td class="table_middle @if($tables->contains('table', 'Table 9')) booked @else available @endif" colspan="2">Table 9</td>
                                    </tr>
                                    <tr>
                                        <th class="seat"></th>
                                        <th class="seat"></th>
                                    </tr>
                                </table>
                                @endif
                            </div>
                        </div>
                   </div>
                   <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
                   @endforeach
                    <div class="confrim-btn">
                        <input type="submit" class="confirm-booking" value="Confrim Booking">
                    </div>
                </div>  
            </div>
        </section>
        </form>

        <section class="gallery-section">
            <div class="cf-gallery">
                <img src="../images/food-img-1.jpg">
                <img src="../images/food-img-2.jpg">
                <img src="../images/food-img-3.jpg">
                <img src="../images/food-img-4.jpg">
              
        </section>
		<!-- main content here -->
	</main>
    <footer>
        <div class="cf-section cf-footer-section"> 
            <div class="cf-footer-row-1">
                <div class="col1">
                <div class="cf-logo">
                    <img class="cf-logo-img" src="images/catch35_logo.png" alt="Logo">
                </div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam sed eros eget velit pulvinar dapibus sed eget nulla. Mauris et sagittis ante. Nunc sed volutpat neque. Aliquam in mi varius, sodales velit eget, accumsan justo. Integer blandit euismod quam ac dapibus.</p>
                    <div class="sponsor-logos">
                        <img class="cf-sponsor-img" src="images/TripAdvisor.png" alt="sponsor-logo">
                        <img class="cf-sponsor-img" src="images/airbnb-logo.png" alt="sponsor-logo">
                        <img class="cf-sponsor-img" src="images/google-customer-review.png" alt="sponsor-logo">
                    </div>
                </div>
                <div class="col2">
                    <h3>Working Hours</h3>
                    <div>
                        <div class="work-days">
                            <p>Monday - Friday</p>
                            <p>9am-10pm</p>
                        </div>
                        <div class="work-days">
                            <p>Saturday</p>
                            <p>9am-11:30pm</p>
                        </div>
                        <div class="work-days">
                            <p>Sunday</p>
                            <p>9am-12am</p>
                        </div>
                        <p style="font-size:14px">*Closed on Holidays</p>
                    </div>
                </div>
                <div class="col3">
                    <h3>Contact</h3>
                    <table>
                        <tr>
                            <td>
                            <div class="contact-details">
                                <i class="fa fa-phone"></i>
                                <p>+94 123 456 78</p>
                            </div>
                            </td>
                            <td>
                            <div class="contact-details">
                                <i class="fa fa-envelope"></i>
                                <p>contact@catch35.com</p>
                            </div>
                            </td>
                        </tr>
                    </table>

                    
                    <div class="social-media-icons">
                        <a href="#"><i class="fa-brands fa-facebook"></i></a>
                        <a href="#"><i class="fa-brands fa-instagram"></i></a>
                        <a href="#"><i class="fa-brands fa-twitter"></i></a>
                        <a href="#"><i class="fa-brands fa-whatsapp"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <div class=" cf-footer-bottom-section"> 
                <p>catch35@2023 | All rights reserved !</p>
    </div>
</body>

<style>
/* Style the booked seats with red background color */
</style>
</html>
