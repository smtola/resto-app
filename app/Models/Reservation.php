<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    use HasFactory;

    protected $fillable = ['first_name', 'last_name', 'email', 'tel_number', 'res_date', 'table_id', 'guest_number'];

    protected $date = [
        'res_date'
    ];

    public function table(){
        return $this->belongsTo(Table::class);
    }
}
