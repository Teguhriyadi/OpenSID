<?php

defined('BASEPATH') || exit('No direct script access allowed');

class History_model extends MY_Model
{
    protected $table = 'history';

    protected $fillable = [
        'kategori_menu',
        'deskripsi',
        'aksi',
        'exec',
        'produk',
        'produk_new',
        'tanggal_aksi'
    ];

    public function getData()
    {
        return $this->db->get($this->table);
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