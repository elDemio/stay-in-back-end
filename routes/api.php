<?php

use App\Http\Controllers\API\V1\AmenityController as AmenityV1;
use App\Http\Controllers\API\V1\AuthenticationController;
use App\Http\Controllers\API\V1\BookingController as BookingV1;
use App\Http\Controllers\API\V1\CategoryController as CategoryV1;
use App\Http\Controllers\API\V1\CityController as CityV1;
use App\Http\Controllers\API\V1\CountryController as CountryV1;
use App\Http\Controllers\API\V1\PaymentMethodController as PaymentMethodV1;
use App\Http\Controllers\API\V1\PropertyController as PropertyV1;
use App\Http\Controllers\API\V1\PropertyTypeController as PropertyTypeV1;
use App\Http\Controllers\API\V1\RoomTypeController as RoomTypeV1;
use App\Http\Controllers\API\V1\StateController as StateV1;
use App\Http\Controllers\API\V1\SubcategoryController as SubcategoryV1;
use App\Http\Controllers\API\V2\PropertyTypeController as PropertyTypeV2;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::group(['prefix'=>'v1'],
function(){

    //Register Version 1
    Route::post('register', [AuthenticationController::class,'register']);

    //Login Version 1
    Route::post('login', [AuthenticationController::class,'login']);

    //Home
    Route::get('home', [PropertyV1::class,'index']);
    Route::get('home/{PropertyId}', [PropertyV1::class,'show']);
    Route::get('categories', [CategoryV1::class,'index']);
});

Route::group(['prefix'=>'v1','middleware'=> ['auth:sanctum']],
function(){
    //Cerrar sesion
    Route::get('cerrarsesion',[AuthenticationController::class,'cerrarSesion']);

    //Property Type Version 1
    Route::get('propertiestypes', [PropertyTypeV1::class,'index']);
    Route::post('propertiestypes', [PropertyTypeV1::class,'store']);
    Route::get('propertiestypes/{PropertyTypeId}', [PropertyTypeV1::class,'show']);
    Route::put('propertiestypes/{PropertyTypeId}', [PropertyTypeV1::class,'update']);
    Route::delete('propertiestypes/{PropertyTypeId}', [PropertyTypeV1::class,'destroy']);

    //Country Version 1
    Route::get('countries', [CountryV1::class,'index']);
    Route::post('countries', [CountryV1::class,'store']);
    Route::get('countries/{CountryId}', [CountryV1::class,'show']);
    Route::put('countries/{CountryId}', [CountryV1::class,'update']);
    Route::patch('countries/{CountryId}', [CountryV1::class,'update']);
    Route::delete('countries/{CountryId}', [CountryV1::class,'destroy']);

    //Payment Method
    Route::get('paymentmethods', [PaymentMethodV1::class,'index']);
    Route::post('paymentmethods', [PaymentMethodV1::class,'store']);
    Route::get('paymentmethods/{PaymentMethodId}', [PaymentMethodV1::class,'show']);
    Route::put('paymentmethods/{PaymentMethodId}', [PaymentMethodV1::class,'update']);
    Route::patch('paymentmethods/{PaymentMethodId}', [PaymentMethodV1::class,'update']);
    Route::delete('paymentmethods/{PaymentMethodId}', [PaymentMethodV1::class,'destroy']);

    //Room Type Version 1
    Route::get('roomstypes', [RoomTypeV1::class,'index']);
    Route::post('roomstypes', [RoomTypeV1::class,'store']);
    Route::get('roomstypes/{RoomTypeId}', [RoomTypeV1::class,'show']);
    Route::put('roomstypes/{RoomTypeId}', [RoomTypeV1::class,'update']);
    Route::delete('roomstypes/{RoomTypeId}', [RoomTypeV1::class,'destroy']);

    //State Version 1
    Route::get('states', [StateV1::class,'index']);
    Route::post('states', [StateV1::class,'store']);
    Route::get('states/{StateId}', [StateV1::class,'show']);
    Route::put('states/{StateId}', [StateV1::class,'update']);
    Route::patch('states/{StateId}', [StateV1::class,'update']);
    Route::delete('states/{StateId}', [StateV1::class,'destroy']);

    //City Version 1
    Route::get('cities', [CityV1::class,'index']);
    Route::post('cities', [CityV1::class,'store']);
    Route::get('cities/{CityId}', [CityV1::class,'show']);
    Route::put('cities/{CityId}', [CityV1::class,'update']);
    Route::patch('cities/{CityId}', [CityV1::class,'update']);
    Route::delete('cities/{CityId}', [CityV1::class,'destroy']);

    //Category Version 1
    Route::post('categories', [CategoryV1::class,'store']);
    Route::get('categories/{CategoryId}', [CategoryV1::class,'show']);
    Route::put('categories/{CategoryId}', [CategoryV1::class,'update']);
    Route::delete('categories/{CategoryId}', [CategoryV1::class,'destroy']);

    //Subcategory Version 1
    Route::get('subcategories', [SubcategoryV1::class,'index']);
    Route::post('subcategories', [SubcategoryV1::class,'store']);
    Route::get('subcategories/{SubcategoryId}', [SubcategoryV1::class,'show']);
    Route::put('subcategories/{SubcategoryId}', [SubcategoryV1::class,'update']);
    Route::delete('subcategories/{SubcategoryId}', [SubcategoryV1::class,'destroy']);

    //Amenity Version 1
    Route::get('amenities', [AmenityV1::class,'index']);
    Route::post('amenities', [AmenityV1::class,'store']);
    Route::get('amenities/{AmenityId}', [AmenityV1::class,'show']);
    Route::put('amenities/{AmenityId}', [AmenityV1::class,'update']);
    Route::delete('amenities/{AmenityId}', [AmenityV1::class,'destroy']);

    //Property Version 1
    Route::get('homeusers', [PropertyV1::class,'propertyuser']);
    Route::get('search/properties/{field}/{query}', [PropertyV1::class,'search']);
    Route::get('properties', [PropertyV1::class,'index']);
    Route::post('properties', [PropertyV1::class,'store']);
    Route::post('propertiesrole/{PropertyId}', [PropertyV1::class,'updaterole']);
    Route::get('properties/{PropertyId}', [PropertyV1::class,'show']); 
    Route::put('properties/{PropertyId}', [PropertyV1::class,'update']);
    Route::delete('properties/{PropertyId}', [PropertyV1::class,'destroy']);

    //Booking Version 1
    Route::get('bookings', [BookingV1::class,'index']);
    Route::get('bookingsuser', [BookingV1::class,'bookinguser']);
    Route::get('/bookings/property/{propertyId}', [BookingV1::class,'bookingsByProperty']);
    Route::get('/bookings/property/{propertyId}/dates',[BookingV1::class,'bookingsDatesByProperty']);
    Route::post('bookings', [BookingV1::class,'store']);
    Route::put('bookings/{bookingId}/complete', [BookingV1::class,'markBookingAsCompleted']);
    Route::post('bookings/{BookingId}', [BookingV1::class,'updaterole']);
    Route::get('bookings/{BookingId}', [BookingV1::class,'show']); 
    Route::put('bookings/{BookingId}', [BookingV1::class,'update']);
    Route::delete('bookings/{BookingId}', [BookingV1::class,'destroy']);
});

Route::group(['prefix'=>'v2','middleware'=> ['auth:sanctum']],
function(){
    //Property Type Version 2
    Route::get('propertiestypes', [PropertyTypeV2::class,'index']);
    Route::post('propertiestypes', [PropertyTypeV2::class,'store']);
    Route::get('propertiestypes/{PropertyTypeId}', [PropertyTypeV2::class,'show']);
    Route::put('propertiestypes/{PropertyTypeId}', [PropertyTypeV2::class,'update']);
    Route::delete('propertiestypes/{PropertyTypeId}', [PropertyTypeV2::class,'destroy']);
});