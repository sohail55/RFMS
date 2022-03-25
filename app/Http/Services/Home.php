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
use App\ComplaintHistory;
use App\MembersBills;
use App\Role;
use Mail;
class Home extends Config
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

        return view('roles');
    }

    


}
