<?php
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;

/**
 * Created by PhpStorm.
 * User: ahtem
 * Date: 12/25/14
 * Time: 10:14 AM
 */


class AuthenticationController extends BaseController{
    /**
     * @return view of login page
     */
    public function getLoginPage(){
        return View::make('CMS/login');
    }

    /**
     * @param user name
     * @param pass word
     * look for match in db redirect to dashboard in true case
     * other wise redirect back with error.
     */
    public function postSignIn(){

        $validator = Validator::make( Input::all(), array(
                                                        'password'=>'required',
                                                        'username'=>'required') );
        // not the case if done by js validator .
        if( $validator->fails() ){
            return Redirect::route('cms/login')
                                ->withErrors($validator)
                                ->withInput();
        }else{
            $auth = Auth::attempt( array(
                                    'username' => Input::get('username'),
                                    'password' => Input::get('password'),
                                    'active'  => 1 // is user activated registration sanded to entered email address
            ), false);

            if( $auth ){
                return Redirect::intended('/cms/dashboard');
            }else{
                return Redirect::route( 'cms/login' )
                        ->with( array( 'message' => 'Username or Password incorrect !' ) );
            }
        }

        return Redirect::route('cms/login')
                        ->with( array( 'message' => 'There was a problem signing in .' ) );
    }

    public function getLogOut(){
        Auth::logout();
        return Redirect::to( '/' );
    }
}