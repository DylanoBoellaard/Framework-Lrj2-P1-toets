<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::dropIfExists('persons');
        Schema::create('persons', function (Blueprint $table) {
            $table->id();
            $table->string('name', 50);
            $table->string('street', 100);
            $table->string('house_nr', 10);
            $table->string('zipcode', 10);
            $table->string('city', 50);
            $table->string('phone_nr', 15);
            $table->timestamps();
            $table->engine = 'InnoDB';
        });

        // Step: 03 - Fill table Instructeur with data
        DB::table('persons')->insert([
            [
                'name' => 'Giovanna',
                'street' => 'StreetName',
                'house_nr' => '15A',
                'zipcode' => '1234AB',
                'city' => 'Utrecht',
                'phone_nr' => '0612345678'
            ],
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('persons');
    }
};
