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
        Schema::create('detail_commande_produits', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('detail_commmande_id');
            $table->unsignedBigInteger('produit_id');
            $table->timestamps();

            $table->foreign('detail_commmande_id')->references('id')->on('detail_commandes')->onDelete('cascade');
            $table->foreign('produit_id')->references('id')->on('produits')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('detail_commande_produits');
    }
};
