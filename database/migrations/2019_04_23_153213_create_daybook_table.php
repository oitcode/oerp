<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDaybookTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('daybook_entry', function (Blueprint $table) {
            //
			$table->increments('daybook_entry_id');
			$table->dateTime('transaction_date_time');
			$table->integer('quantity')->unsigned();
			$table->integer('rate');
			$table->string('currency');
			$table->string('comment', 255);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
		Schema::drop('daybook_entry');
    }
}
