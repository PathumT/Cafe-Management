 {{-- We get a common header and footer from here  --}}
 <html>
    <head>
        <title>Catch35</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
        <link rel="stylesheet" href="{{asset('css/header-footer.css')}}">
        <link rel="stylesheet" href="{{asset('css/catch35_general.css')}}">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    </head>
    <body>
        <header>
            <div class="cf-wrapper">
                <div class="cf-container cf-section ">
                    <div class="cf-logo">
                        <img class="cf-logo-img" src="{{asset('images/catch35_logo.png')}}" alt="Logo">
                    </div>
                    <nav>
                        <ul class="cf-menu">
                            <li><a href="/" class="cf-nav-menu-item" >Home</a></li>
                            <li><a href="/menu" class="cf-nav-menu-item" >Menu</a></li>
                            {{-- <li><a href="#" class="cf-nav-menu-item">About Us</a></li>
                            <li><a href="#" class="cf-nav-menu-item" >Contact Us</a></li> --}}
                            <li><a href="/table_reservation" class="reserve-btn">Reserve</a></li>
                        </ul>
                    </nav>
                    <div class="cf-icons">
                        <div class="cf-cart-whishlist">
                             <a href="/cart" class="cart-icon"><i class="fas fa-shopping-cart"></i></a>
                             <a href="#" class="cart-icon"><i class="fas fa-light fa-heart"></i></a>
                        </div>
                        <div class="cf-register">
                            <a href="/login" class="login-icon">Login</a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        </header>
        <main>
            <!-- main content here -->
            @yield("content")
        </main>
        <footer>
            <div class="cf-section cf-footer-section">
                <div class="cf-footer-row-1">
                    <div class="col1">
                    <div class="cf-logo">
                        <img class="cf-logo-img" src="{{asset('images/catch35_logo.png')}}" alt="Logo">
                    </div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam sed eros eget velit pulvinar dapibus sed eget nulla. Mauris et sagittis ante. Nunc sed volutpat neque. Aliquam in mi varius, sodales velit eget, accumsan justo. Integer blandit euismod quam ac dapibus.</p>
                        <div class="sponsor-logos">
                            <img class="cf-sponsor-img" src="{{asset('images/TripAdvisor.png')}}" alt="sponsor-logo">
                            <img class="cf-sponsor-img" src="{{asset('images/airbnb-logo.png')}}" alt="sponsor-logo">
                            <img class="cf-sponsor-img" src="{{asset('images/google-customer-review.png')}}" alt="sponsor-logo">
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
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    </body>
    </html>
