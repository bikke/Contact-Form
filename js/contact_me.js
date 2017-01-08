$(function() {

    $("input,textarea").jqBootstrapValidation({
        preventSubmit: true,
        submitError: function($form, event, errors) {
            // additional error messages or events
        },
        submitSuccess: function($form, event) {
            event.preventDefault(); // prevent default submit behaviour
            // get values from FORM
            var name1 = $("input#name1").val();
            var name2 = $("input#name2").val();
            var email1 = $("input#email1").val();
            var univ = $("select#univ").val();
            var at1 = $("input#attend1:checked").val();
            var at2 = $("input#attend2:checked").val();
            var message = $("textarea#message").val();
            var BikkeName = name2; // For Success/Failure Message
            // Check for white space in name for Success/Fail message
            if (BikkeName.indexOf(' ') >= 0) {
                BikkeName = name2.split(' ').slice(0, -1).join(' ');
            }
console.log(univ);
            $.ajax({
                url: "mail/contact_me.php",
                type: "POST",
                data: {
                    name1: name1,
                    name2: name2,
                    email: email1,
                    univ: univ,
                    at1: at1,
                    at2: at2,
                    message: message
                },
                cache: false,
                success: function() {
                    $('form').hide();
                    // Success message
                    $('#success').html("<div class='alert alert-success'>");
                    $('#success > .alert-success')
                        .append("<strong>Your message has been sent. </strong>");
                    $('#success > .alert-success')
                        .append('</div>');
                    $('#gohome').html("<a>HOMEへ</a>");
                    //clear all fields
                    $('#contactForm').trigger("reset");
                },
                error: function() {
                    // Fail message
                    $('#success').html("<div class='alert alert-danger'>");
                    $('#success > .alert-danger').html("<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;")
                        .append("</button>");
                        $('#success > .alert-danger').append("<strong>Sorry " + BikkeName + ", it seems that my mail server is not responding. Please try again later!");                    $('#success > .alert-danger').append('</div>');
                    //clear all fields
                    $('#contactForm').trigger("reset");
                },
            })
        },
        filter: function() {
            return $(this).is(":visible");
        },
    });

    $("a[data-toggle=\"tab\"]").click(function(e) {
        e.preventDefault();
        $(this).tab("show");
    });
});


/*When clicking on Full hide fail/success boxes */
$('#name').focus( ()=> {
    $('#success').html('');
});

/*gohome*/
$('#gohome').on('click', function() {
  // alert("ホームページに移動します");
  location.replace('http://www.narabikke.com/hp_one');

});
