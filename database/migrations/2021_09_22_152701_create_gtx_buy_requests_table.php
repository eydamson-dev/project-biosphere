<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGtxBuyRequestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gtx_buy_requests', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('bitcoin_amount');
            $table->string('gtx_convertion');
            $table->string('buyer_email');
            $table->string('referral_email')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('gtx_buy_requests');
    }
}
