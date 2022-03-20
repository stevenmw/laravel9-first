<?php

namespace App\Models;

use Laravel\Scout\Searchable;
use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Attributes\SearchUsingFullText;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Post extends Model
{
    use HasFactory, Searchable;

    #[SearchUsingFullText(['body'])]
    public function toSearchableArray()
    {
        return ['body' => $this->body];
    }
}
