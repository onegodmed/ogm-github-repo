<?php
class MY_Model extends CI_Model {
    
    public function __construct() {

        parent::__construct();
        // Load form helper library  
    }

    public function getData($table,$column,$where) {
        $this->db->select($column);
        if($where){
            $this->db->where($where);
        }        
        $query = $this->db->get($table);
       //echo $this->db->last_query();
        if($query->num_rows() > 0){
            return $query->result();
        }
        
    }
    public function deleteData($table,$where) {
        $this->db->where($where);
        return $this->db->delete($table);        

    }

    public function deleteDataNotIn($table,$where,$whereNotIn) {        
        $this->db->where_not_in($whereNotIn['key'],$whereNotIn['value']);
        $this->db->where($where);
        return $this->db->delete($table);
    }

    public function updateData($table,$update_data,$where) {
        $this->db->where($where);
        return $this->db->update($table,$update_data);        

    }

    public function insertData($table,$update_data) {      
        $this->db->insert($table,$update_data);
        /* echo $this->db->last_query();
         print_r($this->db->error());     */  
        return  $this->db->insert_id();
    }

    public function logData($message=""){
        $logFile = APPPATH."logs/error.log";
        if(!file_exists($logFile)){
            touch($logFile);
            //chomod($logFile, 777);
        }

        $message = "Log Date ".date("d-m-Y"). " :  ".$message."\n";
        $myfile = fopen($logFile, "a");
        fwrite($myfile, $message);
        fclose($myfile);
    }
}