@include('head')
<link rel="stylesheet" href="../css/header-footer.css">
<link rel="stylesheet" href="../css/catch35_general.css">
<link rel="stylesheet" href="../css/table_selection.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"
    integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
<script type="text/javascript" src="../js/table_reservation.js"></script>
</head>

<body>
    @include('header')

    <div class="cf-hero cf-section cf-tr-header">
        <div>
            <h1> Reservation</h1>
            <p>If you have a food allergy, intolerance or sensitivity, please speak to your server about ingredients in
                our dishes before you order your meal.</p>
        </div>
    </div>

    <main>
        <form method="get" action="/checkAvailability">

            <section class="form-section">
                @if (session('msg'))
                    <span style="color:red"> {{ session('msg') }} </span><br>
                @endif

                <div class="cf-booking-form-container">
                    <div class="cf-booking-form-header">
                        @if (session('msg'))
                            <h2 style="color:red"> {{ session('msg') }} </h2><br>
                        @endif
                        <p class="sub-title">Book A Table</p>
                        <h2>Make a reservation</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    </div>

                    Date: <input type="date" name="date">
                    <span style="color:red"> @error('date')
                            {{ $message }}
                        @enderror
                    </span>
                    <br>

                    Start Time: <input type="time" name="start_time">
                    <span style="color:red"> @error('start_time')
                            {{ $message }}
                        @enderror
                    </span>
                    <br>
                    End Time: <input type="time" name="end_time">
                    <span style="color:red"> @error('end_time')
                            {{ $message }}
                        @enderror
                    </span>

                    <div class="confrim-btn">
                        <input type="submit" class="confirm-booking" value="Check">
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
    </main>
    @include('footer')
</body>

</html>
