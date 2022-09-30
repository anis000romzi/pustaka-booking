<?php 

class Mahasiswa extends CI_Controller{

    function __construct(){
        parent::__construct();      
        $this->load->model('ModelMahasiswa');
        $this->load->helper('url');

    }

    function index(){
        $data['mahasiswa'] = $this->ModelMahasiswa->tampil_data()->result();
        $this->load->view('v_tampilmahasiswa',$data);
    }

    function tambah(){
        $this->load->view('v_inputmahasiswa');
    }

    function tambah_aksi(){
        
        $nim = $this->input->post('nim');
        $nama = $this->input->post('nama');
        $kelas = $this->input->post('kelas');
        $tmp_lahir = $this->input->post('tmp_lahir');
        $tgl_lahir = $this->input->post('tgl_lahir');
        $alamat = $this->input->post('alamat');
        $jk = $this->input->post('jk');
        $agama = $this->input->post('agama');

        $data = array(
            'nim' => $nim,
            'nama' => $nama,
            'kelas' => $kelas,
            'tmp_lahir' => $tmp_lahir,
            'tgl_lahir' => $tgl_lahir,
            'alamat' => $alamat,
            'jk' => $jk,
            'agama' => $agama
            );
        $this->ModelMahasiswa->input_data($data,'mahasiswa');
        redirect('mahasiswa/index');
    }

}