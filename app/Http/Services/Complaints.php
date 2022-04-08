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
class Complaints extends Config
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getNewComplaints()
    {
        return view('complaints.new');
    }
    public function getAssignedComplaints()
    {
        return view('complaints.assigned');
    }

    public function getResolvedComplaints()
    {
        return view('complaints.resolved');
    }

    public function getClosedComplaints()
    {
        return view('complaints.new');
    }

    public function getInProgressComplaints()
    {
        return view('complaints.inProgress');
    }
    

}
