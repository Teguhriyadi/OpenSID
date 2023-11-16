<?php

defined('BASEPATH') || exit('No direct script access allowed');

class Pendidikan_model extends MY_Model
{
    protected $table = "tweb_penduduk_pendidikan";

    protected $fillable = [
        'nama'
    ];
}