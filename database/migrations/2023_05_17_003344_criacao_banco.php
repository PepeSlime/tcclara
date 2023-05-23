<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
  public function up(): void
  {
    DB::statement("
        CREATE TABLE IF NOT EXISTS `componente` (
            `id` int(11) NOT NULL AUTO_INCREMENT,
            `componente` varchar(50) NOT NULL,
            PRIMARY KEY (`id`)
          ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
        ");

    DB::statement("
        CREATE TABLE IF NOT EXISTS `professor` (
            `id` int(11) NOT NULL AUTO_INCREMENT,
            `nome` varchar(50) NOT NULL,
            `email` varchar(50) NOT NULL,
            `telefone` varchar(15) NOT NULL,
            PRIMARY KEY (`id`)
          ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
        ");

    DB::statement("
        CREATE TABLE IF NOT EXISTS `horario` (
            `id` int(11) NOT NULL AUTO_INCREMENT,
            `dia_da_semana` varchar(50) NOT NULL,
            `hora_inicio` time NOT NULL,
            `hora_fim` time NOT NULL,
            `id_professor` int(11) NOT NULL,
            `id_componente` int(11) NOT NULL,
            PRIMARY KEY (`id`),
            KEY `id_professor` (`id_professor`),
            KEY `id_componente` (`id_componente`),
            CONSTRAINT `horario_ibfk_1` FOREIGN KEY (`id_professor`) REFERENCES `professor` (`id`),
            CONSTRAINT `horario_ibfk_2` FOREIGN KEY (`id_componente`) REFERENCES `componente` (`id`)
          ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
        ");
  }


  public function down(): void
  {
    DB::statement("
        DROP TABLE IF EXISTS `professor`;
        ");
        
    DB::statement("
        DROP TABLE IF EXISTS `componente`;
        ");

    DB::statement("
        DROP TABLE IF EXISTS `horario`;
        ");
  }
};
