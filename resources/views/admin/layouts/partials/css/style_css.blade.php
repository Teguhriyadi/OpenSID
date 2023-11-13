<!--begin::Vendor Stylesheets(used for this page only)-->
<link href="<?= base_url() ?>themes/plugins/external/fontawesome/css/all.min.css" rel="stylesheet" type="text/css" />
<link href="<?= base_url() ?>themes/plugins/external/ripple/css/ripple.css" rel="stylesheet" type="text/css" />
<link href="<?= base_url() ?>themes/plugins/custom/datatables/datatables.bundle.css" rel="stylesheet" type="text/css" />
<!--end::Vendor Stylesheets-->

<!--begin::Global Stylesheets Bundle(mandatory for all pages)-->
<link href="<?= base_url() ?>themes/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css" />
<link href="<?= base_url() ?>themes/css/style.bundle.css" rel="stylesheet" type="text/css" />
<!--end::Global Stylesheets Bundle-->
<style>
    :root {
        --primary-c: #2f3977;
        --primary-active-c: #262e65;
        --primary-rgb-c: 80, 97, 205;
        --primary-text-emphasis-c: #202a52;
        --primary-bg-subtle-c: #dce1f5;
        --primary-border-subtle-c: #b9c2eb;
    }
</style>
<link href="<?= base_url() ?>themes/css/custome-color.css" rel="stylesheet" type="text/css" />
<link href="<?= base_url() ?>themes/css/custome.css" rel="stylesheet" type="text/css" />
<script src="<?= base_url() ?>themes/js/jquery-3.6.3.min.js"></script>
<script>
    $(document).ready(function() {
        // editor
        function init_tinymce(selector, min_height) {
            let menu_bar = 'file edit view insert format tools table help';
            if (selector == '.tinyMCEsmall') {
                menu_bar = false;
            }
            let options = {
                selector: selector,
                min_height: min_height,
                valid_elements: '*[*]',
                relative_urls: false,
                remove_script_host: false,
                images_file_types: 'jpg,jpeg,png,webp,avif,svg',
                directionality: "ltr",
                entity_encoding: "raw",
                language: 'id',
                menubar: menu_bar,
                plugins: [
                    "advlist autolink lists link image charmap print preview anchor",
                    "searchreplace visualblocks code codesample fullscreen",
                    // "insertdatetime media table paste imagetools"
                    "insertdatetime media table imagetools"
                ],
                toolbar: 'fullscreen code preview | bold italic underline strikethrough | fontsizeselect formatselect | alignleft aligncenter alignright alignjustify | numlist bullist | forecolor backcolor removeformat | table image media link | outdent indent superscript subscript',
                content_style: '.float-left{float:left} .float-right{float:right} .float-none{float:none}',
                image_class_list: [{
                        title: 'None',
                        value: 'float-none'
                    }, {
                        title: 'Left',
                        value: 'float-left'
                    },
                    {
                        title: 'Right',
                        value: 'float-right'
                    }
                ],
                deprecation_warnings: false
            }
            if (KTThemeMode.getMode() === "dark") {
                options["skin"] = "oxide-dark";
                options["content_css"] = "dark";
            }
            tinymce.init(options);
        }
        if ($('.tinyMCE').length > 0) {
            init_tinymce('.tinyMCE', 500);
        }
        if ($('.tinyMCESmall').length > 0) {
            init_tinymce('.tinyMCESmall', 300);
        }
    });
</script>
