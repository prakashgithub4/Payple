<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    //
    protected $table='payments';
    protected $fillable =['payment_id','transection' ,'payer_id', 'payer_email', 'amount', 'currency', 'payment_status'];
    public $timestamp;
}
