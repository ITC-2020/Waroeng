//ambil element tertentu : plus-btn, minus-btn, input
//kasih event kalo di klik merubah value input. 
//WAJIB ! diperhatikan element, jangan sampai semua input terpilih lalu merubah value. gunakan trik dengan variabel baru yang merubah class

$('.minus-btn').on('click', function(e) {
    // e adalah element button, agar tidak melakukan kebiasaan default seperti reload
    e.preventDefault();
    var $input = $(this).closest('div').find('input');
    var value = parseInt($input.val());
 
    if (value > 0) {
        value = value - 1;
    } else {
        value = 0;
    }
 
  $input.val(value);
 
});
 
$('.plus-btn').on('click', function(e) {
    e.preventDefault();
    var $input = $(this).closest('div').find('input');
    var value = parseInt($input.val());
 
    if (value < 100) {
        value = value + 1;
    } else {
        value =100;
    }
 
    $input.val(value);
});