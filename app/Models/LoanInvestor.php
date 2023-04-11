<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LoanInvestor extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function investor()
    {
        return $this->belongsTo(User::class);
    }

    public function loanproduct()
    {
        return $this->belongsTo(LoanProduct::class);
    }

}
