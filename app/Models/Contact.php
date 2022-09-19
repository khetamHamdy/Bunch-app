<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;
use Laravel\Scout\Searchable;

class Contact extends Model
{
    use HasFactory;
//    use Translatable;

    use Searchable;
    protected $fillable = ['mobileNumber' ,'name', 'message'];
    protected $table = 'contacts';
   // public $translatedAttributes = ['name', 'message'];
}
