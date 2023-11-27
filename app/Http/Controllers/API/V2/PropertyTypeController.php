<?php

namespace App\Http\Controllers\API\V2;

use App\Http\Controllers\Controller;
use App\Http\Requests\API\V1\PropertyType\StorePropertyTypeRequest; //Store
use App\Http\Requests\API\V1\PropertyType\UpdatePropertyTypeRequest;
use App\Http\Resources\API\V1\PropertyType\PropertyTypeCollection; //Index
use App\Http\Resources\API\V1\PropertyType\PropertyTypeResource; //Show
use App\Models\API\V1\PropertyType; //Modelo
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class PropertyTypeController extends Controller
{
    public function index()
    {
        return new PropertyTypeCollection(PropertyType::all());
    }

    public function store(StorePropertyTypeRequest $request)
    {
        $propertytype = new PropertyType($request->all());

        if ($request->hasFile('icon_image')) {
            $image = $request->file('icon_image');
            $ext = $image->extension();
            $file = time().'.'.$ext;
            $image->storeAs('public/PropertyType', $file);
            $propertytype->icon_image = $file;
        }

        $propertytype->save();

        return response()->json([
            'res' => true,
            'data' => $propertytype,
            'msg' => 'Guardado correctamente'
        ],201);
    }

    public function show(PropertyType $PropertyTypeId)
    {
        return response()->json(new PropertyTypeResource($PropertyTypeId),200);
    }

    public function update(UpdatePropertyTypeRequest $request, $PropertyTypeId)
    {
        $PropertyType=PropertyType::findOrFail($PropertyTypeId);
        if ($request->hasFile('icon_image')){
            if (File::exists("storage/PropertyType/".$PropertyType->icon_image)) {
                File::delete("storage/PropertyType/".$PropertyType->icon_image);
            }
            $image = $request->file('icon_image');
            $ext = $image->extension();
            $file = time().'.'.$ext;
            $image->storeAs('public/PropertyType', $file);
            $PropertyType->icon_image = $file;

            $request['icon_image'] = $PropertyType->icon_image;
        }

        $PropertyType->update([
            'title' =>$request->title,
            "description"=>$request->description,
            "icon_image"=>$PropertyType->icon_image
        ]);
        
        return (new PropertyTypeResource($PropertyType))
        ->additional(['msg' => 'Actualizado correctamente'])
        ->response()
        ->setStatusCode(202);
    }

    public function destroy(PropertyType $request, $PropertyTypeId)
    {
        $propertytype = PropertyType::findOrFail($PropertyTypeId);
        
        if (File::exists("storage/PropertyType/".$propertytype->icon_image)) {
            File::delete("storage/PropertyType/".$propertytype->icon_image);
        }

        $propertytype->delete();

        return response()->json([
            'message' => 'Eliminado correctamente'
        ],200);
    }
}
