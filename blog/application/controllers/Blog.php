<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Blog extends CI_Controller {
    public $dados = array();
    public $urlBase = 'https://sitecontabil.com.br/periodicos/json';
    public $limit = 6;

    public function __construct(){
        parent::__construct();

        require_once FCPATH . '../dados.php';

        $this->dados['escritorio'] = $escritorio;
        $this->dados['titulo'] = 'Blog';
        $this->dados['descricao'] = $descricao;
        $this->dados['cor'] = $cor;
        $this->dados['theme'] = 'light';
        $this->dados['endereco'] = $endereco.', '.$numero.' '.$complemento;
        $this->dados['bairro'] = $bairro;
        $this->dados['cidade'] = $cidade;
        $this->dados['cep'] = $cep;
        $this->dados['telefone'] = $telefone;
        $this->dados['whatsapp'] = $whatsapp;
        $this->dados['email'] = $email;
        $this->dados['mapa'] = $mapa_link;
        $this->dados['facebook'] = $facebook;
        $this->dados['instagram'] = $instagram;
        $this->dados['linkedin'] = $linkedin;
        $this->dados['twitter'] = $twitter;
        $this->dados['site'] = $site;
        $this->dados['logo'] = '../assets/images/logo.png';
        $this->dados['icone'] = '../assets/images/favicon.png';
    }

	public function index(){
        $this->dados['periodicos'] = get_materias($this->urlBase);
		$this->load->view('blog/home', $this->dados);
	}

	public function mais(){
        $dados = $this->input->post();
        $dados['periodicos_mais'] = get_materias($this->urlBase.'/'.$dados['pagina']);
		$this->load->view('blog/mais', $dados);
	}
	
    public function single($slug=null){
        $this->dados['conteudo'] = get_materias($this->urlBase.'/single/'.$slug);

        if (empty($this->dados['conteudo'])):
            $this->erro404();
        else:
            $this->dados['titulo'] = $this->dados['conteudo'][0]->title;
            $this->load->view('blog/post', $this->dados);
        endif;
	}

    public function erro404(){
        $this->dados['conteudo'] = array();
        $this->dados['conteudo'][0] = (Object) array();
        $this->dados['conteudo'][0]->title = $this->dados['options']->title;
        $this->dados['conteudo'][0]->description = $this->dados['options']->description;
        $this->dados['conteudo'][0]->seo_title = $this->dados['options']->title;
        $this->dados['conteudo'][0]->seo_description = $this->dados['options']->description;
        $this->dados['conteudo'][0]->seo_keywords = $this->dados['options']->metatags;

		$this->load->view('blog/404', $this->dados);
    }
}
