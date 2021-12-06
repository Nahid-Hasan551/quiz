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
      return view('create-quiz');

  }

  /**
   * Show the form for creating a new resource.
   *
   * @return Response
   */
  public function create()
  {

  }

  /**
   * Store a newly created resource in storage.
   *
   * @return Response
   */
  public function store(Request $request)
  {

    // dd($request->all());

    $quiz = [
        'quiz_name' => (isset($request->quiz_name) ? $request->quiz_name : 'null'),
        'type'         => $request->quiz_type,
        'status'       => 1,
        'lavel'        => $request->lavel,
        'class_level'  => $request->class_level,
        'subject_name' => $request->subject_name,
        'created_at'   => Carbon::now(),
        'created_by'   => (isset(Auth::user()->id) ? Auth::user()->id : 0 ),

    ];
    // dd($quiz);

    DB::beginTransaction();

    try {

        $quiz_last_id = DB::table('quiz')->insertGetId($quiz);

        $question = new Question();

        $response = $question->question_data($request,$quiz_last_id);
    // dd($response);
        DB::table('question')->insert($response);

        DB::commit();

        Alert::success('success','New Quiz and Question Successfully Added');
        return redirect()->back();

    } catch (Exception $e) {
        dd($e);

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
  public function show($id)
  {

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
