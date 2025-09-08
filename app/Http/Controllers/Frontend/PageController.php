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
    public function loginuser(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);
        if ($request->username === 'amith' && $request->password === 'amith@123') {
            $request->session()->put('user', 'amith');
            return redirect()->route('animera');
        } elseif ($request->username === 'jagath' && $request->password === 'jagath@90') {
            $request->session()->put('user', 'jagath');
            return redirect()->route('index');
        }elseif ($request->username === 'sanudi99' && $request->password === 'Taffy@S5') {
            $request->session()->put('user', 'sanudi');
            return redirect()->route('animera');
        }else {
            return redirect()->back()
                ->withInput()
                ->withErrors([
                    'username' => 'These credentials do not match our records.',
                ]);
        }
    }
     public function logout(Request $request)
    {
        $request->session()->forget('user');
        return redirect()->route('login');
    }
    public function staff()
    {

        return Inertia::render('Staff/index');
    }
    public function pets()
    {
        $pets = [
            [
                'code' => 'P001',
                'petname' => 'Taffy',
                'type' => 'Dog',
                'breed' => 'Labrador',
                'dob' => '25/09/2023',
                'petowner' => 'Sanudi Pinnawala',
            ],
            [
                'code' => 'P002',
                'petname' => 'Boxer',
                'type' => 'Dog',
                'breed' => 'German Shepherd',
                'dob' => '05/12/2024',
                'petowner' => 'Kaveen Tharana',
            ],
            [
                'code' => 'P003',
                'petname' => 'Lily',
                'type' => 'Cat',
                'breed' => 'Persian',
                'dob' => '19/01/2025',
                'petowner' => 'Sinali Sithahara',
            ],
            [
                'code' => 'P004',
                'petname' => 'Bella',
                'type' => 'Cat',
                'breed' => 'Ragdoll',
                'dob' => '05/03/2024',
                'petowner' => 'Nipuna Perera',
            ],
        ];


        return Inertia::render('Pets/index', ['pets' => $pets]);
    }
    public function animera()
    {

        return Inertia::render('Animera/index');
    }
    public function vaccines()
    {
        $vaccines = [
            [
                'code' => 'V001',
                'vaccinename' => 'Rabies Vaccine',
                'availability' => '50',
                'expiredate' => '08/10/2025',

            ],
            [
                'code' => 'V002',
                'vaccinename' => 'Parvovirus Vaccine',
                'availability' => '200',
                'expiredate' => '02/09/2026',

            ],
            [
                'code' => 'V003',
                'vaccinename' => 'Distemper Vaccine',
                'availability' => '350',
                'expiredate' => '26/01/2026',

            ],
            [
                'code' => 'V004',
                'vaccinename' => 'Feline Panleukopenia Vaccine',
                'availability' => '175',
                'expiredate' => '31/12.2025',

            ],
        ];
        return Inertia::render('Vaccines/index', ['vaccines' => $vaccines]);
    }
    public function users()
    {
        $staff = [
            [
                'code' => 'U001',
                'name' => 'Jagath Fernando',
                'type' => 'Veterinarian',
                'contactno' => '071-5316555',
                'email' => 'drjagath@gmail.com',

            ],
            [
                'code' => 'U001',
                'name' => 'Nalinda Perera',
                'type' => 'Staff',
                'contactno' => '071-7417722',
                'email' => 'stnalinda@gmail.com',

            ],
            [
                'code' => 'U001',
                'name' => 'Sachini Jayalath',
                'type' => 'Veterinarian',
                'contactno' => '071-8517451',
                'email' => 'drsachini@gmail.com',

            ],
            [
                'code' => 'U001',
                'name' => 'Rumesh Withana',
                'type' => 'Staff',
                'contactno' => '071-2317456',
                'email' => 'strumesh@gmail.com',

            ],
        ];
        return Inertia::render('Users/index', ['staff' => $staff]);
    }
    public function records()
    {

        return Inertia::render('Records/index');
    }
    public function crossing()
    {

        return Inertia::render('Crossing/index');
    }
    public function addpet()
    {

        return Inertia::render('Pets/add');
    }
    public function adduser()
    {

        return Inertia::render('Users/add');
    }
    public function addvaccine()
    {

        return Inertia::render('Vaccines/add');
    }
    public function mypets()
    {

        return Inertia::render('MyPets/index');
    }
    public function details()
    {

        return Inertia::render('Records/details');
    }
    public function view()
    {

        return Inertia::render('Crossing/view');
    }
    public function owner()
    {

        return Inertia::render('Crossing/details');
    }
    public function history()
    {

        return Inertia::render('History/index');
    }
    public function pvaccine()
    {

        return Inertia::render('Pvaccines/index');
    }
    public function treatments()
    {

        return Inertia::render('Treatments/index');
    }
}
