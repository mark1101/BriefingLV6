<?php
use App\Piece;
use Illuminate\Database\Seeder;

class PieceTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        Piece::create([
            'id_category' => '1',
            'name' => 'Capa',
            'value' => '1'
        ]);
        Piece::create([
            'id_category' => '1',
            'name' => 'Até 1 página',
            'value' => '1'
        ]);
        Piece::create([
            'id_category' => '1',
            'name' => 'Página dupla',
            'value' => '1.5'
        ]);
        Piece::create([
            'id_category' => '1',
            'name' => 'Encarte simples 23,5cm x 33cm',
            'value' => '1'
        ]);
        Piece::create([
            'id_category' => '1',
            'name' => 'Encarte duplo 55cm x 33cm',
            'value' => '2'
        ]);
        Piece::create([
            'id_category' => '1',
            'name' => 'Tabloide de oferta - por página',
            'value' => '1'
        ]);
        //Anúncio Para Revista id=2
        Piece::create([
            'id_category' => '2',
            'name' => 'Até 1 página',
            'value' => '1'
        ]);
        Piece::create([
            'id_category' => '2',
            'name' => 'Página dupla',
            'value' => '1.5'
        ]);
        Piece::create([
            'id_category' => '2',
            'name' => 'Encarte simples 21cm x 30cm',
            'value' => '1'
        ]);
        Piece::create([
            'id_category' => '2',
            'name' => 'Encarte duplo 42cm x 30cm',
            'value' => '2'
        ]);

        //Mídia Exterior id=3
        Piece::create([
            'id_category' => '3',
            'name' => 'Back light/front light/top site',
            'value' => '1'
        ]);
        Piece::create([
            'id_category' => '3',
            'name' => 'Outdoor',
            'value' => '1'
        ]);
        Piece::create([
            'id_category' => '3',
            'name' => 'Busdoor',
            'value' => '1'
        ]);
        Piece::create([
            'id_category' => '3',
            'name' => 'Cartaz de 32 folhas',
            'value' => '1'
        ]);
        Piece::create([
            'id_category' => '3',
            'name' => 'Mobiliário urbano – por peça',
            'value' => '1'
        ]);
        Piece::create([
            'id_category' => '3',
            'name' => 'Painel rodoviário',
            'value' => '1'
        ]);
        Piece::create([
            'id_category' => '3',
            'name' => 'Placa de identificação',
            'value' => '0.5'
        ]);
        //Produção Eletrônica id=4
        Piece::create([
            'id_category' => '4',
            'name' => 'Filme/vinheta/VT 15’’ e VT 30’’',
            'value' => '1'
        ]);
        Piece::create([
            'id_category' => '4',
            'name' => 'Filme/vinheta/VT acima de 30’’',
            'value' => '2'
        ]);
        Piece::create([
            'id_category' => '4',
            'name' => 'VT em telas (roteiro+telas)',
            'value' => '2'
        ]);
        Piece::create([
            'id_category' => '4',
            'name' => 'Acompanhamento de produção por dia',
            'value' => '0.5'
        ]);
        Piece::create([
            'id_category' => '4',
            'name' => 'Jingle até 60’’',
            'value' => '2'
        ]);
        Piece::create([
            'id_category' => '4',
            'name' => 'Spot até 60’’',
            'value' => '1'
        ]);
        //Materiais Promocionais id=5
        Piece::create([
            'id_category' => '5',
            'name' => 'Adesivo automotivo ou vitrine',
            'value' => '1'
        ]);
        Piece::create([
            'id_category' => '5',
            'name' => 'Adesivo chão',
            'value' => '1'
        ]);
        Piece::create([
            'id_category' => '5',
            'name' => 'Bandeirola – por modelo',
            'value' => '0.5'
        ]);
        Piece::create([
            'id_category' => '5',
            'name' => 'Banner',
            'value' => '1'
        ]);
        Piece::create([
            'id_category' => '5',
            'name' => 'Boné/chapéu',
            'value' => '1'
        ]);
        Piece::create([
            'id_category' => '5',
            'name' => 'Botton',
            'value' => '0.5'
        ]);
        Piece::create([
            'id_category' => '5',
            'name' => 'Calendário parede',
            'value' => '4'
        ]);
        Piece::create([
            'id_category' => '5',
            'name' => 'Camiseta',
            'value' => '0.5'
        ]);
        Piece::create([
            'id_category' => '5',
            'name' => 'Caneta/lápis',
            'value' => '0.5'
        ]);
        Piece::create([
            'id_category' => '5',
            'name' => 'Capa/contracapa de apostila/caderno/livro',
            'value' => '2'
        ]);
        Piece::create([
            'id_category' => '5',
            'name' => 'Capa carnê',
            'value' => '1'
        ]);
        Piece::create([
            'id_category' => '5',
            'name' => 'Capa/contracapa de catálogo',
            'value' => '1'
        ]);
        Piece::create([
            'id_category' => '5',
            'name' => 'Capa/contracapa CD',
            'value' => '1'
        ]);
        Piece::create([
            'id_category' => '5',
            'name' => 'Cartão de natal',
            'value' => '1'
        ]);
        Piece::create([
            'id_category' => '5',
            'name' => 'Cartão postal',
            'value' => '1'
        ]);
        Piece::create([
            'id_category' => '5',
            'name' => 'Cartão pôster',
            'value' => '1'
        ]);
        Piece::create([
            'id_category' => '5',
            'name' => 'Cartazete',
            'value' => '1'
        ]);
        Piece::create([
            'id_category' => '5',
            'name' => 'Chaveiro',
            'value' => '0.5'
        ]);
        Piece::create([
            'id_category' => '5',
            'name' => 'Convite',
            'value' => '1'
        ]);
        Piece::create([
            'id_category' => '5',
            'name' => 'Convite +envelope',
            'value' => '1'
        ]);
        Piece::create([
            'id_category' => '5',
            'name' => 'Copo',
            'value' => '0.5'
        ]);
        Piece::create([
            'id_category' => '5',
            'name' => 'Crachá',
            'value' => '0.5'
        ]);
        Piece::create([
            'id_category' => '5',
            'name' => 'Diploma',
            'value' => '1'
        ]);
        Piece::create([
            'id_category' => '5',
            'name' => 'Display de mesa/take one',
            'value' => '1'
        ]);
        Piece::create([
            'id_category' => '5',
            'name' => 'Display de ponta de gôndola',
            'value' => '1'
        ]);
        Piece::create([
            'id_category' => '5',
            'name' => 'Display de vitrine',
            'value' => '1'
        ]);
        Piece::create([
            'id_category' => '5',
            'name' => 'Encarte de CD/lâmina/Label de CD',
            'value' => '1'
        ]);
        Piece::create([
            'id_category' => '5',
            'name' => 'Etiqueta',
            'value' => '0.5'
        ]);
        Piece::create([
            'id_category' => '5',
            'name' => 'Faixa de gôndola/stopper',
            'value' => '1'
        ]);
        Piece::create([
            'id_category' => '5',
            'name' => 'Flyer - frente e verso',
            'value' => '1'
        ]);
        Piece::create([
            'id_category' => '5',
            'name' => 'Folder/folheto/catálogo – por página',
            'value' => '1'
        ]);
        Piece::create([
            'id_category' => '5',
            'name' => 'Folheto técnico por página',
            'value' => '1'
        ]);
        Piece::create([
            'id_category' => '5',
            'name' => 'Forração de gôndola/bandô',
            'value' => '1'
        ]);
        Piece::create([
            'id_category' => '5',
            'name' => 'Leque',
            'value' => '1'
        ]);
        Piece::create([
            'id_category' => '5',
            'name' => 'Livro/Revista por página (capa e contracapa à parte)',
            'value' => '1'
        ]);
        Piece::create([
            'id_category' => '5',
            'name' => 'Mala direta',
            'value' => '2'
        ]);
        Piece::create([
            'id_category' => '5',
            'name' => 'Mala direta/peça promocional',
            'value' => '2'
        ]);
        Piece::create([
            'id_category' => '5',
            'name' => 'Móbile',
            'value' => '1'
        ]);
        Piece::create([
            'id_category' => '5',
            'name' => 'Mouse pad',
            'value' => '1'
        ]);
        Piece::create([
            'id_category' => '5',
            'name' => 'Pasta de eventos',
            'value' => '1'
        ]);
        Piece::create([
            'id_category' => '5',
            'name' => 'Placa/painel',
            'value' => '1'
        ]);
        Piece::create([
            'id_category' => '5',
            'name' => 'Portfólio-perfil institucional – página',
            'value' => '1'
        ]);
        Piece::create([
            'id_category' => '5',
            'name' => 'Relatório anual – por página',
            'value' => '1'
        ]);
        Piece::create([
            'id_category' => '5',
            'name' => 'Risque e rabisque',
            'value' => '1'
        ]);
        Piece::create([
            'id_category' => '5',
            'name' => 'Sacola/bolsa',
            'value' => '1'
        ]);
        Piece::create([
            'id_category' => '5',
            'name' => 'Totem',
            'value' => '1'
        ]);
    //Papelaria id=6
    Piece::create([
        'id_category' => '6',
        'name' => 'Bloco de anotações',
        'value' => '0.5'
    ]);
    Piece::create([
        'id_category' => '6',
        'name' => 'Cartão empresa',
        'value' => '1'
    ]);
    Piece::create([
        'id_category' => '6',
        'name' => 'Cartão de aniversário/cartão personalizado',
        'value' => '1'
    ]);
    Piece::create([
        'id_category' => '6',
        'name' => 'Cartão de visita',
        'value' => '1'
    ]);
    Piece::create([
        'id_category' => '6',
        'name' => 'Envelope saco/ofício',
        'value' => '1'
    ]);
    Piece::create([
        'id_category' => '6',
        'name' => 'Envelope simples',
        'value' => '1'
    ]);
    Piece::create([
        'id_category' => '6',
        'name' => 'Papel carta decorativo',
        'value' => '0.5'
    ]);
    Piece::create([
        'id_category' => '6',
        'name' => 'Papel carta de ofício',
        'value' => '0.5'
    ]);
    Piece::create([
        'id_category' => '6',
        'name' => 'Papel embrulho presente',
        'value' => '1'
    ]);
    Piece::create([
        'id_category' => '6',
        'name' => 'Pasta',
        'value' => '1'
    ]);
    //Projetos Especiais id=7
    Piece::create([
        'id_category' => '7',
        'name' => 'Planejamento de comunicação de campanha',
        'value' => '4'
    ]);
    Piece::create([
        'id_category' => '7',
        'name' => 'Planejamento de comunicação anual',
        'value' => '5'
    ]);
    Piece::create([
        'id_category' => '7',
        'name' => 'Planejamento de promoções',
        'value' => '3'
    ]);
    Piece::create([
        'id_category' => '7',
        'name' => 'Assessoria mensal A - 2 jobs mensais',
        'value' => '2'
    ]);
    Piece::create([
        'id_category' => '7',
        'name' => 'Assessoria mensal B - 3 jobs mensais',
        'value' => '3'
    ]);
    Piece::create([
        'id_category' => '7',
        'name' => 'Assessoria mensal C - 4 jobs mensais',
        'value' => '4'
    ]);
    Piece::create([
        'id_category' => '7',
        'name' => 'Assessoria mensal D - 5 jobs mensais',
        'value' => '5'
    ]);
     //Trabalhos para Avaliação id=8
    Piece::create([
        'id_category' => '8',
        'name' => 'Fardamento/uniforme/mortalha',
        'value' => '1'
    ]);
    Piece::create([
        'id_category' => '8',
        'name' => 'Ilustração especial',
        'value' => '2'
    ]);
    Piece::create([
        'id_category' => '8',
        'name' => 'Mala direta/expedição',
        'value' => '1'
    ]);
    Piece::create([
        'id_category' => '8',
        'name' => 'Nome fantasia de empresas',
        'value' => '1'
    ]);
    Piece::create([
        'id_category' => '8',
        'name' => 'Nome fantasia de produtos',
        'value' => '1'
    ]);
    //Programação Visual id=9
    Piece::create([
        'id_category' => '9',
        'name' => 'Logotipo da empresa',
        'value' => '3'
    ]);
    Piece::create([
        'id_category' => '9',
        'name' => 'Logotipo de produto',
        'value' => '3'
    ]);
    Piece::create([
        'id_category' => '9',
        'name' => 'Manual de uso',
        'value' => '2'
    ]);
    Piece::create([
        'id_category' => '9',
        'name' => 'Marca/logotipo empresa (logomarca)',
        'value' => '3'
    ]);
    Piece::create([
        'id_category' => '9',
        'name' => 'Marca/logotipo/eventos/imobiliário',
        'value' => '3'
    ]);
    Piece::create([
        'id_category' => '9',
        'name' => 'Marca/logotipo produto (logomarca)',
        'value' => '3'
    ]);
    Piece::create([
        'id_category' => '9',
        'name' => 'Marca/logotipo reformulação (logomarca)',
        'value' => '3'
    ]);
    Piece::create([
        'id_category' => '9',
        'name' => 'Mascote (custo de produção a parte)',
        'value' => '4'
    ]);
    Piece::create([
        'id_category' => '9',
        'name' => 'Nome do produto',
        'value' => '1'
    ]);
    Piece::create([
        'id_category' => '9',
        'name' => 'Programação visual de quiosques',
        'value' => '5'
    ]);
    Piece::create([
        'id_category' => '9',
        'name' => 'Uniformes/promotoras',
        'value' => '1'
    ]);
    Piece::create([
        'id_category' => '9',
        'name' => 'Selo comemorativo',
        'value' => '1'
    ]);
//Fachada Visual id=10
    Piece::create([
        'id_category' => '10',
        'name' => 'Identificação corporativa',
        'value' => '1'
    ]);
    Piece::create([
        'id_category' => '10',
        'name' => 'Pintura de frota',
        'value' => '1'
    ]);
    Piece::create([
        'id_category' => '10',
        'name' => 'Estande para feiras',
        'value' => '3'
    ]);
    Piece::create([
        'id_category' => '10',
        'name' => 'Vitrines',
        'value' => '1'
    ]);
    //Embalagens id=11
    Piece::create([
        'id_category' => '11',
        'name' => 'Berço (estrutura de embalagem)',
        'value' => '3'
    ]);
    Piece::create([
        'id_category' => '11',
        'name' => 'Caixa de embarque',
        'value' => '1'
    ]);
    Piece::create([
        'id_category' => '11',
        'name' => 'Caixa display de produto',
        'value' => '2'
    ]);
    Piece::create([
        'id_category' => '11',
        'name' => 'Embalagem (adaptação)',
        'value' => '2'
    ]);
    Piece::create([
        'id_category' => '11',
        'name' => 'Embalagem de produto',
        'value' => '4'
    ]);
    Piece::create([
        'id_category' => '11',
        'name' => 'Embalagem blister/sampling',
        'value' => '2'
    ]);
    Piece::create([
        'id_category' => '11',
        'name' => 'Rótulo',
        'value' => '1'
    ]);
    //Serviços de Web e Multimídia id=12
    Piece::create([
        'id_category' => '12',
        'name' => 'E-mail marketing',
        'value' => '1'
    ]);
    Piece::create([
        'id_category' => '12',
        'name' => 'Full banner',
        'value' => '1'
    ]);
    Piece::create([
        'id_category' => '12',
        'name' => 'Full banner expansível',
        'value' => '1'
    ]);
    Piece::create([
        'id_category' => '12',
        'name' => 'Half banner',
        'value' => '1'
    ]);
    Piece::create([
        'id_category' => '12',
        'name' => 'Site (até 4 páginas)',
        'value' => '4.5'
    ]);
    Piece::create([
        'id_category' => '12',
        'name' => 'Site (até 8 páginas)',
        'value' => '5.5'
    ]);
    Piece::create([
        'id_category' => '12',
        'name' => 'Hot site (até 4 páginas)',
        'value' => '3'
    ]);
    Piece::create([
        'id_category' => '12',
        'name' => 'Papel parede',
        'value' => '1'
    ]);
    Piece::create([
        'id_category' => '12',
        'name' => 'Protetor tela',
        'value' => '1'
    ]);
    //Marketing Digital id=13
    Piece::create([
        'id_category' => '13',
        'name' => 'Pacotes de 6 posts',
        'value' => '1.5'
    ]);
    Piece::create([
        'id_category' => '13',
        'name' => 'Pacotes de 12 posts',
        'value' => '3'
    ]);
    Piece::create([
        'id_category' => '13',
        'name' => 'Pacotes de 18 posts',
        'value' => '4'
    ]);
    Piece::create([
        'id_category' => '13',
        'name' => 'pacote de 30 posts',
        'value' => '6'
    ]);
    Piece::create([
        'id_category' => '13',
        'name' => 'Google ads (Campanha/Gestão)',
        'value' => '3'
    ]);

    }
}
