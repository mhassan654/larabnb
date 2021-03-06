<?php

namespace App\Http\Controllers\Api;

use App\Models\Bookable;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BookableAvailabilityController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke($id,Request $request)
    {
        $data = $request->validate([
        'from'=>'required|date_format:Y-m-d|after_or_equal:now',
        'to'=>'required|date_format:Y-m-d|after_or_equal:from',
    ]);

    $bookable = Bookable::findorFail($id);
   return $bookable->bookings()->betweenDates($data['from'],$data['to'] )->count();
// dd($data);
    }
}