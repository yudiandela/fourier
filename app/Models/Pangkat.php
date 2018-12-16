<?php

namespace App\Models;

use App\Models\Anggota;
use Illuminate\Database\Eloquent\Model;

class Pangkat extends Model
{
    /**
     * The table name.
     *
     * @var string
     */
    protected $table = 'pangkat';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name', 'short', 'jenjang'];

    /**
     * The table created_at and update_at not exists.
     *
     * @var boolean
     */
    public $timestamps = false;

    // public function anggotas()
    // {
    //     return $this->hasMany(Anggota::class);
    // }
}
