<?php
error_reporting(0);
defined('BASEPATH') OR exit('No direct script access allowed');
class Pc_home extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }
    public function index()
    {
        $data['ecrimes']=$this->crime->pc_emerg_complaint_list();
        $data['crimes']=$this->crime->pc_complaint_list();
        $this->load->view('pc_home',$data);
    }
    public function case_register()
    {
        $new_name=$_FILES['files']['name'];
//        $ext=explode('.',$old_name);
//        $ext=end($ext);
        $station=$_SESSION['pc'];
        date_default_timezone_set('asia/kolkata');
        $rand=date('YmdHis');
        $fir_number='FIR'.$station.$rand;
        $data=array(
            'fir_number' => $fir_number,
            'crime_type' => $_POST['type'],
            'status' => $_POST['status'],
            'fir_details' => $_POST['message'],
            'case_doc' => $new_name,
            'station_id' => $station
        );
//        print_r($data);
//        exit;
        $ans=$this->crime->pc_add_case($data);
        if($ans)
        {
            $target = 'upload_files/case_files/'.$new_name;
            move_uploaded_file( $_FILES['files']['tmp_name'], $target);
            echo '<script>alert("Added Success");window.location.replace("'.base_url().'pc_home")</script>';
            exit;
        }
        else
        {
            echo '<script>alert("Something went Wrong");window.location.replace("'.base_url().'pc_home")</script>';
            exit;
        }
    }
    public function update_status()
    {
        $id=$_POST['id'];
        $status=$_POST['status'];
        $ans=$this->crime->update_status($id,$status);
        if($ans)
        {
            echo 'updated success';
        }
        else{
            echo 'failed';
        }
    }
    public function update_status2()
    {
        $id=$_POST['id'];
        $status=$_POST['status'];
        $sol=$_POST['sol'];
        $ans=$this->crime->update_status2($id,$status,$sol);
        if($ans)
        {
            echo 'updated success';
        }
        else{
            echo 'failed';
        }
    }
}