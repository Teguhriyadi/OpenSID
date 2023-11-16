<?php

defined('BASEPATH') || exit('No direct script access allowed');

class Pekerjaan_model extends MY_Model
{
    protected $table = "tweb_penduduk_pekerjaan";

    protected $fillable = [
        'nama'
    ];
}