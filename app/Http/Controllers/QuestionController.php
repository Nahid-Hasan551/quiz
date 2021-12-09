<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Question;
use Carbon\Carbon;
use Exception;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use RealRashid\SweetAlert\Facades\Alert;
// Use Alert;

class QuestionController extends Controller
{

  /**
   * Display a listing of the resource.
   *
   * @return Response
   */
  public function index()
  {
    // $quiz_info = DB::table('quiz AS QZ')
    //             ->select('QST.*')
    //             ->join('question AS QST',function($join){
    //                 $join->on('QST.quiz_code','=','QZ.id')
    //                 ->whereNull('QST.deleted_at');
    //             })
    //             // ->where('QZ.lavel','=',$lavel)
    //             ->where('QZ.type','=',1)
    //             ->where('QZ.status','=',1)
    //             ->whereNull('QZ.deleted_at')
    //             ->get();


      return view('freequiz');

  }

  public function lavel_data($lavel){

    $quiz_info = DB::table('quiz AS QZ')
                    ->select('QST.*')
                    ->join('question AS QST',function($join){
                        $join->on('QST.quiz_code','=','QZ.id')
                        ->whereNull('QST.deleted_at');
                    })
                    ->where('QZ.lavel','=',$lavel)
                    ->where('QZ.type','=',1)
                    ->where('QZ.status','=',1)
                    ->whereNull('QZ.deleted_at')
                    ->get();

                    // dd($quiz_info);

    //   return view('freequiz',compact('quiz_info'));

    //   redirect()->route('freequiz')->with('data',$quiz_info);

    //    view('freequiz',compact('quiz_info'));
    if(isset($quiz_info)){
      return response()->json([
          'data' => $quiz_info,
          'status' => "success",
          'message' => "successfully data show",
      ]);
    }else{
        return response()->json([
            'status' => "error",
            'message' => "invalid data...",
        ]);
    }

  }

  /**
   * Show the form for creating a new resource.
   *
   * @return Response
   */
  public function create()
  {
    return view('create-quiz');
  }

  /**
   * Store a newly created resource in storage.
   *
   * @return Response
   */
  public function store(Request $request)
  {
    $quiz = [
        'quiz_name' => (isset($request->quiz_name) ? $request->quiz_name : 'null'),
        'type'         => $request->quiz_type,
        'lavel'        => (isset($request->lavel) ? $request->lavel : 0),
        'class_level'  => (($request->quiz_type == 1) ? 0 : 1),
        'subject_name' => $request->subject_name,
        'created_at'   => Carbon::now(),
        'created_by'   => (isset(Auth::user()->id) ? Auth::user()->id : 0 ),

    ];

    DB::beginTransaction();

    try {

        $quiz_last_id = DB::table('quiz')->insertGetId($quiz);

        $question = new Question();

        $response = $question->question_data($request,$quiz_last_id);

        DB::table('question')->insert($response);

        DB::commit();

        Alert::success('success','New Quiz and Question Successfully Added');

        return redirect()->back();

    } catch (Exception $e) {

        DB::rollBack();

        Alert::success('error','Opps... Fail To Save');

        return redirect()->back();
    }




  }

  /**
   * Display the specified resource.
   *
   * @param  int  $id
   * @return Response
   */
  public function result_store(Request $request)
  {
      dd($request->all());

  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  int  $id
   * @return Response
   */
  public function edit($id)
  {

  }

  /**
   * Update the specified resource in storage.
   *
   * @param  int  $id
   * @return Response
   */
  public function update($id)
  {

  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return Response
   */
  public function destroy($id)
  {

  }

}

?>
