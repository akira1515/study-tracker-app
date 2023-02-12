<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facade;

use App\Models\Lang;
use App\Models\StudiedLang;
use App\Models\StudiedContent;
use App\Models\Content;
use App\Models\StudyRecord;

class WebappController extends Controller
{
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    public function index()
    {
        $year = date('Y');
        $month = date('m');
        $day = date('d');
        
        $dates = StudyRecord::whereYear('date', $year)->whereMonth('date', $month)->get()->all();
        // $date = $dates->toArray();
        // $dates = StudyRecord::whereYear('date', $year)->whereMonth('date', $month)->count('hour');
        $day_sum = StudyRecord::whereYear('date', $year)->whereMonth('date', $month)->whereDay('date', $day)->sum('hour');
        $month_sum = StudyRecord::whereYear('date', $year)->whereMonth('date', $month)->sum('hour');
        $year_sum = StudyRecord::sum('hour');


        //言語種類
        $langs = Lang::all();
        $langs_cnt = Lang::get()->count();
        //勉強した言語
        $studied_langs = StudiedLang::select("lang_id")->selectRaw("SUM(study_records.hour) as total_hour")->join('study_records','studied_langs.study_record_id','=','study_records.id')->groupBy('lang_id')->orderBy('lang_id', 'asc')->get();

        //学習コンテンツ種類
        $contents = Content::all();
        $contents_cnt = Content::get()->count();
        //勉強した学習コンテンツ
        $studied_contents = StudiedContent::select("content_id")->selectRaw("SUM(study_records.hour) as total_hour")->join('study_records','studied_contents.study_record_id','=','study_records.id')->groupBy('content_id')->orderBy('content_id', 'asc')->get();

        return view('webapp.index',compact('dates', 'day_sum', 'month_sum', 'year_sum','langs', 'langs_cnt', 'studied_langs', "contents", "contents_cnt", "studied_contents")
    );
    }

    public function test(){
        return view("webapp.test");
    }

    public function execStore(Request $request)
    {

        $date = $request->date;
        $hour = $request->hour;
        StudyRecord::create(['date' => $date, 'hour' => $hour]);

        $study_record_id = StudyRecord::max('id');
        // dd($study_record_id); 
        $studiedContent = $request->studiedContent;
        StudiedContent::create(["study_record_id" => $study_record_id, "content_id" => $studiedContent]);

        $studiedLang = $request->studiedLang;
        StudiedLang::create(["study_record_id" => $study_record_id, "lang_id" => $studiedLang]);

        return redirect()->route('webapp');
    }
}
