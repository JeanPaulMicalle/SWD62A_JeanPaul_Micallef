<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class College extends Model
{

    protected $table = 'colleges';

    protected $primaryKey = 'id';

    protected $fillable = [
        'name',
        'address',
    ];

    public function students()
    {
        return $this->hasMany(Student::class, 'college_id');
    }
}
