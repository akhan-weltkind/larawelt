<?php

namespace App\Modules\Admin\Http\Controllers;

class FilesController extends Controller
{


    public function images(){
        return view('admin::files.images',[
            'page' => 'images',
            'activeGroup'   => 'content'
        ]);
    }

    public function files(){
        return view('admin::files.files',[
            'page' => 'files',
            'activeGroup'   => 'content'
        ]);
    }

}
