<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatedAtIpNullInBrands extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    
    public function up()
    {
        Schema::table('Brands', function (Blueprint $table) {
            $table->string('created_at_ip')->nullable()->change();
            $table->string('updated_at_ip')->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('Brands', function (Blueprint $table) {
            $table->string('created_at_ip')->change();
            $table->string('updated_at_ip')->change();
        });
    }
}

