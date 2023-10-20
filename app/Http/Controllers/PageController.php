<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function getIndex(){
       return view('BladeTemplate.page.trangchu'); 
    }
    public function getLoaiSP(){
        return view('BladeTemplate.page.loaisanpham');
    }
    public function getChitiet(){
        return view('BladeTemplate.page.chitietsanpham');
    }
    public function getLienhe(){
        return view('BladeTemplate.page.lienhe');
    }
    public function getAbout(){
        return view('BladeTemplate.page.about');
    }
}
