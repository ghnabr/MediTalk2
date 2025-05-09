<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    protected $fillable = [
        'order_id',
        'user_id',
        'dokter_id',
        'amount',
        'status',
        'payment_type',
        'fraud_status',
        'transaction_id',
        'paid_at',
    ];

    // Relasi ke User
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function dokter()
    {
        return $this->belongsTo(Dokter::class, 'dokter_id');
    }
}
