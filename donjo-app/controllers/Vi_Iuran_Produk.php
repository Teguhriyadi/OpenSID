<?php

defined('BASEPATH') || exit('No direct script access allowed');

class Vi_Iuran_Produk extends Admin_Controller {

    public function __construct()
    {
        parent::__construct();

        $this->load->model('vi_iuran_produk_model');
        $this->modul_ini     = 'apps-menu';
        $this->sub_modul_ini = 'pengaturan-peta';
    }

    public function index()
    {
        $data['query'] = $this->vi_iuran_produk_model->getData()->result();
        
        return view("admin.iuran.vi_iuran_produk.index", $data);
    }

    public function form()
    {
        return view("admin.iuran.vi_iuran_produk.form");
    }

    public function insert()
    {
        $data = array(
            'desaid' => $this->input->post('desaid'),
            'nama_produk' => $this->input->post('nama_produk')
        );

        $this->vi_iuran_produk_model->create($data);

        redirect("/vi_iuran_produk");
    }

    public function edit($id)
    {
        $data['query'] = $this->vi_iuran_produk_model->getEditData($id)->row();

        return view("admin.iuran.vi_iuran_produk.update", $data);
    }

    public function update($id)
    {
        $data = array(
            'desaid' => $this->input->post('desaid'),
            'nama_produk' => $this->input->post('nama_produk')
        );

        $this->vi_iuran_produk_model->update($id, $data);

        redirect("/vi_iuran_produk");
    }

    public function destroy($id)
    {
        $this->vi_iuran_produk_model->delete($id);

        redirect("/vi_iuran_produk");
    }
}

?>