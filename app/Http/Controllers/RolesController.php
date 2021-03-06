<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\Login;
use App\Http\Requests\subRole;

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

    public function createSubRole(subRole $request)
    {
        try {
        	//dd('i am here again');
            return $this->getRolesService()->createSubRole();
        } catch (\Exception $ex) {
            return $this->exception($ex);
        }
    }
    
    
    
}
