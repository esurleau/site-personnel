<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWithdrawsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('withdraws', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->decimal('amount',8,2);
            $table->unsignedInteger('money_period_id');
            $table->foreign('money_period_id')->references('id')->on('money_periods');
            $table->unsignedInteger('withdraw_category_id')->nullable();
            $table->foreign('withdraw_category_id')->references('id')->on('withdraw_categories');
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
        Schema::dropIfExists('withdraws');
    }
}
