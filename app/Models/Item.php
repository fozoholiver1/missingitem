<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    use HasFactory;

//    protected $guarded=[];

  protected $fillable = [
        'country','city','connectyu_username','owner','image','description'
    ];

    public function user(){

        return $this->belongsTo(User::class);
    }

    protected $attributes = [
        'user_id' => '1',
    ];
}
