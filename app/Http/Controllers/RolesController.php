<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\Login;
use App\Http\Requests\userSignupInfo;
use App\Http\Requests\updateUserPassword;

class RolesController extends Controller
{

    public function getRoles()
    {
        try {
            return $this->getHomeService()->getRoles();
        } catch (\Exception $ex) {
            return $this->exception($ex);
        }
    }
    
    
}
