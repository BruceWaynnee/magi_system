<?php

namespace App\Http\Controllers\Magi1;
use App\Http\Controllers\Controller;

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

        // dump( $request->all() );
        // dump( 'INSIDE MAGI 1 LOGIN CONTROLLER' );
        // dump( Auth::attempt($userCredentials) );
        // dd('reach to the end of line!');

        // user validation
        if( Auth::attempt($userCredentials) ){
            $request->session()->regenerate();
            
            // build the magi 1 dashboard to complete this part !
            return redirect();
        } else {
            return back()->with('hasMessage', [
                    'type' => 'error', 
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
    public function index()
    {
        dd('INSIDE MAGI 1 PAGE!');
    }
}
