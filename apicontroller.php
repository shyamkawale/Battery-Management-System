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
        if	($request->has('name'))	{				
            $batdetail = new Batdetail;
            $batdetail->capacity = $request->name;
            $batdetail->save();
            echo "data inserted";  
         }
        else{
            echo "Please Enter Valid Parameter";  
        } 
        
    }

    
    public function deleteapi(Request $request)
    {
        
        if	($request->has('deleteid'))	{				
            $batdetail = new Batdetail;
            $batdetail->id = $request->deleteid;
            $batdetail = Batdetail::find($batdetail->id);
            $batdetail->delete();
            echo "data Deleted";  
         }
        else{
            echo "Please Enter Valid Parameter";  
        } 
        
    }

    public function updateapi(Request $request)
    {
        if	($request->has(['id','name']))	{				
            $batdetail =Batdetail::find($request->id);
            $batdetail->fill([
                'capacity'  => $request->name,
            ]);
            $batdetail->save();
            echo "data Updated";  
         }
        else{
            echo "Please Enter Valid Parameter";  
        } 
        
        
    }

    
}
