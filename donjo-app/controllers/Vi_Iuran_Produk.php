<?php

use PhpOffice\PhpSpreadsheet\IOFactory;

defined('BASEPATH') || exit('No direct script access allowed');

class Vi_Iuran_Produk extends Admin_Controller {
    
    public function __construct()
    {
        parent::__construct();
        
        $this->load->model('vi_iuran_produk_model');
        $this->load->model('wilayah_model');
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
        $data["desa"] = $this->wilayah_model->list_desa()->result();

        return view("admin.iuran.vi_iuran_produk.form", $data);
    }
    
    public function insert()
    {
        $data = array(
            'desaid' => $this->input->post('desaid'),
            'nama_produk' => $this->input->post('nama_produk'),
            'adm_produk' => $this->input->post('adm_produk')
        );
        
        $this->vi_iuran_produk_model->create($data);
        
        redirect("/vi_iuran_produk");
    }
    
    public function edit($id)
    {
        $data['query'] = $this->vi_iuran_produk_model->getEditData($id)->row();
        $data["desa"] = $this->wilayah_model->list_desa()->result();
        
        return view("admin.iuran.vi_iuran_produk.update", $data);
    }
    
    public function update($id)
    {
        $data = array(
            'desaid' => $this->input->post('desa_id'),
            'nama_produk' => $this->input->post('nama_produk'),
            'adm_produk' => $this->input->post('adm_produk')
        );
        
        $this->vi_iuran_produk_model->update($id, $data);
        
        redirect("/vi_iuran_produk");
    }
    
    public function destroy($id)
    {
        $this->vi_iuran_produk_model->delete($id);
        
        redirect("/vi_iuran_produk");
    }
    
    public function proses_excel()
    {
        try {
            $input = $_FILES["upload"]["tmp_name"];
            $spreadsheet = PHPExcel_IOFactory::load($input);
            $worksheet = $spreadsheet->getSheet(0);
            $data = $worksheet->toArray();

            $this->load->model("vi_iuran_produk_model");

            $header = false;

            foreach ($data as $row) {
                if ($header) {
                    $data_to_insert = array(
                        'desaid' => $row[1],
                        'nama_produk' => $row[2]
                    );

                    $this->vi_iuran_produk_model->create($data_to_insert);
                } else {
                    $header = true;
                }
            }

            redirect("/vi_iuran_produk");
        } catch (Exception $e) {
            die("Error Loading File : " . $e->getMessage());
        }
    }
}

?>