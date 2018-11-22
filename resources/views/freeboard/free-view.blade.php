@extends('default-form')
@section('title')
    게시글
@endsection
@section('form')
    FreeForm
@endsection
@section('nav_bar')
    @include('components.navbar2')
@endsection
@section('style1')
    @include('components.style2')
@endsection
@section('main_div')
    view-div
@endsection
@section('content')
        <div class="panel">
            <img src="{{asset('img/free_logo.png')}}" width="120px">
            <p>사람들의 이야기에 귀기울여 보세요.</p>
        </div>
        <!--게시판 내용-->
        <div class="content" align="justify">
            <div>
                <h5>{{$msg["title"]}}</h5>
                <p>{{$msg["writer"]}}님의 대나무숲</p>
                <br>
                <div align="right">
                    <form id="AjaxForm" action="{{url('star_up/'.$msg["num"].'/2')}}" method="post">
                    @include('components.star_up')
                    </form>
                </div>
                <div style="min-height:200px;max-height:400px;width:100% ;border: 1px solid gray; overflow:scroll">
                    <?php echo $msg["content"]?>
                </div>
                <div align="right">
                    <input type="button" onclick="location.href='board.php?page=<?php //echo//$page ?>'"  class="btn btn-light" value="목록보기">
                    @if(\Auth::user()["email"]==$msg["id"]){
                    <button class="btn btn-light" onclick="location.href='modify_form.php?num=<?php //echo $msg["Num"] ?>&page=<?php //echp $page?>'">수정</button>
                    <input type="submit"
                           onclick="processDelete(<?= $msg["Num"] ?>)"
                           class="btn btn-light" value="삭제">
                    @endif
                </div>
            </div>
        </div>
@endsection

@section('footer')
    @include('footer')
@endsection
