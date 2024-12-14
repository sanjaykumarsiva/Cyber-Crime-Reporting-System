<?php
error_reporting(0);
defined('BASEPATH') OR exit('No direct script access allowed');
class Pc_case_list extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }
    public function index()
    {
        $cases=$this->crime->pc_get_case_list();
        for($i=0;$i<sizeof($cases);$i++)
        {
            $id=$cases[$i]['id'];
            $cases[$i]['status2']=$this->crime->pc_get_request_status($id);
        }
        $data['cases']=$cases;
//        print_r($data['cases']);
//        exit();
        $data['casess']=$this->crime->pc_get_request_list();
        $this->load->view('pc_case_list',$data);
    }
    public function file_request()
    {
        $data=array(
            'station_id' => $_SESSION['pc'],
            'fir_id' => $_POST['id'],
        );
        $ans=$this->crime->pc_file_request($data);
        if($ans)
        {
            echo 'Request sent Success';
            exit;
        }
        else
        {
            echo 'Something went Wrong';
            exit;
        }
    }
    public function file_accept()
    {
        $id=$_POST['id'];
        $ans=$this->crime->pc_file_accept($id);
        if($ans)
        {
            echo 'Request Accept Success';
            exit;
        }
        else
        {
            echo 'Something went Wrong';
            exit;
        }
    }
    public function file_reject()
    {
        $id=$_POST['id'];
        $ans=$this->crime->pc_file_reject($id);
        if($ans)
        {
            echo 'Request Reject Success';
            exit;
        }
        else
        {
            echo 'Something went Wrong';
            exit;
        }
    }
}