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
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use Illuminate\Support\Str;
use Illuminate\View\View;
use App\Mail\SendMessageToEndUser;

class AccountController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() : View
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
        $user = User::where('email','=',$request->email)->first();
        $credentials = $request->only('email','password');
        if($user){
            if(Auth::attempt($credentials)){
                $request->session()->put('loginId', $user->id);
                $userinfo = $request->session()->put('email','name');
                return redirect()->intended('dashboard')->withSuccess('Signed in');
            } else {
                return back()->with('fail','Password not match!');
            }
        } else {
            return back()->with('fail','This email is not register.');
        } 
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
        $data = array();
        if(Session::has('loginId')){
            Session::pull('loginId');
            return redirect('login')->with('success','Logout successfully!!!');
        }
    }
    
    public function dashboard(){
         $data = array();
        if(Session::has('loginId')){
            $data = User::where('id','=',Session::get('loginId'))->first();
        }
         return view('Pages.dashboard',compact('data'));
    //     if (Auth::check()) {
    //         return view('pages.dashboard');
    //     }
    //     return redirect('login')->withSuccess("you are not allowed to access");
    }
    public function sendMail(Request $request){
        $validated = $request ->validate([
            'name' => 'required|max:255|min:3',
            'email' => 'required|email',
            'subject' => 'required',
            'message' => 'required|min:3'
        ]);
       
        // $data = array('name'=>"kelvin kipchirchir");
        // Mail::send($request->email, $data, function($message) {
        // $send_mail = "kipchirchir1998@gmail.com";
        // $message->to($send_mail, $request->message)->subject($request->subject);
        // $message->from($request->email,$request->name);
        // });
        $send_mail = "kipchirchir1998@gmail.com";
        Mail::to($send_mail)->send(new ContactMail($validated));
        $senderMessage = "thanks for your message";
        Mail::to($request->email)->send(new SendMessageToEndUser($validated));
        return back()->with('success','message sent successfully');

    }
    //-----------------------forget password------------------
    public function forgetPassword(){

        return view('auth.forgetpassword');
    }
    public function submitPassword(Request $request){
       
        $request->validate([
            'email' => 'required|email',
        ]);
        $token = Str::random(64);
        DB::table('password_resets')->insert([
            'email' => $request->email,
            'token' => $token,
            'created_at' => Carbon::now()
        ]);
        Mail::send('emails.forgetPassword',['token' => $token],function($message) use($request){
            $message->to($request->email);
            $message->subject('Reset Password');
        });
        return back()->with('success','we have emailed you password reset link');
    }
    public function showResetForm($token){
        return view('auth.forgetPasswordLink',['token' => $token]);
    }
    public function submitReset(Request $request){
         $request->validate([
            'email' => 'required|email|exists:users',
            'password' => 'required|max:50|min:8',
            'password_confirmation' => 'required'
        ]);
        
       $updatePassword = DB::table('password_resets')->where([
        'email' => $request->email,
        'token' => $request->token
       ])->first();
       if(!$updatePassword){
        return back()->withInput()->with('error','invalid token');
       }
       $user = User::where('email',$request->email)->update([
        'password' => Hash::make($request->password)]);
       DB::table('password_resets')->where(['email' => $request->email])->delete();
       return redirect('login')->with('success','your password has been changed');
    }
}
