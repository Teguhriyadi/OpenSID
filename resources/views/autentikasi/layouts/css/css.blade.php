<link href="<?= base_url() ?>themes/plugins/external/fontawesome/css/all.min.css" rel="stylesheet" type="text/css" />
<link href="<?= base_url() ?>themes/plugins/external/ripple/css/ripple.css" rel="stylesheet" type="text/css" />
<link href="<?= base_url() ?>themes/plugins/custom/datatables/datatables.bundle.css" rel="stylesheet" type="text/css" />

<link href="<?= base_url() ?>themes/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css" />
<link href="<?= base_url() ?>themes/css/style.bundle.css" rel="stylesheet" type="text/css" />
<link href="<?= base_url() ?>themes/css/custome-color.css" rel="stylesheet" type="text/css" />
<link href="<?= base_url() ?>themes/css/custome.css" rel="stylesheet" type="text/css" />

<style>
    .bg-auth {
        background-image: url(https://th.bing.com/th/id/OIG.rDLUrBBPcNL6vgj61DUs?pid=ImgGn);
        position: relative;
        z-index: 1;
    }

    .bg-auth::after {
        content: '';
        position: absolute;
        z-index: -1;
        height: 100%;
        width: 100%;
        background-image: linear-gradient(to bottom, transparent, rgba(78, 81, 162, .8));
    }
</style>