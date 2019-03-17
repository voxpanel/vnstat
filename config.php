<?php
   // Reportar Erro
    error_reporting(E_ALL | E_NOTICE);

    // Configurar Locales e Idiomas
    $locale = 'en_US.UTF-8';
    $language = 'pt-br';

    // Interfaces monitoradas pelo VnSTAT
    $iface_list = array('eth0', 'eth1');

    // Nome ou descricao das interfaces
    $iface_title['eth0'] = 'Internet';
    $iface_title['eth1'] = 'Rede Local';

    // Nao alterar 
    $vnstat_bin = '/usr/bin/vnstat';
    $data_dir = './dumps';

    // Formato do Grafico (pode ser SVG ou PNG)
    $graph_format='svg';
    
    // Fonte utilizada para graficos PNG
    define('GRAPH_FONT',dirname(__FILE__).'/VeraBd.ttf');

    // Fonte utilizada para graficos  SVG
    define('SVG_FONT', 'Verdana');

    // Tema padrao
    define('DEFAULT_COLORSCHEME', 'light');

?>
