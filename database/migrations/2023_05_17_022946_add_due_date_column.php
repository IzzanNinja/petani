<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('Petanis', function (Blueprint $table){
            $table->date('due_date')->after('description');
            $table->integer('updated_by')->nullable()->unsigned()->after('created_at');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('Petanis', function (Blueprint $table){
          $table->dropColumn('due_date');
          $table->dropColumn('updated_by');
        });
    }
};
