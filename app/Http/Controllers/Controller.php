<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

use App\Http\Services\Home;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;


    public function getUserService()
    {
        return new User();
    }

    public function getHomeService()
    {
        return new Home();
    }

    public function exception($ex)
    {
        dd($ex->getMessage(), $ex->getLine(), $ex->getFile());
    }
}
