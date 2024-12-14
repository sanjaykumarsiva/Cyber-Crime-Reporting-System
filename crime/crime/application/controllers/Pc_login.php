<?php
error_reporting(0);
defined('BASEPATH') OR exit('No direct script access allowed');
class Pc_login extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }
    public function index()
    {
        $test['otp']=0;
        $this->load->view('pc_login',$test);
    }
    public function login()
    {
        $user=$_POST['user'];
        $pass=$_POST['password'];
        $this->load->model('crime');
        $log= $this->crime->pc_login3($user,$pass);
        
        if($log==1)
        {
        $_SESSION['pc']=$user;
        echo '<script>window.location.replace("' . base_url() . 'pc_home")</script>';
        }
        else{
        echo '<script>alert("Invalid Data");window.location.replace("' . base_url() . 'pc_login")</script>';   
        echo '<script>window.location.replace("' . base_url() . 'pc_login")</script>';
        }     
    }
    public function otp()
    {
        $user=$_POST['user'];
        $otp=$_POST['otp'];
        $ans=$this->crime->pc_login($user);
        if($ans[0]['otp']==$otp)
        {
            $_SESSION['pc']=$ans[0]['user_id'];
            $_SESSION['pc_id']=$ans[0]['id'];
            echo '<script>alert("Login Success");window.location.replace("'.base_url().'pc_home")</script>';
            exit;
        }
        else
        {
            echo '<script>alert("OTP Wrong");window.location.replace("'.base_url().'pc_login")</script>';
            exit;
        }
    }
    public function logout()
    {
        session_destroy();
        echo '<script>alert(" You have Logged Out");window.location.replace("'.base_url().'pc_login")</script>';
        exit;
    }
    public function otp_sms($mob,$rand)
    {
        $username = "indnaren";

        $password = "technologies123";

        $message = "Your OTP number is $rand";

        $sender = "ncrime";

        $mobile_number = $mob;

        $url = "user=" . urlencode($username) . "&password=" . urlencode($password) . "
        &mobile=" . urlencode($mobile_number) . "&message=" . urlencode($message) . "&sender=" . urlencode($sender) . "&type=" . urlencode('3');
        //print_r($url);
        $ch = curl_init('login.bulksmsgateway.in/sendmessage.php?');


        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $result = curl_exec($ch);


        curl_close($ch);
        echo '<script>alert("OTP sent SUCCESSFULLY");</script>';
        return 1;
    }
}