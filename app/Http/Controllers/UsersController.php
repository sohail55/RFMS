<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\Login;
use App\Http\Requests\subRole;

class UsersController extends Controller
{

    public function getUsers()
    {
        try {
            return $this->getUserService()->getUsers();
        } catch (\Exception $ex) {
            return $this->exception($ex);
        }
    }

    public function getResponders()
    {
        try {
            return $this->getUserService()->getResponders();
        } catch (\Exception $ex) {
            return $this->exception($ex);
        }
    }

    public function getResidents()
    {
        try {
            return $this->getUserService()->getResidents();
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
