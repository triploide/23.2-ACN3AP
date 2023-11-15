<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Movie extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'title',
        'released_date',
        'rating',
        'genre_id',
        'description',
    ];

    public function since()
    {
        $carbon = Carbon::createFromFormat('Y-m-d', $this->released_date);

        return $carbon->since();
    }
}
