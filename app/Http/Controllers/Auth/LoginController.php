<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Socialite;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = "/";

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except([ 'logout', 'loginWithProvider', 'handle', 'index']);
    }

    public function loginWithProvider(Request $request, $provider)
    {
        return Socialite::with($provider)->redirect();
    }

    public function handle(Request $request, $provider)
    {
        $returnUrl = "/";

        if ($request->has("returnUrl"))
            $returnUrl = $request->input("returnUrl");

        $user = Socialite::driver($provider)->user();

        $laravelUser = User::where("email", $user->email)->first();

        if ($laravelUser == null)
        {
            $laravelUser = User::create([
                "name" => $user->name,
                "email" => $user->email,
                "password" => str_random(8)
            ]);
        }

        Auth::login($laravelUser);

        return redirect($returnUrl);
    }
}
