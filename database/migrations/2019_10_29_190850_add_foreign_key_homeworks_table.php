<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeyHomeworksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('homeworks', function(Blueprint $table){
            $table->bigInteger('matter_id')->unsigned();
            $table->foreign('matter_id')
                ->references('id')
                ->on('matters')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('homeworks', function(Blueprint $table){
            $table->dropForeign('homeworks_matter_id_foreign');
        });
    }
}
