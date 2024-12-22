<?php

declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

final class Championship extends Model
{
    //
    protected $fillable = [
        'name',
        'begin_date',
        'end_date',
        'winner',
    ];
}
