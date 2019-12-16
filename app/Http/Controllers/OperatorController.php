<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Operator;

class OperatorController extends Controller{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        $operators = Operator::get();
        return view('admin.operators.operator-list', compact('operators'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(){
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request){


        $this->validate($request, [
            'operator_name' => 'required',
            'operator_email' => 'required',
            'operator_address' => 'required',
            'operator_phone' => 'required',
            'operator_logo' => 'image|max:2048'
        ]);

        $image = $request->file('operator_logo');
        $image_name = rand() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('operator_images'), $image_name);

        $operator = new Operator;
        $operator->operator_name = $request->operator_name;
        $operator->operator_email = $request->operator_email;
        $operator->operator_address = $request->operator_address;
        $operator->operator_phone = $request->operator_phone;
        $operator->operator_logo = $image_name;

        $operator->save();

        return redirect()->back()->with('flash_message_success', 'Operator Added Successfully!');

        $id = $request::get('operator_id');
        $operators = Operator::where('operator_id',$id);
        return view('admin.operators.operator-list', compact('operators'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id){
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id){
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id){
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
