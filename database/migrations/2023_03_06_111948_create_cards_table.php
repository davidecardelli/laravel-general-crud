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
        Schema::create('cards', function (Blueprint $table) {
            $table->id();
            $table->string('nome_carta');
            $table->integer('costo_mana');
            $table->string('figura');
            $table->enum('tipo_carta', ['Artefatto', 'Creatura', 'Incantesimo', 'Istantaneo', 'Terra', 'Piano', 'Intrigo', 'Stregoneria']);
            $table->string('edizione');
            $table->text('effetti');
            $table->text('testo');
            $table->integer('forza')->nullable();
            $table->integer('costituzione')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cards');
    }
};
