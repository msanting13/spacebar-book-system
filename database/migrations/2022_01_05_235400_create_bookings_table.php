<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBookingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bookings', function (Blueprint $table) {
            $table->id();
            $table->string('transaction_code')->default('-');
            $table->timestamp('arrival_date')->nullable();
            $table->timestamp('start_date')->nullable();
            $table->timestamp('end_date')->nullable();
            $table->enum('status', ['approved', 'pending', 'cancelled', 'check_in', 'check_out'])->nullable();
            $table->integer('room_id');
            $table->integer('user_id');
            $table->longText('message')->nullable();
            $table->decimal('total_price', 10, 2)->nullable();
            $table->string('source_id')->nullable();
            $table->integer('downpayment_status')->default(0);
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
        Schema::dropIfExists('bookings');
    }
}
