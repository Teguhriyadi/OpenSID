<?php

defined('BASEPATH') || exit('No direct script access allowed');

class Vi_Iuran extends Admin_Controller {

    public function __construct()
    {
        parent::__construct();

        $this->load->model('vi_iuran_model');
        $this->load->model('history_iuran_model');
        $this->load->library('session');
    }

    public function index()
    {
        $data['query'] = $this->vi_iuran_model->getData()->result();
        
        return view("admin.iuran.vi_iuran.index", $data);
    }

    public function form()
    {
        $data["bulan"] = $this->vi_iuran_model->getBulanData();

        return view("admin.iuran.vi_iuran.form", $data);
    }

    public function insert()
    {
        $data = array(
            'tanggal' => $this->input->post('tanggal'),
            'tgl_bayar' => $this->input->post('tanggal'),
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

        $history = array(
            'kategori_menu' => 'vi-iuran',
            'deskripsi' => 'Melakukan Aksi Tambah',
            'aksi' => "TAMBAH",
            'bulan' => $data["p_bulan"],
            'tahun' => $data['p_tahun'],
            'tagihan' => $data["tagihan"],
            'tanggal_aksi' => date("Y-m-d H:i:s"),
            'execs' => 1,
        );

        $this->vi_iuran_model->create($data);
        $this->history_iuran_model->create($history);

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

        $history = array(
            'kategori_menu' => 'vi-iuran',
            'deskripsi' => 'Melakukan Aksi Update',
            'aksi' => "UPDATE",
            'exec' => 1,
            'tanggal_aksi' => date("Y-m-d H:i:s")
        );

        $this->vi_iuran_model->update($id, $data);
        $this->history->create($history);

        redirect("/vi_iuran");
    }

    public function destroy($id)
    {
        $nama_sesi = $this->session->userdata("nama");

        $cek_iuran = $this->vi_iuran_model->getEditData($id)->row(); 

        $this->vi_iuran_model->delete($id);

        $history_iuran = array(
            'kategori_menu' => 'vi-iuran',
            'deskripsi' => 'Melakukan Aksi Delete',
            'aksi' => "DELETE",
            'bulan' => $cek_iuran->p_bulan,
            'tahun' => $cek_iuran->p_tahun,
            'tagihan' => $cek_iuran->tagihan,
            'tanggal_aksi' => date("Y-m-d H:i:s"),
            'execs' => $nama_sesi,
        );

        $this->history_iuran_model->create($history_iuran);

        redirect("/vi_iuran");
    }

    public function history()
    {
        $data['query'] = $this->history_iuran_model->getData()->result();

        return view("admin.iuran.vi_iuran.history", $data);
    }

    public function upload_excel()
    {
        try {
            $nama_sesi = $this->session->userdata("nama");
            $input = $_FILES["upload"]["tmp_name"];
            $spreadsheet = PHPExcel_IOFactory::load($input);
            $worksheet = $spreadsheet->getSheet(0);
            $data = $worksheet->toArray();

            $this->load->model("vi_iuran_model");

            $header = false;

            $now = date("Y-m-d H:i:s");

            foreach ($data as $row) {
                if ($header) {
                    $nik = $row[0];
                    $produk = $row[4];
                    $bulan = $row[1];
                    $tahun = $row[2];

                    $cek_penduduk = $this->vi_iuran_model->cekPenduduk($nik)->row();
                    $cek_cluster = $this->vi_iuran_model->getCluster($cek_penduduk->id_cluster)->row();

                    if ($cek_penduduk && !$this->vi_iuran_model->cekDuplikasi($nik, $produk, $bulan, $tahun)) {
                        $data_to_insert = array(
                            'tanggal' => date("Y-m-d H:i:s"),
                            'nik' => $row[0],
                            'desaid' => $cek_penduduk->id_cluster,
                            'rw' => $cek_cluster->rw,
                            'rt' => $cek_cluster->rt,
                            'p_bulan' => $bulan,
                            'p_tahun' => $tahun,
                            'tagihan' => $row[3],
                            'produk' => $produk,
                            "tgl_bayar" => date("Y-m-d H:i:s")
                        );

                        $history_iuran = array(
                            'kategori_menu' => 'vi-iuran',
                            'deskripsi' => 'Melakukan Aksi Tambah',
                            'aksi' => "TAMBAH",
                            'bulan' => $bulan,
                            'tahun' => $tahun,
                            'tagihan' => $row[3],
                            'tanggal_aksi' => $now,
                            'execs' => $nama_sesi,
                        );
    
                        $this->vi_iuran_model->create($data_to_insert);
                        $this->history_iuran_model->create($history_iuran);
                    }

                } else {
                    $header = true;
                }
            }

            redirect("/vi_iuran");
        } catch (Exception $e) {
            die("Error Loading File : " . $e->getMessage());
        }
    }
}

?>