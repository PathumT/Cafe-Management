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
                        <h3>User Accounts</h3>
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
                        @if(count($errors) > 0)
                        <div class="alert alert-danger">
                            <ul>
                                @foreach($errors->all() as $error)
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
                                <div class="card-body">

                                    <form id="myForm" role="form" method="POST" action="{{ url('create_account') }}">
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

                                        <div class="mb-3 d-flex" style="width: 1000px">
                                            <label for="name" class="form-label width-110 pt-2">Role</label>
                                            <select required name="role" class="form-select max-width-500 bordered-input" style="margin-left: 40px;">
                                                <option class="badge bg-success" value="2">Manager</option>
                                                <option class="badge bg-danger" value="4">Employee</option>
                                                {{-- <option class="badge bg-danger" value="3">Developer</option> --}}
                                            {{-- </select>
                                        </div>

                                        <div class="col-sm-12 d-flex justify-content-end">
                                            <button type="submit" class="btn btn-primary me-1 mb-1">save
                                            </button>
                                            <button type="reset"
                                                class="btn btn-light-secondary me-1 mb-1">reset</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>  --}}

                    </div>


                    <script>
                        function closeForm() {
                            document.getElementById("popup").style.display = "none";
                        }
                    </script>

                    <section class="section">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">USERS</h3>
                            </div>

                            <div class="card-body">
                                <div class="form-group">
                                    <div class="row">
                                      <div class="col-sm-8">
                                        <strong for="role-filter">Filter by Role:</strong>
                                        <select id="role-filter" class="form-control bordered-input" style="width: 200px;" onchange="filterRole()">
                                          <option style="color: #f70606;" class="font-weight-bold">All</option>
                                          <option style="color: #f70606;" role="0" class="font-weight-bold">Customer</option>
                                          <option style="color: #f70606;" role="1" class="font-weight-bold">Super Admin</option>
                                          <option style="color: #f70606;" role="2" class="font-weight-bold">Manager</option>
                                          <option style="color: #f70606;" role="4" class="font-weight-bold">Employee</option>
                                        </select>
                                      </div>
                                      <div class="col-sm-4">
                                        <div class="d-flex justify-content-end">
                                          <button type="reset" style="color: black; background-color: red;" class="btn btn-light-secondary me-1 mb-1" onclick="resetPage()"><strong>RESET</strong></button>
                                        </div>
                                      </div>
                                    </div>
                                  </div>






                                <table class="table table-striped" id="table1">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>User Name</th>
                                            <th>User E-mail</th>
                                            <th>Role</th>
                                            {{-- <th>Modify</th>
                                            <th class="text-center">Delete</th> --}}
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($user as $key => $item)
                                        <tr>
                                            <td class="id">{{ ++$key }}</td>
                                            <td class="name">{{ $item->name }}</td>
                                            <td class="email">{{ $item->email}}</td>
                                            @if($item->role == '1')
                                            <td class="role_name"><span class="badge bg-danger">Super Admin</span></td>
                                            @elseif($item->role == '4')
                                            <td class="role_name"><span class="badge bg-success">Employee</span></td>
                                            @elseif($item->role == '0')
                                            <td class="role_name"><span class="badge bg-success">Customer</span></td>
                                            @elseif($item->role == '2')
                                            <td class="role_name"><span class="badge bg-success">Manager</span></td>
                                            {{-- @elseif($item->role == '3')
                                            <td class="role_name"><span class="badge bg-success">Developer</span></td> --}}
                                            @endif

                                            {{-- <td class="text-center">
                                                @if($item->role == '1' || $item->role == '2')
                                                <a href="{{route('account_edit',[$item->id])}}">
                                                    <span class="badge bg-success"><i class="bi bi-pencil-square"></i></span>
                                                </a>
                                                @endif
                                            </td>
                                            <td class="text-center">
                                                <a href="/deleteaccount/{{ $item->id }}"
                                                    onclick="return confirm('Are you sure you want to delete it?')">
                                                    <span class="badge bg-danger"><i class="bi bi-trash"></i></span>
                                                </a>
                                            </td> --}}
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>

                            </div>
                        </div>
                    </section>

                </div>


            </div>



<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function() {
        $('#role-filter').change(function() {
            var selectedRole = $(this).val();

            if (selectedRole) {
                $('#table1 tbody tr').hide();
                $('#table1 tbody tr .role_name:contains(' + selectedRole + ')').closest('tr').show();
            } else {
                $('#table1 tbody tr').show();
            }
        });
    });
</script>

<script>
    function filterRole() {
      var selectElement = document.getElementById("role-filter");
      var selectedOption = selectElement.options[selectElement.selectedIndex];

      if (selectedOption.text === "All") {
        location.reload(); // Reload the page
      } else {
        // Add your custom logic for handling other role selections
      }
    }

    function resetPage() {
      location.reload(); // Reload the page
    }
  </script>

<script>
    function resetPage() {
      location.reload(); // Reload the page
    }
  </script>

<style>
    .bordered-input {
        border: 1px solid #ec1a0b;
        padding: 5px;
        margin-right: 10px;
    }
    .font-weight-bold {
  font-weight: bold;
}

</style>

            @endsection
