<?php

defined('BASEPATH') || exit('No direct script access allowed');

class Apps_menu_model extends MY_Model
{
    protected $table = 'apps_menu';

    protected $fillable = [
        'agenid',
        'nama',
        'keterangan',
        'links',
        'icons',
        'icon',
        'group',
        'submenu',
        'posisi',
        'urut',
        'status',
        'kategori',
        'produk',
        'page'
    ];

    public function getData($postData)
    {
        $this->get_datatable($postData);

        if ($postData["length"] != -1) {
            $this->db->limit($postData["length"], $postData["start"]);
        }

        $query = $this->db->get();
        return $query->result();
    }

    public function count_filtered($postData)
    {
        $this->get_datatable($postData);
        $query = $this->db->get();
        return $query->num_rows();
    }

    public function count_all()
    {
        $this->db->from($this->table);
        return $this->db->count_all_results();
    }

    private function get_datatable($postData)
    {
        $this->db->select("*");
        $this->db->from($this->table);

        if (!empty($postData["search"]["value"])) {
            $fields = ["id", "nama", "keterangan", "links", "icons", "icon", "group", "submenu", "posisi", "urut", "status", "kategori", "produk", "page"];

            $this->db->group_start();
            foreach ($fields as $field) {
                $this->db->or_like($field, $postData["search"]["value"]);
            }
            $this->db->group_end();
        }

        $this->db->order_by("id", "DESC");
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