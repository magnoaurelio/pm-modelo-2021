<?php
$cidade = new Cidade();
$prefeitura = new Prefeitura($cidade->precodigo);
?>
<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
    <div class="panel panel-default">
        <div class="panel-heading" role="tab" id="headingOne">
            <h4 class="panel-title">
                <a role="button" data-toggle="collapse" data-parent="#accordion" href="#p1" aria-expanded="true" aria-controls="collapseOne">
                    O que é o Diário Oficial do Município ?
                </a>
            </h4>
        </div>
        <div id="p1" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
            <div class="panel-body">

                <p>A Constituição Federal, em seu artigo 18, permite que cada Município, como ente federado, possa se auto organizar administrativamente e visando cumprimento do princípio da publicidade, pode-se afirmar a possibilidade do Município, ente federal, instituir Imprensa Oficial, para publicação de seus atos administrativos.</p>
                <p>Registre-se o art. 6º, inciso XIII da Lei nº 8.666/93 que ao tratar do tema conceitua:&nbsp;</p>
                <p>“Imprensa oficial – veículo oficial de divulgação da Administração Pública sendo para a União o Diário Oficial da União, e, para os Estados, o Distrito Federal e os Municípios, o que for definido nas respectivas leis.”&nbsp;</p>
                <p>Da interpretação do dispositivo acima descrito, permite asseverar que mediante lei ordinária municipal específica, é facultado ao ente municipal adotar qualquer meio de divulgação, como imprensa Oficial.</p>
                <p>Diante desta possibilidade, a prefeitura de <strong><?= $prefeitura->prenome ?></strong> disponibilizou instrumento de publicação eletrônica, diária com certificação digital, conforme exigência do Tribunal de Contas do Estado do Piauí, para dar publicidade aos atos administrativos e jurídicos dos Municípios filiados.</p>
            </div>
        </div>
    </div>
    <div class="panel panel-default">
        <div class="panel-heading" role="tab" id="headingOne">
            <h4 class="panel-title">
                <a role="button" data-toggle="collapse" data-parent="#accordion" href="#p2" aria-expanded="true" aria-controls="collapseOne">
                    O que pode ser publicado no Diário Oficial?
                </a>
            </h4>
        </div>
        <div id="p2" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
            <div class="panel-body">
                <p>Tudo, todos os atos do Município. Editais de licitações, extratos de contratos, atos administrativos e de pessoal e etc.</p>
            </div>
        </div>
    </div>
    <div class="panel panel-default">
        <div class="panel-heading" role="tab" id="headingOne">
            <h4 class="panel-title">
                <a role="button" data-toggle="collapse" data-parent="#accordion" href="#p3" aria-expanded="true" aria-controls="collapseOne">
                    Para atender o princípio da publicidade, a publicação no diario oficial do Município é suficiente?
                </a>
            </h4>
        </div>
        <div id="p3" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
            <div class="panel-body">
                <p>Para atos administrativos e de pessoal sim. Mas para atos ligados aos processos de licitação não.</p>
            </div>
        </div>
    </div>
    <div class="panel panel-default">
        <div class="panel-heading" role="tab" id="headingOne">
            <h4 class="panel-title">
                <a role="button" data-toggle="collapse" data-parent="#accordion" href="#p4" aria-expanded="true" aria-controls="collapseOne">
                    Então, com relação aos atos ligados aos processos de licitação, como proceder?
                </a>
            </h4>
        </div>
        <div id="p4" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
            <div class="panel-body">
                <p>A licitação possui regramento próprio, em geral lei nº. 8.666/93, que em seu art. 21 prevê:</p>
                <p>“Art. 21. Os avisos contendo os resumos dos editais das concorrências, das tomadas de preços, dos concursos e dos leilões, embora realizados no local da repartição interessada, deverão ser publicados com antecedência, no mínimo, por uma vez:</p>
                <p>I - no Diário Oficial da União, quando se tratar de licitação feita por órgão ou entidade da Administração Pública Federal e, ainda, quando se tratar de obras financiadas parcial ou totalmente com recursos federais ou garantidas por instituições federais;</p>
                <p>II - no Diário Oficial do Estado, ou do Distrito Federal quando se tratar, respectivamente, de licitação feita por órgão ou entidade da Administração Pública Estadual ou Municipal, ou do Distrito Federal;</p>
                <p>III - em jornal diário de grande circulação no Estado e também, se houver, em jornal de circulação no Município ou na região onde será realizada a obra, prestado o serviço, fornecido, alienado ou alugado o bem, podendo ainda a Administração, conforme o vulto da licitação, utilizar-se de outros meios de divulgação para ampliar a área de competição”.</p>
                <p>Assim:</p>
                <p>7.1. Quando o processo licitatório versa sobre obras ou serviços financiadas parcial ou totalmente com recursos federais, necessária publicação em:</p>
                <p>a) Diário Oficial dos Municípios;</p>
                <p>b) Diário Oficial da União</p>
                <p>c) Jornal de Grande Circulação</p>
                <p>7.2. Quando o processo licitatório versa sobre obras ou serviços financiadas parcial ou totalmente com recursos estaduais, necessária publicação em:</p>
                <p>a) Diário Oficial dos Municípios;</p>
                <p>b) Diário Oficial do Estado</p>
                <p>c) Jornal de Grande Circulação</p>
                <p>7.3. Quando o processo licitatório versa sobre obras ou serviços financiadas apenas com recursos do tesouro Municipal, necessária publicação em:</p>
                <p>a) Diário Oficial do Município;</p>
                <p>b) Jornal de Grande Circulação</p>
                <p>Lembrando que há a obrigatoriedade da publicação dos atos licitatórios em todos os meios acima descriminados concomitantemente, pois a publicação em um não exclui a obrigatoriedade da publicação nos outros meios. Devendo ainda ser respeitado os prazo estipulados em lei de antecedência de publicação.</p>
            </div>
        </div>
    </div>
    <div class="panel panel-default">
        <div class="panel-heading" role="tab" id="headingOne">
            <h4 class="panel-title">
                <a role="button" data-toggle="collapse" data-parent="#accordion" href="#p5" aria-expanded="true" aria-controls="collapseOne">
                    E com relação à modalidade de licitação convite?
                </a>
            </h4>
        </div>
        <div id="p5" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
            <div class="panel-body">
                <p>Em relação à modalidade de licitação convite, além da publicação no diário oficial dos Municípios, conforme reza o art. 22, §3º da Lei nº. 8.666/93, necessário à afixação no átrio da prefeitura da cópia do instrumento convocatório:</p>
                <p>“Art. 22 (...)</p>
                <p>§ 3o Convite é a modalidade de licitação entre interessados do ramo pertinente ao seu objeto, cadastrados ou não, escolhidos e convidados em número mínimo de 3 (três) pela unidade administrativa, a qual afixará, em local apropriado, cópia do instrumento convocatório e o estenderá aos demais cadastrados na correspondente especialidade que manifestarem seu interesse com antecedência de até 24 (vinte e quatro) horas da apresentação das propostas”.</p>
            </div>
        </div>
    </div>


</div>
