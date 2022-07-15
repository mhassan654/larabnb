<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Bookable;
use Illuminate\Http\Request;

class BookablesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return $this->successResponse('true',Bookable::all(),200);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Bookable  $bookable
     * @return \Illuminate\Http\Response
     */
    
    public function show($id)
    {
        $bookable = Bookable::find($id);
          
        if(isset($bookable)):
            return response()->json(['status'=>true, 'payload'=>$bookable]);

            // return $this->successResponse('true',$bookable->find($bookable),200);

        endif;

        return response()->json(['status'=>false, 'message'=>'Bookable id not found']);
       
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Bookable  $bookable
     * @return \Illuminate\Http\Response
     */
    public function edit(Bookable $bookable)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Bookable  $bookable
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Bookable $bookable)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Bookable  $bookable
     * @return \Illuminate\Http\Response
     */
    public function destroy(Bookable $bookable)
    {
        //
    }
}
