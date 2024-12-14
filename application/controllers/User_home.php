<?php
error_reporting(0);
defined('BASEPATH') OR exit('No direct script access allowed');
class User_home extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }
    public function index()
    {
        $data['crimes']=$this->crime->user_complaint_list();
//        print_r($data['crimes']);
//        exit;
        $this->load->view('user_home',$data);
    }
    public function register()
    {
        date_default_timezone_set('asia/kolkata');
        $date=date('Y-m-d H:i:s');
        $mob=$_SESSION['user'];
        $file_name=$_FILES['files']['name'];
        $ext=explode('.',$file_name);
        $ext=end($ext);
        $rand_id=rand(111,999);
        $new_name=$mob.''.$rand_id.'.'.$ext;
        $data=array(
            'user_id' => $_SESSION['user_id'],
            'crime_type' => $_POST['type'],
            'crime_image' =>  $new_name,
            'location' => $_POST['location'],
            'crime_details' => $_POST['message'],
            'updated_at' => $date
        );
//        print_r($data);
//        exit;
        $ans=$this->crime->user_complaint_register($data);
        if($ans)
        {
            $target = 'upload_files/user_crime/'.$new_name;
            move_uploaded_file( $_FILES['files']['tmp_name'], $target);
            echo '<script>alert("Complained Success");window.location.replace("'.base_url().'user_home")</script>';
            exit;
        }
        else
        {
            echo '<script>alert("Something went Wrong");window.location.replace("'.base_url().'user_home")</script>';
            exit;
        }
    }
}