<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\Login;
use App\Http\Requests\userSignupInfo;
use App\Http\Requests\updateUserPassword;

class LoginController extends Controller
{

    public function login()
    {
        try {
            //dd('i am here');
            return $this->getHomeService()->login();
        } catch (\Exception $ex) {
            return $this->exception($ex);
        }
    }
    

    public function forgotPassword()
    {
        try {
            return $this->getHomeService()->forgotPassword();
        } catch (\Illuminate\Database\QueryException $ex) {
            return $this->exception($ex);
        } catch (\Exception $ex) {
            return $this->exception($ex);
        }
    }

    public function recoverPassword()
    {
        try {
            return $this->getHomeService()->recoverPassword();
        } catch (\Illuminate\Database\QueryException $ex) {
            return $this->exception($ex);
        } catch (\Exception $ex) {
            return $this->exception($ex);
        }
    }

    public function changePassword()
    {
        try {
            return $this->getHomeService()->changePassword();
        } catch (\Illuminate\Database\QueryException $ex) {
            return $this->exception($ex);
        } catch (\Exception $ex) {
            return $this->exception($ex);
        }
    }

    public function updatePassword()
    {
        try {
            return $this->getHomeService()->updatePassword();
        } catch (\Illuminate\Database\QueryException $ex) {
            return $this->exception($ex);
        } catch (\Exception $ex) {
            return $this->exception($ex);
        }
    }

    public function updateNewPassword(updateUserPassword $request)
    {
        try {
            return $this->getHomeService()->updateNewPassword();
        } catch (\Illuminate\Database\QueryException $ex) {
            return $this->exception($ex);
        } catch (\Exception $ex) {
            return $this->exception($ex);
        }
    }

    
    public function signout()
    {
        try {
            \Illuminate\Support\Facades\Auth::logout();
            \Illuminate\Support\Facades\Session::flush();
            \Session::forget('userInfo');
            return redirect()->route('login')->with('success_message', 'You have logged out successfully');
        } catch (\Illuminate\Database\QueryException $ex) {
            return $this->exception($ex);
        } catch (\Exception $ex) {
            return $this->exception($ex);
        }
    }

    public function newPassword()
    {
        try {
            return $this->getHomeService()->newPassword();
        } catch (\Illuminate\Database\QueryException $ex) {
            return $this->exception($ex);
        } catch (\Exception $ex) {
            return $this->exception($ex);
        }
    }

    public function setPassword()
    {
        try {
            return $this->getHomeService()->setPassword();
        } catch (\Illuminate\Database\QueryException $ex) {
            return $this->exception($ex);
        } catch (\Exception $ex) {
            return $this->exception($ex);
        }
    }

    
    
}
