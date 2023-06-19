@extends('layout')

@section('maincontent')
    <h3>View Users</h3>
    <br>
    <style>
        .f {
            height: 55px;
        }
    </style>
    <div class="row f">
        <div class="col-md-10">

        </div>
        <div class="col-md-2">
            <a href="{{ url('adduser') }}" class="btn btn-primary">Add user</a>
        </div>
    </div>
    <table class="table table-bordered">
        <thead>
            <tr>
                <td>S no</td>
                <td>First Name</td>
                <td>Last Name</td>
                <td>Username</td>
                <td>email</td>
                <td>Customer Type</td>
                <td>Role</td>
                <td>Edit</td>
            </tr>
        </thead>
        <tbody>
            <tr>
                <?php $i = 1; ?>
                @foreach ($users as $user)
            <tr>
                <td>{{ $i++ }}</td>
                <td>{{ $user->firstname }}</td>
                <td>{{ $user->lastname }}</td>
                <td>{{ $user->username }}</td>
                <td>{{ $user->email }}</td>
                <td>{{ $user->customer }}</td>
                <td>{{ $user->role }}</td>
                <td><button class="btn btn-success buttn" id="btn{{ $user->id }}" data-customer="{{ $user->customer }}"
                        data-email="{{ $user->email }}" data-id="{{ $user->id }}"
                        data-lastname="{{ $user->lastname }}" data-username="{{ $user->username }}"
                        data-firstname="{{ $user->firstname }}">edit</button>
                    <form action="{{ url('deleteuser') }}" method="post">
                        @csrf
                        <input type="hidden" name="hid" value="{{ $user->id }}">
                        <button class="btn btn-danger" type="submit">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach

            </tr>
        </tbody>
    </table>
    @foreach ($users as $user)
        <div id="modal{{ $user->id }}" class="modal" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Update User</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="{{ url('updateuser') }}" method="post">
                            @csrf
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Customer</label>
                                        <select class="form-control" name="customer" 
                                            placeholder="Select Customer">
                                            <option value="New Customer">New Customer</option>
                                            <option value="Old Customer">Old Customer</option>
                                        </select>
                                    </div>
                                    <input type="hidden" name="hid" value="{{ $user->id }}">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Email</label>
                                        <input class="form-control" type="email" value="{{$user->email}}" id="email{{ $user->id }}" name="email" placeholder="Enter Email">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">First Name</label>
                                        <input class="form-control" type="text" value="{{$user->firstname}}"  id="firstname{{ $user->id }}" name="firstname"
                                            placeholder="Enter First Name">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Last Name</label>
                                        <input class="form-control" type="text" value="{{$user->lastname}}"  id="lastname{{ $user->id }}" name="lastname"
                                            placeholder="Enter Last Name">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Username</label>
                                        <input class="form-control" type="text" value="{{$user->username}}"  id="username{{ $user->id }}" name="username"
                                            placeholder="Enter Username">
                                    </div>
                                    <div class="form-group">
                                        <label for="">Roles</label>
                                        <div class="form-check">
                                            <input class="form-check-input" value="{{$user->role}}"  type="checkbox" id="role{{ $user->id }}" value="Global Gleason Admin"
                                                name="role" id="" checked>
                                            <label class="form-check-label" for="flexCheckDefault">
                                                Global Gleason Admin
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="User" id=""
                                                name="role">
                                            <label class="form-check-label" for="flexCheckChecked">
                                                User
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="Customer Admin"
                                                id="" name="role">
                                            <label class="form-check-label" for="flexCheckChecked">
                                                Customer Admin
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox"
                                                value="Gleason Regional Sales Manager" id="" name="role">
                                            <label class="form-check-label" for="flexCheckChecked">
                                                Gleason Regional Sales Manager
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox"
                                                value="Gleason internal Sales" id="" name="role">
                                            <label class="form-check-label" for="flexCheckChecked">
                                                Gleason Internal Sales
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox"
                                                value="Gleason Engineer/ Service Engineer" id="" name="role">
                                            <label class="form-check-label" for="flexCheckChecked">
                                                Gleason Engineer/ Service Engineer
                                            </label>
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <p></p>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">Save changes</button>
                        </form>
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
    @endforeach

    <script>
        $(".buttn").each(function(index) {
            $(this).on("click", function() {
                var id = $(this).attr("data-id");

                $("#modal" + id).modal('show');

            });
        });
    </script>
@endsection
 

