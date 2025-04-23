@extends('layouts.admin-dashboard')

@section('title', 'Account Management')

@section('content')

    <div id="main">
        <header class="mb-3">
            <a href="#" class="burger-btn d-block d-xl-none">
                <i class="bi bi-justify fs-3"></i>
            </a>
        </header>
        <div class="page-heading">
        </div>

        <div class="page-content">

            <div class="page-heading">
                <div class="page-title">
                    <div class="row">
                        <div class="col-12 col-md-6 order-md-1 order-last">
                            <h3>Booking Reserve</h3>
                            <p class="text-subtitle text-muted"></p>
                        </div>
                        <div class="col-12 col-md-6 order-md-2 order-first">
                            <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">

                            </nav>
                        </div>
                    </div>
                </div>

            </div>

            <div id="auth">
                <div class="row h-100">
                    <div class="col-lg-12 col-12">
                        <div id="auth-left">
                            @if (\Session::has('success'))
                                <div class="alert alert-success">
                                    <strong>{{ \Session::get('success') }}</strong>
                                </div>
                            @endif
                            @if (\Session::has('delete'))
                                <div class="alert alert-danger">
                                    <strong>{{ \Session::get('delete') }}</strong>
                                </div>
                            @endif
                            @if (count($errors) > 0)
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif

                            {{-- <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Account</h4>
                            </div>
                            <div class="card-content">
                                <div class="card-body"> --}}

                            {{-- <form id="myForm" role="form" method="POST" action="">
                                        {{ csrf_field() }}
                                        <div class="mb-3 d-flex">
                                            <label for="name" class="form-label width-110 pt-2">User Email</label>
                                            <input type="text" name="email" class="form-control max-width-500" id=""
                                                aria-describedby="emailHelp">
                                        </div>
                                        <div class="mb-3 d-flex">
                                            <label for="name" class="form-label width-110 pt-2">User Name</label>
                                            <input type="text" name="name" class="form-control max-width-500" id=""
                                                aria-describedby="emailHelp">
                                        </div>

                                        <div class="mb-3 d-flex">
                                            <label for="name" class="form-label width-110 pt-2">Role</label></br>
                                            <select required name="role" class="form-select max-width-500">
                                                <option class="badge bg-success" value="2">Manager</option>
                                                <option class="badge bg-danger" value="4">Employee</option>
                                                <option class="badge bg-danger" value="3">Developer</option>
                                            </select>
                                        </div>

                                        <div class="col-sm-12 d-flex justify-content-end">
                                                    <button type="submit" class="btn btn-primary me-1 mb-1">save
                                                        </button>
                                                    <button type="reset"
                                                        class="btn btn-light-secondary me-1 mb-1">reset</button>
                                                </div>
                                    </form> --}}
                            {{-- </div>
                            </div>
                        </div>

                    </div> --}}

                            <script>
                                function closeForm() {
                                    document.getElementById("popup").style.display = "none";
                                }
                            </script>

                            <section class="section">
                                <div class="card">
                                    <div class="card-header">
                                        <h4 class="card-title">Booking Details</h4>
                                    </div>

                                    <div class="card-body">

                                        <table class="table table-striped" id="table1">

                                            <thead>

                                                <tr>
                                                    <th>#</th>
                                                    <th>Book Name</th>
                                                    <th>Book Date</th>
                                                    <!-- <th>Situation</th> -->
                                                    <!-- <th>Member since</th> -->
                                                    <th>Table Number</th>

                                                    <th>Email</th>
                                                    <th class="text-center">Time</th>
                                                    <th>Delete</th>
                                                </tr>
                                            </thead>
                                            <tbody>

                                                @foreach ($reservations as $key => $item)
                                                    <tr>
                                                        <td class="id">{{ ++$key }}</td>
                                                        <td class="name">{{ $item->name }}</td>
                                                        <td class="email">{{ $item->date }}</td>
                                                        <td class="email">{{ $item->user_id }}</td>
                                                        <td class="email">{{ $item->email }}</td>
                                                        <td class="email">{{ $item->time }}</td>
                                                        <td class="text-center">

                                                            <a href="/deleters/{{ $item->id }}"
                                                                onclick="return confirm('Are you sure you want to delete it?')">
                                                                <span class="badge bg-danger"><i
                                                                        class="bi bi-trash"></i></span>
                                                            </a>

                                                        </td>
                                                    </tr>
                                                @endforeach

                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </section>
                        </div>

                    </div>

                @endsection
