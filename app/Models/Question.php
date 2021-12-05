<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Question extends Model
{

    protected $table = 'question';
    public $timestamps = true;

    use SoftDeletes;

    protected $dates = ['deleted_at'];



    public function question_list($request = null){

        $question_list = [];

        for ($i = 0; $i < count($request->question); $i++) {

            if (is_null($request->question[$i])) {
                continue;
            }


            $question_list[] = [

                'question' => $request->question[$i],
                'first_option' => $request->first_option[$i],
                'secound_option' => $request->secound_option[$i],
                'third_option' => $request->third_option[$i],
                'forth_option' => $request->forth_option[$i],
                'result' => $request->result[$i],

                // 'type' => $request->type,

                // 'created_by' => $request->created_by,
                // 'created_time' => Carbon::now(),
                // 'created_by_ip' => $request->ip(),

            ];

        }
        return $question_list;
    }

}
