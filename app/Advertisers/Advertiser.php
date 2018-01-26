<?php

namespace App\Advertisers;
use App\AccountManager;
use Illuminate\Database\Eloquent\Model;

class Advertiser extends Model
{
    protected $table = 'advertiser';
    protected $primaryKey = 'advertiserid';

    public function account()
    {
       return $this->belongsTo(AccountManager::class, 'accountmanagerid', 'accountmanagerid');
    }
}
