<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // get list kategori

        // get list news
        return [
            [
                "title" => "Berita 1",
                "desc" => "This is description",
                "thumbnail" => "www.google.com"
            ],
            [
                "title" => "Berita 1",
                "desc" => "This is description",
                "thumbnail" => "www.google.com"
            ],
            [
                "title" => "Berita 1",
                "desc" => "This is description",
                "thumbnail" => "www.google.com"
            ],
            [
                "title" => "Berita 1",
                "desc" => "This is description",
                "thumbnail" => "www.google.com"
            ],
            [
                "title" => "Berita 1",
                "desc" => "This is description",
                "thumbnail" => "www.google.com"
            ],

        ];
    }

    public function kategori(Request $request)
    {

        $kategori_id = $kategori->id;

        if($kategori_id != null) {
            return [
                [
                    "title" => "Berita kategori 1",
                    "desc" => "This is description",
                    "thumbnail" => "www.google.com"
                ],
                [
                    "title" => "Berita kategori 1",
                    "desc" => "This is description",
                    "thumbnail" => "www.google.com"
                ],
                [
                    "title" => "Berita kategori 1",
                    "desc" => "This is description",
                    "thumbnail" => "www.google.com"
                ],
                [
                    "title" => "Berita kategori 1",
                    "desc" => "This is description",
                    "thumbnail" => "www.google.com"
                ],
                [
                    "title" => "Berita kategori 1",
                    "desc" => "This is description",
                    "thumbnail" => "www.google.com"
                ],
            ];
        }else{
            return [
                "message" => "Invalid"
            ];
        }
    }

    public function pencarianberita(Request $request)
    {
         $form_search = [
            'search' => $request->search,
        ];

        return $form_search;
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
