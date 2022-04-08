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
use App\Models\User;
class Users extends Config
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

    public function getUsers()
    {
        return view('admins');
    }

    public function getResponders()
    {
        return view('responders');
    }

    public function getResidents()
    {
        return view('residents');
    }

    public function getSubRoles()
    {
        $subRoles = $this->getSubRoleModel()->getAllSubRoles();
        return view('subroles', compact('subRoles'));
    }

    public function createSubRole()
    {
        $request_params = Request::input();
        unset($request_params['_token']);
        //dd($request_params);
        $result['role_id'] = $request_params['role'];
        $result['title'] = $request_params['title'];
        //dd($result);
        $response = $this->getSubRoleModel()->insert($result);
        return response()->json(
        [
            'success' => true,
            'message' => 'Data inserted successfully.'
        ]
        );
        //dd($response);
    }


    public function onlineResponders() {
        return view('onlineResponders');
    }

    

    

    


}
