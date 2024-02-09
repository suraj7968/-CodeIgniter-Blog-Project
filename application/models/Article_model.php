<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Article_model extends CI_Model {
    public function getArticle($param=array()){
        // if (!empty($params['queryString'])) {
        //     $this->db->like('author',$params['queryString']);
        // }
        if (isset($param['offset']) && isset($param['limit'])) {
            $this->db->limit($param['offset'],$param['limit']);
        }
        $query = $this->db->get('articles');
        // echo $this->db->last_query();
        $result = $query->result_array();
        return $result;
    }
    public function getArticles($id){
        $this->db->where('id',$id);
        $article = $this->db->get('articles')->result_array();
        return $article;
    }

    public function getArticlesCount(){
        $count = $this->db->count_all_results('articles');
        return $count;
    }
    
    public function addArticle($formArray){
        $this->db->insert('articles',$formArray);
        return $this->db->insert_id();
    }
    public function updateArticle($id,$formArray){
        $this->db->where('id',$id);
        $this->db->update('articles',$formArray);
    }
    public function deleteArticle($id){
        $this->db->where('id',$id);
        $this->db->delete('articles');
    }
    
}
?>