<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\WatchList;

class Creator extends Model
{
    use HasFactory;

    protected $fillable = ['creator_id', 'name', 'image_url'];

    public function watch_list ()
    {
        return $this->belongsTo(WatchList::class);
    }
}
