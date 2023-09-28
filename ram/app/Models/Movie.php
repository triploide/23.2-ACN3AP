<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    use HasFactory;

    public function since()
    {
        $carbon = Carbon::createFromFormat('Y', $this->year);

        return $carbon->since();
    }
}
