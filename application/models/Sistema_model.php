<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Sistema_model extends CI_Model {

    /* GETS */

    /**
     * Busca todos os campos de uma determinada tabela
     * @param $table
     * @param null $condicao
     * @return mixed
     */
    public function get_all($table, $condicao = NULL)
    {
        if($condicao != NULL)
        {
            $this->db->where($condicao);
        }

        return $this->db->get($table);
        //echo $str = $this->db->last_query();
    }

    /**
     * Busca por um determinado id
     * @param $table
     * @param null $condicao
     * @return bool
     */
    public function get_by($table, $condicao = NULL)
    {
        if($condicao != NULL)
        {
            return $this->db->get_where($table, $condicao);
            //echo $str = $this->db->last_query();
        }
        else
        {
            return FALSE;
        }
    }

    /**
     * Join para agrupar dados de duas tabelas
     * @param $table_from
     * @param $table_join
     * @param $join
     * @param null $condicao
     * @return mixed
     */
    public function get_join($table_from, $table_join, $join, $condicao = NULL)
    {
        //$this->db->select('*');
        $this->db->from($table_from);
        $this->db->join($table_join, $join);
        if($condicao != NULL)
        {
            $this->db->where($condicao);
        }
        return $this->db->get();
        //echo $str = $this->db->last_query();
    }


    /* CRUDS */

    /**
     * Insere dados a tabela
     *
     * @author Junior Marquezano
     * @param $table
     * @param $dados
     * @return bool
     */
    public function do_insert($table, $dados)
    {
        if($dados != NULL)
        {
            $this->db->insert($table, $dados);
        }
        else
        {
            return FALSE;
        }
    }

    /**
     * Atualiza os dados da tabela
     *
     * @author Junior Marquezano
     * @param $table
     * @param null $dados
     * @param null $condicao
     * @return bool
     */
    public function do_update($table, $dados = NULL, $condicao = NULL)
    {
        if( ($dados != NULL) OR ($condicao != NULL) )
        {
            $this->db->update($table, $dados, $condicao);

            if ($this->db->affected_rows() > 0)
            {
                return TRUE;
            }
            else
            {
                return FALSE;
            }
        }
        else
        {
            return FALSE;
        }
    }

    /**
     * Deleta os dados da tabela
     *
     * @author Junior Marquezano
     * @param $table
     * @param null $condicao
     * @return mixed
     */
    public function do_delete($table, $condicao = NULL)
    {
        return $this->db->delete($table, $condicao);
    }
}