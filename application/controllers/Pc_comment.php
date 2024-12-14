<?php
error_reporting(0);
defined('BASEPATH') OR exit('No direct script access allowed');
class Pc_comment extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }
    public function index()
    {
        $ans['msgs']=$this->crime->get_msg();
        $this->load->view('pc_comments',$ans);
    }
    public function send()
    {
        date_default_timezone_set('asia/kolkata');
        $date=date('Y-m-d H:i:s');
        $data=array(
            'sender' => $_SESSION['pc'],
            'msg' => $_POST['msg'],
            'upload_at' => $date
        );
        $ans=$this->crime->add_msg($data);
        if($ans)
        {
            echo '<script>alert("Sent Success");window.location.replace("'.base_url().'pc_comment")</script>';
            exit;
        }
        else
        {
            echo '<script>alert("Something went Wrong");window.location.replace("'.base_url().'pc_comment")</script>';
            exit;
        }
    }
}