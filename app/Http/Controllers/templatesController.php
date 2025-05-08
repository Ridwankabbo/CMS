<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usersinfo;

class templatesController extends Controller
{
    //

    public function selectTemplate($n){
        Usersinfo::where('user_id', $n)->update([
            'template_id' => $n
        ]);

        return redirect('/profile');
    }
}
