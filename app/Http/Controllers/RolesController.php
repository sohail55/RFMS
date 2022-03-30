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
            return $this->getRolesService()->getRoles();
        } catch (\Exception $ex) {
            return $this->exception($ex);
        }
    }

    public function getSubRoles()
    {
        try {
            return $this->getRolesService()->getSubRoles();
        } catch (\Exception $ex) {
            return $this->exception($ex);
        }
    }
    
    
}
