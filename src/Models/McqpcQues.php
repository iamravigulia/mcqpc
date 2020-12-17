<?php
namespace Edgewizz\Mcqpc\Models;

use Illuminate\Database\Eloquent\Model;

class McqpcQues extends Model{
    public function answers(){
        return $this->hasMany('Edgewizz\Mcqpc\Models\McqpcAns', 'question_id');
    }
    protected $table = 'fmt_mcqpc_ques';
}