<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Article_model extends CI_Model {
    public function getArticle($params=[]){
        if (!empty($params['queryString'])) {
            $this->db->like('name',$params['queryString']);
        }
        $result = $this->db->get('articles')->result_array();
        return $result;
    }
    public function getArticles($id){
        $this->db->where('id',$id);
        $article = $this->db->get('articles')->result_array();
        return $article;
    }
    public function addArticle($formArray){
        $this->db->insert('articles',$formArray);
        return $this->db->insert_id();
    }
    public function updateArticle($id,$formArray){
        $this->db->where('id',$id);
        $this->db->update('articles',$formArray);
    }
    public function deleteArticle(){
        
    }
    
}
?>