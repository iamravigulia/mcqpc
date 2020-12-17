<?php
namespace Edgewizz\Mcqpc\Models;

use Illuminate\Database\Eloquent\Model;

class McqpcAns extends Model
{
    public function match(){
        return $this->belongsTo('Edgewizz\Mcqpc\Models\McqpcAns', 'match_id');
    }
    protected $table = 'fmt_mcqpc_ans';
}
