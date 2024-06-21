<?php

namespace Database\Seeders;
use App\Models\PaymentMethodModel;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PaymentOptionSeed extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = new PaymentMethodModel;
        $user->payment_name = 'Bitcoin';
        $user->wallet_address = 'bc1qtutwz02enjmaau93vdqtln396tnzfkvqwgemh4';
        $user->save();

        $user = new PaymentMethodModel;
        $user->payment_name = 'Ethereum';
        $user->wallet_address = 'bc1qtutwz02enjmaau93vdqtln396tnzfkvqwgemh4';
        $user->save();
        

        $user = new PaymentMethodModel;
        $user->payment_name = 'USDT TRC-20';
        $user->wallet_address = 'bc1qtutwz02enjmaau93vdqtln396tnzfkvqwgemh4';
        $user->save();
    }
}
