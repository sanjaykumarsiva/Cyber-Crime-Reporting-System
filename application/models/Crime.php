<?php
class Crime extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }
    public function safety($data)
    {
        $this->db->insert('safety',$data);
        return true;

    }
    public function display_safety()
    {
        $query=$this->db->get('safety');
        return $query->result();

    }
    public function register($data)
    {
        $email=$data['email'];
        $mobile=$data['mobile'];
        $sql="select * from user WHERE email='$email' OR mobile='$mobile'";
        $query=$this->db->query($sql);
        $cnt=$query->num_rows();
        if($cnt==0)
        {
            return $this->db->insert('user',$data);
        }
        else
        {
            echo '<script>alert("Email or Mobile already Exist");window.location.replace("'.base_url().'login")</script>';
            exit;
        }
    }
    public function login($user)
    {
        $sql="select * from user WHERE email='$user' OR mobile='$user'";
        $query=$this->db->query($sql);
        $cnt=$query->num_rows();
        if($cnt==1)
        {

            $sql="select * from user WHERE email='$user' OR mobile='$user'";
            $query=$this->db->query($sql);
            return $query->result_array();
        }
        else
        {
            echo '<script>alert("Email or Mobile not Exist");window.location.replace("'.base_url().'login")</script>';
            exit;
        }
    }

    function pc_login3($user,$pass)
    {
    $query ="select * from  police_station WHERE password='".$pass."' and user_id='".$user."' ORDER BY id DESC";
     $res = $this->db->query($query);
     $val = $res->num_rows();
     return $val;     
   }
    
    public function public_register($data)
    {
        return $this->db->insert('public',$data);
    }
    public function user_complaint_register($data)
    {
        return $this->db->insert('user_crime',$data);
    }
    public function user_complaint_list()
    {
        $user=$_SESSION['user_id'];
        $sql="select * from user_crime WHERE user_id='$user'";
        $query=$this->db->query($sql);
        return $query->result_array();
    }
    public function pc_complaint_list()
    {
        $sql="select * from user_crime ORDER BY id DESC ";
        $query=$this->db->query($sql);
        return $query->result_array();
    }
    public function pc_emerg_complaint_list()
    {
        $sql="select * from public ORDER BY id DESC ";
        $query=$this->db->query($sql);
        return $query->result_array();
    }
    public function pc_add_news($data)
    {
        return $this->db->insert('news',$data);
    }
    public function pc_add_criminal($data)
    {
        return $this->db->insert('criminal',$data);
    }
    public function pc_add_case($data)
    {
        return $this->db->insert('case_files',$data);
    }
    public function pc_get_case_list()
    {
        $id=$_SESSION['pc'];
        $sql="select * from case_files WHERE station_id !='$id'";
        $query=$this->db->query($sql);
        return $query->result_array();
    }
    public function pc_get_request_list()
    {
        $id=$_SESSION['pc'];
        $sql="select fr.*,cf.fir_number from file_request fr,case_files cf WHERE fr.fir_id=cf.id AND cf.station_id='$id' AND fr.status=0";
        $query=$this->db->query($sql);
        return $query->result_array();
    }
    public function pc_file_request($data)
    {
        $station=$data['station_id'];
        $fir_id=$data['fir_id'];
        $sql="select * from file_request WHERE station_id='$station' AND fir_id='$fir_id'";
        $query=$this->db->query($sql);
        $cnt= $query->num_rows();
        if($cnt == 0)
        {
            return $this->db->insert('file_request',$data);
        }
        else
        {
            echo 'You Have Already Requested';
            exit;
        }
    }
    public function pc_get_request_status($id)
    {
        $station=$_SESSION['pc'];
        $sql="select * from file_request WHERE station_id='$station' AND fir_id='$id'";
        $query=$this->db->query($sql);
        $cnt= $query->num_rows();
        if($cnt>0)
        {
            $sql="select status from file_request WHERE station_id='$station' AND fir_id='$id'";
            $query=$this->db->query($sql);
            $rr=$query->result_array();
            $status=$rr[0]['status'];
            $arr=array(
                'status' => $status
            );
            return $arr;
        }
        else
        {
            $arr=array(
                'status' => 'not'
            );
            return $arr;
        }
    }
    public function pc_file_accept($id)
    {
        $data=array(
            'status' => '1'
        );
        $this->db->where('id',$id);
        return $this->db->update('file_request',$data);
    }
    public function pc_file_reject($id)
    {
        $data=array(
            'status' => '2'
        );
        $this->db->where('id',$id);
        return $this->db->update('file_request',$data);
    }
    public function get_news_list()
    {
        $sql="select * from news ORDER BY id DESC ";
        $query=$this->db->query($sql);
        return $query->result_array();
    }
    public function get_criminal_list()
    {
        $sql="select * from criminal ORDER BY id DESC ";
        $query=$this->db->query($sql);
        return $query->result_array();
    }
    public function add_msg($data)
    {
        return $this->db->insert('msgs',$data);
    }
    public function get_msg()
    {
        $sql="select * from msgs";
        $query=$this->db->query($sql);
        return $query->result_array();
    }
    public function update_status($id,$status)
    {
        $data=array('status'=>$status);
        $this->db->where('id',$id);
        return $this->db->update('user_crime',$data);
    }
    public function update_status2($id,$status,$sol)
    {
        $data=array('status'=>$status,'solution'=>$sol);
        $this->db->where('id',$id);
        return $this->db->update('user_crime',$data);
    }
    public function get_missing_list()
    {
        $sql="select * from user_crime WHERE crime_type='missing' ORDER by id DESC limit 4";
        $query=$this->db->query($sql);
        return $query->result_array();
    }
    public function pc_login2($user,$rand)
    {
        $data=array('otp' => $rand);
        $this->db->where('user_id',$user);
        return $this->db->update('police_station',$data);
    }
}