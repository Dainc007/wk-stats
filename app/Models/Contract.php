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


    public function players()
    {
        return $this->hasMany(Player::class);
    }


    public function teams()
    {
        return $this->hasMany(Team::class);
    }
}

