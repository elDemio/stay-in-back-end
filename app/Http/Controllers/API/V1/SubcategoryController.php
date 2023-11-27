<?php

namespace App\Http\Controllers\API\V1;

use App\Http\Controllers\Controller;
use App\Http\Requests\API\V1\Subcategory\StoreSubcategoryRequest;
use App\Http\Requests\API\V1\Subcategory\UpdateSubcategoryRequest;
use App\Http\Resources\API\V1\Subcategory\SubcategoryCollection;
use App\Http\Resources\API\V1\Subcategory\SubcategoryResource;
use App\Models\API\V1\Subcategory;
use Illuminate\Http\Request;

class SubcategoryController extends Controller
{
    public function index()
    {
        return new SubcategoryCollection(Subcategory::all());
    }

    public function store(StoreSubcategoryRequest $request)
    {
        $Subcategory = Subcategory::create($request->all());
        return response()->json([
            'res' => true,
            'data' => $Subcategory,
            'msg' => 'Guardado correctamente'
        ],201);
    }

    public function show(Subcategory $SubcategoryId)
    {
        return response()->json(new SubcategoryResource($SubcategoryId),200);
    }

    public function update(UpdateSubcategoryRequest $request, Subcategory $SubcategoryId)
    {
        $SubcategoryId->update($request->all());
        return response()->json([
            'res' => true,
            'data' => $SubcategoryId,
            'msg' => 'Actualizado correctamente'
        ],200);
    }

    public function destroy(Subcategory $request, $SubcategoryId)
    {
        $Subcategory = Subcategory::findOrFail($SubcategoryId);

        $Subcategory->delete();

        return response()->json([
            'res' => true,
            'data' => $Subcategory,
            'message' => 'Eliminado correctamente'
        ],200);
    }
}
