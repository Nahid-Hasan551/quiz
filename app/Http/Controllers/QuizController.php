<?php

namespace App\Http\Controllers;

use App\Models\Question;
use Carbon\Carbon;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use RealRashid\SweetAlert\Facades\Alert;

class QuizController extends Controller
{

  /**
   * Display a listing of the resource.
   *
   * @return Response
   */

  public function quiz_view(Request $request)
  {

   $data = array_filter($request->all());


     if($data['quiz_type'] == 1){

        if($data['quiz_lavel'] == 1){

           $quiz_data =  $this->free_quiz($data['quiz_type'],$data['quiz_lavel']);

        }elseif ($data['quiz_lavel'] == 2) {

            $quiz_data =  $this->free_quiz($data['quiz_type'],$data['quiz_lavel']);

        }elseif($data['quiz_lavel'] == 3){

            $quiz_data =  $this->free_quiz($data['quiz_type'],$data['quiz_lavel']);

        }elseif($data['quiz_lavel'] == 4){

            $quiz_data =  $this->free_quiz($data['quiz_type'],$data['quiz_lavel']);

        }
     }

    if($data['quiz_type'] == 2){
        $quiz_data = DB::table('quiz AS QZ')
                            ->where('type',$data['quiz_type'])
                            ->where('lavel',$data['quiz_lavel'])
                            ->join('question AS QST',function($join){
                                $join->on('QST.quiz_code','=','QZ.id');
                            })
                            ->get();
     }

    //  dd($quiz_data);
     if(isset($quiz_data)){
        // dd($quiz_data);
        return view('manage-quiz',compact('quiz_data'));

     }else{
         return redirect()->back()->with('massage','something is wrong. please try again');
     }

  }

  public function free_quiz($quiz_type,$quiz_lavel){

        $quiz_free =  DB::table('quiz AS QZ')
            ->where('type',$quiz_type)
            ->where('lavel',$quiz_lavel)
            ->join('question AS QST',function($join){
                $join->on('QST.quiz_code','=','QZ.id');
            })
            ->get();

           return $quiz_free;

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
  public function quiz_update(Request $request)
  {

    // foreach($request->qst_id as $values){
    //    echo $values;

    // }


    // exit;
    DB::beginTransaction();

    try {

        $question = new Question();

        $response = $question->question_update_data($request);

        dd($response['id']);

        $result = DB::table('question') ->where('id', $response['id'])->update($response);

        // dd($result);
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
