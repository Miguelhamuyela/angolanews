<?php


use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NewsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        DB::table('news')->delete();

        DB::table('news')->insert(array(
            0 =>
            array(
                'id' => 1,
                'image' => '902aa384fac8b53519862ea5887465b9.jpg',
                'title' => 'Afrobasket e 50 anos da Independência impulsionam turismo em Angola',
                'slug' => 'afrobasket-e-50-anos-da-independencia-impulsionam-turismo-em-angola',
                'subtitle' => 'Angola recebeu 26.414 turistas, no período entre 15 e 17 de Agosto de 2025, resultado directo do impacto do Campeonato Africano de Basquetebol (AfroBasket 2025) e das comemorações dos 50 anos da Independência.',
                'detach' => 'normal',
                'status' => 'published',
                'description' => '<p>De acordo com uma nota do Ministério do Turismo consultada pelo JA Online, as províncias do Namibe e do Cuanza-Sul registaram 100% de ocupação hoteleira, seguidas por Moxico e Huíla, com taxas acima de 90%. No total, a taxa média de ocupação foi de 69,3% nos hotéis e 68,8% noutros tipos de alojamento.&nbsp;&nbsp;</p><p>Por exemplo, a província do Namibe, que acolheu os jogos da fase de grupos do Afrobasket entre 13 e 17 de Agosto, passaram 7.670 turistas, dos quais 2.970 estrangeiros oriundos da África do Sul, Namíbia, Reino Unido e países participantes do torneio, como Sudão do Sul, Líbia, Cabo Verde, Congo, Rwanda, Mali, Senegal e Eritreia.</p><p>&nbsp;&nbsp;</p><p>Cerca de 4.700 visitantes nacionais viajaram de províncias como Huíla, Cunene, Benguela, Luanda e Huambo para apoiar a Selecção nacional e conhecer os pontos turísticos locais.</p><p>&nbsp;</p><p style="margin-left:auto;"><strong>Locais mais visitados</strong></p><p style="margin-left:auto;">Entre os locais mais procurados estiveram as Colinas do Curoca, Lagoa do Arco, Dunas do Deserto, Praia do
Soba, Piscinas Naturais do Piambo, a Welwitschia Mirabilis e a Foz do Rio Cunene.</p><p style="margin-left:auto;">O documento refere que o
sector do turismo arrecadou cerca de 210 milhões de kwanzas no período, impulsionado pela procura em hotelaria, restauração, agências de viagens, serviços de guias, transportes e rent-a-car.</p><p style="margin-left:auto;">Além do impacto económico, o Afrobasket proporcionou ao Namibe ampla exposição mediática e fomentou a criação de novos postos de trabalho, sobretudo para jovens, reforçando a imagem da província como um destino turístico de excelência no sul de Angola.</p><figure class="image" style="height:auto;"><img src="https://www.jornaldeangola.ao/" alt=""></figure>',
                'date' => '2025-08-27',
                'category_id' => 1,
                'deleted_at' => NULL,
                'created_at' => '2025-08-27 08:35:46',
                'updated_at' => '2025-08-27 08:35:46',
            ),
            1 =>
            array(
                'id' => 2,
                'image' => 'a1a1cbffabb864d0c0c675381463b010.jpg',
                'title' => '“Vocês são o modelo a seguir. Os nossos jovens e as crianças inspiram-se nos vossos feitos”',
                'slug' => 'voces-sao-o-modelo-a-seguir-os-nossos-jovens-e-as-criancas-inspiram-se-nos-vossos-feitos',
                'subtitle' => 'O Presidente da República considerou, terça-feira, os campeões africanos em basquetebol o orgulho do país neste ano de celebração dos 50 anos da Independência Nacional.',
                'detach' => 'normal',
                'status' => 'published',
                'description' => '<p>João Lourenço teceu o elogio durante a cerimónia de recepção dos campeões africanos no Palácio Presidencial, em Luanda, ocasião durante a qual os atletas ofereceram ao casal presidencial duas camisolas e uma bola com as suas assinaturas.</p><p>“O povo angolano estava a precisar desta vitória, deste título, que não é mais um título. É aquele título que vem quebrar o jejum de mais de 10 anos, em que Angola, não obstante ter no seu palmarés 11 vitórias, ficamos este interregno sem conquistar o Campeonato Africano de
Basquetebol”, destacou o Chefe de Estado.</p><p>Para o Presidente da República, com este feito, os atletas participantes nesta épica conquista passam a ser modelo de inspiração para os jovens angolanos. “Vocês são o modelo a seguir. Os nossos jovens e as crianças inspiram-se nos vossos feitos e todos querem ser campeões”, ressaltou.</p><p>Com vista a manter a hegemonia do país no basquetebol e em outras modalidades, em África, João Lourenço reiterou que o Executivo vai continuar a apostar em infra-estruturas desportivas, de modo a massificar a prática do desporto no país, em particular do basquetebol.</p><p>Essa aposta, reiterou o Chefe de Estado, vai passar, entre outras soluções, pela construção de mais quadras nas comunidades. “Creio que o ministro já terá anunciado a decisão do Executivo de construir, nos próximos dois anos, cerca de 12 pavilhões multiusos”, ressaltou o Presidente, referindo-se a Rui Falcão, titular da pasta da Juventude e Desportos.</p><p>“Precisamos de massificar ainda mais a prática do basquetebol e de outras modalidades, mas em particular desta, uma vez que está provado
que Angola tem um grande potencial ainda pela frente, e podemos ir muito mais longe em termos de basquetebol”, afirmou o Chefe de Estado.</p><p>O Presidente da República adiantou que a ideia é fazer com que haja um pavilhão multi-desportivo em todo o território nacional, para a prática do basquetebol e de todas as outras modalidades que utilizam este tipo de infra-estrutura, nomeadamente o andebol, o voleibol e o
futebol de salão.</p><p>“Creio que, com este investimento, quer em infra-estruturas, quer na formação dos nossos jovens, Angola pode vir a
se tornar numa grande potência desportiva”, vaticinou o Presidente, para quem é só uma questão de se acreditar em bons resultados.</p><p>O
Chefe de Estado destacou o facto de existirem outras modalidades no país que também se destacam pelas conquistas que conseguem, numa alusão ao andebol feminino, modalidades de luta, artes marciais mistas, natação e ginástica.</p><p>Gelson Lukeny, capitão da Selecção Nacional, considerou o encontro com o Presidente da República um momento importante para o grupo.”O Presidente agradeceu a nossa presença e voltou a manifestar alegria por termos concretizado o troféu que muita falta falta aos angolanos”, ressaltou Gelson Lukeny.</p><p>Uma das ausências neste encontro foi a do treinador Pep Clarós, por razões familiares, tal como justificou à imprensa o presidente da Federação Angolana de Basquetebol, Moniz Silva.&nbsp;</p>',
                'date' => '2025-08-27',
                'category_id' => 4,
                'deleted_at' => NULL,
                'created_at' => '2025-08-27 08:39:05',
                'updated_at' => '2025-08-27 08:39:05',
            ),
            2 =>
            array(
                'id' => 3,
                'image' => '63089f535b3f10ca72af3fd40ca737c3.jpg',
                'title' => 'Monumento da Renascença Africana do Senegal acolhe eventos culturais de Angola',
                'slug' => 'monumento-da-renascenca-africana-do-senegal-acolhe-eventos-culturais-de-angola',
                'subtitle' => 'O Monumento da Renascença Africana, em Dakar, no Senegal, vai acolher, a partir de agora, eventos culturais
angolanos realizados naquele país da África Ocidental.',
                'detach' => 'normal',
                'status' => 'published',
                'description' => '<p>A informação foi avançada no final de um encontro entre o embaixador de Angola no Senegal, Adão Pinto, e o administrador-geral do Monumento da Renascença Africana,&nbsp;Birame Diouf, refere uma nota, enviada ao JA Online.</p><p>No âmbito da
diplomacia cultural, o monumento passa a acolher exposições de arte de artistas angolanos, performances de grupos folclóricos e outras actividades conexas que fortaleçam a construção de pontes culturais no contexto da cooperação e intercâmbio entre os dois países.</p><p>O comunicado destaca, ainda, que o Monumento da Renascença Africana é uma estátua gigante de bronze,com 52 metros de altura, tendo no seu interior salas para visitas que retratam aspectos culturais do continente.</p><p>Considerada uma das maiores do mundo, o monumento recebe, mensalmente, mais de dez mil visitantes.</p><p>O espaço é, igualmente, considerado como um símbolo poderoso da unidade e resiliência do continente, funcionando como um elo de ligação cultural entre as nações africanas.</p>',
                'date' => '2025-08-27',
                'category_id' => 6,
                'deleted_at' => NULL,
                'created_at' => '2025-08-27 08:54:34',
                'updated_at' => '2025-08-27 08:54:34',
            ),
            3 =>
            array(
                'id' => 4,
                'image' => '1b6fe48924a3be76d020228b77fa8a9c.jpg',
                'title' => 'Pep Clarós deixa Selecção de Basquetebol após conquista do 12.° título',
                'slug' => 'pep-claros-deixa-seleccao-de-basquetebol-apos-conquista-do-12-titulo',
                'subtitle' => 'O técnico Pep Clarós terminou o vínculo contratual com a Federação Angolana (FAB) de Basquetebol e deixa de comandar os dodeca campeões africanos, dois dias após o fim do Afrobasket 2025.',
                'detach' => 'destaque',
                'status' => 'published',
                'description' => '<p>Importa recordar que em Janeiro de 2025, a FAB havia confirmado a recondução de Pep Clarós ao comando
técnico da Selecção, noticiou a Rádio Nacional de Angola.</p><p>O técnico espanhol, de 58 anos, chegou a Angola em 2023 e foi reconduzido em Janeiro de 2025 para liderar a preparação da equipa rumo ao Afrobasket disputado no país. Sob o seu comando, Angola quebrou um jejum de dez anos sem títulos e voltou a erguer o troféu continental.</p>',
                'date' => '2025-08-27',
                'category_id' => 3,
                'deleted_at' => NULL,
                'created_at' => '2025-08-27 08:57:14',
                'updated_at' => '2025-08-27 08:57:14',
            ),
            4 =>
            array(
                'id' => 5,
                'image' => '940f60efe69276b9d46aa0184a5f7c54.jpg',
                'title' => 'Angola aposta em tecnologia de ponta para reforçar segurança aérea',
                'slug' => 'angola-aposta-em-tecnologia-de-ponta-para-reforcar-seguranca-aerea',
                'subtitle' => 'Com a instalação de um sistema de radar de superfície de última geração, o novo Aeroporto Internacional Dr.
António Agostinho Neto dá mais um passo estratégico para se afirmar como hub de referência na aviação africana.',
                'detach' => 'normal',
                'status' => 'published',
                'description' => '<p style="margin-left:0px;">O Aeroporto Internacional Dr. António Agostinho Neto (AIAAN) está a reforçar a segurança e a eficiência operacional com a implementação de um sistema de radar de superfície de ponta. O investimento inscreve-se na visão de modernização tecnológica que visa coloca Angola na linha da frente da segurança operacional no continente.</p><p style="margin-left:0px;">O novo equipamento, integrado no Programa de Modernização dos Sistemas de Ajuda à Navegação Aérea “AGO20801” da Empresa Nacional de Navegação Aérea (ENNA-EP), permite a monitorização contínua de aeronaves e veículos nas áreas mais críticas do aeroporto, incluindo pistas, caminhos de circulação e zonas de estacionamento.</p><p style="margin-left:0px;">Essa capacidade é considerada vital para garantir a segurança operacional, independentemente das condições meteorológicas.</p><p style="margin-left:0px;">“Mesmo em situações de visibilidade extremamente reduzida, como nevoeiro intenso ou chuva forte, a tecnologia assegura a gestão eficaz do tráfego aéreo e terrestre, reafirmando o compromisso de Angola com a modernização da aviação civil”, refere a ENNA-EP, em comunicado.</p><p style="margin-left:0px;">Aliado a outras soluções inovadoras, como os sistemas ADS/WAM e a expansão da cobertura VHF, o radar eleva os padrões de vigilância e segurança da aviação angolana a níveis internacionais. “O avanço tecnológico coloca Angola entre os países líderes da aviação civil no continente africano”, destaca a
nota.</p><p style="margin-left:0px;">Ainda assim, a empresa sublinha que apenas o investimento contínuo em tecnologia e uma visão estratégica orientada para o futuro permitirão consolidar o país como referência regional.</p><p style="margin-left:0px;">A nova tecnologia de radar de superfície demonstra que, mesmo quando os olhos humanos não conseguem ver, a segurança de cada voo está garantida.</p>',
                'date' => '2025-08-27',
                'category_id' => 7,
                'deleted_at' => NULL,
                'created_at' => '2025-08-27 09:00:44',
                'updated_at' => '2025-08-27 09:00:44',
            ),
            5 =>
            array(
                'id' => 6,
                'image' => '07315330f1d0fc789987af606f9b1280.jpg',
                'title' => 'Vietnamita detida no Aeroporto 4 de Fevereiro com mais de 27 mil dólares',
                'slug' => 'vietnamita-detida-no-aeroporto-4-de-fevereiro-com-mais-de-27-mil-dolares',
                'subtitle' => 'Uma cidadã vietnamita foi detida, na segunda-feira, no Aeroporto Internacional 4 de Fevereiro, em Luanda, por tentar transportar ilegalmente para o exterior mais de 27 mil dólares, cujo valor não é permitido por lei.',
                'detach' => 'normal',
                'status' => 'published',
                'description' => '<p>De acordo com a Polícia Nacional, a passageira, identificada como Trinh Thi Hanh, de 48 anos, foi interpelada durante o embarque no voo QR-1491 da Qatar Airways, com destino a Doha.</p><p>Durante uma operação conjunta entre a Polícia Fiscal Aduaneira e técnicos da Administração Geral Tributária (AGT), o dinheiro excedente foi encontrado escondido em fundos falsos de uma mochila e de uma mala de mão.</p><p>O caso enquadra-se no crime de fraude no transporte ou transferência de moeda para o exterior, punível com pena de prisão maior.</p><p>Após a detenção, a suspeita foi encaminhada ao estabelecimento prisional competente e será apresentada ao Ministério Público para o primeiro interrogatório judicial.</p>',
                'date' => '2025-08-27',
                'category_id' => 11,
                'deleted_at' => NULL,
                'created_at' => '2025-08-27 09:13:29',
                'updated_at' => '2025-08-27 09:13:29',
            ),
            6 =>
            array(
                'id' => 7,
                'image' => '5f50cf807e0b170b17de91c1e7c40a18.jpg',
                'title' => 'Mobilização de mais membros satisfaz OMA',
                'slug' => 'mobilizacao-de-mais-membros-satisfaz-oma',
                'subtitle' => 'O recrutamento de novos membros para integrarem a OMA, na província do Cuando, satisfaz a organização política feminina do MPLA, revelou, terça-feira, no município de Mavinga, a secretária-geral adjunta, Maria Esperança dos Santos.',
                'detach' => 'normal',
                'status' => 'published',
                'description' => '<p>A dirigente partidária, citada pela Angop, manifestou a satisfação em declarações à imprensa, no fim da Assembleia Piloto n.º 1 do Processo Orgânico, que reconduziu a coordenadora de base do bairro Vila-Alice, em Mavinga, Adelina Mulonga, e
mais três membros da direcção.</p><p>Em relação ao processo de eleição interna, Maria Esperança dos Santos considerou ter sido “um bom exercício democrático” e acredita que “a direcção eleita está em condições de continuar a conduzir, com êxito, os destinos da OMA na circunscrição”.</p><p>A secretária-geral adjunta da OMA admitiu, também, que as militantes em Mavin- ga estão comprometidas com a causa da organização, tendo adiantado que o processo de realização das assembleias ao nível das estruturas de base vai continuar no Cuando, nas próximas duas
semanas, pelo facto de ter iniciado tardiamente em relação às demais províncias.</p><p>Terminada esta fase, esclareceu Maria Esperança dos
Santos, dar-se-á início às assembleias constitutivas ao nível comunal, municipal e, em Novembro, a eleição das secretárias provinciais da OMA.</p><p>A agenda da secretária-geral adjunta da OMA reser- va, para o último dia de trabalho, em Mavinga, visitas a infra-estruturas de carácter social e económico em execução na capital da província do Cuando.</p>',
                'date' => '2025-08-27',
                'category_id' => 5,
                'deleted_at' => NULL,
                'created_at' => '2025-08-27 09:29:11',
                'updated_at' => '2025-08-27 09:29:11',
            ),
            7 =>
            array(
                'id' => 8,
                'image' => '309e8d78b1a878942b08784a3ce563cb.jpg',
                'title' => 'Delegação angolana participa na 75.ª Sessão do Comité Regional da OMS para África',
                'slug' => 'delegacao-angolana-participa-na-75a-sessao-do-comite-regional-da-oms-para-africa',
                'subtitle' => 'A ministra da Saúde, Sílvia Lutucuta, chefia uma delegação angolana que participa na 75.ª Sessão do Comité Regional da Organização Mundial da Saúde (OMS) para África, que decorre de 25 a 27 de Agosto, em Lusaka, capital da República da Zâmbia',
                'detach' => 'destaque',
                'status' => 'published',
                'description' => '<p>O encontro reúne ministros da saúde africanos, líderes de agências multilaterais, representantes diplomáticos e parceiros estratégicos para avaliar progressos e definir estratégias de reforço dos sistemas de saúde pública na região.</p><p>Segundo uma nota de imprensa enviada ao Jornal de Angola Online, na cerimónia de abertura o Presidente da Zâmbia, Hakainde Hichilema, destacou a importância da cooperação entre Estados-Membros, com foco na vigilância epidemiológica, vacinação e resposta a surtos como cólera, MPOX e outras doenças infecciosas.</p><p>&nbsp;&nbsp;</p><p>O Chefe de Estado apelou, ainda, ao aumento das contribuições internas dos países africanos ao orçamento da OMS.</p><p>A participação angolana decorre num contexto em que o país, sob a liderança do Presidente da República
e da União Africana, João Lourenço, actual líder da União Africana, tem reforçado a importância da diplomacia da saúde.</p><p>Na 78.ª Assembleia Mundial da Saúde, Angola fez uma contribuição financeira voluntária à OMS, incentivando outros países a seguir o mesmo exemplo. Durante a sessão, Angola reafirmou o compromisso com o acesso universal à saúde, a inclusão, a sustentabilidade e a resiliência dos sistemas sanitários, alinhando-se à abordagem “Uma Só Saúde” e aos objectivos da segurança sanitária regional.</p><p>&nbsp;</p><p>Entre os presentes estão o Director-Geral da OMS, Tedros Adhanom Ghebreyesus, o novo Director Regional da OMS para África, Yakub Janabi, o Director-Geral do CDC África, Jean Kaseya, o Presidente da Comissão da União Africana, Mahamoud Ali Youssouf, e o Embaixador de Angola na Zâmbia, Albino Malungo.</p><p>O evento reforça a importância do diálogo político multilateral para soluções regionais sustentáveis face aos desafios de saúde pública em África.</p>',
                'date' => '2025-08-27',
                'category_id' => 4,
                'deleted_at' => NULL,
                'created_at' => '2025-08-27 09:34:35',
                'updated_at' => '2025-08-27 09:34:35',
            ),
            8 =>
            array(
                'id' => 9,
                'image' => '69bf2cb804f036e09a0aace779a2d4d8.jpg',
                'title' => 'Moda angolana inspirada na Palanca Negra ganha destaque na Alemanha',
                'slug' => 'moda-angolana-inspirada-na-palanca-negra-ganha-destaque-na-alemanha',
                'subtitle' => 'A moda angolana esteve em alta esta semana, na cidade de Berlim, Alemanha, pelas mãos da Kabuiza Couture, que realizou um desfile naquele que é um cenário internacional.',
                'detach' => 'normal',
                'status' => 'published',
                'description' => '<p>Na sua 1.ª edição a marca apresentou uma coleção de tecidos com designs próprios, inspirados na Palanca Negra Gigante, símbolo de elegância e identidade cultural de Angola, localizada no parque de Cangandala Província de Malange, utilizando materiais naturais e designs sofisticados, avança um comunicado de imprensa.</p><p>O evento contou com a presença de diplomatas, com destaque a embaixadora de Angola, na República Federal da Alemanha, a Maria Isabel Gomes Godinho de Resende Encoge e o embaixador de Moçambique na Alemanha o Elias Jaime Zimba, bem como altos funcionários das duas representações diplomáticas para além de empresários local e internacionais</p><p><strong>Desfile</strong></p><p>Desfilaram Modelos de várias nacionalidades reforçando o caráter cultural global e inclusivo da marca Kabuiza.</p><p>Segundo os CEOs, a missão da Kabuiza Couture é elevar a moda angolana ao nível do mundo, mostrando criatividade, autenticidade e inovação.</p><p>O evento contou com a colaboração da NIO House Deutschland, Edueni Academy, Eduini Acessoria, ABBB (ANGOLAN BUSINESS BEYOND BORDER), Michael Summer photos, e outros.</p>',
                'date' => '2025-08-27',
                'category_id' => 6,
                'deleted_at' => NULL,
                'created_at' => '2025-08-27 09:40:27',
                'updated_at' => '2025-08-27 09:40:27',
            ),
            9 =>
            array(
                'id' => 10,
                'image' => 'cd0440eae18d4ca252021f4c02653926.jpg',
                'title' => 'Primeiro-ministro guineense levado para hospital de Dakar',
                'slug' => 'primeiro-ministro-guineense-levado-para-hospital-de-dakar',
                'subtitle' => 'O Primeiro-Ministro da Guiné-Bissau, Braima Camará, foi transportado ontem de urgência para um hospital em Dakar, no Senegal, após desmaiar numa cerimónia no palácio presidencial de Bissau, avançou a agência de notícias France-Presse (AFP).',
                'detach' => 'destaque',
                'status' => 'published',
                'description' => '<p>“No final da cerimónia, ele sentiu-se mal e desmaiou”, confirmou à AFP uma fonte próxima do gabinete do Primeiro-Ministro, explicando que o Chefe do Governo se encontrava de pé, juntamente com outros responsáveis guineenses, enquan- to o Presidente discursava, tendo desmaiado.</p><p>O Chefe do Governo foi, então, levado a bordo de um avião militar médico senegalês para Dakar, para
ser internado num hospital, acrescentou a mesma fonte.</p><p>Não foi feita qualquer declaração oficial pública sobre o assunto, noticia, ainda, a AFP. “O Primeiro-Ministro está fora de perigo; recebeu cuidados muito rápidos e eficazes” antes mesmo de ser retirado, disse outro membro da comitiva do Primeiro-Ministro.</p><p>Camará sucedeu a Rui de Barros, nomeado a 20 de Dezembro de 2023 para liderar um Governo de iniciativa presidencial, depois da dissolução do Parlamento pelo Chefe de Estado, meio ano depois das legislativas, ganhas pela coligação Plataforma Aliança Inclusiva (PAI) - Terra Ranka.</p><p>As presidenciais têm estado envoltas em polémica com a oposição a defender que já deviam ter sido marcadas antes de 27 de Fevereiro, data em que Sissoco Embaló completou cinco anos à frente da Presidência da Guiné-Bissau.</p>',
                'date' => '2025-08-27',
                'category_id' => 11,
                'deleted_at' => NULL,
                'created_at' => '2025-08-27 09:43:22',
                'updated_at' => '2025-08-27 09:43:22',
            ),
        ));
    }
}
