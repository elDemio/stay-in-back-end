<?php

namespace App\Http\Controllers\API\V1;

use App\Http\Controllers\Controller;
use App\Http\Requests\API\V1\City\StoreCityRequest;
use App\Http\Requests\API\V1\City\UpdateCityRequest;
use App\Http\Resources\API\V1\City\CityCollection;
use App\Http\Resources\API\V1\City\CityResource;
use App\Models\API\V1\City;
use Illuminate\Http\Request;

class CityController extends Controller
{
    public function index()
    {
        return new CityCollection(City::all());
    }

    public function store(StoreCityRequest $request)
    {
        $City = City::create($request->all());
        return response()->json([
            'res' => true,
            'data' => $City,
            'msg' => 'Guardado correctamente'
        ],201);
    }

    public function show(City $CityId)
    {
        return response()->json(new CityResource($CityId),200);
    }

    public function update(UpdateCityRequest $request, City $CityId)
    {
        $CityId->update($request->all());
        return response()->json([
            'res' => true,
            'data' => $CityId,
            'msg' => 'Actualizado correctamente'
        ],200);
    }

    public function destroy(City $request, $CityId)
    {
        $City = City::findOrFail($CityId);

        $City->delete();

        return response()->json([
            'res' => true,
            'data' => $City,
            'message' => 'Eliminado correctamente'
        ],200);
    }
}
