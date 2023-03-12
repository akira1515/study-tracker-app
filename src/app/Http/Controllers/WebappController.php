<?php


namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facade;

use App\Models\Lang;
use App\Models\StudiedLang;
use App\Models\StudiedContent;
use App\Models\Content;
use App\Models\StudyRecord;
use Illuminate\Support\Facades\Auth;

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
        
        // ログイン中のユーザーのIDを取得
        $userId = Auth::id();
        
        // $dates = StudyRecord::whereYear('study_records.date', $year)->whereMonth('study_records.date', $month)->join('users', 'users.id', '=', 'study_records.user_id')->groupBy('study_records.date')->selectRaw('study_records.date as date, sum(study_records.hour) as hour, users.id')->get()->all();
        // 棒グラフに渡すデータ
        $dates = StudyRecord::whereYear('study_records.date', $year)->whereMonth('study_records.date', $month)->join('users', 'users.id', '=', 'study_records.user_id')->where('users.id', '=', $userId)->groupBy('study_records.date', 'users.id')->selectRaw('study_records.date as date, sum(study_records.hour) as hour, users.id')->get()->all();

        //日、月、allの各勉強時間
        $day_sum = StudyRecord::whereYear('study_records.date', $year)->whereMonth('study_records.date', $month)->whereDay('study_records.date', $day)->join('users', 'users.id', '=', 'study_records.user_id')->where('users.id', '=', $userId)->groupBy('users.id')->selectRaw('sum(study_records.hour) as hour, users.id')->sum('hour');
        $month_sum = StudyRecord::whereYear('date', $year)->whereMonth('date', $month)->join('users', 'users.id', '=', 'study_records.user_id')->where('users.id', '=', $userId)->groupBy('users.id')->selectRaw('sum(study_records.hour) as hour, users.id')->sum('hour');
        $year_sum = StudyRecord::join('users', 'users.id', '=', 'study_records.user_id')->where('users.id', '=', $userId)->groupBy('users.id')->selectRaw('sum(study_records.hour) as hour, users.id')->sum('hour');


        //言語種類
        $langs = Lang::all();
        $langs_cnt = Lang::get()->count();
        //勉強した言語
        $studied_langs = StudiedLang::select("lang_id", "users.id")->selectRaw("SUM(study_records.hour) as total_hour")->join('study_records','studied_langs.study_record_id','=','study_records.id')->join('users', 'users.id', '=', 'study_records.user_id')->where('users.id', '=', $userId)->groupBy('lang_id', 'users.id')->orderBy('lang_id', 'asc')->get();

        //学習コンテンツ種類
        $contents = Content::all();
        $contents_cnt = Content::get()->count();
        //勉強した学習コンテンツ
        $studied_contents = StudiedContent::select("content_id", "users.id")->selectRaw("SUM(study_records.hour) as total_hour")->join('study_records','studied_contents.study_record_id','=','study_records.id')->join('users', 'users.id', '=', 'study_records.user_id')->where('users.id', '=', $userId)->groupBy('content_id', 'users.id')->orderBy('content_id', 'asc')->get();

        return view('webapp.index',compact('userId', 'dates', 'day_sum', 'month_sum', 'year_sum','langs', 'langs_cnt', 'studied_langs', "contents", "contents_cnt", "studied_contents")
    );
    }

    public function execStore(Request $request)
    {
        // ログイン中のユーザーのIDを取得
        $userId = Auth::id();
        $date = $request->date;
        $hour = $request->hour;
        StudyRecord::create(['date' => $date, 'hour' => $hour, 'user_id' => $userId]);

        $study_record_id = StudyRecord::max('id');
        
        $studiedContents = $request->studiedContent;
        foreach ($studiedContents as $studiedContent) {

            StudiedContent::create(["study_record_id" => $study_record_id, "content_id" => $studiedContent]);
        }
        

        $studiedLangs = $request->studiedLang;
        foreach ($studiedLangs as $studiedLang) {

            StudiedLang::create(["study_record_id" => $study_record_id, "lang_id" => $studiedLang]);
        }
        

        sleep(4);
        return redirect()->route('webapp');
    }
}
