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
                            <h3>ADD SHOP ITEM</h3>
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

                            <script>
                                function closeForm() {
                                    document.getElementById("popup").style.display = "none";
                                }
                            </script>

                            <form action="{{ url('addItems') }}" method="POST" enctype="multipart/form-data">
                                {{ csrf_field() }}

                                <div class="card-body">

                                    <div class="row mb-3">
                                        <label for="inputProductName" class="col-sm-2 col-form-label">Product Name</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="inputProductName" name="iname"
                                                value="" placeholder="Pizza">

                                            <div id="validationServerUsernameFeedback" class="invalid-feedback">

                                            </div>

                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <label for="inputProductPrice" class="col-sm-2 col-form-label">Price(Rs)</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="inputProductPrice" name="iprice"
                                                value="" placeholder="1200.00">

                                            <div id="validationServerUsernameFeedback" class="invalid-feedback">

                                            </div>

                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="inputProductImage" class="col-sm-2 col-form-label">Image</label>
                                        <div class="col-sm-10">
                                            <input type="file" class="form-contro" id="inputProductImage" name="images_title[]">

                                            <div id="validationServerUsernameFeedback" class="invalid-feedback">

                                            </div>

                                        </div>
                                    </div>

                                </div>
                                <div class="card-footer">
                                    <div class="d-flex justify-content-between">
                                        <a class="btn btn-danger" href="">Cancel</a>
                                        <button class="btn btn-primary" type="submit">Add to Menu</button>
                                    </div>
                                </div>
                            </form>
                        </div>

                    </div>

                @endsection
