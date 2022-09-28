<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class product{
    var $service;
    function __construct($service){
        $this-> service = $service;
    }
}

class pagescontroller extends Controller
{
    public function home()
    {
        return view('home');
    }
    public function product()
    {
        $p1 = new product ("Mobile");
        $p2 = new product ("Laptop");
        $p3= new product ("DSLR Camera");
        $p4 = new product ("Airpods");

        $product = array($p1,$p2,$p3,$p4);
        return view('product')->with('product',$product);
    }
    public function team()
    {
        $team = array("Owner","Developer","Manager","Marketing Manager");
        return view('team')->with('team',$team);
    }
    public function contact()
    {
        return view('contact');
    }
    public function about()
    {
        return view('about');
    }

}
