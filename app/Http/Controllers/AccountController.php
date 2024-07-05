<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Profile;
use Session;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Mail\ContactMail;
use Illuminate\Support\Facades\Mail;


class AccountController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('auth.login');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function newAccount(){
        return view('auth.registration');
    }
    public function customRegistration(){
        return "coming soon";
    }

     public function customLogin(Request $request)
    {
        $validator = $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);
        $credentials = $request->only('email','password');
         if (Auth::attempt($credentials)) {
            $userinfo = $request->session()->put('email','name');
            return redirect()->intended('dashboard')->withSuccess('Signed in');
        }
        $validator['emailPassword'] = 'Email address or password is incorrect.';
        return redirect('login')->withErrors($validator);
    }
    public function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email'=> $data['email'],
            'password' => Hash::make($data['password'])
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|max:255|min:3',
            'email' => 'required|email|unique:users',
            'password' => 'required|max:50|min:8'
        ]);
        $data = $request->all();
        $check = $this->create($data);
        return redirect('login')->withSuccess("You have signed in");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $profile_pic = Profile::all();
        $profile = User::all();
        return view('profile.myprofile',compact('profile','profile_pic'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    
    public function profile_pic(){
        return view('profile.myprofile_pic');
    }
    public function storeprofile_pic(Request $request,$id)
    {
         $request->validate([
            'profile_pic' => 'required',
        ]);
        $data = new Profile();
        if ($request->file('profile_pic')){
           $file = $request->file('profile_pic');
           $filename = date('YmdHi').$file->getClientOriginalName();
           $file->move(public_path('public/images'),$filename);
           $data['profile_pic'] = $filename;
        }
       $data->save();
        return redirect('dashboard')->with('success','profile created successfully');
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
        $request->validate([
        ]);
        $details = $request->only('phone','profile_pic','location','website','birth_date','bio');
        $user = User::where('email',$id)->update($details);
        return view('pages.dashboard');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy()
    {
        Session::flush();
        Auth::logout();
        return view('auth.logout')->with('success','Logout successfully!!!');;
    }
    public function dashboard(){
        if (Auth::check()) {
            return view('pages.dashboard');
        }
        return redirect('login')->withSuccess("you are not allowed to access");
    }
    public function sendMail(Request $request){
        $validated = $request ->validate([
            'name' => 'required|max:255|min:3',
            'email' => 'required|email',
            'subject' => 'required',
            'message' => 'required|min:3'
        ]);
        //Mail::to('kipchirchir1998@gmail.com')->send(new ContactMail($validated));
        return back()->with('success','message sent successfully');

    }
}
