<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ParentsNote extends Model
{
    use SoftDeletes;

    protected $guarded = ['id'];

    protected $primaryKey = 'id';

    public $asYouType = true;
}
