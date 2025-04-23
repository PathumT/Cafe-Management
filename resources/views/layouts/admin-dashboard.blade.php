<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard @yield('title')</title>

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href=" {{ asset('dashboard_theme/assets/css/bootstrap.css') }}">

    <link rel="stylesheet" href="{{ asset('dashboard_theme/assets/vendors/quill/quill.bubble.css') }}">
    <link rel="stylesheet" href="{{ asset('dashboard_theme/assets/vendors/quill/quill.snow.css') }}">
    <link rel="stylesheet" href="{{ asset('dashboard_theme/assets/vendors/summernote/summernote-lite.min.css') }}">
    <link rel="stylesheet" href="{{ asset('dashboard_theme/assets/vendors/simple-datatables/style.css') }}">
    <!-- <link rel="stylesheet" href="{{ asset('dashboard_theme/assets/assets/vendors/apexcharts/apexcharts.css') }}"> -->
    <link rel="stylesheet" href=" {{ asset('dashboard_theme/assets/vendors/iconly/bold.css') }}">
    <link rel="stylesheet" href="{{ asset('dashboard_theme/assets/vendors/toastify/toastify.css') }}">
    <link href="https://unpkg.com/filepond/dist/filepond.css" rel="stylesheet">
    <link href="https://unpkg.com/filepond-plugin-image-preview/dist/filepond-plugin-image-preview.css"
        rel="stylesheet">
    <link href="{{ asset('dashboard_theme/assets/css/miniAlbum.css') }}" rel="stylesheet">

    <link rel="stylesheet"
        href=" {{ asset('dashboard_theme/assets/vendors/perfect-scrollbar/perfect-scrollbar.css') }}">
    <link rel="stylesheet" href=" {{ asset('dashboard_theme/assets/vendors/bootstrap-icons/bootstrap-icons.css') }}">
    <link rel="stylesheet" href=" {{ asset('dashboard_theme/assets/css/app.css') }}">

    <!-- <link rel="shortcut icon" href=" {{ asset('dashboard_theme/assets/images/favicon.svg') }}" type="image/x-icon"> -->

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css">
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/css/bootstrap-select.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/js/bootstrap-select.min.js"></script>

</head>

<body>
    <div id="app">
        <div id="sidebar" class="active">
            <div class="sidebar-wrapper active">
                <div class="sidebar-header">
                    <div class="d-flex justify-content-between">
                        <div class="logo">
                            <a href="/">
                                <img src="dashboard_theme/assets/images/6802304.jpg" alt="Cafe35" srcset=""
                                    style="width: 80px; height: 80px;">
                                CATCH-35
                            </a>
                        </div>

                    </div>
                </div>
                <main class="">

                    <script src="https://cdn.ckeditor.com/ckeditor5/34.2.0/classic/ckeditor.js"></script>

                    <div class="sidebar-menu">
                        <ul class="menu">
                            <li class="sidebar-item">

                            <li class="sidebar-item">
                                <div class="card-body">
                                    <div class="badges">

                                        {{-- <span>Name:{{ Auth::user()->name }} <span class="fw-bolder"></span></span>
                                        <hr>
                                        <span>Role:@if (Auth::user()->is_admin == '1')
                                                <p class="badge bg-danger">Super Admin</p>
                                            @endif
                                            @if (Auth::user()->is_admin == '0')
                                                <p class="badge bg-success">Employee</p>
                                            @endif
                                            @if (Auth::user()->is_admin == '2')
                                                <p class="badge bg-success">HR</p>
                                            @endif
                                        </span> --}}

                                        <span class="badge bg-success"></span>

                                        <span class="badge bg-success"></span>

                                        <br>
                                        <br>

                                    </div>
                                </div>
                            </li>

                            <li class="sidebar-item @if (\Route::is('account_management')) active @endif ">
                            <li class="sidebar-item @if (\Route::is('account_management')) active @endif ">
                                <a href="{{ route('account_management') }}" class='sidebar-link'>
                                    <i class="bi bi-house-fill"></i>
                                    <span>User Create</span>
                                </a>
                            </li>
                            <li class="sidebar-item @if (\Route::is('user_list')) active @endif ">
                            <li class="sidebar-item @if (\Route::is('user_list')) active @endif ">
                                <a href="{{ route('user_list') }}" class='sidebar-link'>
                                    <i class="bi bi-house-fill"></i>
                                    <span>User List</span>
                                </a>
                            </li>
                            <li class="sidebar-item @if (\Route::is('member_manage')) active @endif ">
                                <li class="sidebar-item @if (\Route::is('member_manage')) active @endif ">
                                    <a href="{{ route('member_manage') }}" class='sidebar-link'>
                                        <i class="bi bi-house-fill"></i>
                                        <span>Member Management</span>
                                    </a>
                                </li>
                            <li class="sidebar-item @if (\Route::is('bocking_mg')) active @endif ">
                            <li class="sidebar-item @if (\Route::is('bocking_mg')) active @endif ">
                                <a href="{{ route('bocking_mg') }}" class='sidebar-link'>
                                    <i class="bi bi-house-fill"></i>
                                    <span>Bocking Management</span>
                                </a>
                            </li>
                            <li class="sidebar-item @if (\Route::is('shop_menu')) active @endif ">
                                <li class="sidebar-item @if (\Route::is('shop_menu')) active @endif ">
                                    <a href="{{ route('shop_menu') }}" class='sidebar-link'>
                                        <i class="bi bi-house-fill"></i>
                                        <span>Menu Management</span>
                                    </a>
                                </li>

                            <li class="sidebar-item">
                                @if (Route::has('login'))
                                    @auth
                                        <a button type="button" class="sidebar-link" href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                   document.getElementById('logout-form').submit();">
                                            <i class="bi bi-box-arrow-right"></i>
                                            <span>Log Out</span></button></a>
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                            class="d-none">
                                            @csrf
                                        </form></a>
                                    @else
                                    @endauth
                                @endif
                            </li>

                        </ul>
                        </ul>
                        </ul>
                    </div>
                    <button class="sidebar-toggler btn x"><i data-feather="x"></i></button>
            </div>
        </div>

        @yield('content')

        </main>

        <footer>

    </div>
    </div>
    <script src="{{ asset('dashboard_theme/assets/vendors/perfect-scrollbar/perfect-scrollbar.min.js') }}"></script>
    <script src="{{ asset('dashboard_theme/assets/js/bootstrap.bundle.min.js') }}"></script>

    <!-- <script src="{{ asset('dashboard_theme/assets/vendors/apexcharts/apexcharts.js') }}"></script> -->
    <script src="{{ asset('dashboard_theme/assets/js/pages/dashboard.js') }}"></script>

    <script src="{{ asset('dashboard_theme/assets/vendors/quill/quill.min.js') }}"></script>
    <script src="{{ asset('dashboard_theme/assets/js/pages/form-editor.js') }}"></script>

    <script src="{{ asset('dashboard_theme/assets/vendors/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('dashboard_theme/assets/vendors/summernote/summernote-lite.min.js') }}"></script>
    <script>
        $('#summernote').summernote({
            tabsize: 2,
            height: 120,
        })
    </script>

    <script src="{{ asset('dashboard_theme/assets/vendors/simple-datatables/simple-datatables.js') }}"></script>
    <!-- <script src="https://cdn.ckeditor.com/ckeditor5/34.2.0/classic/ckeditor.js"></script> -->
    <script src="{{ asset('https://cdnjs.cloudflare.com/ajax/libs/ckeditor5/35.2.1/translations/af.min.js') }}"></script>
    <script>
        // Simple Datatable
        let table1 = document.querySelector('#table1');
        let dataTable = new simpleDatatables.DataTable(table1);
    </script>
    <script>
        // Status checkbox check js script
        var checkbox = document.querySelector("input[name=s_product_status]");
        checkbox.addEventListener('change', function() {
            if (this.checked) {
                document.getElementById("sproduct_status_lable").innerHTML = "Activated";
                document.getElementById("sproduct_status_lable").classList.add('bg-success');
                document.getElementById("sproduct_status_lable").classList.remove('bg-danger');
            } else {
                document.getElementById("sproduct_status_lable").innerHTML = "Deactivated";
                document.getElementById("sproduct_status_lable").classList.add('bg-danger');
                document.getElementById("sproduct_status_lable").classList.remove('bg-success');
            }
        });
    </script>

    <!-- <script src="{{ asset('dashboard_theme/assets/vendors/apexcharts/apexcharts.js') }}"></script>
    <script src="{{ asset('dashboard_theme/assets/js/pages/ui-apexchart.js') }}"></script> -->

    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css" />

    <script src="{{ asset('dashboard_theme/assets/vendors/fontawesome/all.min.js') }}"></script>

    <script src="assets/js/main.js"></script>
    <script src="{{ asset('dashboard_theme/assets/js/main.js') }}"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>
    <script type="text/javascript">
        $(function() {
            $('#datepicker').datepicker();
        });
    </script>
    <script type="text/javascript">
        $(function() {
            $('#datepicker1').datepicker();
        });
    </script>

</body>

</html>
