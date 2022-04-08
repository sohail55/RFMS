<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

use App\Http\Services\Home;
use App\Http\Services\Roles;
use App\Http\Services\Users;
use App\Http\Services\Complaints;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;


    public function getUserService()
    {
        return new Users();
    }

    public function getHomeService()
    {
        return new Home();
    }

    public function getRolesService()
    {
        return new Roles();
    }

    public function getComplaintsService()
    {
        return new Complaints();
    }

    public function exception($ex)
    {
        dd($ex->getMessage(), $ex->getLine(), $ex->getFile());
    }
}
