<?php

defined('BASEPATH') || exit('No direct script access allowed');

class Vi_Iuran_Produk_model extends MY_Model
{
    protected $table = 'vi_iuranproduk';

    protected $fillable = [
        'desaid',
        'nama_produk'
    ];

    public function getData()
    {
        $this->db->select("vi_iuranproduk.*, tweb_wil_clusterdesa.dusun");
        $this->db->from($this->table);
        $this->db->join("tweb_wil_clusterdesa", "tweb_wil_clusterdesa.id = vi_iuranproduk.desaid");
        $this->db->order_by('vi_iuranproduk.id', "DESC");

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
}