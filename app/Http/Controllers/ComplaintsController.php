<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\Login;
use App\Http\Requests\subRole;

class ComplaintsController extends Controller
{

    public function getNewComplaints()
    {
        try {
            return $this->getComplaintsService()->getNewComplaints();
        } catch (\Exception $ex) {
            return $this->exception($ex);
        }
    }

    public function getAssignedComplaints()
    {
        try {
            return $this->getComplaintsService()->getAssignedComplaints();
        } catch (\Exception $ex) {
            return $this->exception($ex);
        }
    }

    public function getResolvedComplaints()
    {
        try {
            return $this->getComplaintsService()->getResolvedComplaints();
        } catch (\Exception $ex) {
            return $this->exception($ex);
        }
    }

    public function getClosedComplaints()
    {
        try {
            return $this->getComplaintsService()->getClosedComplaints();
        } catch (\Exception $ex) {
            return $this->exception($ex);
        }
    }

    public function getInProgressComplaints()
    {
        try {
            return $this->getComplaintsService()->getInProgressComplaints();
        } catch (\Exception $ex) {
            return $this->exception($ex);
        }
    }

    



    
    
}
