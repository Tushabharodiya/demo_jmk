
var $uploadCrop;

function readFile(input) {
    $('#loader_container').show();
    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e) {
            $('.upload-demo').addClass('ready');
            $uploadCrop.croppie('bind', {
                url: e.target.result
            }).then(function () {
                $('.image_prev_modal').show();
                $('.main_cnt').hide();
                $('#loader_container').hide();
                console.log('jQuery bind complete');
            });

        }

        reader.readAsDataURL(input.files[0]);
    }
    else {
        $('#loader_container').hide();
        swal("Sorry - you're browser doesn't support the FileReader API");
    }
}


$uploadCrop = $('#upload-demo').croppie({
    viewport: {
        width: 296,
        height: 296,
        type: 'square'
    },
    boundary: {
        width: 350,
        height: 350,
    },
    enableExif: true
});


$('#imageFile').on('change', function () { readFile(this); });

$('.upload-result').on('click', function (ev) {
    $uploadCrop.croppie('result', {
        type: 'canvas',
        size: 'viewport'
    }).then(function (resp) {
        $('#profile_img')
            .attr('src', resp) 
            .show(); 
        console.log({ resp });
        $('.image_prev_modal').hide();
        $('.main_cnt').show();
    });
});


$('.close_preview').on('click', function () {
    $('.image_prev_modal').hide();
    $('.main_cnt').show();
})


$('.download_img').on('click', function () {
    html2canvas(document.querySelector("#capture")).then(canvas => {
        var fullName = $('#name').val() || 'my-post';
        var firstName = fullName.split(' ')[0]; 

        var cw = canvas.width;
        var ch = canvas.height;
        Canvas2Image.saveAsImage(canvas, cw, ch, 'png', firstName);
    });
});



$('#name').on('keyup change blur', function () {
    let name = $(this).val();
    $('#user_name_prev').text(name);
});


function setFontSize() {
    var imageSize = $('#user_name_prev').width(); 
    var fontSize = imageSize * 0.088;

    $('#user_name_prev').css('font-size', fontSize + 'px');
}

setTimeout(setFontSize, 0)

$(window).resize(function () {
    setFontSize();
});


$('#flexRadioMale').prop('checked', true);

$('.form-check-input').on('click', function () {
    const type = $(this).data('val')
    if (type === 'male') {
        console.log('Male selected');
        $('.poster_img.male').show();
        $('.poster_img.female').hide();
    } else if (type === 'female') {
        $('.poster_img.male').hide();
        $('.poster_img.female').show();
        console.log('Female selected');
    }
})