<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('phones', function (Blueprint $table) {
            $table->id();

            // $table->TYPE(NAME)->OPTION_1()->OPTION_2()->OPTION_3()
            $table->string('name')->require();
            $table->enum('brand', ['apple', 'hp', 'nokia'])->require();
            $table->decimal('price')->require()->unsigned();
            $table->string('image')->default('https://i.pinimg.com/236x/9b/fd/2b/9bfd2b397daa065e19edc8aa708dd7e7.jpg?nii=t');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('phones');
    }
};
