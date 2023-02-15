<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Enums\ApplcationStatus;

class Application extends Model
{
    use HasFactory;
    protected $table='applications';
    
    protected $fillable=[
        'ngo_name',
        'budget',
        'email',
        'phone_number',
        'location',
        'duration',
        'document',
        'user_id',
       /*  'status', */
    ];

    protected $cast=[
        'status'=>ApplcationStatus::class
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

}
