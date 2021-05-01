<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Services\PayUservice\Exception;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use App\Catogery;
use Session;

class GalleryController extends Controller
{
    public function __construct(Catogery $catogery)
    {
        $this->exception = 'home';
        $this->catogery = $catogery;
    }

    public function galleryCatogery(Request $request)
    {
        try{
            if($request->isMethod('post')){
                $validator = $this->getValidateCatogery($request->all());
                if($validator->fails()) {
                    return redirect()->back()->withErrors($validator)->withInput();
                }
                if($this->catogery->saveCatogery($request)){
                    Session::flash('msg','Catogery successfully save');
                    Session::flash('alert-class','success');
                    return redirect()->route('view-gallery');
                }else{
                    Session::flash('msg','Unable to add student.');
                    Session::flash('alert-class','danger');
                    return redirect()->route('view-gallery');
                }
            }
            $allCatogeryList = $this->catogery->getAllCatogeryList();
            return view('dashboard.gallery.index', compact('allCatogeryList'));
        }catch (\Exception $e){
            return redirect()->route($this->exception)->with('warning', $e->getMessage()); 
        }
    }

    public function gallerySubCatogery($catogery)
    {
        return view('dashboard.gallery.gallerySubCatogery', compact('catogery'));
    }

    protected function getValidateCatogery($data)
    {
        $rules = [
            'category_name' => 'required',
            'img_url' => 'required',
        ];
        $errmsg = [
            'catogery_name.required' => 'Please enter catogery name',
            'img_url.required' => 'Please upload image',
        ];
        return Validator::make($data, $rules, $errmsg);
    }
}
