<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    
    public function up(): void
    {

        DB::statement("
        CREATE TABLE turma (
            id INT NOT NULL AUTO_INCREMENT,
            nome VARCHAR(50) NOT NULL,
            PRIMARY KEY (id) 
            );
        ");

        
 
    }

    public function down(): void
    {
        DB::statement("
        DROP TABLE turma 
        ");
    }
};
