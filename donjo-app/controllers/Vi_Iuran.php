<?php

defined('BASEPATH') || exit('No direct script access allowed');

class Vi_Iuran extends Admin_Controller {

    public function __construct()
    {
        parent::__construct();

        $this->load->model('vi_iuran_model');
        $this->modul_ini     = 'apps-menu';
        $this->sub_modul_ini = 'pengaturan-peta';
    }

    public function index()
    {
        $data['query'] = $this->vi_iuran_model->getData()->result();
        
        return view("admin.iuran.vi_iuran.index", $data);
    }

    public function form()
    {
        return view("admin.iuran.vi_iuran.form");
    }

    public function insert()
    {
        $data = array(
            'tanggal' => $this->input->post('tanggal'),
            'agenid' => $this->input->post('agenid'),
            'desaid' => $this->input->post('desaid'),
            'nik' => $this->input->post('nik'),
            'rw' => $this->input->post('rw'),
            'rt' => $this->input->post('rt'),
            'p_bulan' => $this->input->post("p_bulan"),
            'p_tahun' => $this->input->post('p_tahun'),
            'tagihan' => $this->input->post('tagihan'),
            'status' => $this->input->post('status'),
            'produk' => $this->input->post('produk'),
            'execs' => $this->input->post('execs')
        );

        $this->vi_iuran_model->create($data);

        redirect("/vi_iuran");
    }

    public function edit($id)
    {
        $data['query'] = $this->vi_iuran_model->getEditData($id)->row();

        return view("admin.iuran.vi_iuran.update", $data);
    }

    public function update($id)
    {
        $data = array(
            'tanggal' => $this->input->post('tanggal'),
            'agenid' => $this->input->post('agenid'),
            'desaid' => $this->input->post('desaid'),
            'nik' => $this->input->post('nik'),
            'rw' => $this->input->post('rw'),
            'rt' => $this->input->post('rt'),
            'p_bulan' => $this->input->post("p_bulan"),
            'p_tahun' => $this->input->post('p_tahun'),
            'tagihan' => $this->input->post('tagihan'),
            'status' => $this->input->post('status'),
            'produk' => $this->input->post('produk'),
            'execs' => $this->input->post('execs')
        );

        $this->vi_iuran_model->update($id, $data);

        redirect("/vi_iuran");
    }

    public function destroy($id)
    {
        $this->vi_iuran_model->delete($id);

        redirect("/vi_iuran");
    }
}

?>