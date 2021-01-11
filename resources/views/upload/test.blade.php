@extends('layouts.app')

@section('content')
<div class="container">
    <div>
        <h2>Buzzfreeze<h2>
        <a href = "">Go to Profile</a>
        <br>
        <h2>UPDATE COMPANY PROFILE</h2>
        <br>
        <form action="{{action ('EmployeeController@store')}}" method="post" enctype="multipart/form-data">
        @csrf
            @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <strong>{{ $message }}</strong>
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
            <div class = "form-group">
                <label>Company Name</label>
                <input type ="text" name="company_name" class="form-control" placeholder="Company Name">
            </div>
            <br>
            <div class = "form-group">
                <label>Contact Name</label>
                <input type ="text" name="contact_name" class="form-control" placeholder="Contact Name">
                </div>
            <br>
            <div class = "form-group">
                <label>EMAIL</label>
                <input type ="text" name="email" class="form-control" placeholder="name@name.com">
            </div>
            <br>
            <div class = "form-group">
                <label>Phone</label>
                <input type ="text" name="phone" class="form-control" placeholder="Phone">
            </div>
            <br>
            <div class="form-group">
                <label for="company_file">Company Registration File#1:</label>
                <input type="file" class="form-control-file" id="company_file" name="company_file">
            </div>
            <br>
            <div class="form-group">
                <label for="company_file1">Company Registration File#2:</label>
                <input type="file" class="form-control-file" id="company_file1" name="company_file1">
            </div>
            <br>
            <div class="form-group">
                <label for="company_file2">Company Registration File#3:</label>
                <input type="file" class="form-control-file" id="company_file2" name="company_file2">
            </div>
            <br>
            <div class="form-group">
                <label for="company_file3">Company Registration File#4:</label>
                <input type="file" class="form-control-file" id="company_file3" name="company_file3">
            </div>
            <br>
            <div class="form-group">
                <label for="company_file4">Company Registration File#5:</label>
                <input type="file" class="form-control-file" id="company_file4" name="company_file4">
            </div>
            <br>
            <div class = "form-group">
                <label>Address</label>
                <input type ="text" name="address" class="form-control" placeholder="Location">
            </div>
            <br>
            <div class = "form-group">
                <iframe
                width="600" height="250" frameborder="0" style="border:0" src="https://www.google.com/maps/embed/v1/place?key=AIzaSyDsJ01Kun6Kz-34DhfJKeok78hro6Nnru0&q=current+location">
                </iframe>
            </div>
            <br>

            <div class = "form-group">
                <button type="submit"  class="btn btn-primary btn-block mt-4">
                Update Info
                </button>

            <div>
        </form>

    </div>
</div>
@endsection