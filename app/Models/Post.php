<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $guarded = [];

    public function archive()
    {
        $this->is_archived = true;
        $this->save();
    }
}
