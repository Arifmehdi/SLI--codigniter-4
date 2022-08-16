<?php

namespace App\Controllers;
use App\Models\Slider;
use App\Models\Founder;
use App\Models\Contact;

class Home extends BaseController
{
    public function index()
    {

        $slider = new SLider();
        $data['list'] = $slider->findAll();

        $founder = new Founder();
        $data['find'] = $founder->findAll();
        
        
        return view('home',$data);
    }

    public function about()
    {
        return view ('about');
    }

    public function service()
    {
        return view('service');
    }

    public function team()
    {
        return view('team');
    }

    public function news()
    {
        return view('news');
    }

    public function contact()
    {
        $contact = new Contact();
        $data['list'] = $contact->findAll(); 
        return view('contact',$data);
    }

    public function layout()
    {
        $contact = new Contact();
        $data['list'] = $contact->findAll(); 
        print_r($data);
        return view('layout',$data);
    }

    public function login()
    {
        
        return view('login');
    }

    public function login_action()
    {
        
        echo "ok";
    }

    
}
