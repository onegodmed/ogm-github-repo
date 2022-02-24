<?php 

   Class Admin_model extends CI_Model {

	

      Public function __construct() { 

         parent::__construct(); 

      } 

		 Public function login($username,$password,$is_active) { 
            $this->db->select('*');
            $this->db->from('db_author');
            $this->db->where('email',$username);
            $this->db->where('is_active',$is_active);
            $this->db->where('password',$password);
            $this->db->limit(1);
            $query = $this->db->get();
            return $query->result();
      } 



      public function _insertRow($table, $data) {
        $this->db->insert($table, $data);
        return $this->db->insert_id();
    }



    public function _deleteRowWhere($table, $where) {
        return $this->db->delete($table, $where);
    }



    public function _updateRowWhere($table, $data, $where) {
        $this->db->where($where);

        if ($this->db->update($table, $data)) {
           return $where;
        } else {

            return false;
        }
    }

    public function _updateRowWhere1($table, $data, $where, $where1) {

        $this->db->where($where);
        if ($this->db->update($table, $data)) {
            return $where;
        } else {
            return false;
        }
    }



     public function get($table) {
        $this->db->select('*');
        $this->db->from($table);
        // $this->db->order_by($order, $order_type);
        return $query = $this->db->get()->result();
    }



     public function get_details($table, $where) {
        $this->db->select('*');
        $this->db->from($table);
        $this->db->where($where);
        $query = $this->db->get();
        return $query->result();

    }



     public function get_where_details($table, $where,$where1) {

        $this->db->select('*');

        $this->db->from($table);

        $this->db->where($where);

        $this->db->where($where1);

        $query = $this->db->get();

        return $query->result();

    }



     public function course_subject($where) {

        $this->db->select('subject.*,  course_part.price');

        $this->db->from('subject');

        $this->db->join(' course_part', ' course_part.id = subject.coursepart_id');

        $this->db->where($where);

        $query = $this->db->get();

        return $query->result();

    }

		

    public function get_mamber() {

        $this->db->select('author.*, branch.branch');

        $this->db->from('author');

        $this->db->join('branch', 'branch.id = author.branch_id');  

        $query = $this->db->get();

        return $query->result();

    }



public function get_expanse($start,$end) {

       $this->db->select('expanse.*,author.name,branch.branch');

$this->db->from('expanse');

$this->db->join('author','author.id=expanse.member_id','Left');

$this->db->join('branch','branch.id=expanse.branch_id','Left');

$this->db->where('expanse.date>=',$start);

$this->db->where('expanse.date<=',$end);

$query=$this->db->get();

return $query->result();

    }


    public function get_expanse1() {

       $this->db->select('expanse.*,author.name,branch.branch');

$this->db->from('expanse');

$this->db->join('author','author.id=expanse.member_id','Left');

$this->db->join('branch','branch.id=expanse.branch_id','Left');

$query=$this->db->get();

return $query->result();

    }



    public function get_details_where($table, $where,$where1) {

        $this->db->select('*');

        $this->db->from($table);

        $this->db->where($where);

        $this->db->where($where1);

        $query = $this->db->get();

        return $query->result();

    }


public function get_student_fee($start,$end) {

       $this->db->select('fee.*,admission.student_name');

$this->db->from('fee');

$this->db->join('admission','admission.id=fee.student_id','Left');

$this->db->where('fee.date>=',$start);

$this->db->where('fee.date<=',$end);

$query=$this->db->get();

return $query->result();

    }


  public function get_date_record($start,$end) {

       $this->db->select('teacher_attendance.*,author.name');

$this->db->from('teacher_attendance');

$this->db->join('author','author.id=teacher_attendance.teacher_id');

$this->db->where('teacher_attendance.date>=',$start);

$this->db->where('teacher_attendance.date<=',$end);

$query=$this->db->get();

return $query->result();

    }  

 public function get_admission() {

        $this->db->select('db_admission.*, db_course.course');

        $this->db->from('db_admission');

        $this->db->join('db_course', 'db_course.id = db_admission.course_id', 'left');

        $query = $this->db->get();

        return $query->result();

    }

    public function get_course() {

        $this->db->select('db_course.*, db_branch.branch');

        $this->db->from('db_course');

        $this->db->join('db_branch', 'db_branch.id = db_course.branch_id');

        $query = $this->db->get();

        return $query->result();

    }



    

   } 

?>