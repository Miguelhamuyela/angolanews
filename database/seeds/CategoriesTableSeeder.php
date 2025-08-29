<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        DB::table('categories')->delete();

        DB::table('categories')->insert(array(
            0 =>
            array(
                'id' => 1,
                'name' => 'Economia',
                'description' => 'Categoria Economia do Tipo de Categoria Agricultura',
                'typecategory_id' => 15,
                'deleted_at' => NULL,
                'created_at' => '2025-08-27 08:06:22',
                'updated_at' => '2025-08-27 08:06:22',
            ),
            1 =>
            array(
                'id' => 2,
                'name' => 'Economia',
                'description' => 'Categoria Economia do Tipo de Categoria Finanças',
                'typecategory_id' => 8,
                'deleted_at' => NULL,
                'created_at' => '2025-08-27 08:09:22',
                'updated_at' => '2025-08-27 08:09:22',
            ),
            2 =>
            array(
                'id' => 3,
                'name' => 'Desporto',
                'description' => 'Categoria Desporto do Tipo de Categoria Futebol',
                'typecategory_id' => 2,
                'deleted_at' => NULL,
                'created_at' => '2025-08-27 08:11:37',
                'updated_at' => '2025-08-27 08:11:37',
            ),
            3 =>
            array(
                'id' => 4,
                'name' => 'Politica',
                'description' => 'Categoria Política do Tipo de Categoria Eleições',
                'typecategory_id' => 5,
                'deleted_at' => NULL,
                'created_at' => '2025-08-27 08:12:30',
                'updated_at' => '2025-08-27 08:12:30',
            ),
            4 =>
            array(
                'id' => 5,
                'name' => 'Politica',
                'description' => 'Categoria Politica do Tipo de Categoria Partidos Políticos',
                'typecategory_id' => 6,
                'deleted_at' => NULL,
                'created_at' => '2025-08-27 08:13:50',
                'updated_at' => '2025-08-27 08:13:50',
            ),
            5 =>
            array(
                'id' => 6,
                'name' => 'Cultura',
                'description' => 'Categoria Cultura do Tipo de Categoria Moda ou Estilo',
                'typecategory_id' => 1,
                'deleted_at' => NULL,
                'created_at' => '2025-08-27 08:14:38',
                'updated_at' => '2025-08-27 08:14:38',
            ),
            6 =>
            array(
                'id' => 7,
                'name' => 'Tecnologia',
                'description' => 'Categoria Tecnologia do Tipo de Categoria Inteligência Artificial',
                'typecategory_id' => 13,
                'deleted_at' => NULL,
                'created_at' => '2025-08-27 08:16:04',
                'updated_at' => '2025-08-27 08:16:04',
            ),
            7 =>
            array(
                'id' => 8,
                'name' => 'Desporto',
                'description' => 'Categoria Desporto do Tipo de Categria Basktebol',
                'typecategory_id' => 3,
                'deleted_at' => NULL,
                'created_at' => '2025-08-27 08:16:50',
                'updated_at' => '2025-08-27 08:16:50',
            ),
            8 =>
            array(
                'id' => 9,
                'name' => 'Tecnologia',
                'description' => 'Categoria Tecnologia do Tipo de Categoria Startup',
                'typecategory_id' => 4,
                'deleted_at' => NULL,
                'created_at' => '2025-08-27 08:18:13',
                'updated_at' => '2025-08-27 08:18:13',
            ),
            9 =>
            array(
                'id' => 10,
                'name' => 'Cultura',
                'description' => 'Categoria Cultura do Tipo de Categoria Celebridades',
                'typecategory_id' => 11,
                'deleted_at' => NULL,
                'created_at' => '2025-08-27 08:20:33',
                'updated_at' => '2025-08-27 08:20:33',
            ),
            10 =>
            array(
                'id' => 11,
                'name' => 'Sociedade',
                'description' => 'Categoria Sociedade do Tipo de Categoria Comunidade',
                'typecategory_id' => 17,
                'deleted_at' => NULL,
                'created_at' => '2025-08-27 08:28:40',
                'updated_at' => '2025-08-27 08:28:40',
            ),
            11 =>
            array(
                'id' => 12,
                'name' => 'Sociedade',
                'description' => 'Categoria Sociedade do Tipo de Categoria Seleções Nacionais',
                'typecategory_id' => 14,
                'deleted_at' => NULL,
                'created_at' => '2025-08-27 08:30:50',
                'updated_at' => '2025-08-27 08:30:50',
            ),
        ));
    }
}
