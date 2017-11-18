<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddStatusAndCategoryToPlatillos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
         Schema::table('platillos', function($table) {
            $table->string('status');
            $table->integer('category_id');
    });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
          
         Schema::table('platillos', function($table) {
            $table->dropColumn('status');
            $table->dropColumn('category_id');
    });
    }
}
