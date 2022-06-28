<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_akun extends CI_Model
{

    private $_table = 'user';



    public $username;
    public $password;
    public $nama_lengkap;
    public $id_jabatan;
    public $no_hp;
    public $tanggal_buat;
    public $terakhir_login;




    function __construct()
    {
        parent::__construct();
    }

    public function rules()
    {
        return [
            [
                'field' => 'nama_ayah',
                'label' => 'Name',
                'rules' => 'required'
            ]
        ];
    }


    public function addAkun()
    {
        $post = $this->input->post();
        $this->username = $post['username'];
        $this->password = $post['password'];
        $this->nama_lengkap = $post['nama_lengkap'];
        $this->id_jabatan = $post['id_jabatan'];
        $this->no_hp = $post['no_hp'];
        $this->tanggal_buat = $post['tanggal_buat'];
        $this->terakhir_login = $post['terakhir_login'];
        $this->db->insert($this->_table, $this);
    }
    public function getakun()
    {
        $this->db->select('*');
        $this->db->from('users');
        $this->db->join('tb_gtk', 'tb_gtk.id_gtk =users.id_gtk');
        $this->db->join('jabatan', 'jabatan.id_jabatan=users.jabatan');
        $query = $this->db->get();
        return $query->result();
    }
    public function getById($id_user)
    {
        return $this->db->get_where($this->_table, ["id_user" => $id_user])->row();
    }
    public function getjabatan()
    {
        return $this->db->get('jabatan')->result();
    }
    public function getgtk()
    {
        return $this->db->get('tb_gtk')->result();
    }

    public function getAkunSelect($id_gtk)
    {
        $this->db->select('*');
        $this->db->from("users");
        $this->db->where("id_gtk !=", $id_gtk);
        $query = $this->db->get();
        return $query->result();
    }

    function updateAkun($id_user)
    {
        $post = $this->input->post();
        $this->username = $post['username'];
        $this->password = $post['password'];
        $this->nama_lengkap = $post['nama_lengkap'];
        $this->id_jabatan = $post['id_jabatan'];
        $this->no_hp = $post['no_hp'];
        $this->tanggal_buat = $post['tanggal_buat'];
        $this->terakhir_login = $post['terakhir_login'];
        $this->db->update($this->_table, $this, array("id_user" => $id_user));
    }

    function deleteAkun($id_user)
    {
        return $this->db->delete($this->_table, array("id_user" => $id_user));
    }
    function cekusername($table,$where){		
		return $this->db->get_where($table,$where);
	}
}
