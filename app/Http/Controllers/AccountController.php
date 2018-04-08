<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AccountController extends Controller
{
    public function storeUser(Request $request) {
        
        $rules = [
            'username' => 'required',
            'first_name' => 'required',
            'password' => 'required|min:8|same:password2'
        ];
        $request->validate($rules);
       
    }
}


//         $userData = [
//             'username' => $request ->get('username'),
//             'password'  =>  Hash::make ($request ->get('password')),
//             'name' =>$request ->get('first_name'),
//             'surname' =>$request ->get('fast_name'),
//         ];
//         DB::table('users') ->insert($userData);
//         Session::flash('success','yay some text here');
//         return redirect () ->back();
//     }
// public function saveChatMessage(Request $request){
//     $messageData = [
//         'username' => $request ->get('username'),
//         'text'  =>$request ->get('text'),
//     ];
//     DB::table('messages') ->insert($messageData);
//     return ['status'=>'ok'];
// }
// public function getChatMessages() {
//     return DB::table('messages')->get();
// }
