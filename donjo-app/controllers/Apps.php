<?php

defined('BASEPATH') || exit('No direct script access allowed');

class Apps extends Admin_Controller {

    public function __construct()
    {
        parent::__construct();

        $this->load->model('apps_menu_model');
        $this->load->model("vi_iuran_produk_model");
    }

    public function index()
    {   
        return view("admin.apps.menu.index");
    }

    public function form()
    {
        $data['query'] = $this->vi_iuran_produk_model->getData()->result();

        return view("admin.apps.menu.form", $data);
    }

    public function insert()
    {
        $data = array(
            'nama' => $this->input->post('nama'),
            'agenid' => $this->input->post('agenid'),
            'keterangan' => $this->input->post('keterangan'),
            'links' => $this->input->post('links'),
            'icons' => $this->input->post('icons'),
            'icon' => $this->input->post('icon'),
            'group' => $this->input->post("group"),
            'submenu' => $this->input->post('submenu'),
            'posisi' => $this->input->post('posisi'),
            'urut' => $this->input->post('urut'),
            'status' => $this->input->post('status'),
            'kategori' => $this->input->post('kategori'),
            'produk' => $this->input->post('produk'),
            'page' => $this->input->post('page'),
        );

        $this->apps_menu_model->create($data);

        redirect("/apps");
    }

    public function edit($id)
    {
        $data['query'] = $this->apps_menu_model->getEditData($id)->row();
        $data['vi_iuran_produk'] = $this->vi_iuran_produk_model->getData()->result();
        
        return view("admin.apps.menu.update", $data);
    }

    public function update($id)
    {
        $data = array(
            'nama' => $this->input->post('nama'),
            'agenid' => $this->input->post('agenid'),
            'keterangan' => $this->input->post('keterangan'),
            'links' => $this->input->post('links'),
            'icons' => $this->input->post('icons'),
            'icon' => $this->input->post('icon'),
            'group' => $this->input->post("group"),
            'submenu' => $this->input->post('submenu'),
            'posisi' => $this->input->post('posisi'),
            'urut' => $this->input->post('urut'),
            'status' => $this->input->post('status'),
            'kategori' => $this->input->post('kategori'),
            'produk' => $this->input->post('produk'),
            'page' => $this->input->post('page'),
        );

        $this->apps_menu_model->update($id, $data);

        redirect("/apps");
    }

    public function destroy($id)
    {
        $this->apps_menu_model->delete($id);

        redirect("/apps");
    }

    public function datatable()
    {
        $postData = $this->input->get();
        $data['query'] = $this->apps_menu_model->getData($postData);
        $data['recordsTotal'] = $this->apps_menu_model->count_all();
        $data['recordsFiltered'] = $this->apps_menu_model->count_filtered($postData);

        echo json_encode($data);
    }
}

?>