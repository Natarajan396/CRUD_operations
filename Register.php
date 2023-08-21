<?php
class Register extends CI_Controller{

public function index(){  //defalt function
   $this->load->view('defalt_wishes');
}

public function register_form(){

   $var['head']='Fill your data';
   $this->load->view('form',$var);
}

public function saved_data(){
   /*
   $sname=$this->input->post('sname');
   $smail=$this->input->post('smail');
   $sphone=$this->input->post('sphone');
   */

   extract($_POST);

   $data=[                        //associative array
      'Student_name'=>$sname,
      'Student_mail'=>$smail, 
      'Student_phone'=>$sphone
   ];
   $this->load->model('Regmodel');
   $result=$this->Regmodel->insertdata($data);
   if($result){
      $var2['status']='Succsess fully registerd';
      $var2['test']="396";      
      $this->load->view('form',$var2);
      //redirect(base_url('register/register_form'));
   }
   else{
      $var2['status']='error was occurred';
      $this->load->view('form',$var2);
   }
   //echo $sname.' '.$smail.' '.$sphone;
}
public function fetch(){

   $this->load->model('Regmodel');
   $var3['result']= $this->Regmodel->getdata();
   $this->load->view('ShowTable',$var3);
}

public function edit($data){
   $this->load->model('Regmodel');
   $var['data']=$this->Regmodel->editdata($data);
   $this->load->view('edit',$var);
}
public function saveEdit(){
   extract($_POST);
   $id=$Stid;
   $data=[
      'Student_name'=>$stname,
      'Student_mail'=>$stmail,
      'Student_phone'=>$stphone
   ];
   $this->load->model('Regmodel');
   $result=$this->Regmodel->saveEdit($id,$data);
   if($result){
      $this->fetch();
   }
   else{
      echo "edit not save";
   }
}
public function delete_data($id){
   $this->load->model('Regmodel');
   $result=$this->Regmodel->delete_data($id);
   if($result){
   $this->load->view('newForDelt');
   }
}

}


// localhost/register/fetch

?>
