<?php

namespace Kevupton\LaravelCoinpayments\Models;

use Illuminate\Database\Eloquent\SoftDeletes;
use Carbon\Carbon;

/**
 * Class Transaction
 * @package Kevupton\LaravelCoinpayments\Models
 * @property mixed id
 * @property mixed amount
 * @property mixed currency1
 * @property mixed currency2
 * @property mixed address
 * @property mixed buyer_email
 * @property mixed buyer_name
 * @property mixed item_name
 * @property mixed item_number
 * @property mixed invoice
 * @property mixed custom
 * @property mixed ipn_url
 * @property mixed txn_id
 * @property mixed confirms_needed
 * @property mixed timeout
 * @property mixed status_url
 * @property mixed qrcode_url
 * @property mixed created_at
 * @property mixed updated_at
 */
class Transaction extends Model
{
    public $fillable = [
        'amount', 'amount_btc', 'user_id', 'plan', 'rate', 'currency1', 'currency2', 'address',
        'buyer_email', 'buyer_name', 'item_name', 'item_number',
        'invoice', 'custom', 'ipn_url', 'txn_id',
        'confirms_needed', 'timeout', 'status_url', 'qrcode_url',
    ];

      public function user(){
        return $this->belongsTo('App\User');
    }


   

}