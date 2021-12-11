<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReceiptsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('receipts', function (Blueprint $table) {
            $table->id();
            $table->text('title')->nullable();
            $table->text('from')->nullable();
            $table->text('to')->nullable();
            $table->text('optional')->nullable();
            $table->string('number')->nullable();
            $table->string('date')->nullable();
            $table->text('terms')->nullable();
            $table->string('due_date')->nullable();
            $table->string('po_number')->nullable();
            $table->string('paid')->nullable();
            $table->string('notes')->nullable();
            $table->string('full_terms')->nullable();
            $table->string('currency')->nullable();
            $table->string('user_id')->nullable();
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
        Schema::dropIfExists('receipts');
    }
}
