<?php

use Illuminate\Database\Migrations\Migration;

class AddCategoryColumnInvoicesBills extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::table('invoices', function ($table) {
            $table->integer('category_id')->default();
        });

        Schema::table('bills', function ($table) {
            $table->integer('category_id')->default();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::table('invoices', function ($table) {
            $table->dropColumn('category_id');
        });

        Schema::table('bills', function ($table) {
            $table->dropColumn('category_id');
        });
    }
}
