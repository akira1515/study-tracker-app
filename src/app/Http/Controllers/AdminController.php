<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;
use App\Models\Content;
use App\Models\Lang;

class AdminController extends Controller
{
    //以下、ユーザー管理
    public function user()
    {
        $users = User::all();
        return view('admin.user.index',compact('users'));
    }

    public function userEdit($id)
    {
        $user = User::find($id);
        return view('admin.user.edit',compact('user'));
    }

    public function userUpdate(Request $request)
    {
        $user = User::find($request->id);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->save();
        return redirect('/admin/user/index');
    }

    public function userDelete(Request $request)
    {
        $user = User::find($request->id);
        $user->delete();
        return redirect('/admin/user/index');
    }


    //以下、学習コンテンツ・学習言語管理
    public function admin()
    {
        $contents = Content::all();
        $langs = Lang::all();
        return view('admin.index',compact('contents', 'langs'));
    }

    //学習コンテンツ追加
    public function contentsAdd(Request $request)
    {
        Content::create(["name" => $request->name]);
        return redirect('/admin/index');
    }
    //学習コンテンツ名変更
    public function contentsUpdateView(Request $request)
    {
        $content = Content::find($request->id);
        return view('admin.content.index',compact('content'));
    }
    public function contentsUpdate(Request $request)
    {
        $content = Content::find($request->id);
        $content->name = $request->name;
        $content->save();
        return redirect('/admin/index');
    }
    //学習コンテンツ削除
    public function contentsDelete(Request $request)
    {
        $content = Content::find($request->id);
        $content->delete();
        return redirect('/admin/index');
    }

    //学習言語追加
    public function langsAdd(Request $request)
    {
        Lang::create(["name" => $request->name]);
        return redirect('/admin/index');
    }
    //学習言語名変更
    public function langsUpdateView(Request $request)
    {
        $lang = Lang::find($request->id);
        return view('admin.lang.index',compact('lang'));
    }
    public function langsUpdate(Request $request)
    {
        $lang = Lang::find($request->id);
        $lang->name = $request->name;
        $lang->save();
        return redirect('/admin/index');
    }
    //学習言語削除
    public function langsDelete(Request $request)
    {
        $lang = Lang::find($request->id);
        $lang->delete();
        return redirect('/admin/index');
    }
}
