<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TradeHistoryModel extends Model
{
    use HasFactory;
    protected $table = "trade_history";

    protected $appends = ['user'];


    public function getUserAttribute(){
        $user=User::where('id', $this->user_id)->select('email','fullname')->first();
        
        if($user){
            return $user;
        }else{
            return null;
        }
    }
    
}
