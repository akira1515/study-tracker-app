<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class StudiedContent extends Model
{
    //
    protected $fillable = [
        'study_record_id',
        'content_id'
    ];
    // protected $fillable_study_record_id = ['study_record_id']; 
    // protected $fillable_content_id = ['content_id']; 
}
