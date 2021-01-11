<div>💯</div>

<div class="container">
    <div>
        <h2>Buzzfreeze<h2>
       
        <br>
        <form action="{{action ([App\Http\Controllers\EmployeeController::class, 'store'])}}" method="post" enctype="multipart/form-data">
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
                <label>EMAIL</label>
                <input type ="text" name="email" class="form-control" placeholder="name@name.com">
            </div>
            <br>
            <div class = "form-group">
                <label>employee_id</label>
                <input type ="text" name="employee_id" class="form-control" placeholder="Phone">
            </div>
            <br>
            <div class="form-group">
                <label for="employee_file">File#1:</label>
                <input type="file" class="form-control-file" id="employee_file" name="employee_file">
            </div>
            <br>
            <div class="form-group">
                <label for="employee_file1">File#2:</label>
                <input type="file" class="form-control-file" id="employee_file1" name="employee_file1">
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
