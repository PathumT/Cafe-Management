@extends('layouts.base')

@section('content')
    <div class="container my-4">
        <div class="card my-4 mb-3">
            <div class="card-header">

                <div class="row">
                    <div class="col-8">
                        <h3>Menu Profile</h3>
                    </div>
                    <div class="col-4">
                        <form action="{{route('menu.destroy', ['menu' => request('menu')])}}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger float-end" type="submit" >Delete from Menu</button>
                        </form>
                    </div>
                </div>


            </div>
            <div class="card-body">

                <form action="{{ route('menu.update', ['menu' => request('menu')]) }}" method="POST"
                    enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="col-md-6">
                        <label for="inputMenuItemName" class="form-label">Product Name</label>
                        <input type="text" class="form-control @error('p_name')is-invalid @enderror"
                            id="inputMenuItemName" name="p_name" value="{{ old('p_name', $menu->p_name) }}">
                        @error('p_name')
                            <div id="validationServerUsernameFeedback" class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    {{-- <div class="col-12">
                        <label for="inputProductID" class="form-label">ProductID</label>
                        <input type="text" class="form-control @error('p_id')is-invalid @enderror" id="inputProductID"
                            name="p_id" value="{{ old('p_id', $menu->p_id) }}">
                        @error('p_id')
                            <div id="validationServerUsernameFeedback" class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div> --}}

                    <div class="col-12">
                        <label for="inputPrice" class="form-label">Price(Rs)</label>
                        <input type="text" class="form-control @error('p_price')is-invalid @enderror" id="inputPrice"
                            name="p_price" value="{{ old('p_price', $menu->p_price) }}">
                        @error('p_price')
                            <div id="validationServerUsernameFeedback" class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <label for="inputProductImage" class="form-label">Image</label>
                            <input type="file" class="form-control @error('p_image')is-invalid @enderror"
                                id="inputProductImage" name="p_image">

                            @error('p_image')
                                <div id="validationServerUsernameFeedback" class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">&nbsp;</label>
                            <img src="{{ asset('storage/' . $menu->p_image) }}" height="200px"
                                class="rounded mx-auto d-block " alt="...">

                        </div>
                    </div>


            </div>
            <div class="card-footer">
                <div class="d-flex justify-content-between ">
                    <a class="btn btn-danger" href="{{ route('menu.index') }}">Cancel</a>

                    <button class="btn btn-primary" type="submit">Save Changes</button>
                </div>
            </div>



            </form>






        </div>
    </div>
@endsection
