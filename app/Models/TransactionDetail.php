<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TransactionDetail extends Model
{
    use HasFactory;
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */

    //  Kondisi Dimana salah penamaan tabel dalam database
    public $table = 'transactions_details';
    //  Kondisi Dimana salah penamaan tabel dalam database

    protected $fillable = [
        'transaction_id',
        'products_id',
        'price',
        'shipping_status',
        'resi',
        'code'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
      
    ];

    public function product(){
        return $this->hasOne(Product::class, 'id', 'products_id');
    }
    public function transaction(){
        return $this->hasOne(Transaction::class, 'id', 'transaction_id');
    }
}
