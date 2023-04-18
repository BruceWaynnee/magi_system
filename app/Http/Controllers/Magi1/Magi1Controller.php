<?php

namespace App\Http\Controllers\Magi1;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Magi1Controller extends Controller
{

    /**
     * Show MAGI 1 login form.
     * @return \Illuminate\Http\Response
     */
    public function magi1Login(){
        return view('authentication.login');
    }

    /**
     * Handle MAGI 1 income authentication request.
     * @param \App\Http\Requests\Auth\LoginRequest $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function login(Request $request)
    {
        // validate requests
        $request->validate([
            'username' => 'required|string|max:255',
            'password' => 'required|string',
        ]);

        $userCredentials = $request->only('username', 'password');

        // dump( Auth::attempt($userCredentials) );
        // dump( 'INSIDE MAGI 1 LOGIN CONTROLLER' );
        // dd('reach to the end of line!');

        // user validation
        if( Auth::attempt($userCredentials) ){
            $request->session()->regenerate();
            
            // build the magi 1 dashboard to complete this part !
            return redirect()
                ->intended(RouteServiceProvider::MAGI1DASHBOARD)
                ->with('hasMessage', [
                    'type'    => 'success',
                    'message' => 'Succesful logged into MAGI 1',
                ]);
        } else {
            return back()->with('hasMessage', [
                    'type'    => 'error', 
                    'message' => 'User credentials does not match any existing data!'
                ]
            );
        };
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index( Request $request )
    {
        return view('magi1_dashboard.pages.index');
    }
}
