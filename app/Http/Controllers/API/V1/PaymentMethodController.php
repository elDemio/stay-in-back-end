<?php

namespace App\Http\Controllers\API\V1;

use App\Http\Controllers\Controller;
use App\Http\Requests\API\V1\PaymentMethod\StorePaymentMethodRequest;
use App\Http\Requests\API\V1\PaymentMethod\UpdatePaymentMethodRequest;
use App\Http\Resources\API\V1\PaymentMethod\PaymentMethodCollection;
use App\Http\Resources\API\V1\PaymentMethod\PaymentMethodResource;
use App\Models\API\V1\PaymentMethod;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class PaymentMethodController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return new PaymentMethodCollection(PaymentMethod::all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePaymentMethodRequest $request)
    {

        $PaymentMethod = new PaymentMethod($request->all());

        if ($request->hasFile('payment_icon')) {
            $image = $request->file('payment_icon');
            $ext = $image->extension();
            $file = time().'.'.$ext;
            $image->storeAs('public/payments', $file);
            $PaymentMethod->payment_icon = $file;
        }

        $PaymentMethod->save();
        return response()->json([
            'res' => true, //Retorna una respuesta
            'data' => $paymentMethod, //retorna toda la data
            'msg' => 'Guardado correctamente' //Retorna un mensaje
        ],201);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(PaymentMethod $PaymentMethodId)
    {
        return response()->json(new PaymentMethodResource($PaymentMethodId),200);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePaymentMethodRequest $request, PaymentMethod $PaymentMethodId)
    {
        $PaymentMethod=PaymentMethod::findOrFail($PaymentMethodId);
        if ($request->hasFile('payment_icon')){
            if (File::exists("storage/payments/".$PaymentMethod->payment_icon)) {
                File::delete("storage/payments/".$PaymentMethod->payment_icon);
            }
            $image = $request->file('payment_icon');
            $ext = $image->extension();
            $file = time().'.'.$ext;
            $image->storeAs('public/payments', $file);
            $PaymentMethod->payment_icon = $file;

            $request['payment_icon'] = $PaymentMethod->payment_icon;
        }

        $PaymentMethod->update([
            'name' =>$request->name,
            //$request->all(),
            "payment_icon"=>$PaymentMethod->payment_icon
        ]);
        
        return (new PaymentMethodResource($PaymentMethod))
        ->additional(['msg' => 'Actualizado correctamente'])
        ->response()
        ->setStatusCode(202);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(PaymentMethod $request, $PaymentMethodId)
    {
        $PaymentMethod = Category::findOrFail($PaymentMethodId);
        
        if (File::exists("storage/payments/".$PaymentMethod->payment_icon)) {
            File::delete("storage/payments/".$PaymentMethod->payment_icon);
        }

        $PaymentMethod->delete();

        return response()->json([
            'res' => true, //Retorna una respuesta
            'data' => $PaymentMethod, //retorna toda la data
            'message' => 'Eliminado correctamente'
        ],200);
    }
}
