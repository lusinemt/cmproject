<?php

namespace App;
use App\Advertisers\Advertiser;
use Illuminate\Database\Eloquent\Model;

class AccountManager extends Model
{
    protected $table = 'accountmanager';
    protected $primaryKey = 'accountmanagerid';

    public function advertisermodel()
    {
        return $this->hasMany(Advertiser::class);
    }
}
