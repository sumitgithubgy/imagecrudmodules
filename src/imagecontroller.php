<?php 

namespace Moduleimage\Path;

use Illuminate\Http\Request;

use App\Http\controllers\controller;

use Moduleimage\Path\Models\imagecrud;

use Illuminate\Support\Facades\File;

class imagecontroller extends controller{


    public function insert(Request $req)
    {
    
        $insert = new imagecrud;
        $file = $req->file('image');
        $extenstion = $file->getClientOriginalExtension();
        $filename = time().'.'.$extenstion;
        $file->move(public_path('images'),$filename);
        // $file->storeAs('public/images/',$filename);
        $insert->images = $filename;
        $insert->save();

        if($insert)
        {
          return redirect('index');
        }
        else{
            echo "not data insert";
        }
    }

    public function show(){
        $data = imagecrud::all();
        return view('Path::index',compact('data'));
    }

    public function edit($id){
        $data['edit'] = imagecrud::find($id);
        return view('Path::update',$data);
    }

    public function update(Request $req)
    {
    
        $updatedata = imagecrud::find($req->id);
        if($req->hasfile('image'))
        {
            $destination = 'images/'.$updatedata->images;
            if(File::exists($destination))
            {

                File::delete($destination);
            }
            $file = $req->file('image');
            $extenstion = $file->getClientOriginalExtension();
            $filename = time().'.'.$extenstion;
            $file->move(public_path('images'),$filename);
            $updatedata->images = $filename;
        }
        $updatedata->update();
        if( $updatedata)
        {
            return redirect('index');
        }
        else{
            echo "not update";
        }
    }

    public function delete($id)
    {
        $deletedata = imagecrud::find($id);
    
            $destination = 'images/'.$deletedata->images;
            if(File::exists($destination))
            {

                File::delete($destination);
            }

  
         $deletedata->delete();
         if($deletedata)
         {
            return redirect('index');

         }
         else{
            echo "not delete";
         }

    }


}