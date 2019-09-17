$('.special.cards .image').dimmer({
	on: 'hover'
});

$("#Glide").glide({
	type: "carousel"
});

$('.ui.radio.checkbox')
  .checkbox()
;

$('.ui.dropdown')
  .dropdown()
;
$('.jeniskain.modal')
  .modal('attach events', '.jeniskain.button', 'is active')
;

$('.ukuran.modal')
  .modal('attach events', '.ukuran.button', 'is active')
;
// $('.deleteorder.modal')
//   .modal('attach events', '.deleteorder.button', 'is active')
// ;
$('.deleteorder.modal')
  .modal('attach events', '.deleteorder.button', 'is active')
;
$('.delete-user-for-admin.modal')
  .modal('attach events', '.delete-user-for-admin.button', 'is active')
;
$('.edit-user-for-admin.modal')
  .modal('attach events', '.edit-user-for-admin.button', 'is active')
;
$('.view-user-for-admin.modal')
  .modal('attach events', '.view-user-for-admin.button', 'is active')
;
$('.view-profile.modal')
  .modal('attach events', '.view-profile.button', 'is active')
;

$('.confirm-payment.modal')
  .modal('attach events', '.confirm-payment.button', 'is active')
;
$('.inputukuran.modal')
  .modal('attach events', '.inputukuran.button', 'is active')
;
$('.view-ukur.modal')
  .modal('attach events', '.view-ukur.button', 'is active')
;
$('.login.modal')
  .modal('attach events', '.login.button', 'is active')
;
$('.login_dulu.modal')
  .modal('attach events', '.login_dulu.button', 'is active')
;
$('.editpesanan.modal')
  .modal('attach events', '.editpesanan.button', 'is active')
;
$('.editprofile.modal')
  .modal('attach events', '.editprofile.button', 'is active')
;
$('.editukuran.modal')
  .modal('attach events', '.editukuran.button', 'is active')
;
// var doc = new jsPDF();
// var specialElementHandlers = {
//     '#editor': function (element, renderer) {
//         return true;
//     }
// };

// var doc = new jsPDF();
// var specialElementHandlers = {
//     '#editor': function (element, renderer) {
//         return true;
//     }
// };
// $('#cmd').click(function () {
//     doc.fromHTML($('#pdf').html(), 15, 15, {
//         'width': 170,
//             'elementHandlers': specialElementHandlers
//     });
//     doc.save('order-confirmationt.pdf');
// });

// var $input;

// function onInputFocus(event) {
//   var $target = $(event.target);
//   var $parent = $target.parent();
//   $parent.addClass('input--filled');
// };

// function onInputBlur(event) {
//   var $target = $(event.target);
//   var $parent = $target.parent();

//   if (event.target.value.trim() === '') {
//     $parent.removeClass('input--filled');
//   }
// };

// $(document).ready(function() {
//   $input = $('.input__field');
  
//   // in case there is any value already
//   $input.each(function(){
//     if ($input.val().trim() !== '') {
//       var $parent = $input.parent();
//       $parent.addClass('input--filled');
//     }
//   });
  
//   $input.on('focus', onInputFocus);
//   $input.on('blur', onInputBlur);
// });

