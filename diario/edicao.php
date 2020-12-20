<h3 class="title"><span id="pub">EDIÇÕES</span></h3>
<style>
    .search input{
        z-index: 1000;
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
    <span class="input-group-addon">Data Edição</span>
    <input type="text" class="input-small form-control input-datepicker" id="data" name="data" />
    <button id="pesquisar-btn" type="button" title="Pesquisar" class="btn btn-default"><i class="fa fa-search"></i></button>
    <button id="limpar-btn" type="button" title="Limpar os filtros" class="btn btn-default"><i class="fa fa-filter"></i> Limpar</button>

</div>



<table id="table-data-edicao"
       data-toggle="table"
       data-show-toggle="true"
       data-show-pagination-switch="true"
       data-search="true"
       data-pagination="true"
       data-key-events="true"
       data-url="./portal/requestdata.php?method=Edicoes">
    <thead>
        <tr>
            <th data-field="Id" data-sortable="true">Nº EDIÇÃO</th>
            <th data-field="Paginas" data-sortable="true">Nº Páginas</th>
            <th data-field="Data" data-sortable="true">Data</th>
            <th data-field="Publicacoes" data-halign="center">Publicações</th>
            <th data-field="Arquivo" data-halign="center">Arquivo</th>
        </tr>
    </thead>

</table>


<!-- Button trigger modal -->
<div class="modal fade" id="modalTable" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="z-index: 5500;">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span></button>
                <h4  class="modal-title">Publicações </h4>
            </div>
            <div class="modal-body">
                <table id="table-publicao-modal"
                       data-toggle="table"
                       data-search="true"
                       data-height="299"
                       data-url ="portal/requestdata.php?method=PubEdi&edinumero=null"
                       data-filter-control="true">
                    <thead>
                        <tr>
                            <th data-field="id" data-sortable="true">ID</th>
                            <th data-field="data" data-sortable="true">Data</th>
                            <th data-field="descricao" data-sortable="true">Descrição</th>
                            <th data-field="tipo"  >Tipo</th>
                            <th data-field="palavras" data-visible="false">Palavras</th>
                            <th data-field="arquivo" data-halign="center">Arquivo</th>
                        </tr>
                    </thead>

                </table>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<script>


    function Publicacoes(edinumero) {
        var dataUrl = "portal/requestdata.php?method=PubEdi&edinumero=" + edinumero;
        $('#table-publicao-modal').bootstrapTable('refreshOptions', {
            search: true,
            url: dataUrl
        });
        $('#modalTable').modal('toggle');

    }




    $('.input-datepicker').datepicker({
        todayBtn: "linked",
        clearBtn: true,
        language: "pt-BR",
        autoclose: true,
        orientation: "bottom left"
    });
    $(function () {
        $('#pesquisar-btn').click(function () {
            var start = $("#data").val();
            if (start == "") {
                Msgerro("Data vazia!");
                $("#data").focus();
            } else {
                Msgerro("", false);
                $('#table-data-edicao').bootstrapTable('refreshOptions', {
                    search: true,
                    showRefresh: true,
                    url: "./portal/requestdata.php?method=Edicoes&edidata=" + start
                });
            }
        });
    });
    $(function () {
        $('#limpar-btn').click(function () {
            $("#data").val("");
            Msgerro("", false);
            $('#table-data-edicao').bootstrapTable('refreshOptions', {
                search: true,
                showRefresh: true,
                url: "./portal/requestdata.php?method=Edicoes"
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



    var $table = $('#table-data-edicao');

    $(function () {
        buildTable($table, 8, 1);
    });
    function expandTable($detail, cells) {
        buildTable($detail.html('<table></table>').find('table'), cells, 1);
    }
    function buildTable($el, cells, rows) {
        var i, j, row,
                columns = [],
                data = [];
        for (i = 0; i < cells; i++) {
            columns.push({
                field: 'field' + i,
                title: 'Cell' + i,
                sortable: true
            });
        }
        for (i = 0; i < rows; i++) {
            row = {};
            for (j = 0; j < cells; j++) {
                row['field' + j] = 'Row-' + i + '-' + j;
            }
            data.push(row);
        }
        $el.bootstrapTable({
            columns: columns,
            data: data,
            detailView: cells > 1,
            onExpandRow: function (index, row, $detail) {
                expandTable($detail, cells - 1);
            }
        });
    }


</script>
