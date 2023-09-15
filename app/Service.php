<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Resizable;
use App\Question;
use TCG\Voyager\Traits\Translatable;


class Service extends Model
{
    use Resizable;

    use Translatable;

    protected $translatable = ['title', 'desc', 'body', 'price'];

    public function questions() {
        return $this->belongsToMany(Question::class, 'service_questions', 'service_id', 'question_id');
      }
}
