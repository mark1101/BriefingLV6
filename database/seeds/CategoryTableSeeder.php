<?php
use App\Category;
use Illuminate\Database\Seeder;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::create([
            'name' => 'Anúncio para Jornal',
        ]);
        Category::create([
            'name' => 'Anúncio para Revista ',
        ]);
        Category::create([
            'name' => 'Mídia Exterior',
        ]);
        Category::create([
            'name' => 'Produção Eletrônica',
        ]);
        Category::create([
            'name' => 'Materiais Promocionais',
        ]);
        Category::create([
            'name' => 'Papelaria',
        ]);
        Category::create([
            'name' => 'Projetos Especiais',
        ]);
        Category::create([
            'name' => 'Trabalhos para Avaliação',
        ]);
        Category::create([
            'name' => 'Programação Visual',
        ]);
        Category::create([
            'name' => 'Fachada',
        ]);
        Category::create([
            'name' => 'Embalagens',
        ]);
        Category::create([
            'name' => 'Serviços de Web e Multimídia',
        ]);
        Category::create([
            'name' => 'Marketing Digital',
        ]);

        
    }
}
