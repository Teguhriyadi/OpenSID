<?php

/*
 *
 * File ini bagian dari:
 *
 * OpenSID
 *
 * Sistem informasi desa sumber terbuka untuk memajukan desa
 *
 * Aplikasi dan source code ini dirilis berdasarkan lisensi GPL V3
 *
 * Hak Cipta 2009 - 2015 Combine Resource Institution (http://lumbungkomunitas.net/)
 * Hak Cipta 2016 - 2023 Perkumpulan Desa Digital Terbuka (https://opendesa.id)
 *
 * Dengan ini diberikan izin, secara gratis, kepada siapa pun yang mendapatkan salinan
 * dari perangkat lunak ini dan file dokumentasi terkait ("Aplikasi Ini"), untuk diperlakukan
 * tanpa batasan, termasuk hak untuk menggunakan, menyalin, mengubah dan/atau mendistribusikan,
 * asal tunduk pada syarat berikut:
 *
 * Pemberitahuan hak cipta di atas dan pemberitahuan izin ini harus disertakan dalam
 * setiap salinan atau bagian penting Aplikasi Ini. Barang siapa yang menghapus atau menghilangkan
 * pemberitahuan ini melanggar ketentuan lisensi Aplikasi Ini.
 *
 * PERANGKAT LUNAK INI DISEDIAKAN "SEBAGAIMANA ADANYA", TANPA JAMINAN APA PUN, BAIK TERSURAT MAUPUN
 * TERSIRAT. PENULIS ATAU PEMEGANG HAK CIPTA SAMA SEKALI TIDAK BERTANGGUNG JAWAB ATAS KLAIM, KERUSAKAN ATAU
 * KEWAJIBAN APAPUN ATAS PENGGUNAAN ATAU LAINNYA TERKAIT APLIKASI INI.
 *
 * @package   OpenSID
 * @author    Tim Pengembang OpenDesa
 * @copyright Hak Cipta 2009 - 2015 Combine Resource Institution (http://lumbungkomunitas.net/)
 * @copyright Hak Cipta 2016 - 2023 Perkumpulan Desa Digital Terbuka (https://opendesa.id)
 * @license   http://www.gnu.org/licenses/gpl.html GPL V3
 * @link      https://github.com/OpenSID/OpenSID
 *
 */

defined('BASEPATH') || exit('No direct script access allowed');

class Kelompok_master extends Admin_Controller
{
    private $_set_page;
    private $_list_session;
    protected $tipe = 'kelompok';

    public function __construct()
    {
        parent::__construct();
        $this->load->model(['kelompok_master_model']);
        $this->modul_ini     = 'kependudukan';
        $this->sub_modul_ini = 'kelompok';
        $this->_set_page     = ['20', '50', '100'];
        $this->_list_session = ['cari', 'filter'];
        $this->kelompok_master_model->set_tipe($this->tipe);
    }

    public function clear()
    {
        $this->session->unset_userdata($this->_list_session);
        $this->session->per_page = $this->_set_page[0];

        redirect($this->controller);
    }

    public function index($id = 0)
    {
        $this->redirect_hak_akses('u');
        if ($id) {
            $data['kelompok_master'] = $this->kelompok_master_model->get_kelompok_master($id);
            $data['form_action']     = site_url("{$this->controller}/update/{$id}");
        } else {
            $data['kelompok_master'] = null;
            $data['form_action']     = site_url("{$this->controller}/insert");
        }

        $data['tipe'] = $this->tipe;

        return view("admin.lembaga_master.index", $data);
        // $this->render('kelompok_master/table', $data);
    }

    public function dataTable()
    {
        $postData = $this->input->get();
        $data["query"] = $this->kelompok_master_model->getDataTable($postData);
        $data["recordsTotal"] = $this->kelompok_master_model->count_all();
        $data["recordsFiltered"] = $this->kelompok_master_model->count_filtered($postData);
        
        echo json_encode($data);
    }

    public function form($id = 0)
    {
        $this->redirect_hak_akses('u');
        if ($id) {
            $data['kelompok_master'] = $this->kelompok_master_model->get_kelompok_master($id);
            $data['form_action']     = site_url("{$this->controller}/update/{$id}");
        } else {
            $data['kelompok_master'] = null;
            $data['form_action']     = site_url("{$this->controller}/insert");
        }

        $data['tipe'] = $this->tipe;

        $this->render('kelompok_master/form', $data);
    }

    public function filter($filter)
    {
        $value = $this->input->post($filter);
        if ($value != '') {
            $this->session->{$filter} = $value;
        } else {
            $this->session->unset_userdata($filter);
        }

        redirect($this->controller);
    }

    public function insert()
    {
        $this->redirect_hak_akses('u');
        $this->kelompok_master_model->insert();

        redirect($this->controller);
    }

    public function update($id = 0)
    {
        $this->redirect_hak_akses('u');
        $this->kelompok_master_model->update($id);

        redirect($this->controller);
    }

    public function delete($id = 0)
    {
        $this->redirect_hak_akses('h');
        $this->kelompok_master_model->delete($id);

        redirect($this->controller);
    }

    public function delete_all()
    {
        $this->redirect_hak_akses('h');
        $this->kelompok_master_model->delete_all();

        redirect($this->controller);
    }
}
