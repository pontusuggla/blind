<?php

namespace App\Http\Controllers;

use App\Letterpair;
use Illuminate\Http\Request;
use \App\Http\Resources\Letterpair as LetterpairResource;

class LetterpairController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if( $letter = $request->get('letter') ) {
            $letterpairs = Letterpair::where('letterpair', 'like', $letter . '%')
                ->orderBy('letterpair')
                ->get();

            return LetterpairResource::collection($letterpairs);
        } else {
            $letterpair = Letterpair::inRandomOrder()->first();

            return LetterpairResource::make($letterpair);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $letterpair = Letterpair::findOrFail($id);

        return LetterpairResource::make($letterpair);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }
}
