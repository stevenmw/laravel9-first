<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Exception;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Post::where('body', 'like', '%voluptas%')->get();

        // Post::whereFullText('body', '%voluptas%')->get();

        Post::search('voluptas')->get();

        return 'ok';
        // $result = Str::snake('Steven M'); //print value as 'm_nevets'
        // return Str::reverse($result);
        // throw new Exception('error!');
        // return "ini adalah method index di Post Controller";
        // return Str::of('Steven_M')->snake()->reverse()->value; //laravel 8
        // return Str('Steven_M')->snake()->reverse()->value; //laravel 9
        // return redirect()->route('detail_post', ['id' => 10]); //laravel 8
        // return to_route('detail_post', ['id' => 10]); //laravel 9
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return "ini method create";
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return "Method show: $id";
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
}
