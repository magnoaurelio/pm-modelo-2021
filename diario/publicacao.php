<h3 class="title"><span id="pub">PUBLICAÇÕES</span></h3>
<style>
    .search input{
        z-index: 10000;
    }
    #pesquisar-btn{
        margin-top: -10px;
    }
    #limpar-btn{
        margin-top: -10px;
    }

    #container-mserro{
        display: none;
    }

</style>
<div id="container-mserro" class="alert alert-warning" role="alert">
    <strong>Atenção!</strong>&nbsp;<span id="msgerro"></span>
</div>
<div class="input-daterange input-group" id="datepicker" style="z-index: 5000;position:relative;float: left;margin-top: 0.9%;">
    <span class="input-group-addon">Período</span>
    <input type="text" class="input-small form-control" id="start" name="start" />
    <span class="input-group-addon">a</span>
    <input type="text" class="input-small form-control" id="end" name="end" />
    <button id="pesquisar-btn" type="button" title="Pesquisar" class="btn btn-default"><i class="fa fa-search"></i></button>
    <button id="limpar-btn" type="button" title="Limpar os filtros" class="btn btn-default"><i class="fa fa-filter"></i> Limpar</button>

</div>
<?php
if (isset($_GET['ato']) && !empty($_GET['ato'])):
    $listagem = "categoria&ato=" . $_GET['ato'];
else:
    $listagem = "listagem";
endif;
?>


<table id="table-data-publicacao"
       data-toggle="table"
       data-show-toggle="true"
       data-show-pagination-switch="true"
       data-show-refresh="true"
       data-search="true"
       data-pagination="true"
       data-key-events="true"
       data-detail-view="true"
       data-detail-formatter="detailFormatter"
       data-url="data-publicacao.php?op=<?=$listagem?>">
    <thead>
        <tr>
            <th data-field="id" data-sortable="true">ID</th>
            <th data-field="data" data-sortable="true">Data</th>
            <th data-field="descricao" data-sortable="true">Descrição</th>
            <th data-field="tipo" >Tipo</th>
            <th data-field="detalhe" data-visible="false">Detalhes</th>
            <th data-field="palavras" >Palavras</th>
            <th data-field="processo">Processo</th>
            <th data-field="arquivo" data-halign="center">Arquivo</th>
        </tr>
    </thead>

</table>

<script>
    $('.input-daterange').datepicker({
        clearBtn: true,
        language: "pt-BR",
        autoclose: true,
        orientation: "bottom left"
    });


    $(function () {
        $('#pesquisar-btn').click(function () {
            var start = $("#start").val();
            var end = $("#end").val();
            if (start == "") {
                Msgerro("Data inicial vazia!");
                $("#start").focus();
            } else if (end == "") {
                Msgerro("Data final vazia!");
                $("#end").focus();
            } else {
                Msgerro("", false);
                $('#table-data-publicacao').bootstrapTable('refreshOptions', {
                    showColumns: true,
                    search: true,
                    showRefresh: true,
                    url: "data-publicacao.php?op=listagem&start=" + start + "&end=" + end
                });
            }
        });
    });

    $(function () {
        $('#limpar-btn').click(function () {
            $("#start").val("");
            $("#end").val("");
            Msgerro("", false);
            $('#table-data-publicacao').bootstrapTable('refreshOptions', {
                showColumns: true,
                search: true,
                showRefresh: true,
                url: "data-publicacao.php?op=listagem"
            });
        });
    });



    function Msgerro(msg = "", mostrar = true) {
        if (mostrar == true) {
            $("#container-mserro").css("display", "block");
        } else {
            $("#container-mserro").css("display", "none");
        }
        $("#msgerro").text(msg);
    }

    $(document).ready(function () {
        $(".search input").val("");
    });

    function detailFormatter(index, row) {
        var html = [];
        $.each(row, function (key, value) {
            html.push('<p><b>' + key + ':</b> ' + value + '</p>');
        });
        return html.join('');
    }
</script>
