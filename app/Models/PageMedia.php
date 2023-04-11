<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class PageMedia extends Model
{
    //
    protected $table = 'page_medias';

    public function pages(){
        return $this->belongsTo(Page::class,'pages_id');
    }

    public function pageMediaType(){
        return $this->belongsTo(PageMediaType::class,'media_types');
    }
}
