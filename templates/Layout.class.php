<?php
/**
 * Created by PhpStorm.
 * User: MAGNUSOFT-PC
 * Date: 10/10/2020
 * Time: 10:15 AM
 */

class Layout
{
     public  static function  Header($content){
         $class = isset($_GET['class']) ? $_GET['class'] : null;
         switch ($class):
            case 'Home':
                $menuSelecionado = 'home';
                break;
            case 'esportes':
                $menuSelecionado = 'cidade';
                break;
            case 'esportes_detalhe':
                $menuSelecionado = 'cidade';
                break;
            case 'povoado': // nome da classe provoado.class.php
                $menuSelecionado = 'cidade'; // nome que está no menu
                break;
            case 'povoado_detalhe':
                $menuSelecionado = 'cidade';
                break;
            case 'prefeito':
                $menuSelecionado = 'gestao';
                break;
            case 'vice prefeito':
                $menuSelecionado = 'gestao';
                break;
            case 'Prefeito':
                $menuSelecionado = 'gestao';
                break;
            case 'secretaria_geral':
                $menuSelecionado = 'secretaria';
                break;
            case 'secretaria_bloco':
                $menuSelecionado = 'secretaria';
                break;
            case 'secretaria_gestor':
                $menuSelecionado = 'secretaria';
                break;
            case 'negocios':
                $menuSelecionado = 'negocio';
                break;
            case 'hotelarias':
                $menuSelecionado = 'turismo';
                break;
            case 'hotelarias_detalhe':
                $menuSelecionado = 'turismo';
                break;
            case 'igrejas':
                $menuSelecionado = 'turismo';
                break;
            case 'igreja_detalhe':
                $menuSelecionado = 'turismo';
                break;
            case 'alimentos':
                $menuSelecionado = 'turismo';
                break;
            case 'alimentos_detalhe':
                $menuSelecionado = 'turismo';
                break;
            case 'pontos':
                $menuSelecionado = 'turismo';
                break;
            case 'ponto_detalhe':
                $menuSelecionado = 'turismo';
                break;
            case 'banco':
                $menuSelecionado = 'turismo';
                break;
            case 'banco_detalhe':
                $menuSelecionado = 'turismo';
                break;
            case 'combustivel':
                $menuSelecionado = 'turismo';
                break;
            case 'combustivel_detalhe':
                $menuSelecionado = 'turismo';
                break;
            case 'noticias':
                $menuSelecionado = 'comunicacao';
                break;
            case 'noticia_detalhe':
                $menuSelecionado = 'comunicacao';
                break;
            case 'videos':
                $menuSelecionado = 'comunicacao';
                break;
            case 'galeria':
                $menuSelecionado = 'comunicacao';
                break;
            
            default :
                $menuSelecionado = 'home';
         endswitch;
         $content  = str_replace('{'.$menuSelecionado.'_current}', "current" , $content);  
    
       return $content;
   }
}