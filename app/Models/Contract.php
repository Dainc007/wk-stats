<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\MorphToMany;

class Contract extends Model
{
    use HasFactory;

    protected $fillable = [
        'player_id', 'team_id'
    ];


    public function players(): BelongsToMany
    {
        return $this->morphedByMany(Player::class, 'contractable');
    }


    public function teams(): MorphToMany
    {
        return $this->morphedByMany(Team::class, 'contractable');
    }
}

