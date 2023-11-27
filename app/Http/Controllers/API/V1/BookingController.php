<?php

namespace App\Http\Controllers\API\V1;

use App\Http\Controllers\Controller;
use App\Http\Requests\API\V1\Booking\StoreBookingRequest;
use App\Http\Resources\API\V1\Booking\BookingCollection;
use App\Http\Resources\API\V1\Booking\BookingResource;
use App\Models\API\V1\Booking;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    public function index()
    {
        return new BookingCollection(Booking::all());
    }

    public function bookinguser()
    {
        return new BookingCollection(Booking::all()->where('user_id', auth()->user()->id));
    }

    public function bookingusers()
    {
        return new BookingCollection(Booking::all()->where('user_id', auth()->user()->id));
    }

    public function store(StoreBookingRequest $request)
    {
        $Booking = Booking::create($request->all());
        return response()->json([
            'res' => true,
            'data' => $Booking,
            'msg' => 'Guardado correctamente'
        ],201);
    }

    public function show(Booking $BookingId)
    {
        return response()->json(new BookingResource($BookingId),200);
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function bookingsByProperty($propertyId)
    {
        $bookings = Booking::where('property_id', $propertyId)->get();
        return new BookingCollection($bookings);
    }

    public function bookingsDatesByProperty($propertyId)
    {
        $bookings = Booking::where('property_id', $propertyId)->get(['dateini', 'datefini']);
        
        $dates = $bookings->map(function ($booking) {
            return [
                'dateini' => $booking->dateini,
                'datefini' => $booking->datefini,
            ];
        });

        return response()->json($dates, 200);
    }

    public function markBookingAsCompleted($bookingId)
    {
        $booking = Booking::find($bookingId);

        if (!$booking) {
            return response()->json(['message' => 'Reserva no encontrada'], 404);
        }

        $user = auth()->user();
        if ($booking->property->user_id !== $user->id) {
            return response()->json(['message' => 'No tienes permiso para modificar esta reserva'], 403);
        }

        $booking->update(['status' => 0]);

        return response()->json(['message' => 'Reserva marcada como completada'], 200);
    }

    public function destroy($id)
    {

    }
}
