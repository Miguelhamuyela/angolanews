<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TypeCategoriesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        DB::table('type_categories')->delete();

        DB::table('type_categories')->insert(array(
            0 =>
            array(
                'id' => 1,
                'name' => 'Moda ou Estilo',
                'description' => 'Tipo de categoria para Categoria Cultutra',
                'deleted_at' => NULL,
                'created_at' => '2025-08-27 07:40:51',
                'updated_at' => '2025-08-27 07:40:51',
            ),
            1 =>
            array(
                'id' => 2,
                'name' => 'Futebol',
                'description' => 'Tipo de Categoria para Categoria Desporto',
                'deleted_at' => NULL,
                'created_at' => '2025-08-27 07:41:32',
                'updated_at' => '2025-08-27 07:41:32',
            ),
            2 =>
            array(
                'id' => 3,
                'name' => 'Basktebol',
                'description' => 'Tipo de Categoria para Categoria Desporto',
                'deleted_at' => NULL,
                'created_at' => '2025-08-27 07:44:13',
                'updated_at' => '2025-08-27 07:44:13',
            ),
            3 =>
            array(
                'id' => 4,
                'name' => 'Startups',
                'description' => 'Tipo de Categoria Startup para Categoria Tecnologia',
                'deleted_at' => NULL,
                'created_at' => '2025-08-27 07:47:25',
                'updated_at' => '2025-08-27 07:47:25',
            ),
            4 =>
            array(
                'id' => 5,
                'name' => 'Eleições',
                'description' => 'Tipo de Categoria Eleições para Categoria Politica',
                'deleted_at' => NULL,
                'created_at' => '2025-08-27 07:50:29',
                'updated_at' => '2025-08-27 07:50:29',
            ),
            5 =>
            array(
                'id' => 6,
                'name' => 'Partidos Políticos',
                'description' => 'Tipo de Categoria Partidos Politicos para Categoria Política',
                'deleted_at' => NULL,
                'created_at' => '2025-08-27 07:51:30',
                'updated_at' => '2025-08-27 07:51:30',
            ),
            6 =>
            array(
                'id' => 7,
                'name' => 'Negócios',
                'description' => 'Tipo de Categoria Negócios para Categoria Economia',
                'deleted_at' => NULL,
                'created_at' => '2025-08-27 07:54:21',
                'updated_at' => '2025-08-27 07:54:21',
            ),
            7 =>
            array(
                'id' => 8,
                'name' => 'Finanças',
                'description' => 'Tipo ed Categoria Finanças para Categoria Economia',
                'deleted_at' => NULL,
                'created_at' => '2025-08-27 07:55:25',
                'updated_at' => '2025-08-27 07:55:25',
            ),
            8 =>
            array(
                'id' => 9,
                'name' => 'Arte & Exposições',
                'description' => 'Tipo de Categoria Arte & Exposição para Categoria Cultura',
                'deleted_at' => NULL,
                'created_at' => '2025-08-27 07:56:46',
                'updated_at' => '2025-08-27 07:56:46',
            ),
            9 =>
            array(
                'id' => 10,
                'name' => 'Teatro',
                'description' => 'Tipo de Categoria Teatro para Categoria Cultura',
                'deleted_at' => NULL,
                'created_at' => '2025-08-27 07:58:23',
                'updated_at' => '2025-08-27 07:58:23',
            ),
            10 =>
            array(
                'id' => 11,
                'name' => 'Celebridades',
                'description' => 'Tipo de Categoria Celebridades para Categoria Cultura',
                'deleted_at' => NULL,
                'created_at' => '2025-08-27 07:59:30',
                'updated_at' => '2025-08-27 07:59:30',
            ),
            11 =>
            array(
                'id' => 12,
                'name' => 'Inovação',
                'description' => 'Tipo de Categoria Inovação para Categoria Tecnologia',
                'deleted_at' => NULL,
                'created_at' => '2025-08-27 08:01:11',
                'updated_at' => '2025-08-27 08:01:11',
            ),
            12 =>
            array(
                'id' => 13,
                'name' => 'Inteligência Artificial',
                'description' => 'Tipo de Categoria Inteligência Artificial para Categoria Tecnologia',
                'deleted_at' => NULL,
                'created_at' => '2025-08-27 08:02:11',
                'updated_at' => '2025-08-27 08:02:11',
            ),
            13 =>
            array(
                'id' => 14,
                'name' => 'Seleções Nacionais',
                'description' => 'Tipo de Categoria Seleção Nacional para Categoria Desporto',
                'deleted_at' => NULL,
                'created_at' => '2025-08-27 08:03:36',
                'updated_at' => '2025-08-27 08:03:36',
            ),
            14 =>
            array(
                'id' => 15,
                'name' => 'Agricultura',
                'description' => 'Tipo de Categoria Agricultura para Categoria Economia',
                'deleted_at' => NULL,
                'created_at' => '2025-08-27 08:04:57',
                'updated_at' => '2025-08-27 08:04:57',
            ),
            15 =>
            array(
                'id' => 16,
                'name' => 'Direitos Humanos',
                'description' => 'Tipos de Categoria Direitos Humanos para Categoria Sociedades',
                'deleted_at' => NULL,
                'created_at' => '2025-08-27 08:22:58',
                'updated_at' => '2025-08-27 08:22:58',
            ),
            16 =>
            array(
                'id' => 17,
                'name' => 'Comunidade',
                'description' => 'Tipo ed Categoria Comunidade para Categoria Sociedade',
                'deleted_at' => NULL,
                'created_at' => '2025-08-27 08:26:02',
                'updated_at' => '2025-08-27 08:26:02',
            ),
        ));
    }
}
