<?php

namespace App\Http\Controllers;
use App\Http\Resources\FoodResource;
use App\Http\Traits\ApiResponse;
use App\Models\Food;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FoodController extends Controller
{
    use ApiResponse;
    public function index():JsonResponse
    {
        $foods = Food::all();

    return $this->successResponse(FoodResource::collection($foods));
    }

}
