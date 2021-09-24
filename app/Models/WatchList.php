<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\User;

class WatchList extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'video_id', 'title', 'image', 'creator'];

    public function viewer ()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
