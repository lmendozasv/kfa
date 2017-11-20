<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddStatusandownerToOrdenes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::table('ordenes', function($table) {
        $table->integer('status_order');
             $table->integer('id_owner');
    });
        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
         Schema::table('ordenes', function($table) {
        $table->dropColumn('status_order');
             $table->dropColumn('id_owner');
    });
        
    }
}
