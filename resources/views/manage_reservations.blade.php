<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
        @if(session('msg'))
              <div class="alert alert-success">{{session('msg')}} </div>
        @endif

        @if(session('message'))
              <div class="alert alert-success">{{session('message')}} </div>
        @endif

        <table>
            <tr> 
                <th> Name </th>
                <th> Mobile </th>
                <th> Email </th>
                <th> Table </th>
                <th> No of seats </th>
                <th> Date </th>
                <th> Time </th>
                <th> Special Notes </th>
                <th> Action </th>
            </tr>

        @foreach($data as $data)
            <tr>
                <td> {{ $data->name }} </td>
                <td> {{ $data->mobile }} </td>
                <td> {{ $data->email }} </td>
                <td> {{ $data->table }} </td>
                <td> {{ $data->no_of_seats }} </td>
                <td> {{ $data->date }} </td>
                <td> {{ $data->time }} </td>
                <td> {{ $data->special_note }} </td>
                <th> <a href="/deleteReservation/{{ $data->id }} "> Delete </a>
                    &nbsp&nbsp
                    <a href="/editReservation/{{ $data->id }} "> Update </a>
                </th>
        @endforeach
        </table>

</body>
</html>