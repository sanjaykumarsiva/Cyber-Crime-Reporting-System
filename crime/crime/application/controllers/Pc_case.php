<?php
error_reporting(0);
defined('BASEPATH') OR exit('No direct script access allowed');
class Pc_case extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }
    public function index()
    {
        $data['ecrimes']=$this->crime->pc_emerg_complaint_list();
        $data['crimes']=$this->crime->pc_complaint_list();
        $this->load->view('pc_case',$data);
    }
    public function add_news()
    {
        $new_name=$_FILES['files']['name'];
        $data=array(
            'title' => $_POST['title'],
            'year' => $_POST['year'],
            'day' => $_POST['day'],
            'month' => $_POST['month'],
            'nimage' => $new_name,
            'location' => $_POST['location'],
            'descr' => $_POST['message'],
        );

       

        $ans=$this->crime->pc_add_news($data);


        if($ans)
        {

            $target = 'upload_files/news/'.$new_name;
            move_uploaded_file( $_FILES['files']['tmp_name'], $target);
            echo '<script>alert("Added Success");window.location.replace("'.base_url().'pc_case")</script>';
            exit;
        }
        else
        {
            echo '<script>alert("Something went Wrong");window.location.replace("'.base_url().'pc_case")</script>';
            exit;
        }
    }
    public function add_criminal()
    {
        $new_name=$_FILES['files']['name'];
        $data=array(
            'name' => $_POST['name'],
            'ctype' => $_POST['type'],
            'cimage' => $new_name,
        );
//        print_r($data);
//        exit;
        $ans=$this->crime->pc_add_criminal($data);
        if($ans)
        {
            $target = 'upload_files/criminal/'.$new_name;
            move_uploaded_file( $_FILES['files']['tmp_name'], $target);
            echo '<script>alert("Added Success");window.location.replace("'.base_url().'pc_case")</script>';
            exit;
        }
        else
        {
            echo '<script>alert("Something went Wrong");window.location.replace("'.base_url().'pc_case")</script>';
            exit;
        }
    }
    public function add_safety()
    {
        $data['message']=$this->input->post('message');
        $this->load->model('crime');
        $response=$this->crime->safety($data);
        if($response==true)
        {
            echo '<script>alert("Safety tips added successfully");window.location.replace("'.base_url().'pc_case")</script>';
            exit; 
        }
        else
        {
            echo '<script>alert("Something went Wrong");window.location.replace("'.base_url().'pc_case")</script>';
            exit;    
        }

    }
}