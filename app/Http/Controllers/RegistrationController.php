<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Models\Registration;
use Illuminate\Database\DBAL\TimestampType;

class RegistrationController extends Controller
{
    public function create()
    {
        return view('registration');
    }

    public function store(Request $request)
    {

        
        // $this->validate(request(), [

        //     'name' => 'required',
        //     'email' => 'required|email',
        //     'password' => 'required',
        //     'contact' => 'required',
        //     'city' => 'required',
        //     'country' => 'required'

        // ]);

        $data = array(
            'name'=>$request->post('name'),
            'email'=>$request->post('email'),
            'password'=>Hash::make($request->post('password')),
            'contact'=>$request->post('contact'),
            'city'=>$request->post('city'),
            'country'=>$request->post('country'),
    
          );
        //   print_r($data);
        //   die();

        Registration::create($data);
   


        return back()->with('seces', 'added');
    }
}
