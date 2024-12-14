<?php
error_reporting(0);
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }
    public function index()
    {

        $data['newss']=$this->crime->get_news_list();
        $data['missings']=$this->crime->get_missing_list();
        $data['criminals']=$this->crime->get_criminal_list();
        $data["data"]=$this->crime->display_safety();
        $this->load->view('home',$data);
    }
    public function public_complaint()
    {
        date_default_timezone_set('asia/kolkata');
        $date=date('Y-m-d H:i:s');
        $mob=$_POST['mobile'];
        $file_name=$_FILES['files']['name'];
        $ext=explode('.',$file_name);
        $ext=end($ext);
        $new_name=$mob.'.'.$ext;
        $data=array(
            'first_name' => $_POST['fname'],
            'last_name' => $_POST['lname'],
            'mobile' => $mob,
            'email' => $_POST['email'],
            'crime_type' => $_POST['type'],
            'crime_image' =>  $new_name,
            'location' => $_POST['location'],
            'crime_details' => $_POST['message'],
            'updated_at' => $date
        );
//        print_r($data);
//        exit;
        $ans=$this->crime->public_register($data);
        if($ans)
        {
            $target = 'upload_files/public_crime/'.$new_name;
            move_uploaded_file( $_FILES['files']['tmp_name'], $target);
            echo '<script>alert("Complained Success");window.location.replace("'.base_url().'home")</script>';
            exit;
        }
        else
        {
            echo '<script>alert("Something went Wrong");window.location.replace("'.base_url().'home")</script>';
            exit;
        }
    }
}