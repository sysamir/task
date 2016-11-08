<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Requests\ElaveEtRequest;
use App\ElaveEt;
use Illuminate\Support\Facades\Redirect;
use Session;

class ElaveEtController extends Controller
{

     public function __construct()
     {
         $this->middleware('auth');
     }

    public function index()
    {
        //Admin panelin girish hissesine mysqlden ishci melumatlarini cekmishem.
        $allDb = ElaveEt::all();
        return view('home',compact('allDb'));
    }

    public function create()
    {    //Ishci melumatlarini daxil etmek ucun linke kecid.
        return view('add');
    }

    public function store(Request $request)
    {   //Burada melumatlarin doldurulmasi ve yazilmasini yerine yetiren funksiya
        if( $request->hasFile('photo') && $request->input('namesurname')
        && $request->input('about') && $request->input('jobtitle') ){
                   $file = $request->file('photo');
                   $destination_path = 'images/';
                   $filename = str_random(6).'_'.$file->getClientOriginalName();
                   $file->move($destination_path, $filename);
                   $file = $filename;

                    $connectDB = new ElaveEt;
                    $connectDB->nameSurname = $request->input('namesurname');
                    $connectDB->photo = $file;
                    $connectDB->about = $request->input('about');
                    $connectDB->jobTitle = $request->input('jobtitle');
                    $connectDB->save();
            }else {
                  Session::flash('message', "Lazımlı sahələri doldurun");
                  return Redirect::back();
                  }
                  Session::flash('message', "İşçı heyəti əlavə olundu");
                  return redirect('/home');
    }

    public function show($id)
    {

    }

    public function edit($id)
    {   //Ishci melumatlarinin deyishmek ucun daxil olunan linke kecid.
        $edit  = ElaveEt::findOrFail($id);
        return view('edit',compact('edit'));
    }


    public function update(Request $request, $id)
    {         //Ishci melumatlarinin deyishilmesini yerine yetiren funksiya.
            $photo = ElaveEt::findOrFail($id);
                 if( $request->hasFile('photo') )
                 {
                        unlink('images/'.$photo->photo);
                        $file = $request->file('photo');
                        $destination_path = 'images/';
                        $filename = str_random(6).'_'.$file->getClientOriginalName();
                        $file->move($destination_path, $filename);
                        $photo->photo = $destination_path . $filename;
                        $photo->photo = $filename;
                        $photo->nameSurname = $request->input('namesurname');
                        $photo->about = $request->input('about');
                        $photo->jobTitle = $request->input('jobtitle');
                        $photo->save();
                 }else{
                       $photo->nameSurname = $request->input('namesurname');
                       $photo->photo;
                       $photo->about = $request->input('about');
                       $photo->jobTitle = $request->input('jobtitle');
                       $photo->save();
                      }
                 Session::flash('message', "Uğurla Dəyişdirildi");
                 return redirect("/home");
    }

    public function destroy($id)
    { //Ishci melumatlarinin silinmesi
      $del = ElaveEt::findOrFail($id);
      unlink('images/'.$del->photo);
      $del->delete();
      return back();
    }
}
