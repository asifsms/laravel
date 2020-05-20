<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Blogg extends Model
{
    protected $table = 'bloggs';

   //Primary Key
   public $primaryKey = 'id';

   //Timestamps
   public $timestamp = true;

   protected $fillable = [
        'title','about','poster',
   ];

   public function user()
   {
       return $this->belongsTo('App\Blogger','uid');
   }
}
