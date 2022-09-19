<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;
use Laravel\Scout\Searchable;

class Career extends Model
{
    use HasFactory;

//    use Translatable;
    use Searchable;

    protected $fillable = ['email', 'mobileNumber', 'Age', 'specialization', 'upload_cv', 'fullName', 'Nationality', 'description'];
    protected $table = 'careers';

//    public $translatedAttributes = ['fullName', 'Nationality', 'description'];

    public function toSearchableArray()
    {
        return [
            'specialization' => $this->specialization
        ];
    }
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
    public function ordercareers()
    {
        return $this->hasMany(OrderCareers::class);
    }
}
