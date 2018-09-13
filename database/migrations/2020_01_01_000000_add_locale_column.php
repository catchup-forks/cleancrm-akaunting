<?php

use Illuminate\Database\Migrations\Migration;

class AddLocaleColumn extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::table('users', function ($table) {
            $table->string('locale')->default(config('app.locale'));
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::table('users', function ($table) {
            $table->dropColumn('locale');
        });
    }
}
