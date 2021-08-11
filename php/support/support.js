$("#message-send").click(function () {
    var email = $('#message-email').val();
    var name = $('#message-name').val();
    var subject = $('#message-subject').val();
    var text = $('#message-text').val();

    console.log(text);

    $.post("php/support/email.php", {
            email: email,
            name: name,
            subject: subject,
            text:text
        },
        function (data, status) {
            alert("Your support Request has been sent");
        });

});