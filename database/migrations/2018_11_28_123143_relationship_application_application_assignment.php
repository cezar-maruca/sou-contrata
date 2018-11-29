<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class RelationshipApplicationApplicationAssignment extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('application_assignments', function (Blueprint $table){
            $table->integer('application_id')->unsigned();
            $table->foreign('application_id')->references('id')->on('applications');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('application_assignments', function (Blueprint $table){
            $table->dropForeign('application_assignments_application_id_foreign');
            $table->dropColumn('application_id');
        });
    }
}
