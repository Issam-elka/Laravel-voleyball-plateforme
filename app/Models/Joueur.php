<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Joueur extends Model
{
    use HasFactory;
    public function roles()
    {
        return $this->belongsTo(Role::class, 'role_id', 'id');
    }

    public function equipes()
    {
        return $this->belongsTo(Equipe::class, 'equipe_id', 'id');
    }
    
    public function photos()
    {
        return $this->belongsTo(Photo::class, 'photo_id', 'id');
    }
}
