<?php 
error_reporting(0);
class Berita extends CI_Controller{

    function __construct(){
        parent::__construct();      
        $this->load->model('ModelBerita');
        $this->load->helper('url');

    }

    function index(){
        $data['berita'] = $this->ModelBerita->tampil_data()->result();
        $this->load->view('v_tampilberita',$data);
    }

    function tambah(){
        $this->load->view('v_inputberita');
    }

    function tambah_aksi(){
        
        $judul = $this->input->post('judul');
        $head_news = $this->input->post('head_news');
        $deskripsi = $this->input->post('deskripsi');
        $tgl_publish = $this->input->post('tgl_publish');
        $penulis = $this->input->post('penulis');
        $kategori = $this->input->post('kategori');

        $data = array(
            'judul' => $judul,
            'head_news' => $head_news,
            'deskripsi' => $deskripsi,
            'tgl_publish' => $tgl_publish,
            'penulis' => $penulis,
            'kategori' => $kategori
            );
        $this->ModelBerita->input_data($data,'berita');
        redirect('berita/index');
    }

}