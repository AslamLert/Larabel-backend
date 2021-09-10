<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAccountaddmoneysTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('accountaddmoneys', function (Blueprint $table) {
            $table->charset = 'utf8';
            $table->collation = 'utf8_unicode_ci';
            $table->id();
            $table->string('code_add')->comment('รหัสอ้างอิง');
            $table->string('payment')->comment('ช่องทาง');
            $table->bigInteger('accounts_id')->unsigned()->comment('ชื่อบัญชี');
            $table->float('amount', 8, 2)->nullable()->comment('จำนวนเงิน');
            $table->timestamps();
            $table->foreign('accounts_id')->references('id')->on('accounts')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('accountaddmoneys');
    }
}
