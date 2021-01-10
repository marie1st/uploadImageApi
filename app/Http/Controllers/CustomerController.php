<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\customer;
use Intervention\Image\ImageManagerStatic as Image;


class CustomerController extends Controller
{
    public function index()
    {
        //return view ('/home');
        $customers = Customer::all();
        return view('upload/customer/{id}', compact('contacts'));

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
                'tax_id' => 'required',
                'address' => 'required',
                'customer_file' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
                'customer_file1' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            ]);
            
 
                $image = $request->file('customer_file');
                $filename = $image->getClientOriginalName();
                $destinationPath = public_path('upload');
                $img = Image::make($image->path());
                $img->resize(300, 200)->save($destinationPath.'/'.$filename);
                $image->move($destinationPath, $filename);
        
                 
                $image1 = $request->file('customer_file1');
                $filename1 = $image1->getClientOriginalName();
                $destinationPath = public_path('upload');
                $img1 = Image::make($image1->path());
                $img1->resize(300, 200)->save($destinationPath.'/'.$filename1);
                $image1->move($destinationPath, $filename1);

              
                customer::create([
                    'email' => $request->get('email'),
                    'tax_id' => $request->get('tax_id'),
                    'customer_file' => $filename,
                    'customer_file1' => $filename1,
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
