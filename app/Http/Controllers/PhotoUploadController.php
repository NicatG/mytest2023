<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PhotoUploadController extends Controller
{
    public function uploadIndex()
    {

        return view('photo-upload');
    }


    public function upload(Request $request) 
    {
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->storeAs('images', $imageName, 'public'); // storage/app/public/images klasörüne kaydet
            
            // Resim yükleme işlemini tamamladıktan sonra yapılacak işlemleri burada gerçekleştirebilirsiniz.

            return back()->with('success', 'Resim yükleme işlemi başarıyla tamamlandı.');
        }

        return redirect()->back()->with('error', 'Yüklenecek resim bulunamadı.');
    }
}
