<?php

namespace App\Controllers;

class pages extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Home',
        ];
        return view('/pages/index', $data);
    }
    public function about(){
        $data = [
            'title' => 'About',
        ];
        return view('/pages/about', $data);
        
    }
    public function contact(){
        $data = [
            'title' => 'Contact',
        ];
        return view('/pages/contact', $data);
        
    }
 

}
