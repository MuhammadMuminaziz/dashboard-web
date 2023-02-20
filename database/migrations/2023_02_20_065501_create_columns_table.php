<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateColumnsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('columns', function (Blueprint $table) {
            $table->id();
            $table->string('col1')->nullable();
            $table->string('col2')->nullable();
            $table->string('col3')->nullable();
            $table->string('col4')->nullable();
            $table->string('col5')->nullable();
            $table->string('col6')->nullable();
            $table->string('col7')->nullable();
            $table->string('col8')->nullable();
            $table->string('col9')->nullable();
            $table->string('col10')->nullable();
            $table->string('col11')->nullable();
            $table->string('col12')->nullable();
            $table->string('col13')->nullable();
            $table->string('col14')->nullable();
            $table->string('col15')->nullable();
            $table->string('col16')->nullable();
            $table->string('col17')->nullable();
            $table->string('col18')->nullable();
            $table->string('col19')->nullable();
            $table->string('col20')->nullable();
            $table->string('col21')->nullable();
            $table->string('col22')->nullable();
            $table->string('col23')->nullable();
            $table->string('col24')->nullable();
            $table->string('col25')->nullable();
            $table->string('col26')->nullable();
            $table->string('col27')->nullable();
            $table->string('col28')->nullable();
            $table->string('col29')->nullable();
            $table->string('col30')->nullable();
            $table->string('col31')->nullable();
            $table->string('col32')->nullable();
            $table->string('col33')->nullable();
            $table->string('col34')->nullable();
            $table->string('col35')->nullable();
            $table->string('col36')->nullable();
            $table->string('col37')->nullable();
            $table->string('col38')->nullable();
            $table->string('col39')->nullable();
            $table->string('col40')->nullable();
            $table->string('col41')->nullable();
            $table->string('col42')->nullable();
            $table->string('col43')->nullable();
            $table->string('col44')->nullable();
            $table->string('col45')->nullable();
            $table->string('col46')->nullable();
            $table->string('col47')->nullable();
            $table->string('col48')->nullable();
            $table->string('col49')->nullable();
            $table->string('col50')->nullable();
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
        Schema::dropIfExists('columns');
    }
}
