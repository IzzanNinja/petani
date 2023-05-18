<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Petani extends Model
{
    use HasFactory;

    protected $table = 'Petanis';

    protected $primaryKey = 'id';

    public $incrementing = true;

    protected $guarded = ['id'];

    /**
     * Get the user that owns the Petani
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
        // return $this->belongsTo('App\User', 'foreign_key', 'other_key');
    }

}
