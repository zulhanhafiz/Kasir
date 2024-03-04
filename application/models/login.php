<?php

class login extends CI_model {

    public function proses_login($user,$password)
    {
        $password = md5($password);
        $user = $this->db->where('username', $user);
        $password = $this->db->where('password', $password);
        $query = $this->db->get('user');
        if ($query->num_rows()>0) {
            foreach ($query->result() as $row) {
                $sess = array(
                    'UserID '           => $row->UserID ,
                    'UserName'          => $row->usrname ,
                    'Password'          => $row->Password ,
                    'NamaLengkap'       => $row->NamaLengkap ,
                    'Level'             => $row->Level ,
                );
                $this->session->set_userdata($sess);

            }
            redirect('dashboard');
        }else{
            $this->session->set_flashdata();
        
        }
	}

 
}

