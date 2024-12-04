<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
{
    Schema::table('pasiens', function (Blueprint $table) {
        $table->string('kode_pasien')->nullable();
    });
}

public function down()
{
    Schema::table('pasiens', function (Blueprint $table) {
        $table->dropColumn('kode_pasien');
    });
}

};
