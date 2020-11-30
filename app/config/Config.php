<?php
session_start();
date_default_timezone_set('America/Sao_Paulo');
define('DBNAME','u140601217_porta');
define('HOST','sql155.main-hosting.eu');
define('USER','u140601217_porta');
define('PASS','Magno0211');
define('TYPE_BANCO','mysql');
define('UNIDADE_GESTORA',201002);
define('FILES','http://api.municipiaui.com/files/');



/**
 * ***C:\wamp\www\portaltransparencia\portal>npm run build
 * Arquivo resposnsaveis pelas configurações iniciais do site;
 */
function __autoload($Class) {
    $dir_app = ['app/config', 'app/control', 'app/model', 'app/database', 'app/layout','app/auxiliar','app/service'];
    $dir_portal= [
        'portal/app/model',
        'portal/app/control/utilidades',
        'portal/app/lib/util',
        'portal/app/lib/mail'
         ];
    
    $dirs = array_merge($dir_app,$dir_portal);
    $idir = null;
    foreach ($dirs as $dirName):
        $fileName = "{$dirName}/{$Class}.class.php";
        if (!$idir && file_exists($fileName) && !is_dir($fileName)):
            include_once $fileName;
            $idir = true;
        endif;
    endforeach;
    if (!$idir):
        MErro(new Exception("Erro ao instanciar a class  <b>{$Class}</b> Verifique se a classe exista!"));
        die;
    endif;
}

function MErro(Exception $e,$tipo='warning', $fatal=false) {
    $tipomsg = [
	'warning' => 'Atenção',
	'danger' => 'Erro',
	'success' => 'Sucesso',
	'info' => 'Informação',
	
	];
	
    echo '<div class="alert alert-'.$tipo.' alert-dismissible" role="alert">';
    echo '<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>';
    echo '<strong>'.$tipomsg[$tipo].'! </strong>'.$e->getMessage();
    echo '</div>';
    if($fatal):
	   die;
	endif;
}

