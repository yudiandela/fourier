<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Anggota extends Model
{
    /**
     * The table name.
     *
     * @var string
     */
    protected $table = 'anggota';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'pangkat_id', 'nrp',
    ];

    public function pangkat()
    {
        return $this->belongsTo(Pangkat::class);
    }
}
