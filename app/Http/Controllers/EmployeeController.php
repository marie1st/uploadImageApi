<?php

namespace App\Http\Controllers;
use App\Models\employee;
use Illuminate\Http\Request;
use Intervention\Image\ImageManager;
use Image;


class EmployeeController extends Controller
{
    public function index()
    {
        //return view ('/home');
        $employees = Employee::all();
        return view('upload/employee/{id}', compact('contacts'));

    }

    public function create()
    {
        //
    }



    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function store(Request $request)
    {
            $request -> validate([
                'email' => 'unique:employees,email,$this->id,id',
                'employee_id' => 'required',
                'address' => 'required',
                'company_file' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
                'company_file1' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            ]);
            
 
                $image = $request->file('employee_file');
                $filename = $image->getClientOriginalName();
                $destinationPath = public_path('upload');
                $img = Image::make($image->path());
                $img->resize(300, 200)->save($destinationPath.'/'.$filename);
                $image->move($destinationPath, $filename);
        
                 
                $image1 = $request->file('employee_file1');
                $filename1 = $image1->getClientOriginalName();
                $destinationPath = public_path('upload');
                $img1 = Image::make($image1->path());
                $img1->resize(300, 200)->save($destinationPath.'/'.$filename1);
                $image1->move($destinationPath, $filename1);

              
                Employee::create([
                    'email' => $request->get('email'),
                    'employee_id' => $request->get('employee_id'),
                    'company_file' => $filename,
                    'company_file1' => $filename1,
                ]);
        
                return redirect('/home')->with('success', 'Record is successfully saved.');

    }
 
          

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
