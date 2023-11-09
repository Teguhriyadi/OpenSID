<?php

defined('BASEPATH') || exit('No direct script access allowed');

class Vi_Iuran_model extends MY_Model
{
    protected $table = 'vi_iuran';

    protected $fillable = [
        'tanggal',
        'dateid',
        'desaid',
        'nik',
        'rw',
        'rt',
        'p_bulan',
        'p_tahun',
        'tagihan',
        'status',
        'produk',
        'execs'
    ];

    public function getData()
    {
        $this->db->select("vi_iuran.*, tweb_penduduk.*, tweb_wil_clusterdesa.*, vi_iuranproduk.nama_produk AS namaproduk");
        $this->db->from($this->table);
        $this->db->join("tweb_penduduk", "tweb_penduduk.nik = vi_iuran.nik");
        $this->db->join("tweb_wil_clusterdesa", "tweb_wil_clusterdesa.id = tweb_penduduk.id_cluster");
        $this->db->join("vi_iuranproduk", "vi_iuranproduk.id = vi_iuran.produk");
        $this->db->order_by('vi_iuran.id', "DESC");

        return $this->db->get();
    }

    public function create($data)
	{
		return $this->db->insert($this->table, $data);
	}

    public function getEditData($id)
    {
        return $this->db->get_where($this->table, array('id' => $id));
    }

    public function update($id, $data)
	{
		$this->db->where('id', $id);
		return $this->db->update($this->table, $data);
	}

    public function delete($id)
	{
		$this->db->where('id', $id);
		return $this->db->delete($this->table);
	}

    public function cekPenduduk($nik)
    {
        return $this->db->get_where("tweb_penduduk", array('nik' => $nik));
    }

    public function cekDuplikasi($nik, $produk, $p_bulan, $p_tahun)
    {
        $this->db->where("nik", $nik);
        $this->db->where("produk", $produk);
        $this->db->where("p_bulan", $p_bulan);
        $this->db->where("p_tahun", $p_tahun);
        $query = $this->db->get($this->table);

        return $query->num_rows() > 0;
    }

    public function getCluster($id_cluster)
    {
        return $this->db->get_where("tweb_wil_clusterdesa", array('id' => $id_cluster));
    }

    public function getBulanData() {
        return array(
            'Januari' => 1,
            'Februari' => 2,
            'Maret' => 3,
            'April' => 4,
            'Mei' => 5,
            'Juni' => 6,
            'Juli' => 7,
            'Agustus' => 8,
            'September' => 9,
            'Oktober' => 10,
            'November' => 11,
            'Desember' => 12,
        );
    }
}