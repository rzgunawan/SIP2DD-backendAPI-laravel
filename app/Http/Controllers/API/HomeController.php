<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function menu()
    {
        
         return [ 
            [
                "name" => "Beranda",
                "link" => "",
                "active" => true,
                "highlight" => false,
            ],

            [
                "name" => "Layanan",
                "link" => "",
                "active" => false,
                "highlight" => false,
            ],

            [
                "name" => "Berita",
                "link" => "",
                "active" => false,
                "highlight" => false,
            ],

            [
                "name" => "PEMDA",
                "link" => "",
                "active" => false,
                "highlight" => false,
            ],

            [
                "name" => "Regulasi",
                "link" => "",
                "active" => false,
                "highlight" => false,
            ],

            [
                "name" => "Dashboard",
                "link" => "",
                "active" => false,
                "highlight" => false,
            ],

            [
                "name" => "Kegiatan",
                "link" => "",
                "active" => false,
                "highlight" => false,
            ],

            [
                "name" => "Kontak",
                "link" => "",
                "active" => false,
                "highlight" => false,
            ]
        ];

     
    }

    public function highlight()
    {
        return [
            [
                "title" => "Title 1",
                "desc" => "This is description",
                "thumbnail" => "www.google.com"
            ],
            [
                "title" => "Title 1",
                "desc" => "This is description",
                "thumbnail" => "www.google.com"
            ],
            [
                "title" => "Title 1",
                "desc" => "This is description",
                "thumbnail" => "www.google.com"
            ],
            [
                "title" => "Title 1",
                "desc" => "This is description",
                "thumbnail" => "www.google.com"
            ],
            [
                "title" => "Title 1",
                "desc" => "This is description",
                "thumbnail" => "www.google.com"
            ],

        ];
    }

     public function pojaknas()
    {
        return [
            [
                "title" => "pojaknas 1",
                "desc" => "This is description",
                "thumbnail" => "www.google.com"
            ],
            [
                "title" => "pojaknas 1",
                "desc" => "This is description",
                "thumbnail" => "www.google.com"
            ],
            [
                "title" => "pojaknas 1",
                "desc" => "This is description",
                "thumbnail" => "www.google.com"
            ],
            [
                "title" => "pojaknas 1",
                "desc" => "This is description",
                "thumbnail" => "www.google.com"
            ],
            [
                "title" => "pojaknas 1",
                "desc" => "This is description",
                "thumbnail" => "www.google.com"
            ],
            
        ];
    }

    public function layanan()
    {
        return [
            [
                "title" => "layanan 1",
                "desc" => "This is description",
                "thumbnail" => "www.google.com"
            ],
            [
                "title" => "layanan 1",
                "desc" => "This is description",
                "thumbnail" => "www.google.com"
            ],
            [
                "title" => "layanan 1",
                "desc" => "This is description",
                "thumbnail" => "www.google.com"
            ],
            [
                "title" => "layanan 1",
                "desc" => "This is description",
                "thumbnail" => "www.google.com"
            ],
            [
                "title" => "layanan 1",
                "desc" => "This is description",
                "thumbnail" => "www.google.com"
            ],
            
        ];
    }

    public function galeri()
    {
        return [
            [
                "title" => "galeri 1",
                "desc" => "This is description",
                "thumbnail" => "www.google.com"
            ],
            [
                "title" => "galeri 1",
                "desc" => "This is description",
                "thumbnail" => "www.google.com"
            ],
            [
                "title" => "galeri 1",
                "desc" => "This is description",
                "thumbnail" => "www.google.com"
            ],
            [
                "title" => "galeri 1",
                "desc" => "This is description",
                "thumbnail" => "www.google.com"
            ],
            [
                "title" => "galeri 1",
                "desc" => "This is description",
                "thumbnail" => "www.google.com"
            ],
            
        ];
    }

    public function event()
    {
        return [
            [
                "title" => "event 1",
                "desc" => "This is description",
                "thumbnail" => "www.google.com"
            ],
            [
                "title" => "event 1",
                "desc" => "This is description",
                "thumbnail" => "www.google.com"
            ],
            [
                "title" => "event 1",
                "desc" => "This is description",
                "thumbnail" => "www.google.com"
            ],
            [
                "title" => "event 1",
                "desc" => "This is description",
                "thumbnail" => "www.google.com"
            ],
            [
                "title" => "event 1",
                "desc" => "This is description",
                "thumbnail" => "www.google.com"
            ],
            
        ];
    }

    public function pencarian(Request $request)
    {
         $form_search = [
            'search' => $request->search,
            'category' => $request->category,
        ];

        return $form_search;
    }


}
