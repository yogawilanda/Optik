<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        if (!Schema::hasTable('bpjs')) {
            Schema::create('bpjs', function (Blueprint $table) {
                // Define table schema here
            });
        }
    }

    public function down()
    {
        if (Schema::hasTable('bpjs')) {
            Schema::dropIfExists('bpjs');
        }
    }
};
