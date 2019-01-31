<?php
    defined('BASEPATH') OR exit('No direct script access allowed');

    class Depoimentos_model extends CI_Model {
        public $id;
        public $autor;
        public $descricao;
        public $empresa;


        public function __construct(){
            parent::__construct();
        }

        public function listar_depoimentos(){
            $this->db->order_by('autor','ASC');
            return $this->db->get('depoimento')->result();
        }

        public function listar_depoimento($id){
            $this->db->order_by('autor','ASC');
            $this->db->from('depoimento');
            $this->db->where('md5(id)',$id);
            return $this->db->get()->result();
        }

        public function adicionar($autor, $descricao, $empresa){
            $dados['autor'] = $autor;
            $dados['descricao'] = $descricao;
            $dados['empresa'] = $empresa;

            return $this->db->insert('depoimento',$dados); 
        }

        public function excluir($id){
            $this->db->where('md5(id)', $id);
            return $this->db->delete('depoimento');
        }

        public function alterar($id, $autor, $descricao, $empresa){
            $dados['autor'] = $autor;
            $dados['descricao'] = $descricao;
            $dados['empresa'] = $empresa;


            $this->db->where('id',$id);
            return $this->db->update('depoimento', $dados);
        }
    }   
?>