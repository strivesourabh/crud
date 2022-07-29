<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Models\Registration;
use Illuminate\Database\DBAL\TimestampType;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class RegistrationController extends Controller
{
    public function create()
    {
        return view('registration');
    }

    public function show($id)  
    {  
        $cruds = Registration::where('id', $id)->get();
    	return view('view',compact('cruds')); 
        
    } 
    public function edit($id)  
    {  
        
       
        $cruds = Registration::where('id', $id)->get();
    	return view('edit',compact('cruds')); 
        
    } 
    public function update(Request $request, $id)  
    {  
        
        $imageName = time().'.'.$request->file->extension(); 
        $this->validate(request(), [

            'name' => 'required',
            'email' => 'required|email',
            'contact' => 'required',
            'city' => 'required',
            'country' => 'required',
            

        ]);

        $data = array(
            'name'=>$request->post('name'),
            'email'=>$request->post('email'),
            'contact'=>$request->post('contact'),
            'city'=>$request->post('city'),
            'country'=>$request->post('country'),
            'filename'=>$imageName,
    
          );

          $request->file->move(public_path('upload'), $imageName);
        Registration::where('id', $id)->update($data);
        return redirect('home')->with('success','Data Update successfully.');
    	
    } 

  

    public function store(Request $request)
    {
        
        $imageName = time().'.'.$request->file->extension(); 
        $data = array(
            'name'=>$request->post('name'),
            'email'=>$request->post('email'),
            'password'=>Hash::make($request->post('password')),
            'contact'=>$request->post('contact'),
            'city'=>$request->post('city'),
            'country'=>$request->post('country'),
            'filename'=>$imageName,
          );
       
      

         $request->file->move(public_path('upload'), $imageName);
          
        Registration::create($data);
   


        return back()->with('success', 'added');
    }

    public function delete($id){
        echo "<script>alert('Confirm To Delete')</script>";
        Registration::where('id', $id)->delete();
        return redirect('home')->with('success','Data deleted successfully');
    }
    // function login(Request $req){
    //     $data = $req->input('name');
    //     $req =session()->put('name',$data);
    //     return redirect('home');
    // }
    public function login(Request $request)
    {
        
        request()->validate([
        'email' => 'required',
        'password' => 'required',
        ]);

        $data = array(
            'email'=>$request->post('email'),
            'password'=>$request->post('password'),
        );
     

        if (Auth::attempt($data)) {
            
            return redirect('home');
        }
        return Redirect::to("login")->withSuccess('Oppes! You have entered invalid credentials');
    }
}
