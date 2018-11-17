<?php

namespace App\Http\Controllers;

use App\Board;//모델사용
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class writeController extends Controller
{
    public function write(Request $request){
        $board = new board();
        $board->title = $request->title;
        $board->writer = $request->writer;
        $board->content = $request->content_;
        $board->category = $request->category;
        $board->id = $request->id;
        // 값을 받아온다
        $board->save();
        return redirect('secret/view/'.$board->num)->with('message','글이 정상적으로 등록되었습니다 !');

    }
    public function secretWrite(Request $request){
        return view('secretboard.secret-write-form');
    }
    public function secretBoard(){
        //페이지 네이션 할 값을 부여한 후 내림차순으로 보이도록
        $msgs = Board::where('category','like','1')->orderBy('num', 'desc')->paginate(5);
        return view('secretboard.secret-board', compact('msgs'));
    }
    public function secretView($num){
        $msg = Board::find($num);
        return view('secretboard.secret-view', ['msg' => $msg]);
    }
    public function freeWrite(){
        return view('freeboard.free-write-form');
    }
    public function freeBoard(){
        $msgs = Board::where('category','like','2')->paginate(5);
        return view('freeboard.free-board',compact('msgs'));
    }
    public function freeView($num){
        $msg = Board::find($num);
        return view('freeboard.free-view',['msg'=>$msg]);
    }
}
