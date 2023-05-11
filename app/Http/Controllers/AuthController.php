<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegisterCreateRequest;
use Illuminate\Support\Facades\Auth;
use App\Contracts\Services\AuthServiceInterface;
use App\Http\Requests\LoginRequest;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Carbon\Carbon;
use Illuminate\Support\Str;

class AuthController extends Controller
{
    private $authService;

    /**
     * @param AuthServiceInterface $authServiceInterface
     * @return void
     */

    public function __construct(AuthServiceInterface $AuthServiceInterface) {
        $this->authService = $AuthServiceInterface;
    }

    public function login(){
        return view('Auth.login');
    }

    public function registerUser(RegisterCreateRequest $request){
        $user = $this->authService->register($request->only([
            'name',
            'email',
            'password',
            'role',
            'image',
            'address',
            'gender',
            'age',
            'phone',
        ]));

        $imageName = time().'.'.$request->image->extension();

        $request->image->move(public_path('profile'), $imageName);

        return redirect()->route('auth.login')
            ->with('user',$user)
            ->with('message', 'Registered Successfully...');
    }

    public function LoginUser(Request $request){
        $credentials = $request->validate([
            'email' => ['required', 'email', 'exists:users,email'],
            'password' => ['required'],
        ]);

        $user = User::where('email', $credentials['email'])->first();

        if (Auth::attempt($credentials)) {
            $token = $user->createToken('token')->plainTextToken;
            if ($user->role == 0) {
                return redirect()->route('admin.index')
                    ->with('token',$token);
            } else {
                return redirect()->route('user.index')
                ->with('token',$token);
            }

        } else {
            return back()->withErrors(['email' => 'Invalid email or password']);
        }
    }

    //public function showForgetPasswordForm()
    //  {
    //     return view('auth.forgetPassword');
    //  }

      /**
       * Write code on Method
       *
       * @return response()
       */
      public function submitForgetPasswordForm(Request $request)
      {
          $request->validate([
              'email' => 'required|email|exists:users',
          ]);

          $token = Str::random(64);

          DB::table('password_resets')->insert([
              'email' => $request->email,
              'token' => $token,
              'created_at' => Carbon::now()
            ]);

          Mail::send('email.forgetpassword', ['token' => $token], function($message) use($request){
              $message->to($request->email);
              $message->subject('Reset Password');
          });

          return back()->with('message', 'We have e-mailed your password reset link!');
      }
      /**
       * Write code on Method
       *
       * @return response()
       */
    //  public function showResetPasswordForm($token) {
    //     return view('auth.forgetPasswordLink', ['token' => $token]);
    //  }

      /**
       * Write code on Method
       *
       * @return response()
       */
      public function submitResetPasswordForm(Request $request)
      {
          $request->validate([
              'email' => 'required|email|exists:users',
              'password' => 'required|string|min:6|confirmed',
              'password_confirmation' => 'required'
          ]);

          $updatePassword = DB::table('password_resets')
                              ->where([
                                'email' => $request->email,
                                'token' => $request->token
                              ])
                              ->first();

          if(!$updatePassword){
              return back()->withInput()->with('error', 'Invalid token!');
          }

          $user = User::where('email', $request->email)
                      ->update(['password' => Hash::make($request->password)]);

          DB::table('password_resets')->where(['email'=> $request->email])->delete();

          return redirect('/login')->with('message', 'Your password has been changed!');
      }



    public function register(){
        return view('Auth.register');
    }

    public function forgetpassword(){
        return view('Auth.forgetpassword');
    }

    public function reset(){
        return view('Auth.reset');
    }
}
