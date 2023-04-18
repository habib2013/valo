<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LoanInvestor extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function loanProduct()
    {
        return $this->belongsTo('App\Models\LoanProduct');
    }

    public function investor()
    {
        return $this->belongsTo('App\Models\User');
    }

}
