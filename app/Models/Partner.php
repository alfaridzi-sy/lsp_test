<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Partner extends Model
{
    use HasFactory;

    protected $table = 'partners';

    protected $primaryKey = 'partner_id';

    public $timestamps = true;

    protected $fillable = [
        'partner_name',
        'logo_url',
    ];
}
