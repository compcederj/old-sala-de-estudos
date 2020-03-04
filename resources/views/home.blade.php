@extends('layout.site')

@section('content')
<!-- Header -->
<header class="masthead bg-main text-white text-center">
    <div class="container">
        <!--<img class="img-fluid d-block mx-auto" src="img/logo-main.png" alt="">-->
        <!--<h1 class="mb-0 cor-principal texto-sombreado escondido">Sala De Estudos</h1>-->
        <div class="cor-triade-salmao" id="titulo">
            <h2>Não fique sozinho!<br>Venha para a </h2>
            <h1>Sala de Estudos</h1>
            <h2 class="font-weight-bold">do <em>CompCEDERJ</em></h2>
        </div>
    </div>
</header>
<!-- Disciplinas Section -->
<section class="disciplinas" id="disciplinas">
    <div class="container">
        <h2 class="text-center">Disciplinas</h2>
        <hr class="dark">
        <div class="row">
            <div class="col-md-4 mt-3">
                <div class="list-group" id="disciplinasList" role="tablist">
                    <!--<a href="#oportunidades" class="aulas-disciplina list-group-item list-group-action" data-toggle="list">Oportunidades de Estágio</a>-->
                    <a href="#dicas" class="aulas-disciplina list-group-item list-group-action active" data-toggle="list">Tecnologia em Sistemas da Computação</a>
                    <a href="#AL" class="aulas-disciplina list-group-item list-group-action" data-toggle="list" data-alvo="#aulasAL" data-quantidade="15" data-disciplina="ead05006">Álgebra Linear</a>
                    <a href="#AS" class="aulas-disciplina list-group-item list-group-action" data-toggle="list" data-alvo="#aulasAS" data-quantidade="24" data-disciplina="ead05018">Análise de Sistemas</a>
                    <a href="#APS" class="aulas-disciplina list-group-item list-group-action" data-toggle="list" data-alvo="#aulasAPS" data-quantidade="21" data-disciplina="ead05022">Arquitetura e Projeto de Sistemas</a>
                    <a href="#BD" class="aulas-disciplina list-group-item list-group-action" data-toggle="list" data-alvo="#aulasBD" data-quantidade="29" data-disciplina="ead05014">Banco de Dados</a>
                    <a href="#CG" class="aulas-disciplina list-group-item list-group-action" data-toggle="list" data-alvo="#aulasCG" data-quantidade="19" data-disciplina="ead05023">Computação Gráfica</a>
                    <a href="#CPW" class="aulas-disciplina list-group-item list-group-action" data-toggle="list" data-alvo="#aulasCPW" data-quantidade="20" data-disciplina="ead05002">Construção de Páginas WEB</a>
                    <a href="#DP" class="aulas-disciplina list-group-item list-group-action" data-toggle="list">Desafios de Programação</a>
                    <a href="#EE" class="aulas-disciplina list-group-item list-group-action" data-toggle="list" data-alvo="#aulasEE" data-quantidade="14" data-disciplina="ead05024">Empreendedorismo e Ética</a>
                    <a href="#ES" class="aulas-disciplina list-group-item list-group-action" data-toggle="list" data-alvo="#aulasES" data-quantidade="18" data-disciplina="ead05019">Engenharia de Software</a>
                    <a href="#ED" class="aulas-disciplina list-group-item list-group-action" data-toggle="list" data-alvo="#aulasED" data-quantidade="36" data-disciplina="ead05007">Estrutura de Dados</a>
                    <a href="#FC" class="aulas-disciplina list-group-item list-group-action" data-toggle="list" data-alvo="#aulasFC" data-quantidade="26" data-disciplina="ead05015">Física para Computação</a>
                    <a href="#FAC" class="aulas-disciplina list-group-item list-group-action" data-toggle="list" data-alvo="#aulasFAC" data-quantidade="24" data-disciplina="ead05004">Fundamentos de Algoritmos para Computação</a>
                    <a href="#FP" class="aulas-disciplina list-group-item list-group-action" data-toggle="list" data-alvo="#aulasFP" data-quantidade="12" data-disciplina="ead05029">Fundamentos de Programação</a>
                    <a href="#II" class="aulas-disciplina list-group-item list-group-action" data-toggle="list">Inglês Instrumental</a>
                    <a href="#IaI" class="aulas-disciplina list-group-item list-group-action" data-toggle="list" data-alvo="#aulasIaI" data-quantidade="13" data-disciplina="ead05001">Introdução à Informática</a>
                    <a href="#LIBRAS" class="aulas-disciplina list-group-item list-group-action" data-toggle="list">LIBRAS</a>
                    <a href="#MB" class="aulas-disciplina list-group-item list-group-action" data-toggle="list">Matemática Básica</a>
                    <a href="#MC" class="aulas-disciplina list-group-item list-group-action" data-toggle="list" data-alvo="#aulasMC" data-quantidade="9" data-disciplina="ead05008">Matemática para Computação</a>
                    <a href="#MI" class="aulas-disciplina list-group-item list-group-action" data-toggle="list" data-alvo="#aulasMI" data-quantidade="23" data-disciplina="ead05011">Modelagem de Informação</a>
                    <a href="#OC" class="aulas-disciplina list-group-item list-group-action" data-toggle="list" data-alvo="#aulasOC" data-quantidade="10" data-disciplina="ead05010">Organização de Computadores</a>
                    <a href="#PE" class="aulas-disciplina list-group-item list-group-action" data-toggle="list" data-alvo="#aulasPE" data-quantidade="12" data-disciplina="ead05012">Probabilidade e Estatística</a>
                    <a href="#PIG" class="aulas-disciplina list-group-item list-group-action" data-toggle="list" data-alvo="#aulasPIG" data-quantidade="13" data-disciplina="ead05030">Programação com Interfaces Gráficas</a>
                    <a href="#PAW" class="aulas-disciplina list-group-item list-group-action" data-toggle="list" data-alvo="#aulasPAW" data-quantidade="14" data-disciplina="ead05017">Programação de Aplicações WEB</a>
                    <a href="#POO" class="aulas-disciplina list-group-item list-group-action" data-toggle="list" data-alvo="#aulasPOO" data-quantidade="13" data-disciplina="ead05021">Programação Orientada a Objetos</a>
                    <a href="#PDA" class="aulas-disciplina list-group-item list-group-action" data-toggle="list" data-alvo="#aulasPDA" data-quantidade="15" data-disciplina="ead05005">Projeto e Desenvolvimento de Algoritmos</a>
                    <a href="#RC1" class="aulas-disciplina list-group-item list-group-action" data-toggle="list" data-alvo="#aulasRC1" data-quantidade="14" data-disciplina="ead05020">Redes de Computadores I</a>
                    <a href="#RC2" class="aulas-disciplina list-group-item list-group-action" data-toggle="list" data-alvo="#aulasRC2" data-quantidade="23" data-disciplina="ead05025">Redes de Computadores II</a>
                    <a href="#SO" class="aulas-disciplina list-group-item list-group-action" data-toggle="list" data-alvo="#aulasSO" data-quantidade="12" data-disciplina="ead05016">Sistemas Operacionais</a>
                    <a href="#TCC" class="aulas-disciplina list-group-item list-group-action" data-toggle="list">Trabalho de Conclusão de Curso</a>
                </div>
            </div>
            <div class="col-md-8 mt-3">
                <!-- Conteúdo exibido ao clicar no nome das matérias. -->
                <div class="tab-content">
                    <!--<div class="tab-pane" role="tabpanel" id="oportunidades">
                      <h3 class="text-center">Oportunidades de Estágio em Tecnologia</h3>
                      <div>
                        <p>A realização de estágio profissional é opcional para o nosso curso de Tecnologia em Sistemas de Computação.</p>
                        <p>Porém, acreditamos que o estágio seja uma oportunidade perfeita para colocar em prática o que é aprendido no CEDERJ, de forma a assimilar melhor o conteúdo, além da experiência fornecer um direcionamento sobre qual área da Computação deseja-se seguir.</p>
                        <p>Pensando nisso, criamos uma seção especial para a divulgação de oportunidades na nossa área. Caso deseje contribuir, basta entrar em contato conosco nos botões de redes sociais ao final da página.</p>
                        <div class="oportunidade borda-superior">
                        </div>
                      </div>
                    </div>-->
                    <div class="tab-pane active" role="tabpanel" id="dicas">
                        <h3 class="text-center">Tecnologia em Sistemas da Computação</h3>
                        <div>
                            <p>O Curso Superior de Tecnologia em Sistemas de Computação do <a href="http://www.cederj.edu.br/fundacao/" target="_blank">CEDERJ</a>/<a href="http://www.uab.capes.gov.br/index.php" target="_blank">UAB</a> é um curso semi-presencial oferecido pelo IC/UFF, sob a administração do CEDERJ/UAB e com a colaboração de docentes e técnicos da UFRJ e da UNIRIO. O curso é autorizado pelo MEC e recebeu nota 4 no último ENADE (2014).</p>
                            <p>O curso tem como objetivo a formação de profissionais com competência para realizar, entre outras tarefas, instalação e configuração de redes locais, manutenção e gerenciamento de redes locais, desenvolvimento e manutenção de sites na web, desenvolvimento de programas, instalação de sistemas operacionais, instalação e manutenção de banco de dados, montagem e instalação de computadores e desenvolvimento de interfaces.</p>
                            <p><a href="http://vestibular.cederj.edu.br/" target="_blank">Mais informações sobre o vestibular.</a></p>
                            <p><a href="http://www.cederj.edu.br/" target="_blank">Mais informações sobre os cursos oferecidos pelo CEDERJ.</a></p>
                        </div>
                        <div>
                            <h4>COMO ESTUDAR PARA AS DISCIPLINAS:</h4>
                            <ul>
                                <li> Assista às aulas com atenção para entender o que está sendo explicado e cobrado nas provas.</li>
                                <li> Revise a aula estudada no mesmo dia para fixar o assunto explicado.</li>
                                <li> Faça e refaça toda a sua AD proposta pelo professor e não deixe <strong>NUNCA</strong> para a <strong>ÚLTIMA HORA</strong>.</li>
                                <li> Esteja pelo menos uma semana antes do cronograma da disciplina estudada.</li>
                                <li> Tenha em posse o livro-texto da disciplina compre-o, pegue-o emprestado na biblioteca, ou tenha a versão digital no seu PC, tablet, smartphone, celular ou similares. Pois no livro-texto esta contido as explicações mais detalhadas que o professor demonstra na vídeo aula , explicações de exercícios de ADs e APs.</li>
                                <li> Dúvida em relação a alguma questão ou quer uma explicação mais detalhada, vocês tem o auxílio do tutor presencial no seu polo, não tem tutor presencial no seu polo, tem também a ajuda do tutor a distância da sua disciplina, se tutor a distância não te explica de forma contundente, então utilize os fóruns ou grupos de estudo.</li>
                                <li> Para fazer uma boa prova: Faça e refaça a sua ad, também estude pelas provas anteriores e esteja afiado no conteúdo das disciplinas.</li>
                                <li> Este curso exige que o aluno seja autodidata e fornece o mínimo de suporte para o aluno. Se você ainda não é muito organizado, nunca colocou essas dicas em prática na vida e deixa tudo para a última hora, você pode sofrer demais neste curso.</li>
                            </ul>
                        </div>
                    </div>
                    <div class="tab-pane" role="tabpanel" id="AL">
                        <h3 class="text-center">Álgebra Linear</h3>
                        <div class="participe text-center">
                            <a href="https://drive.google.com/open?id=0B09LpkQ_E4zTWlY3bUNKMElxSGc" target="_blank"><img src="img/drive.png" class="img-fluid" alt=""></a>
                            <a class="wpp-button" href="javascript:void(0);" target="_blank"><img src="img/whatsapp.png" class="img-fluid" alt=""></a>
                        </div>
                        <div class="ementa mb-1">
                            <h4>Ementa</h4>
                            Sistemas de equações lineares; Matrizes; Determinantes; Vetores; Espaços vetoriais; Dependência e independência linear; Transformações lineares; Autovalores e autovetores; Métodos numéricos; Análise de erro.
                        </div>
                        <div id="aulasAL" class="aulas row mb-3" role="toolbar" aria-label="Link para as aulas"></div>
                        <div class="dicas">
                            <h4>Dicas</h4>
                            <p>
                                As aulas gravadas para o nosso curso são muito ruins. Uma das piores. Buscar material externo para aprender é muito recomendável. Use e abuse do livro-texto. O portal Teca tem um muito bom que compreende todo a matéria do curso. Ambos estão disponíveis no Drive.
                            </p>
                            <p>
                                <a target="_blank" href="http://matrixcalc.org/pt/" class="btn fundo-principal mt-3 mb-0 cor-composto-laranja btn-block">Matrix calculator</a> Com esse site você consegue garantir a nota máxima nas ADs. Além de calcular o resultado das questões propostas, esse site também fornece o desenvolvimento das questões. Aproveite e estude com ele. Aprenda passo a passo como resolver cada questão.
                            </p>
                            <p>
                                <a target="_blank" href="https://www.youtube.com/playlist?list=PL017DD5B497DF1A16" class="btn fundo-principal mt-3 mb-0 cor-composto-laranja btn-block">Aulas da Rosely Bervian</a> Com certeza as melhores aulas sobre a matéria do YouTube. Uma pena que não cobre todo o conteúdo da nossa disciplina.
                            </p>
                            <p>
                                <a target="_blank" href="https://www.youtube.com/playlist?list=PLE6qFDd4x9w_Q3Dsh6j2i6Q1IxSyvyTnC&disable_polymer=true" class="btn fundo-principal mt-3 mb-0 cor-composto-laranja btn-block">Aulas do Fernando Grings</a> As primeiras sete aulas do Fernando Grings vão te preparar para as aulas sobre vetores do curso e te adiantar algum conteúdo que será visto mais pra frente.
                            </p>
                            <!--Dicas Álgebra-->
                        </div>
                    </div>
                    <div class="tab-pane" role="tabpanel" id="AS">
                        <h3 class="text-center">Análise de Sistemas</h3>
                        <div class="participe text-center">
                            <a href="https://drive.google.com/open?id=0B09LpkQ_E4zTM1hvQ0xObS1aYzA" target="_blank"><img src="img/drive.png" class="img-fluid" alt=""></a>
                            <a class="wpp-button" href="javascript:void(0);" target="_blank"><img src="img/whatsapp.png" class="img-fluid" alt=""></a>
                        </div>
                        <div class="ementa mb-1">
                            <h4>Ementa</h4>
                            Requisitos funcionais e não funcionais. Modelagem do negócio, incluindo regras de negócio e workflow. Técnicas para captura de requisitos – Entrevistas, JAD, Storyboard. Especificação de requisitos funcionais. Especificação de requisitos usando casos de uso. Integração com o modelo de dados (ER).
                        </div>
                        <div id="aulasAS" class="aulas row mb-3" role="toolbar" aria-label="Link para as aulas"></div>
                        <div class="dicas">
                            <!--Dicas Análise de Sistemas-->
                        </div>
                    </div>
                    <div class="tab-pane" role="tabpanel" id="APS">
                        <h3 class="text-center">Arquitetura e Projeto de Sistemas</h3>
                        <div class="participe text-center">
                            <a href="https://drive.google.com/open?id=0B09LpkQ_E4zTMmRDWTVaNktQVUk" target="_blank"><img src="img/drive.png" class="img-fluid" alt=""></a>
                            <a class="wpp-button" href="javascript:void(0);" target="_blank"><img src="img/whatsapp.png" class="img-fluid" alt=""></a>
                        </div>
                        <div class="ementa mb-1">
                            <h4>Ementa</h4>
                            Componentes e frameworks. Soluções padronizadas (padrões de projeto). Projeto de sistemas para Internet.
                        </div>
                        <div id="aulasAPS" class="aulas row mb-3" role="toolbar" aria-label="Link para as aulas"></div>
                        <div class="dicas">
                            <!--Dicas Arquitetura e Projeto de Sistemas-->
                        </div>
                    </div>
                    <div class="tab-pane" role="tabpanel" id="BD">
                        <h3 class="text-center">Banco de Dados</h3>
                        <div class="participe text-center">
                            <a href="https://drive.google.com/open?id=0B09LpkQ_E4zTSUlNTjZUQnB6QVE" target="_blank"><img src="img/drive.png" class="img-fluid" alt=""></a>
                            <a class="wpp-button" href="javascript:void(0);" target="_blank"><img src="img/whatsapp.png" class="img-fluid" alt=""></a>
                        </div>
                        <div class="ementa mb-1">
                            <h4>Ementa</h4>
                            Conceitos; evolução dos sistemas de banco de dados; sistemas de gerenciamento de banco de dados (SGBDs); modelos de bancos de dados: hierárquico, relacional e orientado a objetos; modelo relacional, álgebra e cálculo relacional; SQL: linguagem de definição e manipulação de dados; projeto lógico relacional: mapeamentode E-R para relacional; normalização; projeto físico; otimização de consultas; mecanismos de controle de concorrência.
                        </div>
                        <div id="aulasBD" class="aulas row mb-3" role="toolbar" aria-label="Link para as aulas"></div>
                        <div class="dicas">
                            <h4>Dicas</h4>
                            <p>
                                As aulas da plataforma são ótimas,porém é fundamental que você também busque conteúdos externos, talvéz você tenha mais facilidade com outras abordagens. Faça os exercícios da aula, refaça a APs antigas, não deixe as ADs para a última hora. A disciplina é considerada bem tranquila. É importante que o aluno exercite os comando em álgebra relacional e SQL, todas as provas serão discursivas no papel, ou seja, aprenda como funciona todos os comandos, pois na resolução da prova não terá auxílio de programas. Livros como, "Sistema de Bano de Dados 4ª Edição do Elmasri & Navathe, e Projeto de Banco de Dados - Carlos Alberto Heuser podem ser uma ótima sugestão para o entendimento da disciplina.
                            </p>
                            <p>
                                <a target="_blank" href="https://www.youtube.com/watch?v=pmAxIs5U1KI&list=PLxI8Can9yAHeHQr2McJ01e-ANyh3K0Lfq" class="btn fundo-principal mt-3 mb-0 cor-composto-laranja btn-block">
                                    Univesp - Banco de Dados
                                </a>
                                As aulas são ótimas e aborda todo o conteúdo do curso, a Univesp tem um dos melhores canais de ensino universitários da web.
                            </p>
                            <p>
                                <a target="_blank" href="https://www.youtube.com/watch?v=Ofktsne-utM&list=PLHz_AreHm4dkBs-795Dsgvau_ekxg8g1r" class="btn fundo-principal mt-3 mb-0 cor-composto-laranja btn-block">
                                    Curso em Vídeo - Banco de Dados MySQL
                                </a> Com toda certeza, nesse playlist você encontra o melhor conteúdo de Banco de Dados MySQL da Web, o material é super didático, dinamico e muito bem elabora com exemplos e exercícios, porém não aborda nada sobre algebra relacional e normalização, pois é um curso básico que ensina mais que cursinho presenciais, certamente esse conteúdo vai ajudar muito no estudo da disciplina.
                            </p>
                            <p>
                                <a target="_blank" href="https://www.youtube.com/watch?v=Q_KTYFgvu1s&list=PLucm8g_ezqNoNHU8tjVeHmRGBFnjDIlxD" class="btn fundo-principal mt-3 mb-0 cor-composto-laranja btn-block">
                                    Bóson Treinamentos - Modelagem de Dados
                                </a> Ótimo material sendo abordado de forma didática, porém essa playlist foca nos conteúdos teóricos, como modelo relacional, diagrama ER, cardinalidade e normalização.
                            </p>
                            <p>
                                <a target="_blank" href="https://www.youtube.com/watch?v=W526HRx84oE&index=27&list=PLucm8g_ezqNrWAQH2B_0AnrFY5dJcgOLR" class="btn fundo-principal mt-3 mb-0 cor-composto-laranja btn-block">
                                    Bóson Treinamentos - MySQL
                                </a> Ótima material sendo abordado de forma didática, porém essa playlist foca mais nos comando de MySQL.
                            </p>
                            <p>
                                <a target="_blank" href="https://www.youtube.com/watch?v=OUZIaoCSJas" class="btn fundo-principal mt-3 mb-0 cor-composto-laranja btn-block">
                                    Instalando e Configurando Mysql Server no Windows
                                </a>
                                <b>Para que serve:</b><br>
                                Serve como um guia rápido a ser utilizado pelos responsáveis pela modelagem e gerenciamento de banco de dados para a utilização desta ferramenta para a modelagem de dados, indicando como construir modelos lógicos para um sistema, gerar as tabelas e seus relacionamentos, inserir dados nessas tabelas e efetuar a sincronização entre modelo lógico e a base de dados física.<br>
                                <b>Em que situação o tema é útil:</b><br>
                                Vale como um guia de consulta para as principais características do produto, bem como os detalhes de licenciamento da mesma. A sua utilidade pode ainda ser destacada para qualquer profissional que seja responsável pela modelagem e gerenciamento de bases de dados usando o SGBD MySQL, independentemente do porte do banco de dados.
                            </p>
                            <!--Dicas Banco de Dados-->
                        </div>
                    </div>
                    <div class="tab-pane" role="tabpanel" id="CG">
                        <h3 class="text-center">Computação Gráfica</h3>
                        <div class="participe text-center">
                            <a href="https://drive.google.com/open?id=0B09LpkQ_E4zTTFZMQnpqYWJfaDQ" target="_blank"><img src="img/drive.png" class="img-fluid" alt=""></a>
                            <a class="wpp-button" href="javascript:void(0);" target="_blank"><img src="img/whatsapp.png" class="img-fluid" alt=""></a>
                        </div>

                        <div class="ementa mb-1">
                            <h4>Ementa</h4>
                            Dispositivos e pacotes de software para computação gráfica. programação usando bibliotecas gráficas; escala e recorte em 2d; algoritmos para traçado de retas; circunferências; letras e polígonos em tecnologia de rastreio; técnicas de interação; técnicas de manipulação de janelas; construção interativa de curvas; armazenamento, compactação e recuperação de informações gráficas; construção de editores gráficos; prática de laboratório.
                        </div>
                        <div id="aulasCG" class="aulas row mb-3" role="toolbar" aria-label="Link para as aulas"></div>
                        <div class="dicas">
                            <!--Dicas Computação Gráfica-->
                        </div>
                    </div>
                    <div class="tab-pane" role="tabpanel" id="CPW">
                        <h3 class="text-center">Construção de Páginas WEB</h3>
                        <div class="participe text-center">
                            <a href="https://drive.google.com/open?id=0B09LpkQ_E4zTMmlaemZQSHkyT1E" target="_blank"><img src="img/drive.png" class="img-fluid" alt=""></a>
                            <a class="wpp-button" href="javascript:void(0);" target="_blank"><img src="img/whatsapp.png" class="img-fluid" alt=""></a>
                        </div>
                        <div class="ementa mb-1">
                            <h4>Ementa</h4>
                            Características gerais da linguagem HTML; Comandos básicos de formatação de texto; Listas e enumerações; Interligação de documentos; Inclusão de imagens; Definição de cores; Imagens mapeadas; Multimídia e animações; Formatação utilizando tabelas; Páginas com Frames; Criação de Formulários; Folhas de estilo; Elementos da linguagem javascript; Desvio condicional; Laços; Funções; Objetos; Hierarquia dos objetos do browser; Tratamento de eventos; Crítica de formulários; Manipulação de janelas e frames.
                        </div>
                        <div id="aulasCPW" class="aulas row mb-3" role="toolbar" aria-label="Link para as aulas"></div>
                        <div class="dicas">
                            <!--Dicas CPW-->
                            <p>
                                Por: <a href="https://github.com/alepbert"><small>alpbert</small></a><br> Aqui está playlist do professor Guanabara do curso Algoritmos.
                                <a href="https://www.youtube.com/playlist?list=PLHz_AreHm4dlAnJ_jJtV29RFxnPHDuk9o" class="btn fundo-principal mt-3 mb-0 cor-composto-laranja btn-block">Curso de HTML5 - Curso em Vídeo</a>
                            </p>
                        </div>
                    </div>
                    <div class="tab-pane" role="tabpanel" id="DP">
                        <h3 class="text-center">Desafios de Programação</h3>
                        <div class="participe text-center">
                            <a target="_blank"><img src="img/drive.png" class="img-fluid" alt=""></a>
                        </div>

                        <div class="ementa mb-1"></div>
                        <div id="aulasDP" class="aulas row mb-3"></div>
                        <div class="dicas">
                            <!--Dicas Desafios de Programação-->
                        </div>
                    </div>
                    <div class="tab-pane" role="tabpanel" id="EE">
                        <h3 class="text-center">Empreendedorismo e Ética</h3>
                        <div class="participe text-center">
                            <a href="https://drive.google.com/open?id=0B09LpkQ_E4zTcGhIVFNqamRCWUk" target="_blank"><img src="img/drive.png" class="img-fluid" alt=""></a>
                            <a class="wpp-button" href="javascript:void(0);" target="_blank"><img src="img/whatsapp.png" class="img-fluid" alt=""></a>
                        </div>
                        <div class="ementa mb-1">
                            <h4>Ementa</h4>
                            <p>Estudo dos mecanismos e procedimentos para criação de empresas; perfil do empreendedor; desenvolvimento da capacidade empreendedora; sistemas de gerenciamento; qualidade e competitividade; técnicas de negociação; marketing; ética e códigos de ética profissional; educação ambiental.</p>
                        </div>
                        <div id="aulasEE" class="aulas row mb-3" role="toolbar" aria-label="Link para as aulas"></div>
                        <div class="dicas">
                            <!--Dicas Empreendedorismo-->
                        </div>
                    </div>
                    <div class="tab-pane" role="tabpanel" id="ES">
                        <h3 class="text-center">Engenharia de Software</h3>
                        <div class="participe text-center">
                            <a href="https://drive.google.com/open?id=0B09LpkQ_E4zTNUd1cC1pNU13aVE" target="_blank"><img src="img/drive.png" class="img-fluid" alt=""></a>
                            <a class="wpp-button" href="javascript:void(0);" target="_blank"><img src="img/whatsapp.png" class="img-fluid" alt=""></a>
                        </div>

                        <div class="ementa mb-1">
                            <h4>Ementa</h4>
                            <p>Produto versus Processo: modelos de ciclo de vida. Engenharia de Requisitos: objetivos e métodos. Paradigmas de desenvolvimento: estruturado, orientado a objetos. Projeto de Software. Implementação de Software: técnicas de codificação e estilos de programação. Gerência de Projeto: planejamento, execução e controle. Modelos de Qualidade de Processo: ISO, CMM. Qualidade de Software: critérios de qualidade, métricas. Revisões e Testes de Software. Manutenção de Software: fundamentos e reengenharia. Reutilização. Apoio automatizado ao desenvolvimento de software: Ambientes e Ferramentas CASE.</p>
                        </div>
                        <div id="aulasES" class="aulas row mb-3" role="toolbar" aria-label="Link para as aulas"></div>
                        <div class="dicas">
                            <!--Dicas Engenharia de Software-->
                        </div>
                    </div>
                    <div class="tab-pane" role="tabpanel" id="ED">
                        <h3 class="text-center">Estrutura de Dados</h3>
                        <div class="participe text-center">
                            <a href="https://drive.google.com/open?id=0B09LpkQ_E4zTcTB2X281ZFZlNHM" target="_blank"><img src="img/drive.png" class="img-fluid" alt=""></a>
                            <a class="wpp-button" href="javascript:void(0);" target="_blank"><img src="img/whatsapp.png" class="img-fluid" alt=""></a>
                        </div>
                        <div class="ementa mb-1">
                            <h4>Ementa</h4>
                            <p>Conceitos básicos de complexidade; notações O, Omega e Theta; listas, filas e pilhas; algoritmos de busca; algoritmos de ordenação; árvores, percurso em árvores; árvore binária de busca; árvores balanceadas; árvores AVL; árvores B; tabelas de espalhamento (hashing); compressão de dados; prática de laboratório.</p>
                        </div>
                        <div id="aulasED" class="row centralizado mb-3" role="toolbar" aria-label="Link para as aulas"></div>
                        <div class="dicas">
                            <!--Dicas Estrutura de Dados-->
                        </div>
                    </div>
                    <div class="tab-pane" role="tabpanel" id="FC">
                        <h3 class="text-center">Física para Computação</h3>
                        <div class="participe text-center">
                            <a href="https://drive.google.com/open?id=0B09LpkQ_E4zTUm5xUDVOWXF0Rjg" target="_blank"><img src="img/drive.png" class="img-fluid" alt=""></a>
                            <a class="wpp-button" href="javascript:void(0);" target="_blank"><img src="img/whatsapp.png" class="img-fluid" alt=""></a>
                        </div>

                        <div class="ementa mb-1">
                            <h4>Ementa</h4>
                            <p>Conceitos físicos básicos: matéria, força e energia; leis da conservação. Eletricidade e magnetismo: carga elétrica, força e campo elétrico; leis de Coulomb e de Gauss; força e campo magnético; leis de Ampère e de Faraday; equações de Maxwell; circuitos elétricos. Ondas: movimento ondulatório – descrição matemática e análise de Fourier; ondas eletromagnéticas, o espectro eletromagnético. Óptica: propagação, reflexão e refração da luz; fibras ópticas. Matéria condensada: física estatística – teoria cinética dos gases, a distribuição de Boltzmann; a estrutura da matéria: átomos, moléculas e sólidos – estados estacionários, teoria das bandas e semicondutores.
                            </p>
                        </div>
                        <div id="aulasFC" class="aulas row mb-3" role="toolbar" aria-label="Link para as aulas"></div>
                        <div class="dicas">
                            <!--Dicas Física-->
                        </div>
                    </div>
                    <div class="tab-pane" role="tabpanel" id="FAC">
                        <h3 class="text-center">Fundamentos de Algoritmos para Computação</h3>
                        <div class="participe text-center">
                            <a href="https://drive.google.com/open?id=0B09LpkQ_E4zTN1N3UnoxYWQ2eE0" target="_blank"><img src="img/drive.png" class="img-fluid" alt=""></a>
                            <a class="wpp-button" href="javascript:void(0);" target="_blank"><img src="img/whatsapp.png" class="img-fluid" alt=""></a>
                        </div>
                        <div class="ementa mb-1">
                            <h4>Ementa</h4>
                            <p>Conceito de Informática, informação, dados e computadores; evolução histórica dos computadores; anatomia de um computador – conceitos básicos de hardware e software; representação eletrônica dos dados (sistemas digitais, sistema binário e código de representação); noções sobre comunicações e redes de computadores; problemas de segurança - controle de acesso e proteção a vírus.</p>
                        </div>
                        <div id="aulasFAC" class="row centralizado mb-3" role="toolbar" aria-label="Link para as aulas"></div>
                        <div class="dicas">
                            <!--Dicas FAC-->
                        </div>
                    </div>
                    <div class="tab-pane" role="tabpanel" id="FP">
                        <h3 class="text-center">Fundamentos de Programação</h3>
                        <div class="participe text-center">
                            <a href="https://drive.google.com/open?id=0B09LpkQ_E4zTaFM2OXdGY0ZERVU" target="_blank"><img src="img/drive.png" class="img-fluid" alt=""></a>
                            <a class="wpp-button" href="javascript:void(0);" target="_blank"><img src="img/whatsapp.png" class="img-fluid" alt=""></a>
                        </div>
                        <div class="ementa mb-1">
                            <h4>Ementa</h4>
                            <p>Concepção e construção de programas; estruturas de controle – atribuição, seqüência, seleção, repetição e recursividade; representação de dados na forma de vetores, matrizes, registros, conjuntos e arquivos; procedimentos, funções e passagem de parâmetros; uso de ponteiros; alocação dinâmica de memória; noções de complexidade de algoritmo; prática de laboratório. (PYHTON).</p>
                        </div>
                        <div id="aulasFP" class="aulas row mb-3" role="toolbar" aria-label="Link para as aulas"></div>
                        <div class="dicas">
                            <h4>Dicas</h4>
                            <p>
                                As aulas gravadas são boas e atuais, mas não se acomode com as aulas da plataforma, busque conteúdos externos também. Faça os exercícios das aulas com o auxílio do URI Online Judge, não deixe as ADs para a última hora, pois a avaliação é muito extensa, cada ponto é primordial para sua aprovação. A disciplina é considerada uma das mais dificies do curso. É importante que o aluno treine a escrita dos códigos no papel, todas as provas serão discursivas no papel, ou seja, sem o auxílio da IDE. Livro como "Python Para Desenvolvedores", "Use A Cabeça!-Python" e "Introdução a Python Modulo A" podem ser uma ótima sugestão para o entendimento da linguagem.
                            </p>
                            <p>
                                <a target="_blank" href="https://www.youtube.com/watch?v=lJjR906426o&list=PLX65ruEX8lOTS_IsLp-STkZLWV9glggDG" class="btn fundo-principal mt-3 mb-0 cor-composto-laranja btn-block">
                                    Ignorância Zero
                                </a> Com toda certeza, nesse playlist você encontra o melhor conteúdo de Python da web, o material é super bem elaborado com a auxilio do livro "Introdução a Python Modulo A", que é recomendado para iniciantes. A playlist tem o total de 153 vídeo aulas, mais da aula 1 até a 58 fica o conteúdo completo para o estudo da disciplina do curso.

                            </p>
                            <p>
                                <a target="_blank" href="https://www.youtube.com/watch?v=j94IGZmwtYI&list=PLesCEcYj003QxPQ4vTXkt22-E11aQvoVj" class="btn fundo-principal mt-3 mb-0 cor-composto-laranja btn-block">
                                    eXcript - Curso de Python
                                </a> Ótimo conteúdo, aulas bem didáticas que abordam a maior parte da matéria cobrado no curso.
                            </p>
                            <p>
                                <a target="_blank" href="https://www.youtube.com/watch?v=S9uPNppGsGo&list=PLHz_AreHm4dlKP6QQCekuIPky1CiwmdI6" class="btn fundo-principal mt-3 mb-0 cor-composto-laranja btn-block">
                                    Curso Em Vídeo - Python 3 - Mundo 1: Fundamentos
                                </a>
                                <a target="_blank" href="https://www.youtube.com/watch?v=nJkVHusJp6E&list=PLHz_AreHm4dk_nZHmxxf_J0WRAqy5Czye&pbjreload=10" class="btn fundo-principal mt-3 mb-0 cor-composto-laranja btn-block">
                                    Curso Em Vídeo - Python 3 - Mundo 2: Estrutura de Controle
                                </a> Um dos canais de estudo mais conhecidos do YouTube, o curso de Python começou do ano de 2017, e está divido em duas parte, Mundo 1: Fundamentos, e Mundo 2: Estruturas de Controle. O Curso tem uma ótima abordagem do conteúdo, e com aquela didatica que todos conhecem,também tem muitos exercícios para fixar os comandos. Porém, como o curso é para iniciantes, o material se torna um pouco básico se for comparado com o curso de Fundamentos de Programação do Cederj, mas mesmo assim é um ótimo meio de aprendizado.
                            </p>
                            <p>
                                <a target="_blank" href="https://www.urionlinejudge.com.br/judge/en/login" class="btn fundo-principal mt-3 mb-0 cor-composto-laranja btn-block">
                                    URI Online Judge
                                </a> O URI Online Judge é um projeto que está sendo desenvolvido pelo Departamento de Ciência da Computação da URI University. O principal objetivo do projeto é fornecer práticas de programação e compartilhamento de conhecimento,o site contém mais de 1.000 problemas divididos em 8 grandes categorias. Esta divisão ajuda os usuários a se concentrar em tópicos específicos de programação. Todos os problemas estão disponíveis em português e inglês.
                            </p>

                            <p>
                                <a target="_blank" href="https://www.youtube.com/watch?v=FSXzGVKmg4Y&t=330s" class="btn fundo-principal mt-3 mb-0 cor-composto-laranja btn-block">
                                    Instalação do Python e a IDE Pycharm
                                </a> Com esse tutorial você consegue fazer as configurações necessárias para começar a desenvolver na linguagem Python.
                            </p>
                            <!--Dicas FP-->
                        </div>
                    </div>
                    <div class="tab-pane" role="tabpanel" id="II">
                        <h3 class="text-center">Inglês Instrumental</h3>
                        <div class="participe text-center">
                            <a href="https://drive.google.com/open?id=0B09LpkQ_E4zTNHRCOXdqblZWYjA" target="_blank"><img src="img/drive.png" class="img-fluid" alt=""></a>
                            <a class="wpp-button" href="javascript:void(0);" target="_blank"><img src="img/whatsapp.png" class="img-fluid" alt=""></a>
                        </div>
                        <div class="ementa mb-1"></div>
                        <h4>Ementa</h4>
                        <p>
                            Decodificação de textos atuais de informática em língua inglesa; Gramática contextualizada; Gramática sistematizada de itens referentes à linguagem tecnológica específica.
                        </p>
                        <div class="dicas">
                            <!--Dicas Inglês-->
                        </div>
                    </div>
                    <div class="tab-pane" role="tabpanel" id="IaI">
                        <h3 class="text-center">Introdução à Informática</h3>
                        <div class="participe text-center">
                            <a href="https://drive.google.com/open?id=0B09LpkQ_E4zTOWdZNHNVdXAzTzQ" target="_blank"><img src="img/drive.png" class="img-fluid" alt=""></a>
                            <a class="wpp-button" href="javascript:void(0);" target="_blank"><img src="img/whatsapp.png" class="img-fluid" alt=""></a>
                        </div>
                        <div class="ementa mb-1">
                            <h4>Ementa</h4>
                            <p>
                                Princípios básicos: Hardware: fluxo de informação, unidades de entrada/saída (periféricos), memória principal, processador. Software: algoritmos, programas, linguagens de programação, compiladores, sistemas operacionais. Unidades de informação, de tempo e freqüência. Representação de números e caracteres, tabela ASCII. Periféricos: vídeo, teclado, unidade de disco, mouse.
                            </p>
                            <p>
                                Componentes principais de um PC: barramentos, controlador de dispositivo IDE, interfaces de vídeo, som, rede, modem, tipos de memórias, estudo da placa mãe, especificando e montando um computador.
                            </p>
                            <p>
                                Sistemas numéricos: representações em diversas bases, propriedades dos sistemas posicionais, sistema binário e hexadecimal, representação de números inteiros e reais, conversão entre bases de números inteiros e reais, operações aritméticas em diversas bases, representação binária em complemento a 2, representação interna de números com sinal, condições de “overflow”.
                            </p>
                            <p>
                                Álgebra de Boole: variável lógica, operações lógicas primitivas (AND, OR, NOT), expressões lógicas, tabela verdade, funções NAND, NOR, OU-exclusivo, relações da álgebra booleana, teoremas de DeMorgan.
                            </p>
                            <p>
                                Funções lógicas: conceito de mintermos e maxtermos, simplificação de expressões lógicas, mapas de Karnaugh.
                            </p>
                            <p>
                                Organização e hierarquia de memória: principal e secundárias, projeto lógico da memória principal, estrutura interna da memória cache.
                            </p>
                            <p>
                                Gerência de memória: paginação, técnicas de swap, memória virtual.
                            </p>
                            <p>
                                Dispositivos de armazenamento e sistemas de arquivos: alocação, organização, estrutura de diretórios, sistemas de discos redundantes (RAID).
                            </p>
                        </div>
                        <div id="aulasIaI" class="aulas row mb-3" role="toolbar" aria-label="Link para as aulas"></div>
                        <div class="dicas">
                            <!--Dicas IaI-->
                        </div>
                    </div>
                    <div class="tab-pane" role="tabpanel" id="LIBRAS">
                        <h3 class="text-center">LIBRAS</h3>
                        <div class="participe text-center">
                            <a target="_blank"><img src="img/drive.png" class="img-fluid" alt=""></a>
                        </div>
                        <div class="ementa mb-1"></div>
                        <div class="dicas">
                            <!--Dicas LIBRAS-->
                        </div>
                    </div>
                    <div class="tab-pane" role="tabpanel" id="MB">
                        <h3 class="text-center">Matemática Básica</h3>
                        <div class="participe text-center">
                            <a href="https://drive.google.com/drive/folders/0B09LpkQ_E4zTNTZ2NDZLM1FsUm8?usp=sharing" target="_blank"><img src="img/drive.png" class="img-fluid" alt=""></a>
                            <a class="wpp-button" href="javascript:void(0);" target="_blank"><img src="img/whatsapp.png" class="img-fluid" alt=""></a>
                        </div>
                        <div class="ementa mb-1"></div>
                        <div class="dicas">
                            <!--Dicas Matemática Básica-->
                        </div>
                    </div>
                    <div class="tab-pane" role="tabpanel" id="MC">
                        <h3 class="text-center">Matemática para Computação</h3>
                        <div class="participe text-center">
                            <a href="https://drive.google.com/open?id=0B09LpkQ_E4zTLW5wRE5oeU5nUGs" target="_blank"><img src="img/drive.png" class="img-fluid" alt=""></a>
                            <a class="wpp-button" href="javascript:void(0);" target="_blank"><img src="img/whatsapp.png" class="img-fluid" alt=""></a>
                        </div>
                        <div class="ementa mb-1">
                            <h4>Ementa</h4>
                            <p>Funções: limites, continuidade de funções de uma variável. Derivação: conceito, propriedades, interpretação e representação geométrica, o teorema do valor médio, máximos e mínimos. Integração: conceito, propriedades, cálculo de áreas e de volumes.; teorema fundamentaldo cálculo; logaritmo e exponencial; regra de L’hopital; aplicações.</p>
                        </div>
                        <div id="aulasMC" class="aulas row mb-3" role="toolbar" aria-label="Link para as aulas"></div>
                        <div class="dicas" aria-label="Dicas">
                            <h4 class="">Dicas</h4>
                            <p>Por: <small>Perla Countinho</small></p>
                            <p>
                                As aulas gravadas do curso são ruins. Buscar material externo para aprender é o ideal. Estude também pelo livro-texto e faça as provas antigas. O portal Teca tem ótimos livros que podem ajudar no seu aprendizado, ou se preferir leia as transparências ao invés de ver as vídeo aulas. Ambos estão disponíveis no Drive. A disciplina aqui nomeada Matemática para Computação pode ser facilmente encontrada através do nome Cálculo I, como é conhecida popularmente.
                            </p>
                            <p>
                                <a target="_blank" href="https://www.symbolab.com/" class="btn fundo-principal mt-3 mb-0 cor-composto-laranja btn-block">
                                    Symbolab Math Solver
                                </a> Com esse site você pode conseguir uma boa nota nas ADs. Além de calcular o resultado das, esse site também fornece o desenvolvimento das questões. Aproveite e estude com ele. Aprenda passo a passo de como resolver questões de Limite, Derivada, Logaritmo e Integrais etc. Com esse site consegue conseguir uma boa nota nas ADs. Além de calcular o resultado das questões propostas, esse site também fornece o desenvolvimento das questões. Aproveite e estude com ele. Aprenda passo a passo de como resolver questões de Limite, Derivada, Logaritmo e Integrais etc.
                            </p>
                            <p>
                                <a target="_blank" href="https://www.youtube.com/watch?v=DkCHV5Kbx4o&list=PLTPg64KdGgYhACfQUtMf3CuhWOfLoTf_a" class="btn fundo-principal mt-3 mb-0 cor-composto-laranja btn-block">
                                    Ferretto Matemática – Calculo 1
                                </a> Nessa playlist contém um dos melhores conteúdos de matemática para universitários da web. O material é muito bem elaborado, ótima didática, com um grande variedade de exercícios para a fixação da matéria. A playlist tem todo conteúdo principal da primeira parte da disciplina, que consiste em Limite, Continuidades e Derivadas.
                            </p>
                            <p>
                                <a target="_blank" href="https://www.youtube.com/watch?v=CdEUV9mcEJ8&list=PLD785E767CD25501A" class="btn fundo-principal mt-3 mb-0 cor-composto-laranja btn-block">
                                    Fernando Grings, omatemático: Integral
                                </a> O melhor conteúdo de matemática da web, exercícios variados, ótima didática. Aborda a maior parte da materia do curso. Principais conteúdos cobrados na segunda prova: Integrais, Derivada Regra de L’Hospital, Volume e Aréa. O canal tem playlists para todas essas matérias.
                            </p>
                            <!--Dicas Matemática-->
                        </div>
                    </div>
                    <div class="tab-pane" role="tabpanel" id="MI">
                        <h3 class="text-center">Modelagem de Informação</h3>
                        <div class="participe text-center">
                            <a href="https://drive.google.com/open?id=0B09LpkQ_E4zTMGFScmo0NUVFNVE" target="_blank"><img src="img/drive.png" class="img-fluid" alt=""></a>
                            <a class="wpp-button" href="javascript:void(0);" target="_blank"><img src="img/whatsapp.png" class="img-fluid" alt=""></a>
                        </div>
                        <div class="ementa mb-1">
                            <h4>Ementa</h4>
                            <p>Definição de Modelo, o processo de modelagem, níveis de modelagem; Modelo entidade-relacionamento: elementos básicos, extensões. Notações gráficas. Estudos de Caso.
                            </p>
                        </div>
                        <div id="aulasMI" class="aulas row mb-3" role="toolbar" aria-label="Link para as aulas"></div>
                        <div class="dicas">
                            <!--Dicas Modelagem-->
                        </div>
                    </div>
                    <div class="tab-pane" role="tabpanel" id="OC">
                        <h3 class="text-center">Organização de Computadores</h3>
                        <div class="participe text-center">
                            <a href="https://drive.google.com/open?id=0B09LpkQ_E4zTenpwbmZUd3h4d28" target="_blank"><img src="img/drive.png" class="img-fluid" alt=""></a>
                            <a class="wpp-button" href="javascript:void(0);" target="_blank"><img src="img/whatsapp.png" class="img-fluid" alt=""></a>
                        </div>
                        <div class="ementa mb-1">
                            <h4>Ementa</h4>
                            <p>Organização lógica e funcional do modelo Von-Neumann: conceito, arquitetura lógica e funcional; unidades funcionais: ucp, memória; memória cachê; dispositivos de e/s e barramento; hierarquia de memória; arquiteturas micro e nanoprogramadas; mecanismos de interrupção e de exceção; arquiteturas avançadas: pipeline, múltiplas unidades funcionais e máquinas paralelas; conceito de máquina virtual; tendências; processadores RISC e CISC.</p>
                        </div>
                        <div id="aulasOC" class="row centralizado mb-3" role="toolbar" aria-label="Link para as aulas"></div>
                        <div class="dicas">
                            <!--Dicas OC-->
                        </div>
                    </div>
                    <div class="tab-pane" role="tabpanel" id="PE">
                        <h3 class="text-center">Probabilidade e Estatística</h3>
                        <div class="participe text-center">
                            <a href="https://drive.google.com/open?id=0B09LpkQ_E4zTNWJtV01kUGxiZlE" target="_blank"><img src="img/drive.png" class="img-fluid" alt=""></a>
                            <a class="wpp-button" href="javascript:void(0);" target="_blank"><img src="img/whatsapp.png" class="img-fluid" alt=""></a>
                        </div>
                        <div class="ementa mb-1">
                            <h4>Ementa</h4>
                            <p>Noções básicas de probabilidade; eventos; experimentos aleatórios; variáveis aleatórias; espaço amostral; distribuição de probabilidade; distribuição marginal e condicional; momentos; correlação; valor esperado; teoremas limites; teorema central do limite; estimação; convergência; confiabilidade; noções de simulação.</p>
                        </div>
                        <div id="aulasPE" class="aulas row mb-3" role="toolbar" aria-label="Link para as aulas"></div>
                        <div class="dicas">
                            <!--Dicas Probabilidade-->
                        </div>
                    </div>
                    <div class="tab-pane" role="tabpanel" id="PIG">
                        <h3 class="text-center">Programação com Interfaces Gráficas</h3>
                        <div class="participe text-center">
                            <a href="https://drive.google.com/open?id=0B09LpkQ_E4zTMjlTVHhxNnVlakk" target="_blank"><img src="img/drive.png" class="img-fluid" alt=""></a>
                            <a class="wpp-button" href="javascript:void(0);" target="_blank"><img src="img/whatsapp.png" class="img-fluid" alt=""></a>
                        </div>
                        <div class="ementa mb-1">
                            <h4>Ementa</h4>
                            <p>O conceito de programação orientada a eventos, Projetando diálogos em um ambiente visual, Atribuindo propriedades aos diálogos, Atribuindo propriedades a caixas de texto e botões, Atribuindo propriedades a outros tipos de controle, Executando e depurando um programa, Trabalhando com eventos e métodos, Procedimentos e funções, Declaração de variáveis e constantes, Entrada e saída de dados, Comandos condicionais, Laços, Vetores, Vetores de controles, Manipulação de arquivos, Programando com as APIs do Windows, Acesso à Base de Dados, Controles conectados (bound) a uma Base de Dados, Acesso à Base de Dados remota, Menus, Gráficos e imagens, Introdução à Orientação a Objetos, Introdução à Programação Internet, Multimídia, Manipulação de Arquivos, Geração de relatórios.</p>
                        </div>
                        <div id="aulasPIG" class="aulas row mb-3" role="toolbar" aria-label="Link para as aulas"></div>
                        <div class="dicas">
                            <h4>Dicas</h4>
                            <p>
                                As aulas gravadas são atuais, porém são muito superficiais se forem comparadas com as avaliações da disciplina. Não se acomode com as aulas da plataforma, busque conteúdos externos. Não deixe as ADs para a última hora, pois as avaliações são muito extensa, cada ponto é primordial para sua aprovação. É importante que o aluno treine a escrita dos códigos no papel, todas as provas serão discursivas na folha, ou seja, sem o auxílio da IDE. Livros como "Python Para Desenvolvedores", "Use A Cabeça! - Python" e "Introdução a Python Modulo B e C" podem ser uma ótima sugestão para o entendimento da linguagem.
                            </p>
                            <p>
                                <a target="_blank" href="https://www.youtube.com/watch?v=qWpGxnMtog4&list=PLx1JnO_GJin2E5L2ZB18Iq2pD2lyf2x6y" class="btn fundo-principal mt-3 mb-0 cor-composto-laranja btn-block">
                                    Ignorância Zero
                                </a> Com toda certeza, nesse site você encontra o melhor conteúdo de python da web, o material é muito bem elaborado com a auxilio do livro "Introdução a Python Modulo B e C", que é bastante recomendado para iniciantes. Na playlist fica o conteúdo completo para o estudo da disciplina no curso.
                            </p>
                            <p>
                                <a target="_blank" href="https://www.youtube.com/watch?v=kSQDp20eeqE&list=PLesCEcYj003ShHnUT83gQEH6KtG8uysUE" class="btn fundo-principal mt-3 mb-0 cor-composto-laranja btn-block">
                                    eXcript tkinter
                                </a> Ótimo conteúdo, aulas bem didáticas que aborda a maior parte da matéria cobrado no curso, essa playlist de tkinter vai ajudar muito na segunda parte da matéria que ensina interfaces gráficas.
                            </p>
                            <p>
                                <a target="_blank" href="https://www.youtube.com/watch?v=qbFTc5EAuZ0&index=9&list=PLp95aw034Wn_WtEmlepaDrw8FU8R5azcm" class="btn fundo-principal mt-3 mb-0 cor-composto-laranja btn-block">
                                    CaveiraTech
                                </a> O canal consiste em somente uma aula de POO(Programação Orientada a Objetos) que aborda alguns de seus principais conceitos como, classes, objetos, herança, sobreposição, sobrecarga, atributos e métodos, que são conhecimentos primordiais para programar em Orientação a Objetos.
                            </p>
                            <!--Dicas PIG-->
                        </div>
                    </div>
                    <div class="tab-pane" role="tabpanel" id="PAW">
                        <h3 class="text-center">Programação de Aplicações WEB</h3>
                        <div class="participe text-center">
                            <a href="https://drive.google.com/open?id=0B09LpkQ_E4zTV3NfdjBoMUFXdW8" target="_blank"><img src="img/drive.png" class="img-fluid" alt=""></a>
                            <a class="wpp-button" href="javascript:void(0);" target="_blank"><img src="img/whatsapp.png" class="img-fluid" alt=""></a>
                        </div>
                        <div class="ementa mb-1">
                            <h4>Ementa</h4>
                            <p>PHP: sintaxe básica, variáveis, constantes, expressões, operadores, estruturas de controle, funções, saída de dados, formulário, sessão, banco de dados, cookies, manipulação de erro, autenticação, upload de arquivo.</p>
                        </div>
                        <div id="aulasPAW" class="aulas row mb-3" role="toolbar" aria-label="Link para as aulas"></div>
                        <div class="dicas">
                            <!--Dicas PAW-->
                            <h4>Dicas</h4>
                            <p>
                                Por: <a href="https://github.com/marcello-telles" target="_blank"><small>Marcello Telles</small></a><br> O <a href="https://www.youtube.com/user/cursosemvideo" target="_blank">canal CursoEmVideo</a>, do professor Gustavo Guanabara, oferece um excelente conteúdo de PHP, desde o nível iniciante aos mais avançados. Tanto em PAW quanto nas outras disciplinas técnicas, vale ficar atento aos cursos oferecidos pelo canal, inclusive muitos oferecem certificados reconhecidos pelo MEC.
                            </p>
                        </div>
                    </div>
                    <div class="tab-pane" role="tabpanel" id="POO">
                        <h3 class="text-center">Programação Orientada a Objetos</h3>
                        <div class="participe text-center">
                            <a href="https://drive.google.com/open?id=0B09LpkQ_E4zTajI4QWllanRnM3M" target="_blank"><img src="img/drive.png" class="img-fluid" alt=""></a>
                            <a class="wpp-button" href="javascript:void(0);" target="_blank"><img src="img/whatsapp.png" class="img-fluid" alt=""></a>
                        </div>
                        <div class="ementa mb-1">
                            <h4>Ementa</h4>
                            <p>Implementação de classe-objetos, herança, poliformismo, comunicação e associação. Implementação de interfaces gráficas e armazenamento de dados orientados a objetos; prática de laboratório.</p>
                        </div>
                        <div id="aulasPOO" class="aulas row mb-3" role="toolbar" aria-label="Link para as aulas"></div>
                        <div class="dicas">
                            <!--Dicas POO-->
                        </div>
                    </div>
                    <div class="tab-pane" role="tabpanel" id="PDA">
                        <h3 class="text-center">Projeto e Desenvolvimento de Algoritmos</h3>
                        <div class="participe text-center">
                            <a href="https://drive.google.com/open?id=0B09LpkQ_E4zTTldGN1Vpb2xtOEU" target="_blank"><img src="img/drive.png" class="img-fluid" alt=""></a>
                            <a class="wpp-button" href="javascript:void(0);" target="_blank"><img src="img/whatsapp.png" class="img-fluid" alt=""></a>
                        </div>
                        <div class="mb-1">
                            <h4>Ementa</h4>
                            <p>Conceito de algoritmo; técnicas e metodologias para construção de algoritmos; desenvolvimento de algoritmos usando pseudo-linguagem. Conceito de linguagem de programação, de construção e execução programas, usando como modelo os recursos básicos de uma linguagem imperativa; aplicação das técnicas de construção de algoritmos no desenvolvimento, implementação e execução de programas simples</p>
                        </div>
                        <div id="aulasPDA" class="aulas row mb-3" role="toolbar" aria-label="Link para as aulas"></div>
                        <div class="dicas">
                            <!--Dicas PDA-->
                            <h4>Dicas</h4>
                            <p>
                                Por: <a href="https://github.com/alepbert"><small>alpbert</small></a><br> Aqui está playlist do professor Guanabara do curso Algoritmos.
                                <a href="https://www.youtube.com/playlist?list=PLHz_AreHm4dmSj0MHol_aoNYCSGFqvfXV" class="btn  fundo-principal mt-3 mb-0 cor-composto-laranja btn-block">Curso de Algoritmos - Curso em Vídeo</a>
                            </p>
                        </div>
                    </div>
                    <div class="tab-pane" role="tabpanel" id="RC1">
                        <h3 class="text-center">Redes de Computadores I</h3>
                        <div class="participe text-center">
                            <a href="https://drive.google.com/open?id=0B09LpkQ_E4zTN1BXOHo1UTgtQ0k" target="_blank"><img src="img/drive.png" class="img-fluid" alt=""></a>
                            <a class="wpp-button" href="javascript:void(0);" target="_blank"><img src="img/whatsapp.png" class="img-fluid" alt=""></a>
                        </div>
                        <div class="mb-1">
                            <h4>Ementa</h4>
                            <p>Introdução: história/evolução das redes de dados e da Internet; comutação por pacotes; arquitetura de redes; aplicações HTTP, SMTP e outras; programação com Sockets; princípios de transmissão confiável; protocolos de transporte: problemas básicos de um protocolo de transporte - UDP e TCP; congestionamento em redes</p>
                        </div>
                        <div id="aulasRC1" class="aulas row mb-3" role="toolbar" aria-label="Link para as aulas"></div>
                        <div class="dicas">
                            <!--Dicas Redes1-->
                        </div>
                    </div>
                    <div class="tab-pane" role="tabpanel" id="RC2">
                        <h3 class="text-center">Redes de Computadores II</h3>
                        <div class="participe text-center">
                            <a href="https://drive.google.com/open?id=0B09LpkQ_E4zTcnp0ak1JRnFYRGc" target="_blank"><img src="img/drive.png" class="img-fluid" alt=""></a>
                            <a class="wpp-button" href="javascript:void(0);" target="_blank"><img src="img/whatsapp.png" class="img-fluid" alt=""></a>
                        </div>
                        <div class="ementa mb-1">
                            <h4>Ementa</h4>
                            <p>Meios de transmissão, transmissão digital, modulação, técnicas de codificação; aplicações multimídia: voz e vídeo, transmissão multimídia na Internet; acesso múltiplo a meios de transmissão: protocolos, redes sem fio, padrões; encaminhamento na Internet: protocolos de roteamento, endereçamento, tradução de endereços, sub-networking, transmissão multicast; nível de enlace: detecção de erros, enquadramento, hubs e pontes; modo de transferência assíncrono assíncrono (ATM): problemas básicos, protocolos e caminhos virtuais.</p>
                        </div>
                        <div id="aulasRC2" class="aulas row mb-3" role="toolbar" aria-label="Link para as aulas"></div>
                        <div class="dicas">
                            <!--Dicas Redes2-->
                        </div>
                    </div>
                    <div class="tab-pane" role="tabpanel" id="SO">
                        <h3 class="text-center">Sistemas Operacionais</h3>
                        <div class="participe text-center">
                            <a href="https://drive.google.com/open?id=0B09LpkQ_E4zTQWVsRGlVeDVMX1k" target="_blank"><img src="img/drive.png" class="img-fluid" alt=""></a>
                            <a class="wpp-button" href="javascript:void(0);" target="_blank"><img src="img/whatsapp.png" class="img-fluid" alt=""></a>
                        </div>
                        <div class="ementa mb-1">
                            <h4>Ementa</h4>
                            <p>Breve revisão de organização; modelos de sistemas operacionais: breve histórico, conceitos, características, objetivos e funções; gerenciamento de memória: organização física,lógica e funcional, hierarquia, particionamento, proteção e estratégias de particionamento; memória virtual: conceito, organização lógica e funcional, mapeamento, estratégias de busca, alocação e realocação; gerenciamento de processos: conceitos, descrição, controle, estados, escalonamento, competição, cooperação, concorrência, comunicação, sincronismo, deadlock e starvation; sistema de entrada e saída e de gerenciamento de arquivos; prática de instalação do sistema Linux.
                            </p>
                        </div>
                        <div id="aulasSO" class="aulas row mb-3" role="toolbar" aria-label="Link para as aulas"></div>
                        <div class="dicas">
                            <h4>Dicas</h4>
                            <p>
                                As aulas gravadas são boas, porém algumas informações não são atuais, mas não se acomode com as aulas da plataforma, busque conteúdos externos. Utilize o livro texto "O Livro do MINIX - Sistemas Operacionais, Projeto e Implementações 3ª Edição do Tanenbaum", esse livro tem uma ditatica muito boa, todos o exemplos são explicados detalhadamente. Não deixe as ADs para a última hora, cada ponto é primordial para sua aprovação, é importante que você aprendo o máximo de conteúdo possível da disciplina. É importante que o aluno faça exercícios e provas antigas, na platarma e no drive tem alguns exercícios complmentares.
                            </p>
                            <p>
                                <a target="_blank" href="https://www.youtube.com/watch?v=FCkd1ZDsi6Q&list=PLzoythjsH3QP0pgpVXLpK9bgY_uiJ-WsX" class="btn fundo-principal mt-3 mb-0 cor-composto-laranja btn-block">
                                    aiedonine - Sistemas Operacionais Teórico
                                </a> Com toda certeza nessa playlist você encontra o melhor conteúdo da web, o material é elaborado com a auxilio do livro "O Livro do MINIX - Sistemas Operacionais, Projeto e Implementações 3ª Edição do Tanenbaum", explica detalhadamente como funciona as alocações do disco, codições de impasses(Deadlock),E/S, gerenciamento de memória e sistemas de arquivos. A playlist tem o conteúdo completo para o estudo da disciplina do curso, sendo abordada de um jeito didatico e divertido.
                            </p>
                            <p>
                                <a target="_blank" href="https://www.youtube.com/watch?v=Rl6HhDvW984&list=PLxI8Can9yAHeK7GUEGxMsqoPRmJKwI9Jw" class="btn fundo-principal mt-3 mb-0 cor-composto-laranja btn-block">
                                    Univesp - Sistemas Operacionais
                                </a> Ótima plataforma de ensino unversitário, aulas bem didáticas e dinamicas, aborda a matéria completa do curso de forma detalhada, um dois livros texto utilizados é o "O Livro do MINIX - Sistemas Operacionais, Projeto e Implementações 3ª Edição do Tanenbaum.
                            </p>
                            <p>
                                <a target="_blank" href="https://www.youtube.com/watch?v=unQWQuOk21c&list=PLnxCjHTBSzfkRcFHTHZMeh8fDK7SiKEob" class="btn fundo-principal mt-3 mb-0 cor-composto-laranja btn-block">
                                    IFTM - Sistemas Operacionais e Distribuídos
                                </a> Material de qualidade, e ótima abordagem do conteúdo, certamnte é uma ótima opção para ajudar no entendimento da disiplina.
                            </p>
                            <!--Dicas SO-->
                        </div>
                    </div>
                    <div class="tab-pane" role="tabpanel" id="TCC">
                        <h3 class="text-center">Trabalho de Conclusão de Curso</h3>
                        <div class="participe text-center">
                            <a href="https://drive.google.com/open?id=0B09LpkQ_E4zTWVZQWk1vUE1TWjQ" target="_blank"><img src="img/drive.png" class="img-fluid" alt=""></a>
                            <a class="wpp-button" href="javascript:void(0);" target="_blank"><img src="img/whatsapp.png" class="img-fluid" alt=""></a>
                        </div>
                        <div class="ementa mb-1">
                            <h4>Ementa</h4>
                            <p>Utilizar os conceitos de programas, sistemas operacionais, engenharia de software e redes de computadores adquiridos ao longo do curso no desenvolvimento deum projeto prático que integre todos os saberes. Preferencialmente projetos atendendo às necessidades da comunidade.</p>
                        </div>
                        <div class="dicas">
                            <!--Dicas TCC-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Participe Grid Section -->

<section class="portfolio" id="participe">
  <div class="container">
    <h2 class="text-center mb-0">Disciplinas</h2>
    <hr class="dark mb-5">
    <div class="row">
      <div class="col-md-6 col-lg-4">
        <a class="portfolio-item d-block mx-auto" href="#portfolio-modal-1">
          <div class="portfolio-item-caption d-flex position-absolute h-100 w-100">
            <div class="portfolio-item-caption-content my-auto w-100 text-center text-white">
              <i class="fa fa-search-plus fa-3x"></i>
            </div>
          </div>
          <img class="img-fluid" src="img/portfolio/cabin.png" alt="">
        </a>
      </div>
      <div class="col-md-6 col-lg-4">
        <a class="portfolio-item d-block mx-auto" href="#portfolio-modal-2">
          <div class="portfolio-item-caption d-flex position-absolute h-100 w-100">
            <div class="portfolio-item-caption-content my-auto w-100 text-center text-white">
              <i class="fa fa-search-plus fa-3x"></i>
            </div>
          </div>
          <img class="img-fluid" src="img/portfolio/cake.png" alt="">
        </a>
      </div>
      <div class="col-md-6 col-lg-4">
        <a class="portfolio-item d-block mx-auto" href="#portfolio-modal-3">
          <div class="portfolio-item-caption d-flex position-absolute h-100 w-100">
            <div class="portfolio-item-caption-content my-auto w-100 text-center text-white">
              <i class="fa fa-search-plus fa-3x"></i>
            </div>
          </div>
          <img class="img-fluid" src="img/portfolio/circus.png" alt="">
        </a>
      </div>
      <div class="col-md-6 col-lg-4">
        <a class="portfolio-item d-block mx-auto" href="#portfolio-modal-4">
          <div class="portfolio-item-caption d-flex position-absolute h-100 w-100">
            <div class="portfolio-item-caption-content my-auto w-100 text-center text-white">
              <i class="fa fa-search-plus fa-3x"></i>
            </div>
          </div>
          <img class="img-fluid" src="img/portfolio/game.png" alt="">
        </a>
      </div>
      <div class="col-md-6 col-lg-4">
        <a class="portfolio-item d-block mx-auto" href="#portfolio-modal-5">
          <div class="portfolio-item-caption d-flex position-absolute h-100 w-100">
            <div class="portfolio-item-caption-content my-auto w-100 text-center text-white">
              <i class="fa fa-search-plus fa-3x"></i>
            </div>
          </div>
          <img class="img-fluid" src="img/portfolio/safe.png" alt="">
        </a>
      </div>
      <div class="col-md-6 col-lg-4">
        <a class="portfolio-item d-block mx-auto" href="#portfolio-modal-6">
          <div class="portfolio-item-caption d-flex position-absolute h-100 w-100">
            <div class="portfolio-item-caption-content my-auto w-100 text-center text-white">
              <i class="fa fa-search-plus fa-3x"></i>
            </div>
          </div>
          <img class="img-fluid" src="img/portfolio/submarine.png" alt="">
        </a>
      </div>
    </div>
  </div>
</section>


<!-- About Section -->
<!--
<section class="bg-primary text-white mb-0" id="about">
  <div class="container">
    <h2 class="text-center ">Dicas</h2>
    <hr class="light mb-5">
    <div class="row">
      <div class="col-lg-4 ml-auto">
        <p class="lead">Freelancer is a free bootstrap theme created by Start Bootstrap. The download includes the complete source files including HTML, CSS, and JavaScript as well as optional LESS stylesheets for easy customization.</p>
      </div>
      <div class="col-lg-4 mr-auto">
        <p class="lead">Whether you're a student looking to showcase your work, a professional looking to attract clients, or a graphic artist looking to share your projects, this template is the perfect starting point!</p>
      </div>
    </div>
    <div class="text-center mt-4">
      <a class="btn btn-xl btn-outline-light" href="#">
              <i class="fa fa-download mr-2"></i>
              Download Now!
          </a>
    </div>
  </div>
</section>
-->

<!-- Contact Section -->
<section id="contact">
    <div class="container">
        <h2 class="text-center text-uppercase text-secondary mb-0">Entre em contato</h2>
        <hr class="dark mb-5">
        <div class="row">
            <div class="col-lg-8 mx-auto">
                <!-- To configure the contact form email address, go to mail/contact_me.php and update the email address in the PHP file on line 19. -->
                <!-- The form should work on most web servers, but if the form is not working you may need to configure your web server differently. -->
                <form name="sentMessage" id="contactForm" novalidate="novalidate">
                    <div class="control-group">
                        <div class="form-group floating-label-form-group controls mb-0 pb-2">
                            <label>Nome</label>
                            <input class="form-control" id="name" type="text" placeholder="Nome" required="required" data-validation-required-message="Please enter your name.">
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
                    <div class="control-group">
                        <div class="form-group floating-label-form-group controls mb-0 pb-2">
                            <label>Email</label>
                            <input class="form-control" id="email" type="email" placeholder="Email" required="required" data-validation-required-message="Please enter your email address.">
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
                    <div class="control-group">
                        <div class="form-group floating-label-form-group controls mb-0 pb-2">
                            <label>Telefone</label>
                            <input class="form-control" id="phone" type="tel" placeholder="Telefone" required="required" data-validation-required-message="Please enter your phone number.">
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
                    <div class="control-group">
                        <div class="form-group floating-label-form-group controls mb-0 pb-2">
                            <label>Mensagem</label>
                            <textarea class="form-control" id="message" rows="5" placeholder="Mensagem" required="required" data-validation-required-message="Please enter a message."></textarea>
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
                    <br>
                    <div id="success"></div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary btn-xl" id="sendMessageButton">Enviar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>


<!-- Portfolio Modals -->

<!-- Portfolio Modal 1 -->
<div class="portfolio-modal mfp-hide" id="portfolio-modal-1">
  <div class="portfolio-modal-dialog bg-white">
    <a class="close-button d-none d-md-block portfolio-modal-dismiss" href="#">
          <i class="fa fa-3x fa-times"></i>
      </a>
    <div class="container text-center">
      <div class="row">
        <div class="col-lg-8 mx-auto">
          <h2 class="text-secondary text-uppercase mb-0">Project Name</h2>
          <hr class="dark mb-5">
          <img class="img-fluid mb-5" src="img/portfolio/cabin.png" alt="">
          <p class="mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia neque assumenda ipsam nihil, molestias magnam, recusandae quos quis inventore quisquam velit asperiores, vitae? Reprehenderit soluta, eos quod consequuntur itaque. Nam.</p>
          <a class="btn btn-primary btn-lg rounded-pill portfolio-modal-dismiss" href="#">
            <i class="fa fa-close"></i>
            Close Project
          </a>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Portfolio Modal 2 -->
<div class="portfolio-modal mfp-hide" id="portfolio-modal-2">
  <div class="portfolio-modal-dialog bg-white">
    <a class="close-button d-none d-md-block portfolio-modal-dismiss" href="#">
          <i class="fa fa-3x fa-times"></i>
      </a>
    <div class="container text-center">
      <div class="row">
        <div class="col-lg-8 mx-auto">
          <h2 class="text-secondary text-uppercase mb-0">Project Name</h2>
          <hr class="dark mb-5">
          <img class="img-fluid mb-5" src="img/portfolio/cake.png" alt="">
          <p class="mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia neque assumenda ipsam nihil, molestias magnam, recusandae quos quis inventore quisquam velit asperiores, vitae? Reprehenderit soluta, eos quod consequuntur itaque. Nam.</p>
          <a class="btn btn-primary btn-lg rounded-pill portfolio-modal-dismiss" href="#">
                      <i class="fa fa-close"></i>
                      Close Project</a>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Portfolio Modal 3 -->
<div class="portfolio-modal mfp-hide" id="portfolio-modal-3">
  <div class="portfolio-modal-dialog bg-white">
    <a class="close-button d-none d-md-block portfolio-modal-dismiss" href="#">
          <i class="fa fa-3x fa-times"></i>
      </a>
    <div class="container text-center">
      <div class="row">
        <div class="col-lg-8 mx-auto">
          <h2 class="text-secondary text-uppercase mb-0">Project Name</h2>
          <hr class="dark mb-5">
          <img class="img-fluid mb-5" src="img/portfolio/circus.png" alt="">
          <p class="mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia neque assumenda ipsam nihil, molestias magnam, recusandae quos quis inventore quisquam velit asperiores, vitae? Reprehenderit soluta, eos quod consequuntur itaque. Nam.</p>
          <a class="btn btn-primary btn-lg rounded-pill portfolio-modal-dismiss" href="#">
                      <i class="fa fa-close"></i>
                      Close Project</a>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Portfolio Modal 4 -->
<div class="portfolio-modal mfp-hide" id="portfolio-modal-4">
  <div class="portfolio-modal-dialog bg-white">
    <a class="close-button d-none d-md-block portfolio-modal-dismiss" href="#">
          <i class="fa fa-3x fa-times"></i>
      </a>
    <div class="container text-center">
      <div class="row">
        <div class="col-lg-8 mx-auto">
          <h2 class="text-secondary text-uppercase mb-0">Project Name</h2>
          <hr class="dark mb-5">
          <img class="img-fluid mb-5" src="img/portfolio/game.png" alt="">
          <p class="mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia neque assumenda ipsam nihil, molestias magnam, recusandae quos quis inventore quisquam velit asperiores, vitae? Reprehenderit soluta, eos quod consequuntur itaque. Nam.</p>
          <a class="btn btn-primary btn-lg rounded-pill portfolio-modal-dismiss" href="#">
                      <i class="fa fa-close"></i>
                      Close Project</a>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Portfolio Modal 5 -->
<div class="portfolio-modal mfp-hide" id="portfolio-modal-5">
  <div class="portfolio-modal-dialog bg-white">
    <a class="close-button d-none d-md-block portfolio-modal-dismiss" href="#">
          <i class="fa fa-3x fa-times"></i>
      </a>
    <div class="container text-center">
      <div class="row">
        <div class="col-lg-8 mx-auto">
          <h2 class="text-secondary text-uppercase mb-0">Project Name</h2>
          <hr class="dark mb-5">
          <img class="img-fluid mb-5" src="img/portfolio/safe.png" alt="">
          <p class="mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia neque assumenda ipsam nihil, molestias magnam, recusandae quos quis inventore quisquam velit asperiores, vitae? Reprehenderit soluta, eos quod consequuntur itaque. Nam.</p>
          <a class="btn btn-primary btn-lg rounded-pill portfolio-modal-dismiss" href="#">
                      <i class="fa fa-close"></i>
                      Close Project</a>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Portfolio Modal 6 -->
<div class="portfolio-modal mfp-hide" id="portfolio-modal-6">
  <div class="portfolio-modal-dialog bg-white">
    <a class="close-button d-none d-md-block portfolio-modal-dismiss" href="#">
          <i class="fa fa-3x fa-times"></i>
      </a>
    <div class="container text-center">
      <div class="row">
        <div class="col-lg-8 mx-auto">
          <h2 class="text-secondary text-uppercase mb-0">Project Name</h2>
          <hr class="dark mb-5">
          <img class="img-fluid mb-5" src="img/portfolio/submarine.png" alt="">
          <p class="mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia neque assumenda ipsam nihil, molestias magnam, recusandae quos quis inventore quisquam velit asperiores, vitae? Reprehenderit soluta, eos quod consequuntur itaque. Nam.</p>
          <a class="btn btn-primary btn-lg rounded-pill portfolio-modal-dismiss" href="#">
                      <i class="fa fa-close"></i>
                      Close Project</a>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection