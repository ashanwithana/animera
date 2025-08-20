<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Customer extends Authenticatable implements HasMedia
{
    use HasFactory;
    use InteractsWithMedia;

    protected $with = ['media'];

    protected $table = 'customers';

}
