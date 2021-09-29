<?php

namespace App\Http\Controllers;

use App\Http\Requests\CarBrandCreateRequest;
use App\Http\Requests\CarBrandDeleteRequest;
use App\Http\Requests\CarBrandGetRequest;
use App\Http\Requests\CarBrandUpdateRequest;
use App\Models\CarBrand;

class CarBrandController extends Controller
{
    protected $model;

    public function __construct()
    {
        $this->model = new CarBrand();
    }

    public function get(CarBrandGetRequest $request)
    {
        $response = CarBrand::with("models")->get();
        return Response($response);
    }

    public function create(CarBrandCreateRequest $request)
    {
        try {
            $instance = $this->model;
            $instance->brand_name = $request->brand_name;
            $response = $instance->save();
            return Response($response);

        }catch (\Exception $exception){
            return Response($exception, 403);
        }
    }

    public function update(CarBrandUpdateRequest $request)
    {
        try {
            $instance = CarBrand::find($request->id);
            $instance->brand_name = $request->brand_name;
            $response = $instance->update();
            return Response($response);

        }catch (\Exception $exception){
            return Response($exception, 403);
        }
    }

    public function delete(CarBrandDeleteRequest $request)
    {
        try {
            $instance = CarBrand::find($request->id);
            $response = $instance->delete();
            return Response($response);

        }catch (\Exception $exception){
            return Response($exception, 403);
        }
    }
}
