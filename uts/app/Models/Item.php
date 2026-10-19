<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    /** @use HasFactory<\Database\Factories\ItemFactory> */
    use HasFactory;

    protected $table = 'items';
    protected $primaryKey = 'item_code';
    public $incrementing = false;
    protected $keyType = 'string';

    protected $fillable = [
        'company_name',
        'headquarters_phone_number',
        'company_id'
    ];

    public function sales()
    {
        return $this->hasMany(Sale::class, 'item_code', 'item_code');
    }

    public function companie()
    {
        return $this->belongsTo(companie::class, 'company_id', 'company_id');
    }
}
