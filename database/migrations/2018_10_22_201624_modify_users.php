<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ModifyUsers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->boolean('is_admin')->default(0)->nullable();
            $table->integer('telephone')->nullable();
            $table->integer('address')->nullable();
            $table->string('avatar_src')->nullable();
            $table->string('country')->nullable();
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('is_admin');
            $table->dropColumn('telephone');
            $table->dropColumn('address');
            $table->dropColumn('avatar_src');
            $table->dropColumn('country');
        });
    
    }
}

