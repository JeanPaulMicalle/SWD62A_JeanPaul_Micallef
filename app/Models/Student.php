<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\College;

class Student extends Model
{
    protected $table = 'students';

    protected $primarykey = 'id';

    protected $fillable = [
        'name',
        'email',
        'phone',
        'dob',
        'college_id',
    ];

    protected $casts = [
        'dob' => 'date'
    ];

    public function college()
    {
        return $this->belongsTo(College::class, 'college_id');
    }

}
