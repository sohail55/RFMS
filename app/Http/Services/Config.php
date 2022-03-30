<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Config
 *
 * @author sohail
 */

namespace App\Http\Services;

use App\Models\User;
use App\Models\Role;
use App\Models\SubRole;


class Config
{
    //use \App\Http\Traits\CommonService;
    protected function getUserById($id)
    {
        $user = User::where('id', $id)->whereNotIn("status", ["D"])->first();
        return !empty($user) ? $user : [];
    }

    public function getRoleModel()
    {
        return new Role();
    }

    public function getSubRoleModel()
    {
        return new SubRole();
    }
    
    
}
