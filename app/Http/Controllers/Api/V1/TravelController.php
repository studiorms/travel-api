<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Http\Resources\TravelResource;
use App\Models\Travel;

class TravelController extends Controller
{
    public function index()
    {
        $travel = Travel::where(['is_public' => 1])->paginate();
        return TravelResource::collection($travel);
    }
}
