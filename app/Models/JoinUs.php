<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;
use Laravel\Scout\Searchable;

class JoinUs extends Model
{
    use HasFactory;
//    use Translatable;

    use Searchable;
    protected $fillable = ['email', 'phoneNumber', 'projectType', 'groupType' ,'socialMedia' , 'description', 'fullName'];
    protected $table = 'join_us';
    //public $translatedAttributes = ['description', 'fullName'];
}
