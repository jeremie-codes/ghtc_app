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
        Schema::table('users', function (Blueprint $table) {
            // Supprimer les colonnes existantes
            $table->dropColumn(['email']);

            // Ajouter la nouvelle colonne
            $table->string('Lastname')->nullable()->after('Name'); // Ajoute lastname après le champ 'name'
        });
    }

    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            // Restaurer les colonnes supprimées
            $table->string('email')->nullable();

            // Supprimer la colonne ajoutée
            $table->dropColumn('Lastname');
        });
    }

};
