<?php

namespace App\Http\Controllers;

use App\Picture;
use Illuminate\Http\Request;

use App\Http\Requests;
use Intervention\Image\Facades\Image;

class PictureController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home', ["pictures" => Picture::all()]);
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
        $files = $request->file('pictures');
        foreach ($files as $file) {
            if(strpos($file->getMimeType(), 'image') !== FALSE){
                $obj_picture = new Picture();
                $obj_picture->title = $file->getClientOriginalName();
                $obj_picture->save();

                $file = $file->move('pictures', $file->getClientOriginalName());
                $obj_picture->url = "pictures/" . $obj_picture->title;
                $img = Image::make($obj_picture->url);
                $img->resize(null, 300, function ($constraint) {
                    $constraint->aspectRatio();
                });
                $img->save('wall/' .$obj_picture->title);
                $obj_picture->urlLittle = 'wall/' .$obj_picture->title;
                $obj_picture->save();
            }
        }

        return $this->index();

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
}
