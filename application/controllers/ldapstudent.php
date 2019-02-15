<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use Illuminate\Contracts\Auth\Guard;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Adldap\Laravel\Facades\Adldap;
use App\User;
use App\Admin;
use Session;

class StudentLoginController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      if(Auth::check()){
        return redirect()->route('index.show');
      }
      return view('frontend.login');
    }

    public function indexAlumni()
    {
      if(Auth::check()){
        return redirect()->route('index.show');
      }
      return view('frontend.login-alumni');
    }

    public function indexStudent()
    {
      if(Auth::check()){
        return redirect()->route('index.show');
      }
      return view('frontend.login-student');
    }


    public function studentStore(Request $request)
    {

      $student_id = $request->input('student_id');
      $password = $request->input('password');
      $remember = $request->input('remember');
      $user = User::where('username', $student_id)->first();

      $infoUser = Adldap::search()->where('uid', '=', $student_id)->first();
      if (empty($infoUser)) {
        session()->flash('alert-warning', 'ผิดพลาด!|ไม่พบรหัสนักศึกษานี้อยู่ในระบบ');
        return redirect()->route('login');
      }elseif ($infoUser['attributes']['gidnumber'][0] != 4307) {
        session()->flash('alert-warning', 'ผิดพลาด!|รหัสนักศึกษานี้ไม่ได้อยู่ในภาควิชาคอมพิวเตอร์และเทคโนโลยีสารสนเทศ');
        return redirect()->route('login');
      }
      else {
        if (Adldap::auth()->attempt($student_id, $password, $bindAsUser = true)) {
          $user = User::where('student_id', $student_id)->first();
          if ( !$user ) {
            $user = new User();
            $user->username = $student_id;
            $user->student_id = $student_id;
            $user->password = bcrypt(str_random(20));
            $user->firstname = $infoUser['attributes']['displayname'][0];
            $user->lastname = $infoUser['attributes']['givenname'][0];
            if($infoUser['attributes']['mail'][0]){
              $user->email = $infoUser['attributes']['mail'][0];
            }
            $user->status = 3;
            $user->save();
          }
          if($user->status == 3){
            $admin_user = Admin::where('user_id', '=', $user->id)->first();
            if($admin_user){
              Auth::guard('super-admin')->login($user, $remember);
            }
            Auth::login($user, $remember);
          }
          return redirect()->route('index.show');
        }
      }

      session()->flash('alert-warning', 'ผิดพลาด!|ไม่สามารถเข้าสู่ระบบได้ รหัสนักศึกษาหรือรหัสผ่านอาจไม่ถูกต้อง โปรดลองอีกครั้ง หากยังคงพบปัญหากรุณาติดต่อผู้ดูแลระบบ');
      return redirect()->route('login.studentIndex');
    }

    public function alumniStore(Request $request)
    {
      $student_id = $request->input('student_id');
      $password = $request->input('password');
      $remember = $request->input('remember');
      $user = User::where('student_id', '=', $student_id)->orWhere('username', '=', $student_id)->first();
      
      if (!$user) {
          session()->flash('alert-warning', 'ผิดพลาด!|ไม่พบรหัสนักศึกษานี้อยู่ในระบบ กรุณาลงทะเบียน');
          return redirect()->route('login.alumniIndex');
      }else{
        if (Auth::guard('web')->attempt(['student_id' => $student_id, 'password' => $password, 'status' => 3], $remember)) {
          $admin_user = Admin::where('user_id', '=', $user->id)->first();
          if($admin_user){
            Auth::guard('super-admin')->login($user, $remember);
          }
          return redirect()->route('index.show');
        }elseif(Auth::guard('web')->attempt(['username' => $student_id, 'password' => $password, 'status' => 3], $remember)){
          $admin_user = Admin::where('user_id', '=', $user->id)->first();
          if($admin_user){
            Auth::guard('super-admin')->login($user, $remember);
          }
          return redirect()->route('index.show');
        }
      }
      session()->flash('alert-warning', 'ผิดพลาด!|ไม่สามารถเข้าสู่ระบบได้ รหัสนักศึกษาหรือรหัสผ่านอาจไม่ถูกต้อง โปรดลองอีกครั้ง หากยังคงพบปัญหากรุณาติดต่อผู้ดูแลระบบ');
      return redirect()->route('login.alumniIndex');
      }

      public function logout(){
        Auth::guard('super-admin')->logout();
        Auth::guard('web')->logout();
        return redirect()->route('index.show');
      }

}