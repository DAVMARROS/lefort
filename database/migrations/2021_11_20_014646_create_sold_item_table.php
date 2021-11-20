<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSoldItemTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sold_item', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('sale_id');
            $table->foreign('sale_id')->references('id')->on('sale');
            $table->string('description');
            $table->string('department',30);
            $table->double('price', 17, 2);
            $table->timestamps();
        });

        DB::statement("ALTER TABLE sold_item ADD CONSTRAINT chk_department CHECK(department IN('sports','home','beauty','food','pets'));");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sold_item');
    }
}
