<?php

namespace App\Http\Controllers\Api\v1;
use App\Http\Controllers\Controller;
use App\Http\Resources\ManufactureResource;
use App\Models\Manufacture;
use App\Traits\ApiResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class ManufactureController extends Controller
{
    use ApiResponse;
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        try {
            $manufacture = Manufacture::where('status', 1)->get();
            $manufacture = ManufactureResource::collection($manufacture);

            return $this->successResponse($manufacture, 'success');
        } catch (\Throwable $th) {
            Log::error($th);
            return $this->errorResponse($th, 500);
        }
    }
}
