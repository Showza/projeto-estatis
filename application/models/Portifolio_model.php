<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Portifolio_model extends CI_Model {

    public $nome;
    public $descricao;
    public $imagem;
    public $id_galeria;
    public $id;

    public function __construct(){
        parent::__construct();
    }

    public function listar_portifolio(){
        $this->db->order_by('nome','ASC');
        return $this->db->get('galeria')->result();
    }

    public function listar_galeria($id){
        $this->db->from('galeria');
        $this->db->where('galeria.id',$id);
        return $this->db->get()->result();
    }

    public function adicionarimagem($nome, $descricao, $imagem){
        $dados['nome'] = $nome;
        $dados['descricao'] = $descricao;
        $dados['imagem'] = $imagem;

        return $this->db->insert('galeria',$dados);
    }

    public function alterar($id, $nome, $descricao){
        $dados['nome'] = $nome;
        $dados['descricao'] = $descricao;
        

        $this->db->where('id',$id);
        return $this->db->update('galeria',$dados);
    }

    public function remover($id, $imagem){
        $this->db->where('id',$id);
        return $this->db->delete('galeria');
    }   

    public function nova_foto($id, $imagem){
        $dados['imagem'] = $imagem;
        $this->db->where('id',$id);
        return $this->db->update('galeria',$dados);
    }
}

/*

    

    public function adicionargaleria($id, $nome, $descricao, $imagem){
        $dados['nome'] = $nome;
        $dados['descricao'] = $descricao;
        $dados['imagem'] = $imagem;
        

        return $this->db->insert('galeria',$dados);
    }*/