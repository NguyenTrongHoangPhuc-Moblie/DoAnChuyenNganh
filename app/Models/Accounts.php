<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Accounts extends Model
{
    use HasFactory;

    protected $fillable = [
        'cus_id',
        'username',
        'email',
        'password',
        'google_id',
        'created_at',
        'updated_at',
        'deleted_at'
    ];

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($customer) {
            $customer->cus_id = $customer->generateCustomerId();
        });
    }

    public function generateCustomerId()
    {
        // Get the last customer record
        $lastCustomer = Accounts::orderBy('cus_id', 'desc')->first();

        // If there's no customer yet, start with 'C001'
        if (!$lastCustomer) {
            return 'C001';
        }

        // Extract the number from the last customer_id (e.g., 'C001' becomes 1)
        $lastId = intval(substr($lastCustomer->customer_id, 1));

        // Increment the ID by 1
        $newId = $lastId + 1;

        // Pad the new ID with leading zeros and add the 'C' prefix
        return 'C' . str_pad($newId, 3, '0', STR_PAD_LEFT);
    }
}
