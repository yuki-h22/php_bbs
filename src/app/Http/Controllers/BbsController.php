<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;

class BbsController extends Controller
{
    public function index(){
        return view('bbs.index');
    }

    public function create(Request $request){
        $request->validate([
            'name' => 'required|max:10',
            'comment' => 'required|min:5|max:140',
        ]);
        // 投稿内容の受け取って変数に入れる
        $name = $request->input('name');
        $comment = $request->input('comment');
         // 変数をビューに渡す
        return view('bbs.index')->with([
            "name" => $name,
            "comment" => $comment,
        ]);
    }
}