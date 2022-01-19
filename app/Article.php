<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    // 確保連接資料庫
    protected $table = 'articles';
    // 白名單 : 只有裡面的值能修改
    protected $fillable = [
        'title', 'content', 'auther',
    ];
}
