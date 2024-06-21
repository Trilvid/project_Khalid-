<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index()
    {
        return view('Pages.index');
    }

    public function about(){
        return view('Pages.about');
    }

    public function contact(){
        return view('Pages.contact');
    }

    public function customersAgreement(){

        return view('Pages.customers_agreement');
    }

    public function education(){

        return view('Pages.education');
    }

    public function customers(){
        
        return view('Pages.customers');
    }
    
}
