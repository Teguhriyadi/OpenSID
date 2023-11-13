$(document).ready(function () {
	// global search animation
	$(".app-navbar .header-search .search-input").focus(function () {
		$(this).parents(".header-search").addClass("active");
	});
	$(".app-navbar .header-search .search-input").blur(function () {
		$(this).parents(".header-search").removeClass("active");
	});

	// global fun

	// del
	$(document).on("click", ".btn_del", function (e) {
		e.preventDefault();
		Swal.fire({
			html: `Anda yakin ingin menghapus data?<br><small class="text-danger">Aksi ini akan berpengaruh pada data terkait</small>`,
			icon: "warning",
			confirmButtonText: "Iya, lanjut!",
			cancelButtonText: "Tidak, batal",
			buttonsStyling: !1,
			showCancelButton: true,
			confirmButtonText: "Iya hapus !",
			customClass: {
				confirmButton: "btn btn-sm fw-bold btn-danger",
				cancelButton: "btn btn-sm fw-bold btn-active-light-primary",
			},
		}).then(({ isConfirmed, isDenied }) => {
			if (isConfirmed) {
				Swal.fire({
					html: `Data berhasil dihapus`,
					icon: "success",
					confirmButtonText: "Iya, lanjut!",
					cancelButtonText: "Tidak, batal",
					buttonsStyling: !1,
					customClass: {
						confirmButton: "btn btn-sm fw-bold btn-primary",
						cancelButton:
							"btn btn-sm fw-bold btn-active-light-primary",
					},
				});
			}
		});
	});
	// show
	$(document).on("click", "[data-modal-target]", function () {
		const modal = $($(this).data("modalTarget"));
		const title = $(this).data("title");
		modal.find("#mdl_title").html(title ?? "");
		modal.modal("show");
	});
	// // edit
	// $(document).on("click", ".btn_edit", function () {
	// 	const modal = $($(this).data("modalTarget"));
	// 	const title = $(this).data("title");
	// 	modal.find("#mdl_title").html(title ?? "");
	// 	modal.modal("show");
	// });
	// // add
	// $(document).on("click", ".btn_add", function (e) {
	// 	e.preventDefault();
	// 	const modal = $($(this).data("modalTarget"));
	// 	const title = $(this).data("title");
	// 	modal.find("#mdl_title").html(title ?? "");
	// 	modal.modal("show");
	// });
	// submit
	$(document).on("submit", "form", function (e) {
		e.preventDefault();
		const btn = $(this).find("[type=submit]");
		btn.attr("data-kt-indicator", "on").addClass("disabled");
		setTimeout(() => {
			btn.attr("data-kt-indicator", "off").removeClass("disabled");
			Swal.fire({
				html: `Data berhasil submit`,
				icon: "success",
				confirmButtonText: "Iya, lanjut!",
				buttonsStyling: !1,
				customClass: {
					confirmButton: "btn btn-sm fw-bold btn-primary",
				},
			});
		}, 500);
	});
});
