<?php

namespace App\Http\Controllers\Dashboard\newSetting;

use App\Http\Controllers\Controller;
use App\Models\Dashboard\newSetting;
use Illuminate\Http\Request;

class PrivacyController extends Controller
{

    public function index(){
        $getItems = newSetting::where('section','privacy')->get();
        return view('admin.pages.settings.privacy.index',[
            'data'=>$getItems
        ]);
    }
//    public function getPrivacy(){
//        $getItems = newSetting::where('section','privacy')->get();
//        return view('admin.pages.settings.privacy.index',[
//            'data'=>$getItems
//        ]);
//    }
    public function edit($id){
        $getItem = newSetting::findOrfail($id);

        return view('admin.pages.settings.privacy.edit',[
            'item'=>$getItem
        ]);
    }
    public function update(Request $request,$id){
        $getNavBarItem = newSetting::findOrfail($id);

        if($request->value){
            $request->validate([
                'value'=>'required|string'
            ]);
            $value = $request->value;
        }
        $getNavBarItem->value = $value;
        $getNavBarItem->save();
        return redirect(route('admin.privacy.index'))->with('toast_success', 'تم التعديل بنجاح ✌️');
    }
}
