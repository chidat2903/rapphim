<?php

namespace App\Models\admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class San_Pham extends Model
{
    use HasFactory;

    protected $table = 'san_pham';

    protected $fillable = [
        'ten_sp',
        'gia',
        'rap_id',
        'type',
        'image'
    ];
}
