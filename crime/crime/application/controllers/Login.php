<?php
error_reporting(0);
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }
    public function index()
    {
        $this->load->view('login');
    }
    public function register()
    {
        $pass=$_POST['password'];
        $cpass=$_POST['cpassword'];
        if($cpass!=$pass)
        {
            echo '<script>alert("Password Not Mached");window.location.replace("'.base_url().'login")</script>';
            exit;
        }
        $data=array(
            'first_name' => $_POST['fname'],
            'last_name' => $_POST['lname'],
            'mobile' => $_POST['mobile'],
            'email' => $_POST['email'],
            'password' => $pass,
            'address' => $_POST['address']
        );
//        print_r($data);
//        exit;
        $ans=$this->crime->register($data);
        if($ans)
        {
            echo '<script>alert("Registered Success");window.location.replace("'.base_url().'login")</script>';
            exit;
        }
        else
        {
            echo '<script>alert("Something went Wrong");window.location.replace("'.base_url().'login")</script>';
            exit;
        }
    }
    public function login()
    {
        $user=$_POST['user'];
        $pass=$_POST['password'];
        $ans=$this->crime->login($user);
        if($ans[0]['password']==$pass)
        {
            $_SESSION['user']=$ans[0]['email'];
            $_SESSION['user_id']=$ans[0]['id'];
            echo '<script>alert("Login Success");window.location.replace("'.base_url().'user_home")</script>';
            exit;
        }
        else
        {
            echo '<script>alert("Password Wrong");window.location.replace("'.base_url().'login")</script>';
            exit;
        }
    }
    public function logout()
    {
        session_destroy();
        echo '<script>alert("You have Logged Out");window.location.replace("'.base_url().'login")</script>';
        exit;
    }
}