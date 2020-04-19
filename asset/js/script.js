// swal({
//   title: "TUGAS PRAKTIKUM",
//   text: "1810631170184 \n FIRHAN HARDIANSYAH \n 4D",
//   icon: "info"
// });

var typed = new Typed(".typedDari", {
	strings: [
		"Jakarta ke Bandung    = Rp.20000 / Orang.",
		"Jakarta ke Yogyakarta = Rp.75000 / Orang.",
		"Jakarta ke Surabaya   = Rp.100000 / Orang.",
	],
	typeSpeed: 40,
	startDelay: 90,
	loop: true,
});

(function () {
	"use strict";
	window.addEventListener(
		"load",
		function () {
			var forms = document.getElementsByClassName("needs-validation");
			var jmlTiket = document.getElementsById("jumlah_tiket");

			var validation = Array.prototype.filter.call(forms, function (form) {
				form.addEventListener(
					"submit", function (event) {
						if (jmlTiket == 0 ) {
							if (form.checkValidity() === false) {
								event.preventDefault();
								event.stopPropagation();
							}
						}
						form.classList.add("was-validated");
					},
					false,
				);
			});
		},
		false,
	);
})();

$(document).ready(function() {
	$('.needs-validation').submit(function(){
		var jmlTiket = $('#jml_tiket').val();

		if (jmlTiket == 0) {
			$('.pesan-nama').css('display', 'block');
			return false;
		}
	});
});
