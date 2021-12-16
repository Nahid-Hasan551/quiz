<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class QuizController extends Controller
{

  /**
   * Display a listing of the resource.
   *
   * @return Response
   */
  public function quiz_view(Request $request)
  {
    //   dd($request->all());

     if($request->quiz_type == 1){

        $free_quiz_data = DB::table('quiz AS QZ')
                            ->where('type',$request->quiz_type)
                            ->where('lavel',$request->quiz_lavel)
                            ->join('question AS QST',function($join){
                                $join->on('QST.quiz_code','=','QZ.id');
                            })
                            ->get();

                            dd($free_quiz_data);

     }

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
