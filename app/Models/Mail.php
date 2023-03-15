<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Mail extends Model
{
    protected $table = 'mail';
    protected $primaryKey = 'UUID';

    protected $fillable = [
        'email_from',
        'email_to',
        'email_cc',
        'user_agent',
        'ip',
        'UUID',
    ];
}
