<?php

namespace App\Http\Controllers\API\V1;

use App\Http\Controllers\Controller;
use App\Http\Requests\API\V1\Country\StoreCountryRequest;
use App\Http\Requests\API\V1\Country\UpdateCountryRequest;
use App\Http\Resources\API\V1\Country\CountryCollection;
use App\Http\Resources\API\V1\Country\CountryResource;
use App\Models\API\V1\Country;
use Illuminate\Http\Request;

class CountryController extends Controller
{
    public function index()
    {
        return new CountryCollection(Country::all());
    }

    public function store(StoreCountryRequest $request)
    {
        $country = Country::create($request->all());
        return response()->json([
            'res' => true,
            'data' => $country,
            'msg' => 'Guardado correctamente'
        ],201);
    }

    public function show(Country $CountryId)
    {
        return response()->json(new CountryResource($CountryId),200);
    }

    public function update(UpdateCountryRequest $request, Country $CountryId)
    {
        $CountryId->update($request->all());
        return response()->json([
            'res' => true,
            'data' => $CountryId,
            'msg' => 'Actualizado correctamente'
        ],201);
    }

    public function destroy(Country $request, $CountryId)
    {
        $country = Country::findOrFail($CountryId);

        $country->delete();

        return response()->json([
            'res' => true,
            'data' => $country,
            'message' => 'Eliminado correctamente'
        ],200);
    }
}
