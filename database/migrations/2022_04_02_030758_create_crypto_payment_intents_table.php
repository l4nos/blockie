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
        Schema::create('crypto_payment_intents', function (Blueprint $table) {
            $table->uuid();
            $table->string('destination_wallet'); // wallet that the funds will eventually arrive with
            $table->string('transaction_wallet'); // wallet being used to collect the funds
            $table->integer('processing_fee_percent'); // Your payment gateway's payment fee.
            $table->integer('platform_fee_percent'); // The fee percentage your marketplace operator will charge
            $table->bigInteger('amount');
            $table->bigInteger('processing_fee'); // Calculated processing fee
            $table->bigInteger('platform_fee'); // Calculated platform / marketplace fee
            $table->bigInteger('estimated_network_fee'); // pre-estimated network fee
            $table->bigInteger('actual_network_fee')->nullable(); // actual network fee
            $table->string('crypto_network'); // currency used (btc,doge,ltc)
            $table->string('network_environment'); // testnet or live
            $table->timestamp('valid_until'); // when does transaction expire if unpaid
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
        Schema::dropIfExists('crypto_payment_intents');
    }
};
