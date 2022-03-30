<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App\Http\Services;

/**
 * Description of Home
 *
 * @author 
 */

use App\Http\Services\Config;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Request;
use Session;
use Validator;
use Response;
use Carbon\Carbon;
use App\Models\Role;
use App\Models\SubRole;
class Roles extends Config
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function login()
    {
        return view('dashboard');
    }

    public function getRoles()
    {
        $roles = $this->getRoleModel()->getAllRoles();
        return view('roles', compact('roles'));
    }

    public function getSubRoles()
    {
        $subRoles = $this->getSubRoleModel()->getAllSubRoles();
        return view('subroles', compact('subRoles'));
    }

    

    


}
