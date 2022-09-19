<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderCareers extends Model
{
    use HasFactory;

    protected $fillable = ['status', 'career_id', 'admin_id', 'user_id'];
    protected $primaryKey ='user_id';

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function career()
    {
        return $this->belongsTo(Career::class);
    }

    public function admin()
    {
        return $this->belongsTo(Admin::class)->withDefault();
    }

}
