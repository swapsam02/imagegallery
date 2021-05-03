<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use DB;

class Catogery extends Model
{
    protected $table = 'catogeries';

    protected $fillable = [
        'category_name', 'slug', 'img_url',
    ];

    public function getAllCatogeryList()
    {
        return Catogery::where('is_deleted', 0)->get();
    }

    public function saveCatogery(Request $request)
    {
        $saveResult = false;
        DB::beginTransaction();
        $data = $request->only('category_name','slug');
        $data['slug'] = str_slug($request->category_name);
        $data['img_url'] = $this->imageupload($request->file('img_url'), $data['slug']);

        $saveResult = Catogery::create($data);
        if($saveResult){
            DB::commit();
        }else{
            DB::rollBack();
        }
        return $saveResult;  
    }

    protected function imageupload($selectedimage, $folder){
        $imgpath = null;
        $image = $selectedimage;            
        $input['imagename'] = time().'.'.$image->getClientOriginalExtension();            
        $destinationPath = public_path('/images/'.$folder);
        if($image->move($destinationPath, $input['imagename'])){
            $imgpath = url('/images/'.$folder)."/".$input['imagename'];
        } 
        return $imgpath;
    } 
}
