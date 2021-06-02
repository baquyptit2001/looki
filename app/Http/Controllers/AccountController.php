<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Account;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Password;
use Illuminate\Auth\Events\PasswordReset;


class AccountController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function username()
    {
        return 'user_name';
    }

    public function forgot()
    {
        return view('front-end.page.forgot-pass');
    }

    public function checkForgot(Request $request){
        $request->validate(['email' => 'required|email|exists:users,email']);

        $status = Password::sendResetLink(
            $request->only('email')
        );

        return $status === Password::RESET_LINK_SENT
                    ? back()->with(['status' => __($status), 'success'=>'Email phục hồi mật khẩu đã được gửi!!'])
                    : back()->withErrors(['email' => __($status)]);
    }

    public function passReset($token)
    {
        return view('front-end.page.reset-pass', ['token' => $token]);
    }

    public function passUpdate(Request $request)
    {
        $request->validate([
            'token' => 'required',
            'email' => 'required|email',
            'password' => 'required|confirmed',
        ]);

        $status = Password::reset(
            $request->only('email', 'password', 'password_confirmation', 'token'),
            function ($user, $password) use ($request) {
                $user->forceFill([
                    'password' => Hash::make($password)
                ])->setRememberToken(Str::random(60));
                $user->save();
                event(new PasswordReset($user));
            }
        );

        return $status == Password::PASSWORD_RESET
                    ? redirect()->route('login')->with('status', __($status))
                    : back()->withErrors(['email' => [__($status)]]);
    }

    public function index()
    {
        $account = User::orderBy('role', 'desc')->get();
        return view('admin.page.account.index', compact('account'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('front-end.page.myaccount');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $array_rules = [
            'user_name' => 'bail|required|max:16|min:6|unique:users',
            'password' => 'bail|required',
            'email' => 'bail|required|unique:users',
        ];
        $messages = [
            'user_name.required' => 'Tên tài khoản  không được bỏ trống',
            'user_name.min' => 'Tên tài khoản  không được dưới 6 ký tự',
            'user_name.max' => 'Tên tài khoản  không được quá 16 ký tự',
            'user_name.unique' => 'Tên tài khoản đã được sử dụng',
            'password.required' => 'Mật khẩu không được bỏ trống',
            'email.required' => 'Email không được bỏ trống',
            'email.unique' => 'Email đã được sử dụng',
        ];
        $this->validate($request,$array_rules, $messages);
        $user = User::create(array_merge($request->all(), ['display_name' => $request->user_name, 'password'=>Hash::make($request->password)]));
        if($user->id==1){
            User::find(1)->update(['role'=>2]);
        }
        return redirect()->route('login')
        ->with('register_success', 'Đăng ký thành công !!')
        ;
    }


    public function check_login(Request $request)
    {
        $credentials = $request->only('user_name', 'password');
        if(strpos($request->user_name, '@')){
            $request->merge(['email'=>$request->user_name]);
            $credentials = $request->only('email', 'password');
        }
        if(Auth::attempt($credentials)){
            // dd(Auth::user()->display_name);
            if(Auth::user()->status==0){
                Auth::logout();
                return redirect()->route('login')->with('login_not_success', 'Bạn đã bị cấm khỏi hệ thống !!');
            }
            $userInfo = User::find(Auth::user()->id);
            if($userInfo->role>1)
                return redirect('/backend');
            return redirect($request->link);
        }else{
            return redirect()->route('login')->with('login_not_success', 'Đăng nhập thất bại !!');
        }
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Account  $account
     * @return \Illuminate\Http\Response
     */
    public function show(Account $account)
    {
        //
    }

    public function ban($id)
    {
        $account = User::find($id);
        if($account->role==2 or $id==Auth::id())
            abort(404);
        else{
            $status = 0;
            // dd($account->status);
            if($account->status==0)
                $status=1;
            $account->update(['status' => $status]);
            return redirect()->back();
        }
    }

    public function role($id)
    {
        $account = User::find($id);
        if($account->role==2 or $id==Auth::id())
            abort(404);
        else{
            $status = 0;
            // dd($account->status);
            if($account->role==0)
                $status=1;
            $account->update(['role' => $status]);
            return redirect()->back();
        }
    }

    public function logOut(Request $request){
        Auth::logout();
        // $request->session()->flush();
        return redirect()->route('login');
    }

    public function infoUpdate(Request $request){
        $id = Auth::user()->id;
        $account = User::find($id);
        if(isset($request->pro_pic)){
            $extension = $request->pro_pic->getClientOriginalExtension();
            $file_name = $account->user_name.'.'.$extension;
            $request->pro_pic->move(public_path('uploads/avatar'), $file_name);
            $request->merge(['avatar'=>$file_name]);
        }
        $account->update($request->all());
        // return redirect()->route('logOut');
        return redirect()->route('home');
    }

    public function changePassword(Request $request){
        $id = Auth::user()->id;
        $account = User::find($id);
        if(Hash::check($request->cur_password, $account->password)){
            if($request->password==$request->confirm_pass){
                $account->update(['password' => Hash::make($request->password)]);
                return redirect()->back()->with('change_pass_success', 'Thay đổi mật khẩu thành công !');
            }else{
                return redirect()->back()->with('change_pass_not_success', 'Mật khẩu nhập lại không đúng !');
            }
        }else{
            return redirect()->back()->with('change_pass_not_success', 'Mật khẩu không đúng !');
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Account  $account
     * @return \Illuminate\Http\Response
     */
    public function edit(Account $account)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Account  $account
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Account $account)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Account  $account
     * @return \Illuminate\Http\Response
     */
    public function destroy(Account $account)
    {
        //
    }
}
