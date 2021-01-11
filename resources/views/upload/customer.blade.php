<div class="container">
    <div>
        <form action="{{action ([App\Http\Controllers\CustomerController::class,'store'])}}" method="post" enctype="multipart/form-data">
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
                <label>tax_id</label>
                <input type ="text" name="tax_id" class="form-control" placeholder="tax_id">
            </div>
            <br>
            <div class="form-group">
                <label for="customer_file">Customer File#1:</label>
                <input type="file" class="form-control-file" id="customer_file" name="customer_file">
            </div>
            <br>
            <div class="form-group">
                <label for="customer_file1">Customer File#2:</label>
                <input type="file" class="form-control-file" id="customer_file1" name="customer_file1">
            </div>

       
            <br>

            <div class = "form-group">
                <button type="submit"  class="btn btn-primary btn-block mt-4">
                Update Info
                </button>

            <div>
        </form>
        <br>
 




    </div>
</div>
