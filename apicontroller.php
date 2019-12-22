<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use App\Batdetail;

class apicontroller extends Controller
{
    public function insertapi(Request $request)
    {
       $batdetail = new Batdetail;
       $batdetail->capacity = $request->name;
       $batdetail->save();
    }
}
