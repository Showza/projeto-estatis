<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Servicos_model extends CI_Model {

  // Variáveis de instância da classe notícias - vindo do banco de dados.
  public $nome;
  public $descricao;
  public $imagem;
  public $modalidade;

	public function __construct(){
		parent::__construct();
	}

	public function listar_servicos(){
		$this->db->order_by('modalidade','ASC');
        $this->db->order_by('nome','ASC');
        return $this->db->get('servicos')->result();
	}

	public function listar_servico($id){
        $this->db->from('servicos');
        $this->db->where('servicos.id',$id);
        return $this->db->get()->result();
    }

	public function adicionar($nome, $descricao, $imagem, $modalidade){
        $dados['nome'] = $nome;
        $dados['descricao'] = $descricao;
        $dados['imagem'] = $imagem;
        $dados['modalidade'] = $modalidade;

        return $this->db->insert('servicos',$dados);
    }

    public function alterar($id, $nome, $descricao, $modalidade){
        $dados['nome'] = $nome;
        $dados['descricao'] = $descricao;
        $dados['modalidade'] = $modalidade;

        $this->db->where('id',$id);
        return $this->db->update('servicos',$dados);
    }
    public function remover($id, $imagem){
        $this->db->where('id',$id);
        return $this->db->delete('servicos');
    }
    public function nova_foto($id, $imagem){
    	$dados['imagem'] = $imagem;
      	$this->db->where('id',$id);
      	return $this->db->update('servicos',$dados);
    }
}