<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\User;
use App\Models\Creator;

class WatchList extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'video_id', 'title', 'image', 'creator_id', 'creator_image'];

    public function viewer ()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function creator ()
    {
        return $this->hasMany(Creator::class);
    }
}
