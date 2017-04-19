<?php

namespace App\Modules\Users\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Modules\Tree\Helpers\Breadcrumbs;
use App\Modules\Users\Models\User;
use Auth;
use stdClass;

class IndexController extends Controller
{


    public function getModel()
    {
        return new User;
    }

    public function personal(){
        if (Auth::check()) {
            Breadcrumbs::add(trans('users::index.personal'),route('user.personal'));
            $meta = new stdClass();
            $meta->h1 = trans('users::index.personal');
            return view('users::personal',[ 'meta' => $meta]);
        } else {
            return redirect()->back();
        }
    }


}