<?php 
class Regmodel extends CI_Model{
    public function insertdata($data){
        $this->load->database();
        return $this->db->insert('students',$data);
        //insert into students(student_name,student_mail,student_mobil) values(...,...,...);

    }

    public function getdata(){ 

        $this->load->database();
        return $this->db->get('students')->result(); //result_array() -----> get data in array formet,result() ------> get data in object formet.
        
    }

    public function editdata($id){
        $this->load->database();
        $this->db->where('Id',$id);
        return $this->db->get('students')->result();
    }
    public function saveedit($id,$data){
        $this->load->database();
        $this->db->where('Id',$id);
        return $this->db->update('students',$data);
    }

    public function delete_data($id){
        $this->load->database();
        $this->db->where('Id',$id);
        return $this->db->delete('students');
    }
}
?>
