
<html>
<head>
	<title>Catch35</title>
	<link rel="stylesheet" href="../css/header-footer.css">
	<link rel="stylesheet" href="../css/catch35_general.css">
	<link rel="stylesheet" href="../css/table_reservation.css">
    <link rel="stylesheet" href="../css/table_selection.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
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
                        <li><a href="{{ url('/table_selection') }}" class="reserve-btn">Reserve</a></li>
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
        <section class="form-section">
            <div class="cf-booking-form-container">
                    <div class="cf-booking-form-header">
                        <p class="sub-title">Book A Table</p>
                        <h2>Make a reservation</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    </div>

                    <form method="post" action="/updateReservation">
                        @csrf

                        <input type="hidden" name="id" value="{{$data->id}}">

                        <div>
                            <div style="display: flex; flex-wrap: wrap;">
                                <div style="flex: 1; padding: 5px;">
                                    <label for="date">Date</label>
                                    <input type="date" id="date" name="date" value="{{$data->date}}" readonly>
                                </div>
                                <div style="flex: 1; padding: 5px;">
                                    <label for="time">Time</label>
                                    <input type="time" id="time" name="time" value="{{$data->time}}" readonly>
                                </div>
                                <div style="flex: 1; padding: 5px;">
                                    <label for="seats">No of seats</label>
                                    <input type="number" value="1" id="seats" name="seats" value="{{$data->no_of_seats}}">
                                </div>
                            </div>
                        </div>
                        <div>
                            <div style="display: flex; flex-wrap: wrap;">
                                <div style="flex: 1; padding: 5px;">
                                    <label for="name">Your Name</label>
                                    <input type="text" id="name" name="name" value="{{$data->name}}">
                                </div>
                                <div style="flex: 1; padding: 5px;">
                                    <label for="email">Email</label>
                                    <input type="email" id="email" name="email" value="{{$data->email}}">
                                </div>
                                <div style="flex: 1; padding: 5px;">
                                    <label for="phone">Phone Number</label>
                                    <input type="tel" id="phone" name="phone" value="{{$data->mobile}}">
                                </div>
                            </div>
                        </div>
                        <div>
                            <div style="flex: 1 0 100%; padding: 5px;">
                                <label for="note">Special Note</label>
                                <textarea id="note" rows="10" name="note" style="width: 100%;"> {{$data->special_note}} </textarea>
                            </div>
                        </div>

                        <div>
                            <div style="flex: 1; padding: 5px; text-align: center; margin-top:15px;">
                                <input type="submit" value="Update Now"></a>
                            </div>
                        </div>
                    </form>
            </div>
        </section>



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
</html>
