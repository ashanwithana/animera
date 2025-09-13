<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Customer;
use App\Models\FrontendUser;
use App\Models\Pets;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;
use Inertia\Inertia;
use Laravel\Socialite\Facades\Socialite;
use BaconQrCode\Renderer\ImageRenderer;
use BaconQrCode\Renderer\Image\SvgImageBackEnd; 
use BaconQrCode\Renderer\RendererStyle\RendererStyle;
use BaconQrCode\Writer;

class PetsController extends Controller
{
 public function index(){

    $pets = Pets::with('media')->get();
    // dd($pets);
  
    return Inertia::render('Pets/index',['pets' => $pets]);
 }

 public function create(){
  
    return Inertia::render('Pets/add');
 }
 
 public function store(Request $request){

    // dd($request->all());
    $request->validate([
            'id' => ['nullable'],
            'pet_name' => ['required'],
            'type' => ['required'],
            'gender' => ['required'],
            'breed' => ['required'],
            'dob' => ['required'],
            'age' => ['required'],
            'pet_owner' => ['required'],
            'p_no' => ['required'],
            'email' => ['required'],
            'pet_image' => ['required', 'mimes:jpeg,jpg,png,webp', 'max:10000']
        ]);
        try{
           DB::beginTransaction();

            $pets = new Pets();
            $pets->pet_name = $request->pet_name;
            $pets->type = $request->type;
            $pets->gender = $request->gender;
            $pets->breed = $request->breed;
            $pets->dob = $request->dob;
            $pets->age = $request->age;
            $pets->pet_owner = $request->pet_owner;
            $pets->p_no = $request->p_no;
            $pets->email = $request->email;
          
            $pets->save();

            if ($request->hasFile('pet_image')) {
                // dd('dsds');
                $pets->addMedia($request->file('pet_image'))->toMediaCollection('Pet_Images');
                $pets->save();
            }

          // Generate QR
        $qrData = "http://127.0.0.1:8000/pet-history/{$pets->id}";

        $renderer = new ImageRenderer(
            new RendererStyle(300), // size
            new SvgImageBackEnd() // SVG output, no GD required
        );

        $writer = new Writer($renderer);
        $qrCode = $writer->writeString($qrData);

        $fileName = 'qr_'.$pets->id.'.svg';
        $filePath = storage_path('app/public/'.$fileName);
        file_put_contents($filePath, $qrCode);

        $pets->addMedia($filePath)->toMediaCollection('Pet_QRCodes');
           
            DB::commit();

            return redirect()->route('pets');
        }catch (Exception $ex) {
            dd($ex);
            DB::rollBack();
            return abort(500);
        }
 }
 public function edit($id, Request $request)
 {

    $pets = Pets::with('media')->find($id);

    return Inertia::render('Pets/add',['pets' => $pets]);

 }

 public function update(Request $request){

    $request->validate([
            'id' => ['nullable'],
            'pet_name' => ['required'],
            'type' => ['required'],
            'gender' => ['required'],
            'breed' => ['required'],
            'dob' => ['required'],
            'age' => ['required'],
            'pet_owner' => ['required'],
            'p_no' => ['required'],
            'email' => ['required'],
            'pet_image' => ['nullable', 'mimes:jpeg,jpg,png,webp', 'max:10000']
        ]);
        try{
           DB::beginTransaction();

            $pets = Pets::find($request->id);
            $pets->pet_name = $request->pet_name;
            $pets->type = $request->type;
            $pets->gender = $request->gender;
            $pets->breed = $request->breed;
            $pets->dob = $request->dob;
            $pets->age = $request->age;
            $pets->pet_owner = $request->pet_owner;
            $pets->p_no = $request->p_no;
            $pets->email = $request->email;
          
            $pets->save();

            if ($request->hasFile('pet_image')) {
                if ($pets->media) {
                    Storage::disk('public')->delete($pets->media);
                    $pets->clearMediaCollection('pet_image');
                }
                $pets->addMedia($request->file('pet_image'))->toMediaCollection('Pet_Images');
                $pets->save();
            }
            DB::commit();

            return redirect()->route('pets');
        }catch (Exception $ex) {
            dd($ex);
            DB::rollBack();
            Log::error($ex);
            return abort(500);
        }
 }
 public function destroy(Request $request)
    {
        // dd($request->all());
        try {
           Pets::destroy((array) $request->ids);
            return redirect()->route('pets');
        } catch (Exception $ex) {
            Log::error($ex);
            return abort(500);
        }
    }

    public function history($id)
{
   $pets = Pets::with('media')->findOrFail($id);

    // Render Vue page via Inertia and pass the pet data
    return Inertia::render('History/index', [
        'pets' => $pets
    ]);
}
    public function PastVaccines($id)
{
   $pets = Pets::with('media')->findOrFail($id);

    // Render Vue page via Inertia and pass the pet data
    return Inertia::render('Pvaccines/index', [
        'pets' => $pets
    ]);
}
    public function Treatments($id)
{
   $pets = Pets::with('media')->findOrFail($id);

    // Render Vue page via Inertia and pass the pet data
    return Inertia::render('Treatments/index', [
        'pets' => $pets
    ]);
}

}
