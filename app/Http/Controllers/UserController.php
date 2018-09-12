<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use Illuminate\Support\Facades\Input;
use App\HourRegistration;
use Auth;
use Illuminate\Support\Facades\Redirect;
class UserController extends Controller
{

  public function showUser() {
    $user = Auth::user();
    $hours= HourRegistration::where('user_id' , $user['id'])->get();
    $allHours = HourRegistration::sum('hours');
    $total = $allHours * 4.56;
    return view('/profile', ['user' => $user, 'hours' => $hours, 'total' => $total]);
  }


    public function showLogin() {
            return View('login');
        }
        public function showRegister() {
                return View('register');
            }

        public function doLogin()
        {
        // validate the info, create rules for the inputs
        $rules = array(
            'email'    => 'required|email', // make sure the email is an actual email
            'password' => 'required|alphaNum|min:3' // password can only be alphanumeric and has to be greater than 3 characters
        );
            // create our user data for the authentication
            $userdata = array(
                'email'     => Input::get('email'),
                'password'  => Input::get('password')
            );

            // attempt to do the login
            if (Auth::attempt($userdata)) {

                // validation successful!
                // redirect them to the secure section or whatever
                // return Redirect::to('secure');
                // for now we'll just echo success (even though echoing in a controller is bad)
                echo 'SUCCESS!';

            } else {

                // validation not successful, send back to form
                return Redirect::to('/hour');

            }
}
    }
