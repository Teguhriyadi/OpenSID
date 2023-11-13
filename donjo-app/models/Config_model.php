<?php

defined('BASEPATH') || exit('No direct script access allowed');

class Config_model extends MY_Model
{
    protected $table = 'config';

    protected $fillable = [
        'nama_desa',
        'kode_desa',
        'kode_pos',
        'nama_kecamatan',
        'kode_kecamatan',
        'nama_kepala_camat',
        'nip_kepala_camat',
        'nama_kabupaten',
        'kode_kabupaten',
        'nama_propinsi',
        'kode_propinsi',
        'logo',
        'lat',
        'lng',
        'zoom',
        'map_tipe',
        'path',
        'alamat_kantor',
        'email_desa',
        'telepon',
        'nomor_operator',
        'website',
        'kantor_desa',
        'warna',
        'created_by',
        'updated_by',

        // Field database lama
        'nama_kepala_desa',
        'nip_kepala_desa',
        'g_analitic',
        'pamong_id',
    ];

    public function getDataDesa()
    {
        $this->db->from($this->table);
        $this->db->order_by("id", "ASC");
        $this->db->order_by("nama_desa", "ASC");
        
        $query = $this->db->get();

        return $query->result();
    }

    public function selectedDesa($id_desa)
    {
        $this->db->from($this->table);
        $this->db->where("id", $id_desa);
        
        $query = $this->db->get();

        return $query->row();
    }
}