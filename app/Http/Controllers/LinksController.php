<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Link;
use Tuupola\Base62;
use Illuminate\Support\Facades\Auth;

class LinksController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        // Validation
        $this->validate($request, [
            'long_url' => 'string|url'
        ]);

        // Storing in database
        $link = new Link;
        $link->url = $request->input('long_url');
        if(Auth::user()){
            $link->user_id = Auth::user()->id;
        }
        $link->save();

        // Returning new short url
        $base62 = new Base62;
        $hashed = $base62->encode(random_bytes(1) . $link->id);
        $link->hash = $hashed;
        $link->save();
        return route('link.redirect', $hashed);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function redirect($hash)
    {
        $link = Link::where('hash', $hash)->firstOrFail();
        return redirect($link->url);
    }
}
