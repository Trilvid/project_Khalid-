<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WithdrawalHistoryModel extends Model
{
    use HasFactory;

    protected $table = "withdrawal_history";

    protected $appends = ['method','user'];

    public function getMethodAttribute(){
       $menthod=PaymentMethodModel::where('id', $this->method_id)->select('payment_name',)->first();
       return $menthod;
    }

    public function getUserAttribute(){
        $user=User::where('id', $this->user_id)->select('email','fullname')->first();
        return $user;
    }

    protected function serializeDate($date)
    {
    return $date->format('Y-m-d H:i:s');
    }
}
