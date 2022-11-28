<?php

namespace Lanos\Blockie\Concerns;

use Lanos\Blockie\Models\CryptoWallet;

trait ManagesCryptoWallets
{

    /**
     * Main relationship for the wallets to the models
     * @return mixed
     */
    public function wallets()
    {
        return $this->belongsTo(CryptoWallet::class, $this->primaryKey, $this->getLocalIDField())->where('model', '=', get_class($this));
    }

    /**
     * Returns the correct relationship identifier depending if incrementing is turned on or not
     * @return string
     */
    private function getLocalIDField(){

        if($this->incrementing){
            return 'model_id';
        }else{
            return 'model_uuid';
        }

    }

}