<div class="container">
    <div>
        <form action="{{action ('CustomerController@store')}}" method="post" enctype="multipart/form-data">
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
                <input type ="text" name="employee_id" class="form-control" placeholder="Phone">
            </div>
            <br>
            <div class="form-group">
                <label for="company_file">Customer File#1:</label>
                <input type="file" class="form-control-file" id="company_file" name="company_file">
            </div>
            <br>
            <div class="form-group">
                <label for="company_file1">Customer File#2:</label>
                <input type="file" class="form-control-file" id="company_file1" name="company_file1">
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
@endsection
