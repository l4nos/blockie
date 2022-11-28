<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('payment_wallets', function (Blueprint $table) {
            $table->id();
            $table->string('wallet_address');
            $table->string('wallet_network');
            $table->string('network_environment'); // testnet or live
            $table->boolean('in_use')->default(false);
            $table->timestamp('valid_until');
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('payment_wallets');
    }
};
