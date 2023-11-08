<?php

defined('BASEPATH') || exit('No direct script access allowed');

class Apps extends Admin_Controller {

    public function __construct()
    {
        parent::__construct();

        $this->load->model('apps_menu_model');
        $this->modul_ini     = 'apps-menu';
        $this->sub_modul_ini = 'pengaturan-peta';
    }

    public function index()
    {
        $data['query'] = $this->apps_menu_model->getData()->result();
        
        return view("admin.apps.menu.index", $data);
    }

    public function form()
    {
        return view("admin.apps.menu.form");
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
}

?>