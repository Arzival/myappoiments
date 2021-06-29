<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class PatientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $patients = User::where('role','patient')->simplePaginate(10);
        return view('patients.index',compact('patients'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('patients.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rules = [
            'name' => 'required|min:3',
            'email' => 'required|email',
            'addres' => 'min:3',
            'phone' => 'min:6',
        ];
        $this->validate($request,$rules);

        User::create([
            'name' => $request['name'],
            'email' => $request['email'],
            'addres' => $request['addres'],
            'phone' => $request['phone'],
            'password' =>  Hash::make($request['password']),
            'role' => 'patient',
        ]);

        $notification = 'Se agrego de forma correcta';

        return redirect()->route('patients.index')->with(compact('notification'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
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
        return view('patients.edit',['patient' => User::findorFail($id)]);
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
        $rules = [
            'name' => 'required|min:3',
            'email' => 'required|email',
            'addres' => 'min:3',
            'phone' => 'min:6',
        ];

        $this->validate($request,$rules);

        User::where('id',$id)->update([
            'name' => $request['name'],
            'email' => $request['email'],
            'dni' => $request['dni'],
            'addres' => $request['addres'],
            'phone' => $request['phone'],
            'password' =>  Hash::make($request['password']),
        ]);

        
        $notification = 'Se modifico de forma correcta';

        return redirect()->route('patients.index')->with(compact('notification'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        User::where('id',$id)->delete();

        $notification = 'Se elimino de forma correcta';

        return redirect()->route('patients.index')->with(compact('notification'));
    }
}
