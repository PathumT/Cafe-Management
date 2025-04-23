@extends('layouts.base')

@section('content')
    <div class="container my-4">
        <div class="card my-4 mb-3">
            <div class="card-header">

                <div class="row">
                    <div class="col-8">
                        <h3>Add Item to Menu</h3>
                    </div>

                </div>


            </div>
            {{-- @dump($errors) --}}
            <form action="" method="POST" enctype="multipart/form-data">
                {{-- enctype="multipart/form-data,this enables files to be uploaded such as images  --}}
                @csrf
                {{-- @csrf generates a hidden token field for security authorization --}}

                <div class="card-body">


                    <div class="row mb-3">
                        <label for="inputProductName" class="col-sm-2 col-form-label">Product Name</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control"  id="inputProductName" name="p_name"
                                value=""
                                placeholder="Pizza">

                                <div id="validationServerUsernameFeedback" class="invalid-feedback">

                                </div>

                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="inputProductPrice" class="col-sm-2 col-form-label">Price(Rs)</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="inputProductPrice" name="p_price"
                                value=""
                                placeholder="1200.00">

                                <div id="validationServerUsernameFeedback" class="invalid-feedback">

                                </div>

                        </div>
                    </div>
                        <div class="row mb-3">
                            <label for="inputProductImage" class="col-sm-2 col-form-label">Image</label>
                            <div class="col-sm-10">
                                <input type="file" class="form-contro" id="inputProductImage" name="p_image">

                                <div id="validationServerUsernameFeedback" class="invalid-feedback">

                                </div>

                            </div>
                        </div>





                    </div>
                    <div class="card-footer">
                        <div class="d-flex justify-content-between">
                            <a class="btn btn-danger" href="" >Cancel</a>
                            <button class="btn btn-primary" type="submit">Add to Menu</button>
                        </div>
                    </div>
            </form>
        </div>
        


    </div>
@endsection
