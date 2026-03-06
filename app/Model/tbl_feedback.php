<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class tbl_feedback extends Model
{
    protected $table = 'tbl_feedback';

    protected $fillable = ['user_id', 'content'];

    public function user()
    {
        return $this->belongsTo(tbl_user::class, 'user_id', 'id');
    }
}
