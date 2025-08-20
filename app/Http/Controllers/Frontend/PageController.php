<?php

namespace App\Http\Controllers\Frontend;


use App\Http\Controllers\Controller;
use App\Models\Feature;
use App\Models\Manufacture;
use App\Models\Type;
use App\Models\Vehicle;
use App\Models\VehicleModel;
use App\Services\ApiClient\ApiClient;
use Illuminate\Http\Request;
use Inertia\Inertia;

class PageController extends Controller
{
   public function login()
    {
        
        return Inertia::render('Login/index');
    }
}
