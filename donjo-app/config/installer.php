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

$config = [
    'desa' => [
        LOKASI_ARSIP               => [0775, 'htaccess2'],
        LOKASI_CACHE               => [0775],
        LOKASI_CONFIG_DESA         => [0775],
        LOKASI_LOGO_DESA           => [0775, 'htaccess1'],
        'desa/pengaturan/'         => [0775],
        'desa/pengaturan/siteman/' => [0775],
        LATAR_LOGIN                => [0775],
        LOKASI_SURAT_DESA          => [0775],
        LOKASI_LAMPIRAN_SURAT_DESA => [0775],
        LOKASI_TEMA_DESA           => [0775],
        LOKASI_UPLOAD              => [0775, 'htaccess1'],
        LOKASI_FOTO_ARTIKEL        => [0775, 'htaccess1'],
        LOKASI_FOTO_BUKU_TAMU      => [0775, 'htaccess1'],
        LOKASI_DOKUMEN             => [0775, 'htaccess2'],
        LOKASI_GALERI              => [0775, 'htaccess1'],
        'desa/upload/gis/'         => [0775, 'htaccess1'],
        LOKASI_FOTO_AREA           => [0775, 'htaccess1'],
        LOKASI_FOTO_GARIS          => [0775, 'htaccess1'],
        LOKASI_FOTO_LOKASI         => [0775, 'htaccess1'],
        LOKASI_SIMBOL_LOKASI       => [0775, 'htaccess1'],
        LOKASI_MEDIA               => [0775, 'htaccess1'],
        'desa/upload/pendaftaran/' => [0775, 'htaccess1'],
        LOKASI_PENGADUAN           => [0775, 'htaccess1'],
        LOKASI_PENGESAHAN          => [0775, 'htaccess1'],
        LOKASI_PRODUK              => [0775, 'htaccess1'],
        LOKASI_SINKRONISASI_ZIP    => [0775, 'htaccess1'],
        'desa/upload/thumbs/'      => [0775, 'htaccess1'],
        LOKASI_USER_PICT           => [0775, 'htaccess1'],
        LOKASI_VAKSIN              => [0775, 'htaccess1'],
        LOKASI_GAMBAR_WIDGET       => [0775, 'htaccess1'],
        LOKASI_FOTO_DTKS           => [0775, 'htaccess1'],
        LOKASI_WIDGET              => [0775],
    ],

    'lainnya' => [
        'storage/framework/'  => [0775, 'htaccess3'],
        'storage/logs/'       => [0775, 'htaccess3'],
        'backup_inkremental/' => [0775, 'htaccess3'],
        'assets/'             => [0755, 'htaccess3'],
        'assets/filemanager/' => [0755, 'htaccess4'],
    ],
];
