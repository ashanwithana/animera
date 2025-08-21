<?php

namespace App\Http\Controllers\Frontend;


use App\Http\Controllers\Controller;
use App\Models\Feature;
use App\Models\Manufacture;
use App\Models\Type;
use App\Models\User;
use App\Models\Vehicle;
use App\Models\VehicleModel;
use App\Services\ApiClient\ApiClient;
use Illuminate\Http\Request;
use Inertia\Inertia;

class PageController extends Controller
{
   public function login()
    {
        // $users = User::where(['status' => 1])->get();
        // dd($users->all());
        return Inertia::render('Login/index');
    }
   public function staff()
    {
        
        return Inertia::render('Staff/index');
    }
   public function pets()
    {
        
        return Inertia::render('Pets/index');
    }
   public function animera()
    {
        
        return Inertia::render('Animera/index');
    }
   public function vaccines()
    {
        
        return Inertia::render('Vaccines/index');
    }
   public function users()
    {
        
        return Inertia::render('Users/index');
    }
}
