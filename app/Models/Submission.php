<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property-read integer $id
 * @property string $name
 * @property string $email
 * @property string $message
 */
class Submission extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'message',
    ];
}
