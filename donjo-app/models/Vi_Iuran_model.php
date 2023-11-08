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