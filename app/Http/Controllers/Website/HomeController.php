<?php

namespace App\Http\Controllers\Website;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function index() {

        return view('website.views.index');

    }

    public function create() {

        dd('create');

    }

    public function store() {

        dd('store');
        
    }

    public function show() {
        
        dd('show');

    }

    public function edit($id) {

        dd('edit');

    }

    public function update($id) {

        dd('updated');

    }

    public function destory($id) {

        dd('destroy');
        
    }
}   
