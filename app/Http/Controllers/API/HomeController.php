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

    public function highlightdetail(Request $request)
    {
        $highlight_id = $request->id;

        if($highlight_id != null) {
            return [
                "title" => "Title 1",
                "desc" => "This is description",
                "thumbnail" => "www.google.com",
                "content" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce justo massa, luctus et vestibulum id, semper eget est. Integer in nisi mi. Pellentesque quam tortor, lacinia et metus vitae, condimentum ultricies ante. Nam a convallis enim, et finibus mi. Vivamus id vulputate lacus, sed volutpat sem. Nam scelerisque feugiat vestibulum. Vestibulum cursus augue in felis consequat tempus. Duis cursus ac felis vitae molestie. Aliquam semper porta placerat. Aenean facilisis varius neque, et malesuada sem finibus vel. Nulla eget mollis augue. Fusce elementum nunc nec felis tempor elementum."  
            ];
        }
        else{
            return [
                "message" => "Invalid"
            ];
        }
        
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

    public function pojaknasdetail(Request $request)
    {
        $pojaknas_id = $request->id;

        if($pojaknas_id != null) {
            return [
                "title" => "Pojaknas 1",
                "desc" => "This is description",
                "thumbnail" => "www.google.com",
                "content" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce justo massa, luctus et vestibulum id, semper eget est. Integer in nisi mi. Pellentesque quam tortor, lacinia et metus vitae, condimentum ultricies ante. Nam a convallis enim, et finibus mi. Vivamus id vulputate lacus, sed volutpat sem. Nam scelerisque feugiat vestibulum. Vestibulum cursus augue in felis consequat tempus. Duis cursus ac felis vitae molestie. Aliquam semper porta placerat. Aenean facilisis varius neque, et malesuada sem finibus vel. Nulla eget mollis augue. Fusce elementum nunc nec felis tempor elementum."  
            ];
        }else{
            return [
                "message" => "Invalid"
            ];
        }   
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

    public function layanandetail(Request $request)
    {
        $layanan_id = $request->id;

        if($layanan_id != null) {
            return [
                "title" => "Layanan 1",
                "desc" => "This is description",
                "thumbnail" => "www.google.com",
                "content" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce justo massa, luctus et vestibulum id, semper eget est. Integer in nisi mi. Pellentesque quam tortor, lacinia et metus vitae, condimentum ultricies ante. Nam a convallis enim, et finibus mi. Vivamus id vulputate lacus, sed volutpat sem. Nam scelerisque feugiat vestibulum. Vestibulum cursus augue in felis consequat tempus. Duis cursus ac felis vitae molestie. Aliquam semper porta placerat. Aenean facilisis varius neque, et malesuada sem finibus vel. Nulla eget mollis augue. Fusce elementum nunc nec felis tempor elementum."  
            ];
        }else{
            return [
                "message" => "Invalid"
            ];
        }
       
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

    public function kegiatan()
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

    public function kegiatandetail(Request $request)
    {
        return [
            "title" => "Layanan 1",
            "desc" => "This is description",
            "thumbnail" => "www.google.com",
            "content" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce justo massa, luctus et vestibulum id, semper eget est. Integer in nisi mi. Pellentesque quam tortor, lacinia et metus vitae, condimentum ultricies ante. Nam a convallis enim, et finibus mi. Vivamus id vulputate lacus, sed volutpat sem. Nam scelerisque feugiat vestibulum. Vestibulum cursus augue in felis consequat tempus. Duis cursus ac felis vitae molestie. Aliquam semper porta placerat. Aenean facilisis varius neque, et malesuada sem finibus vel. Nulla eget mollis augue. Fusce elementum nunc nec felis tempor elementum."  
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
