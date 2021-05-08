<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Services\PayUservice\Exception;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use App\Catogery;
use Session;

class SubCatogeryController extends Controller
{
    public function __construct(Catogery $catogery)
    {
        $this->exception = 'home';
        $this->catogery = $catogery;
    }

    public function gallerySubCatogery($catogery)
    {
        $catogeryList = $this->catogery->getCatogery($catogery);
        return view('dashboard.subcatogery.gallerySubCatogery', compact('catogeryList'));
    }
}
