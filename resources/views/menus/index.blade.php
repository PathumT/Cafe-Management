@extends('layouts.base')

@section('content')
    <div class="container my-4">
        <div class="card mb-3">
            <div class="card-header">
                <h3>Menu Management</h3>
            </div>
            {{-- <div class="card-body">
                <div class="d-flex justify-content-between">
                    <button class="btn btn-primary" type="button">Add New Menu Item</button>
                    <button class="btn btn-primary" type="button">Download current menu as PDF</button>
                </div>
            </div> --}}


        </div>

        <div class="d-flex justify-content-between">
            <a class="btn btn-primary" href="{{route('menu.create')}}">Add New Menu Item</a>
            <a class="btn btn-primary" href="{{route('menupdf.create')}}">Download current menu as PDF</a>
        </div>
        <div class="card mt-3">
            <div class="card-header">

                <div class="row">
                    <div class="col-8">
                        <h3>Menu List</h3>
                    </div>
                    <div class="col-4">
                        <form action="{{route('menu.index')}}" method="GET">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Search By Product Name"
                                aria-label="Search By Product Name" aria-describedby="button-addon2" name="prod_name">
                            <button class="btn btn-outline-secondary" type="submit" id="button-addon2"><i
                                    class="fa-solid fa-magnifying-glass"></i></button>
                        </div>
                        </form>
                    </div>
                </div>


            </div>
            <div class="card-body">
                <table class="table">
                    <thead>
                        <tr >
                            <th scope="col">ProductID</th>
                            <th scope="col">Product Name</th>
                            <th scope="col">Price</th>
                            <th scope="col" class="text-center">Image</th>
                            <th scope="col">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        {{-- This means to put the data in the dataset to the menu variable --}}
                        @foreach ( $menus as $menu )

                        <tr>
                            {{-- p_id is the column name in the database.Not the name in the interface variable --}}
                            <th scope="row">{{$menu->p_id}}</th>
                            <td>{{$menu->p_name}}</td>
                            <td>{{$menu->p_price}}</td>
                            <td><img src="{{ asset('storage/' . $menu->p_image) }}" height="100px"
                                class="rounded mx-auto d-block " alt="..."></td>
                            <td class="d-flex flex-column"><a href="{{route('menu.edit',['menu'=>$menu->id])}}" class="btn btn-primary mb-1">Edit /Delete Menu Item</a></td>
                        </tr>

                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>


    </div>
@endsection
