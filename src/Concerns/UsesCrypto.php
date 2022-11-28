<?php

namespace Lanos\Blockie\Concerns;

trait UsesCrypto
{

    use ManagesCryptoWallets;
    use CanCryptoInvoice;

    public $networks = [
        "bitcoin",
        "litecoin",
        "doge"
    ];

}