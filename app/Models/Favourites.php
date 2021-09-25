<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Favourites extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'video_id', 'title', 'image', 'creator_id', 'creator_image'];

    public function users ()
    {
        return $this->belongsTo(User::class);
    }
}
