<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Translatable;


class Camketsanpham extends Model
{
    use Translatable;

    protected $translatable = ['title', 'field1', 'field2', 'field3', 'field4', 'field5'];
}
