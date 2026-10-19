<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class companie extends Model
{
    /** @use HasFactory<\Database\Factories\CompanieFactory> */
    use HasFactory;
    protected $table = 'companies';
    protected $primaryKey = 'company_id';
    public $incrementing = false;
    protected $keyType = 'string';

    protected $fillable = [
        'company_name',
        'headquarters_phone_number'
    ];

    public function items()
    {
        return $this->hasMany(Item::class, 'company_id', 'company_id');
    }
}
