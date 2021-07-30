<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class GameEvent extends Model
{
    use HasFactory, SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'type',
        'detail',
        'severity'
    ];

    CONST FIRST_STEPS           = "first steps";
    CONST EXPLORING             = "exploring";
    CONST LEARNING              = "learning";
    CONST FIGHTING_FOR_SURVIVAL = "fighting for survival";
    CONST GETTING_STRONGER      = "getting stronger";
    CONST CONTINUING_TO_SURVIVE = "continuing to survive";

    // Severity measured - 1 is most severe, 5 is least.

    /**
     * @return HasMany
     */
    public function choices(): HasMany
    {
        return $this->hasMany(GameChoice::class);
    }

    /**
     * @param $luck
     * @return int
     */
    public static function calculateSeverity($luck): int
    {
        return (int) ceil($luck / 20);
    }
}
