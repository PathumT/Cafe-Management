@include('head')
<link rel="stylesheet" href="../css/header-footer.css">
<link rel="stylesheet" href="../css/catch35_general.css">
<link rel="stylesheet" href="../css/table_reservation.css">
<link rel="stylesheet" href="../css/table_selection.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"
    integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <script type="text/javascript" src="../js/table_reservation.js"></script>

    @include('header')

    <div class="cf-hero cf-section cf-tr-header">
        <div>
            <h1> Reservation</h1>
            <p>If you have a food allergy, intolerance or sensitivity, please speak to your server about ingredients in
                our dishes before you order your meal.</p>
        </div>
    </div>
    <main>
        <section class="form-section">
            <div class="cf-booking-form-container">
                <div class="cf-booking-form-header">
                    <p class="sub-title">Book A Table</p>
                    <h2>Make a reservation</h2>
                    <!-- <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p> -->
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

                <form method="post" action="/saveReservation">
                    @csrf
                    <div>
                        <div style="display: flex; flex-wrap: wrap;">
                            <div style="flex: 1; padding: 5px;">
                                <label for="date">Date</label>
                                <input readonly type="date" id="date" value="{{ $date }}"
                                    name="date">
                            </div>
                            <div style="flex: 1; padding: 5px;">
                                <label for="time">Start Time</label>
                                <input readonly type="time" value="{{ $start_time }}" id="time"
                                    name="start_time">
                            </div>
                            <div style="flex: 1; padding: 5px;">
                                <label for="time">End Time</label>
                                <input readonly type="time" value="{{ $end_time }}" id="time"
                                    name="end_time">
                            </div>
                            <div style="flex: 1; padding: 5px;">
                                <label for="seats">No of seats</label>
                                <input required type="number" value="1" id="seats" name="seats">
                            </div>
                        </div>
                    </div>
                    <div>
                        <div style="display: flex; flex-wrap: wrap;">
                            <div style="flex: 1; padding: 5px;">
                                <label for="name">Your Name</label>
                                <input required type="text" id="name" name="name">
                            </div>
                            <div style="flex: 1; padding: 5px;">
                                <label for="email">Email</label>
                                <input required type="email" id="email" name="email">
                            </div>
                            <div style="flex: 1; padding: 5px;">
                                <label for="phone">Phone Number</label>
                                <input required type="tel" id="phone" name="phone">
                            </div>
                        </div>
                    </div>
                    <div>
                        <div style="flex: 1 0 100%; padding: 5px;">
                            <label for="note">Special Note</label>
                            <textarea id="note" rows="10" name="note" style="width: 100%;"></textarea>
                        </div>
                    </div>

                    <div class="cf-table-container">
                        <div class="table-stucture">
                            <div>
                                <div class="table-grid table-row-1">
                                    <table>
                                        <input onclick="selct_tables(this,1)" id="table_1" type="checkbox"
                                            name="table_1" value="1">

                                        <tr>
                                            <th class="Change_1 seat"></th>
                                            <th class="Change_1 seat"></th>
                                        </tr>
                                        <tr>
                                            <td class="table_middle" colspan="2"> Table 1</td>
                                        </tr>
                                        <tr>
                                            <th class="Change_1 seat"></th>
                                            <th class="Change_1 seat"></th>
                                        </tr>

                                    </table>

                                    <table>
                                        <input onclick="selct_tables(this,2)" id="table_2" type="checkbox"
                                            name="table_2" value="2">

                                        <tr>
                                            <th class="Change_2 seat"></th>
                                            <th class="Change_2 seat"></th>
                                            <th class="Change_2 seat"></th>
                                            <th class="Change_2 seat"></th>
                                            <th class="Change_2 seat"></th>
                                            <th class="Change_2 seat"></th>
                                        </tr>
                                        <tr>
                                            <td class="table_middle" colspan="6">Table 2</td>
                                        </tr>
                                        <tr>
                                            <th class="Change_2 seat"></th>
                                            <th class="Change_2 seat"></th>
                                            <th class="Change_2 seat"></th>
                                            <th class="Change_2 seat"></th>
                                            <th class="Change_2 seat"></th>
                                            <th class="Change_2 seat"></th>

                                        </tr>
                                    </table>

                                    <table>
                                        <input onclick="selct_tables(this,3)" id="table_3" type="checkbox"
                                            name="table_3" value="3">

                                        <tr>
                                            <th class="Change_3 seat"></th>
                                            <th class="Change_3 seat"></th>
                                        </tr>
                                        <tr>
                                            <td class="table_middle" colspan="2">Table 3</td>
                                        </tr>
                                        <tr>
                                            <th class="Change_3 seat"></th>
                                            <th class="Change_3 seat"></th>
                                        </tr>
                                    </table>
                                </div>

                                <div class="table-grid table-row-2">

                                    <table>
                                        <input onclick="selct_tables(this,4)" id="table_4" type="checkbox"
                                            name="table_4" value="4">
                                        <tr>
                                            <th class="Change_4 seat"></th>
                                            <th class="Change_4 seat"></th>
                                        </tr>
                                        <tr>
                                            <td class="table_middle" colspan="2">Table 4</td>
                                        </tr>
                                        <tr>
                                            <th class="Change_4 seat"></th>
                                            <th class="Change_4 seat"></th>
                                        </tr>
                                    </table>

                                    <table>
                                        <input onclick="selct_tables(this,5)" id="table_5" type="checkbox"
                                            name="table_5" value="5">
                                        <tr>
                                            <th class="Change_5 seat"></th>
                                            <th class="Change_5 seat"></th>
                                        </tr>
                                        <tr>
                                            <td class="table_middle" colspan="2">Table 5</td>
                                        </tr>
                                        <tr>
                                            <th class="Change_5 seat"></th>
                                            <th class="Change_5 seat"></th>
                                        </tr>
                                    </table>
                                    <table>
                                        <input onclick="selct_tables(this,6)" id="table_6" type="checkbox"
                                            name="table_6" value="6">
                                        <tr>
                                            <th class="Change_6 seat"></th>
                                            <th class="Change_6 seat"></th>
                                            <th class="Change_6 seat"></th>
                                            <th class="Change_6 seat"></th>
                                            <th class="Change_6 seat"></th>
                                            <th class="Change_6 seat"></th>
                                        </tr>
                                        <tr>
                                            <td class="table_middle" colspan="6">Table 6</td>
                                        </tr>
                                        <tr>
                                            <th class="Change_6 seat"></th>
                                            <th class="Change_6 seat"></th>
                                            <th class="Change_6 seat"></th>
                                            <th class="Change_6 seat"></th>
                                            <th class="Change_6 seat"></th>
                                            <th class="Change_6 seat"></th>

                                        </tr>
                                    </table>
                                </div>
                                <div class="table-grid table-row-3">
                                    <table>
                                        <input onclick="selct_tables(this,7)" id="table_7" type="checkbox"
                                            name="table_7" value="7">
                                        <tr>
                                            <th class="Change_7 seat"></th>
                                            <th class="Change_7 seat"></th>
                                            <th class="Change_7 seat"></th>
                                            <th class="Change_7 seat"></th>
                                            <th class="Change_7 seat"></th>
                                            <th class="Change_7 seat"></th>
                                        </tr>
                                        <tr>
                                            <td class="table_middle" colspan="6">Table 7</td>
                                        </tr>
                                        <tr>
                                            <th class="Change_7 seat"></th>
                                            <th class="Change_7 seat"></th>
                                            <th class="Change_7 seat"></th>
                                            <th class="Change_7 seat"></th>
                                            <th class="Change_7 seat"></th>
                                            <th class="Change_7 seat"></th>

                                        </tr>
                                    </table>
                                    <table>
                                        <input onclick="selct_tables(this,8)" id="table_8" type="checkbox"
                                            name="table_8" value="8">
                                        <tr>
                                            <th class="Change_8 seat"></th>
                                            <th class="Change_8  seat"></th>
                                        </tr>
                                        <tr>
                                            <td class="table_middle" colspan="2">Table 8</td>
                                        </tr>
                                        <tr>
                                            <th class="Change_8 seat"></th>
                                            <th class="Change_8 seat"></th>
                                        </tr>
                                    </table>

                                    <table>
                                        <input onclick="selct_tables(this,9)" id="table_9" type="checkbox"
                                            name="table_9" value="9">
                                        <tr>
                                            <th class="Change_9 seat"></th>
                                            <th class="Change_9 seat"></th>
                                        </tr>
                                        <tr>
                                            <td class="table_middle" colspan="2">Table 9</td>
                                        </tr>
                                        <tr>
                                            <th class="Change_9 seat"></th>
                                            <th class="Change_9 seat"></th>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                        </div>

                        <div>
                            <div style="flex: 1; padding: 5px; text-align: center; margin-top:15px;">
                                <input type="submit" value="Book Now"></a>
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
    @include('footer')

</body>

<style>
    .appended {
        background-color: #1818ba !important;
    }

    .appended_remove {
        background-color: #444451 !important;
    }

    .appended_red {
        background-color: #9c0c2e !important;
    }
</style>

<script>
    function selct_tables(checkbox, table_val) {
        var isChecked = checkbox.checked;
        if (table_val == 1) {
            var elementsToChange = document.querySelectorAll(".Change_1");
            elementsToChange.forEach(function(element) {
                if (isChecked) {
                    element.classList.add("appended");
                } else {
                    element.classList.remove("appended");
                }
            });
        } else if (table_val == 2) {
            var elementsToChange = document.querySelectorAll(".Change_2");
            elementsToChange.forEach(function(element) {
                if (isChecked) {
                    element.classList.add("appended");
                } else {
                    element.classList.remove("appended");
                }
            });
        } else if (table_val == 3) {
            var elementsToChange = document.querySelectorAll(".Change_3");
            elementsToChange.forEach(function(element) {
                if (isChecked) {
                    element.classList.add("appended");
                } else {
                    element.classList.remove("appended");
                }
            });
        } else if (table_val == 4) {
            var elementsToChange = document.querySelectorAll(".Change_4");
            elementsToChange.forEach(function(element) {
                if (isChecked) {
                    element.classList.add("appended");
                } else {
                    element.classList.remove("appended");
                }
            });
        } else if (table_val == 5) {
            var elementsToChange = document.querySelectorAll(".Change_5");
            elementsToChange.forEach(function(element) {
                if (isChecked) {
                    element.classList.add("appended");
                } else {
                    element.classList.remove("appended");
                }
            });
        } else if (table_val == 6) {
            var elementsToChange = document.querySelectorAll(".Change_6");
            elementsToChange.forEach(function(element) {
                if (isChecked) {
                    element.classList.add("appended");
                } else {
                    element.classList.remove("appended");
                }
            });
        } else if (table_val == 7) {
            var elementsToChange = document.querySelectorAll(".Change_7");
            elementsToChange.forEach(function(element) {
                if (isChecked) {
                    element.classList.add("appended");
                } else {
                    element.classList.remove("appended");
                }
            });
        } else if (table_val == 8) {
            var elementsToChange = document.querySelectorAll(".Change_8");
            elementsToChange.forEach(function(element) {
                if (isChecked) {
                    element.classList.add("appended");
                } else {
                    element.classList.remove("appended");
                }
            });
        } else if (table_val == 9) {
            var elementsToChange = document.querySelectorAll(".Change_9");
            elementsToChange.forEach(function(element) {
                if (isChecked) {
                    element.classList.add("appended");
                } else {
                    element.classList.remove("appended");
                }
            });
        }


    }
</script>

<button onclick="toggleCheckbox()">Toggle Checkbox</button>

<script>
    @foreach ($availability as $item)
        @if ($item->table == 1)
            var elementsToChange = document.querySelectorAll(".Change_1");
            elementsToChange.forEach(function(element) {

                element.classList.add("appended_red");

                var checkbox = document.getElementById("table_1");
                checkbox.disabled = true;
                checkbox.checked = true;

            });
        @elseif ($item->table == 2)
            var elementsToChange = document.querySelectorAll(".Change_2");
            elementsToChange.forEach(function(element) {

                element.classList.add("appended_red");

                var checkbox = document.getElementById("table_2");
                checkbox.disabled = true;
                checkbox.checked = true;

            });
        @elseif ($item->table == 3)
            var elementsToChange = document.querySelectorAll(".Change_3");
            elementsToChange.forEach(function(element) {

                element.classList.add("appended_red");

                var checkbox = document.getElementById("table_3");
                checkbox.disabled = true;
                checkbox.checked = true;

            });
        @elseif ($item->table == 4)
            var elementsToChange = document.querySelectorAll(".Change_4");
            elementsToChange.forEach(function(element) {

                element.classList.add("appended_red");

                var checkbox = document.getElementById("table_4");
                checkbox.disabled = true;
                checkbox.checked = true;
            });
        @elseif ($item->table == 5)
            var elementsToChange = document.querySelectorAll(".Change_5");
            elementsToChange.forEach(function(element) {

                element.classList.add("appended_red");

                var checkbox = document.getElementById("table_5");
                checkbox.disabled = true;
                checkbox.checked = true;

            });
        @elseif ($item->table == 6)
            var elementsToChange = document.querySelectorAll(".Change_6");
            elementsToChange.forEach(function(element) {

                element.classList.add("appended_red");

                var checkbox = document.getElementById("table_6");
                checkbox.disabled = true;
                checkbox.checked = true;

            });
        @elseif ($item->table == 7)
            var elementsToChange = document.querySelectorAll(".Change_7");
            elementsToChange.forEach(function(element) {

                element.classList.add("appended_red");

                var checkbox = document.getElementById("table_7");
                checkbox.disabled = true;
                checkbox.checked = true;

            });
        @elseif ($item->table == 8)
            var elementsToChange = document.querySelectorAll(".Change_8");
            elementsToChange.forEach(function(element) {

                element.classList.add("appeappended_rednded");

                var checkbox = document.getElementById("table_8");
                checkbox.disabled = true;
                checkbox.checked = true;

            });
        @elseif ($item->table == 9)
            var elementsToChange = document.querySelectorAll(".Change_9");
            elementsToChange.forEach(function(element) {

                element.classList.add("appended_red");

                var checkbox = document.getElementById("table_9");
                checkbox.disabled = true;
                checkbox.checked = true;

            });
        @endif
    @endforeach
</script>

</html>
