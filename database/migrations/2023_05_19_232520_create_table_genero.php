<?php

use Illuminate\Database\Migrations\Migration;
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

        DB::statement("
            alter table horario add column id_turma int not null;
        ");

        DB::statement("
            alter table horario add constraint fk_turma_horario
            FOREIGN KEY (id_turma) REFERENCES turma(id);
        ");
    }

    public function down(): void
    {
        DB::statement("alter table horario drop foreign key fk_turma_horario");

        DB::statement("alter table horario drop column id_turma");

        DB::statement("
        DROP TABLE turma 
        ");
    }
};
