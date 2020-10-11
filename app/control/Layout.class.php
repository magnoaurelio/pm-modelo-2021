<?php
/**
 * Created by PhpStorm.
 * User: MAGNUSOFT-PC
 * Date: 11/26/2018
 * Time: 10:58 AM
 */

class Layout
{

    static function  headerFooterFormat($content){
        \Adianti\Database\TTransaction::open('conexao');
        $prefeitura = Prefeitura::getPrefeitura(\Adianti\Registry\TSession::getValue('unidadeGestora'));
        $format  = self::footerFormat(self::headerFormat($content,$prefeitura), $prefeitura);
        \Adianti\Database\TTransaction::close();
        return  $format;
    }

    private static function  headerFormat($content,Prefeitura $prefeitura){

       $hoje =  date('Y-m-d');
       $hojePartes = MDate::datePart($hoje);
       $data = MDate::getDiaSemana($hoje).", ".$hojePartes->dia." de ".MDate::getMeses(1, $hojePartes->mes)." de ".$hojePartes->ano;
       $ano  = $hojePartes->ano;
      
       $content  = str_replace('{header_data}', $data , $content);
       $content  = str_replace('{header_brasao}', $prefeitura->get_Brasao(), $content);
       $content  = str_replace('{header_bandeira}', $prefeitura->get_Bandeira(), $content);
       $content  = str_replace('{header_logomarca}', $prefeitura->get_Logo(), $content);
       $content  = str_replace('{header_nome}', $prefeitura->prenome, $content);
       $content  = str_replace('{header_endereco}', $prefeitura->preendereco, $content);
       $content  = str_replace('{header_bairro}', $prefeitura->prebairro, $content);
       $content  = str_replace('{header_cep}', $prefeitura->precep, $content);
       $content  = str_replace('{header_fone}', $prefeitura->prefone, $content);
       $content  = str_replace('{header_clima}', $prefeitura->preclima, $content);
       $content  = str_replace('{header_historico}', $prefeitura->historico, $content);
       $content  = str_replace('{header_ibge}', $prefeitura->preibge, $content);
       $content  = str_replace('{header_logomarca}', $prefeitura->prelogo, $content);
       $content  = str_replace('{unidadeGestora}', $prefeitura->codigoUnidGestora, $content);
       $content  = str_replace('{unidadeGestoraCM}',"1".substr($prefeitura->codigoUnidGestora,1), $content);
       $content  = str_replace('{{TO}}',Publicidade::publicidadeTopHeader(), $content);
       return $content;
   }

   
    private static function  footerFormat($content, Prefeitura $prefeitura){
        $content  = str_replace('{footer_ano}', date('Y'), $content);
        $content  = str_replace('{{RO}}', Publicidade::publicidadeRodape(), $content);
        
        $links = $prefeitura->getLinks();
        $lista = "";
        if ($links){
            foreach ($links as $link){
                $lista = "<li>"
                            . "<a href='{$link->linurl}' target='_blank' class='list-group-item' style='background: #c1c1c1;'>"
                            . "<img src='{$link->getImagem()}' width='25' height='25' alt=''/> "
                            . "{$link->linnome}"
                            . "<br/>"
                            . "</a>"
                         . "</li>";
                        
            }
        }
        $content  = str_replace('{{LINKS}}', $lista, $content);
        return $content;
     
    }
    
     public  static function  Header($content){
         $class = isset($_GET['class']) ? $_GET['class'] : null;
         switch ($class):
            case 'Home':
                $menuSelecionado = 'home';
                break;
            case 'Cidade':
                $menuSelecionado = 'cidade';
                break;
            case 'Esportes':
                $menuSelecionado = 'cidade';
                break;
            case 'Esporte':
                $menuSelecionado = 'cidade';
                break;
            case 'Povoados':
                $menuSelecionado = 'cidade';
                break;
            case 'PovoadoView':
                $menuSelecionado = 'cidade';
                break;
            case 'Gestor':
                $menuSelecionado = 'gestor';
                break;
            case 'secretaria_geral':
                $menuSelecionado = 'secretaria';
                break;
            case 'Negocios':
                $menuSelecionado = 'negocio';
                break;
            case 'Hotelarias':
                $menuSelecionado = 'turismo';
                break;
            case 'Igrejas':
                $menuSelecionado = 'turismo';
                break;
            case 'Igreja':
                $menuSelecionado = 'turismo';
                break;
            case 'Alimentos':
                $menuSelecionado = 'turismo';
                break;
            case 'Alimento':
                $menuSelecionado = 'turismo';
                break;
            case 'Pontos':
                $menuSelecionado = 'turismo';
                break;
            case 'Ponto':
                $menuSelecionado = 'turismo';
                break;
            case 'Banco':
                $menuSelecionado = 'turismo';
                break;
            case 'Banco':
                $menuSelecionado = 'turismo';
                break;
            case 'Combustivel':
                $menuSelecionado = 'turismo';
                break;
            case 'Combustivel':
                $menuSelecionado = 'turismo';
                break;
            case 'Noticias':
                $menuSelecionado = 'comunicacao';
                break;
            case 'NoticiaDetalhe':
                $menuSelecionado = 'comunicacao';
                break;
            case 'Videos':
                $menuSelecionado = 'comunicacao';
                break;
            case 'Galeria':
                $menuSelecionado = 'comunicacao';
                break;
            
            default :
                $menuSelecionado = 'home';
         endswitch;
         $content  = str_replace('{'.$menuSelecionado.'_current}', "current" , $content);  
    
       return $content;
   }
}