<?php

namespace App;
use App\Events\ProfessorDetailDelete;
use Illuminate\Database\Eloquent\Model;

class Professor extends Model
{
    protected $table = 'professors';

    protected $fillable = [
        'first_name',
        'middle_name',
        'last_name',
        'roll_number',
        'gender',
        'dob',
        'email',
        'phone_number',
        'address'
    ];

    /**
     * Get the ProfessorDetail record associated with the Professor.
     */
    public function professor_detail()
    {
        return $this->hasOne('App\ProfessorDetail');
    }

    protected $dispatchesEvents = [
        'deleted' => ProfessorDetailDelete::class
    ];
}
