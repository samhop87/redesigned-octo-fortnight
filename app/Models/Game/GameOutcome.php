<?php

namespace App\Models\Game;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
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
     * @return BelongsTo
     */
    public function choice(): BelongsTo
    {
        return $this->belongsTo(GameChoice::class, 'event_choice_id');
    }
}
