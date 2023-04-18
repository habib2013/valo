<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LoanProduct extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function loanInvestors(){
        return $this->hasMany('App\Models\LoanInvestor');
     }

     
}
