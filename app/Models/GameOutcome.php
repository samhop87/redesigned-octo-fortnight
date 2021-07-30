<?php

namespace App\Models;

use App\Http\Models\Choice;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class GameOutcome extends Model
{
    use HasFactory, SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'game_choice_id',
        'health_effect',
        'luck_effect',
        'info'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function choice() {
        return $this->belongsTo(Choice::class, 'event_choice_id');
    }
}
