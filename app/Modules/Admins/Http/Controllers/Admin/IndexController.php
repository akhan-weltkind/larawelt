<?php

namespace App\Modules\Admins\Http\Controllers\Admin;

use  App\Modules\Admin\Models\Admin as Model;


use App\Modules\Admin\Http\Controllers\Admin;
use Illuminate\Support\Facades\Auth;


class IndexController extends Admin
{

    public function getModel(){
        return new Model;
    }

    public function getRules($request, $id = false){

        $rules = [
            'name' => 'required|max:255',
            'email' => 'required|email|max:255|unique:admins'.($id?',id,'.$id:''),
            'password' => 'required|min:6'
        ];


        if (isset($request->password) && !$request->password){
            unset($request->password);
            unset($rules['password']);
        }

        return $rules;
    }

    public function destroy($id){

        if (Auth::guard('admin')->user()->id == $id){
            abort(403);
        }

        return parent::destroy($id);
    }
}
