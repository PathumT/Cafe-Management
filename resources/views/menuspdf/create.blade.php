<h1 align="center">Menu</H1>
<table border="1" cellpadding="10" >
    <thead>
        <tr>
            <th scope="col">ProductID</th>
            <th scope="col">Product Name</th>
            <th scope="col">Price</th>
            <th scope="col" align="center">Image</th>

        </tr>
    </thead>
    <tbody>
        {{-- This means to put the data in the dataset to the menu variable --}}
        @foreach ( $menus as $menu )

        <tr valign="middle">
            {{-- p_id is the column name in the database.Not the name in the interface variable --}}
            <th scope="row">{{$menu->p_id}}</th>
            <td>{{$menu->p_name}}</td>
            <td>{{$menu->p_price}}</td>
            <td align="center"><img src="{{ "data:image/png;base64,".base64_encode(file_get_contents(public_path('storage/' . $menu->p_image))) }}" height="100px"
                class="rounded mx-auto d-block " alt="..."></td>

        </tr>

        @endforeach
    </tbody>
</table>
