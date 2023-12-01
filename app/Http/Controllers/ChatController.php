<?php

namespace App\Http\Controllers;

use App\Models\chat;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ChatController extends Controller
{
    public function save(Request $request){
        $chat = [
            'user_id' => Auth::id(),
            'lab_id' => $request->lab_id,
            'message' => $request->message,
            'group' => 'teacher',
        ];

        if(chat::create($chat)){
            return back();
        }else{
            return back();
        }
    }

    public function StudentChatsave(Request $request){
        $chat = [
            'user_id' => Auth::id(),
            'lab_id' => $request->lab_id,
            'message' => $request->message,
            'group' => 'class',
        ];

        if(chat::create($chat)){
            return back();
        }else{
            return back();
        }
    }

    public function groupchat(Request $request){
        $chat = [
            'user_id' => Auth::id(),
            'lab_id' => $request->lab_id,
            'message' => $request->message,
            'group' => 'group',
        ];

        if(chat::create($chat)){
            return back();
        }else{
            return back();
        }
    }

    
}
