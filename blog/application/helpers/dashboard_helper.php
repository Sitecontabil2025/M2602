<?php
if (!defined('BASEPATH')) { exit('No direct script access allowed'); }

/**
 * Dashboard_helper
 * @author Wagner Clovis <wagner@sitecontabil.com.br>
 * @copyright Sitecontabil
 */

if(!function_exists('get_week_day')):
    function get_week_day($weekday=null, $short=false){
        $w = ($weekday == null) ? date('N') : $weekday;

        $week_full[1] = "Segunda-feira";
        $week_full[2] = "Terça-feira";
        $week_full[3] = "Quarta-feira";
        $week_full[4] = "Quinta-feira";
        $week_full[5] = "Sexta-feira";
        $week_full[6] = "Sábado";
        $week_full[7] = "Domingo";
        
        $week_short[1] = "Seg";
        $week_short[2] = "Ter";
        $week_short[3] = "Qua";
        $week_short[4] = "Qui";
        $week_short[5] = "Sex";
        $week_short[6] = "Sáb";
        $week_short[7] = "Dom";

        if($short == true) :
            return $week_short[$w];
        else:
            return $week_full[$w];
        endif;
    }
endif;

if(!function_exists('get_month_name')):
    function get_month_name($month=null, $short=false){
        $m = ($month == null) ? date('n') : $month;

        $month_full[1] = "Janeiro";
        $month_full[2] = "Fevereiro";
        $month_full[3] = "Março";
        $month_full[4] = "Abril";
        $month_full[5] = "Maio";
        $month_full[6] = "Junho";
        $month_full[7] = "Julho";
        $month_full[8] = "Agosto";
        $month_full[9] = "Setembro";
        $month_full[10] = "Outubro";
        $month_full[11] = "Novembro";
        $month_full[12] = "Dezembro";

        $month_short[1] = "Jan";
        $month_short[2] = "Fev";
        $month_short[3] = "Mar";
        $month_short[4] = "Abr";
        $month_short[5] = "Mai";
        $month_short[6] = "Jun";
        $month_short[7] = "Jul";
        $month_short[8] = "Ago";
        $month_short[9] = "Set";
        $month_short[10] = "Out";
        $month_short[11] = "Nov";
        $month_short[12] = "Dez";

        if($short == true) :
            return $month_short[$m];
        else:
            return $month_full[$m];
        endif;
    }
endif;

if(!function_exists('show_date')):
    function show_date(){
        $semana = get_week_day();
        $dia = date('d');
        $mes = get_month_name();
        $ano = date('Y');

        return $dia . ' de ' . $mes . ' de ' . $ano;
    }
endif;

if(!function_exists('whatsapp_link')):
    function whats_link($whatsapp) {
		$url = 'https://wa.me/+55';
        $whatsapp = preg_replace("/[^0-9]/", '', $whatsapp);
        $retorno = $url.$whatsapp;
		return $retorno;
	}
endif;

if(!function_exists('phone_link')):
    function telefone_link($phone) {
		$url = 'tel:';
        $phone = preg_replace("/[^0-9]/", '', $phone);
        $retorno = $url.$phone;
		return $retorno;
	}
endif;

if(!function_exists('hex2rgba')) :
    function hex2rgba($color = '#000000') {
        // Removendo o # do inicio
        $color = substr( $color, 1 );
    
        // Verificando se são 6 ou 3 caracteres
        if (strlen($color) == 6) :
            $hex = array( $color[0] . $color[1], $color[2] . $color[3], $color[4] . $color[5] );
        elseif ( strlen( $color ) == 3 ) :
            $hex = array( $color[0] . $color[0], $color[1] . $color[1], $color[2] . $color[2] );
        else :
            $hex = array('0','0','0','0','0','0');
        endif;
    
        // Convertendo de Hexadecimal para RGB
        $rgb =  array_map('hexdec', $hex);
    
        // Retornando o RGB em forma de strings e separado por vírgula
        return implode(",", $rgb);
    }
endif;

if(!function_exists('adjustColor')) :
    function adjustColor($rgb, $darker=2) {
        $hash = (strpos($rgb, '#') !== false) ? '#' : '';
        $rgb = (strlen($rgb) == 7) ? str_replace('#', '', $rgb) : ((strlen($rgb) == 6) ? $rgb : false);
        if(strlen($rgb) != 6) return $hash.'000000';
        $darker = ($darker > 1) ? $darker : 1;

        list($R16,$G16,$B16) = str_split($rgb,2);

        $R = sprintf("%02X", floor(hexdec($R16)/$darker));
        $G = sprintf("%02X", floor(hexdec($G16)/$darker));
        $B = sprintf("%02X", floor(hexdec($B16)/$darker));

        return $hash.$R.$G.$B;
    }
endif;

if(!function_exists('getContrastColor')) :
    function getContrastColor($hexColor){
            // hexColor RGB
            $R1 = hexdec(substr($hexColor, 1, 2));
            $G1 = hexdec(substr($hexColor, 3, 2));
            $B1 = hexdec(substr($hexColor, 5, 2));

            // Black RGB
            $blackColor = "#000000";
            $R2BlackColor = hexdec(substr($blackColor, 1, 2));
            $G2BlackColor = hexdec(substr($blackColor, 3, 2));
            $B2BlackColor = hexdec(substr($blackColor, 5, 2));

            // Calc contrast ratio
            $L1 = 0.2126 * pow($R1 / 255, 2.2) +
                0.7152 * pow($G1 / 255, 2.2) +
                0.0722 * pow($B1 / 255, 2.2);

            $L2 = 0.2126 * pow($R2BlackColor / 255, 2.2) +
                0.7152 * pow($G2BlackColor / 255, 2.2) +
                0.0722 * pow($B2BlackColor / 255, 2.2);

            $contrastRatio = 0;
            if ($L1 > $L2) {
                $contrastRatio = (int)(($L1 + 0.05) / ($L2 + 0.05));
            } else {
                $contrastRatio = (int)(($L2 + 0.05) / ($L1 + 0.05));
            }

            // If contrast is more than 5, return black color
            if ($contrastRatio > 5) {
                return '#000000';
            } else { 
                // if not, return white color.
                return '#FFFFFF';
            }
    }
endif;

if(!function_exists('get_template')):
    function get_template($temp = null, $args = array(), $str = false){
        if($temp == null):
            return null;
        else:
            $ci =& get_instance();
            $ci->load->view($temp, $args, $str);
        endif;
    }
endif;