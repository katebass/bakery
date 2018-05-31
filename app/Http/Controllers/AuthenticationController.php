<?php

namespace App\Http\Controllers;

use Auth;
use App\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\SignupRequest;
use App\Repositories\AdminRepository;

class AuthenticationController extends Controller
{

  public function login(Request $request){

	if (! Auth::guard('admin')->attempt( ['login' => $request->login, 'password' => $request->password] ) )
		{
			return back()->withErrors([

				'message' => 'Invalid login or password:('

			]);
		}

		return redirect()->home();
  }

  public function destroy()
  {
  	Auth::guard('admin')->logout();
  	
	return redirect()->home();
  }
}
