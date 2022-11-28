<?php

return [

    // Set this either to "test" or "live" and the package will pull the correct key for the network
    "mode" => env('BLOCKCHAIN_ENV', 'test'),
    "keys" => [
        "bitcoin" => [
            "live" => env('BITCOIN_LIVENET_KEY'),
            "test" => env('BITCOIN_TESTNET_KEY')
        ],
        "litecoin" => [
            "live" => env('LITECOIN_LIVENET_KEY'),
            "test" => env('LITECOIN_TESTNET_KEY')
        ],
        "doge" => [
            "live" => env('DOGE_LIVENET_KEY'),
            "test" => env('DOGE_TESTNET_KEY')
        ]
    ]

];