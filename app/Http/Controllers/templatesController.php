<?php

namespace App\Http\Controllers;

use Illuminate\Container\Attributes\Auth;
use Illuminate\Http\Request;
use App\Models\Usersinfo;

class templatesController extends Controller
{
    //

    public function selectTemplate($n){
        $id = Auth()->id();
        Usersinfo::where('user_id', $id)->update([
            'template_id' => $n
        ]);

        return redirect('/web-templates');
    }
}
