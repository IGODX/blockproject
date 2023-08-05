<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Block extends Model
{
    use HasFactory;
    protected $fillable = ["topicid", "title", "content", "imagepath", "created_at", "updated_at"];

    public function topic(): BelongsTo
    {
        return $this->belongsTo(Topic::class, "topicid");
    }
}
