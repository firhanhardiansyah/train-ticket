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

$(document).ready(function () {
	$("#form-tiket").validate({
		rules: {
			jml_tiket: {
				min: 1,
				required: true,
			},
		},
		messages: {
			jml_tiket: "Minimal 1 tiket",
		},
		success: function (e) {
			e.text("Ok!")
				.addClass("text-center text-success")
				.closest(".form-control")
				.removeClass("text-success");
		},
	});
});

// $(document).ready(function(){
//   $('form-tiket').bootstrapValidator({
//     fields: {
//       jml_tiket: {
//         validators: {
//           min: 1,
//           notEmpty: {
//             message: 'min 1'
//           }
//         }
//       }
//     }
//   })
//   .on('success.form.bv', function(e){

//   })
//   ;
// });
