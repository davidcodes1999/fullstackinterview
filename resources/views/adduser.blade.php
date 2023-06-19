@extends('layout')

@section('maincontent')
    <h3>Add User</h3>
    <br>
    <form action="{{url('adduser')}}" method="post">
        @csrf
    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <label for="exampleInputEmail1">Customer</label>
                <select class="form-control" name="customer" id="" placeholder="Select Customer">
                    <option value="New Customer">New Customer</option>
                    <option value="Old Customer">Old Customer</option>
                </select>
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">Email</label>
                <input class="form-control"  type="email" name="email" placeholder="Enter Email">
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">First Name</label>
                <input class="form-control"  type="text" name="firstname" placeholder="Enter First Name">
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">Last Name</label>
                <input class="form-control"  type="text" name="lastname" placeholder="Enter Last Name">
              </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label for="exampleInputEmail1">Username</label>
                <input class="form-control"  type="text" name="username" placeholder="Enter Username">
              </div>
              <div class="form-group">
                <label for="">Roles</label>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="Global Gleason Admin" name="role" id="">
                    <label class="form-check-label" for="flexCheckDefault">
                      Global Gleason Admin
                    </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="User" id=""  name="role">
                    <label class="form-check-label" for="flexCheckChecked">
                        User
                    </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="Customer Admin" id=""  name="role">
                    <label class="form-check-label" for="flexCheckChecked">
                        Customer Admin
                    </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="Gleason Regional Sales Manager" id=""  name="role">
                    <label class="form-check-label" for="flexCheckChecked">
                        Gleason Regional Sales Manager
                    </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="Gleason internal Sales" id=""  name="role">
                    <label class="form-check-label" for="flexCheckChecked">
                        Gleason Internal Sales
                    </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="Gleason Engineer/ Service Engineer" id=""  name="role">
                    <label class="form-check-label" for="flexCheckChecked">
                        Gleason Engineer/ Service Engineer
                    </label>
                  </div>
              </div>
        </div>

    </div>
    <div class="row">
        <button type="submit" class="btn btn-success"> Add</button>
        <button class="btn btn-danger">Reset</button>
    </div>
</form>
@endsection
