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
            // Ajouter la nouvelle colonne
            $table->string('email')->nullable()->after('Lastname'); // Ajoute lastname après le champ 'name'
        });
    }

    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            // Supprimer la colonne ajoutée
            $table->dropColumn('email');
        });
    }
};
