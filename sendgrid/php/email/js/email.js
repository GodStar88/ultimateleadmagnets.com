function extractEmail(text) {
    var emails = text.match(/([a-zA-Z0-9._-]+@[a-zA-Z0-9._-]+\.[a-zA-Z0-9._-]+)/gi);
    if (emails != null) return emails[0];
    return "";
}

function extractUrl(text) {
    var urls = text.match(/(https?:\/\/[^\s]+)/g);
    if (urls != null) return urls[0];
    return "";
}


function typeChange() {
    var x = document.getElementById("email_type").value;
    var email = document.getElementById("email_email");

    var length = email.options.length;
    for (i = length - 1; i >= 0; i--) {
        email.options[i] = null;
    }

    var table = $('#example23').DataTable();
    if (x == "SMTP") {
        table = $('#example23').DataTable();
    } else {
        table = $('#example24').DataTable();
    }

    table.rows().every(function (rowIdx, tableLoop, rowLoop) {
        var data = this.data()[0];
        var option = document.createElement("option");
        option.text = data;
        email.add(option);
    });


    var table1 = $('#example25').DataTable();
    var message = document.getElementById("message_list");
    length = message.options.length;
    for (i = length - 1; i >= 0; i--) {
        message.options[i] = null;
    }
    table1.rows().every(function (rowIdx, tableLoop, rowLoop) {
        var data = this.data()[0];
        var option = document.createElement("option");
        option.text = data;
        message.add(option);
    });
}


function isAPIAvailable() {
    // Check for the various File API support.
    if (window.File && window.FileReader && window.FileList && window.Blob) {
        // Great success! All the File APIs are supported.
        return true;
    } else {
        return false;
    }
}

function handleFileSelect(evt) {
    var files = evt.target.files; // FileList object
    var file = files[0];

    // read the file contents
    printTable(file);
}

function printTable(file) {
    var reader = new FileReader();
    reader.readAsText(file);
    reader.onload = function (event) {
        var csv = event.target.result;
        var data = $.csv.toArrays(csv);
        var html = '';
        for (var row in data) {
            html += '<tr>\r\n';
            for (var item in data[row]) {
                html += '<td>' + data[row][item] + '</td>\r\n';
            }
            html += '</tr>\r\n';
        }
        $('#contents').html(html);
    };
    reader.onerror = function () {
        alert('Unable to read ' + file.fileName);
    };
}


var sendStatus = false;

function stopEmail() {
    sendStatus = false;
    document.getElementById("send").innerText = "SEND";
    document.getElementById("send").classList.remove('btn-danger');
}

function sendEmail() {

    subject = $('#email_subject').val();
    message = $('#email_message').val();
    apikey = $('#send_key').val();
    from = $('#send_email').val();

    var table = document.getElementById('contents'),
        rows = table.getElementsByTagName('tr'),
        i, j, cells, customerId, header;
    header = rows[0].getElementsByTagName('td');

    for (i = 1, j = rows.length; i < j; ++i) {
        cells = rows[i].getElementsByTagName('td');
        if (!cells.length) {
            continue;
        }

        for (k = 0; k < header.length; k++) {
            message = message.replace('%' + header[k].innerHTML.toUpperCase() + '%', cells[k].innerHTML);
            subject = subject.replace('%' + header[k].innerHTML.toUpperCase() + '%', cells[k].innerHTML);
        }
        email = extractEmail(rows[i].innerHTML);
        console.log();
        if (sendStatus == true) {

            $.post("php/email/php/sendsend.php", {
                    from: from,
                    key: apikey,
                    to: email,
                    subject: subject,
                    msg: message
                },
                function (data, status) {
                    console.log(data);
                });
        }
    }

    alert("Message has been sent!!!")
    stopEmail();
}




$(document).ready(function () {

    if (isAPIAvailable()) {
        $('#files').bind('change', handleFileSelect);
    }

    $('#btn_send').click(function () {
        subject = $('#email_subject').val();
        message = $('#email_message').val();
        console.log(subject);
        if (subject == "" || message == "") {
            alert("Input Subject and Message!");
            return;
        }
        from = $('#send_email').val();
        key = $('#send_key').val();
        to = $('#send_test').val();
        $.post("php/email/php/sendsend.php", {
                from: from,
                key: key,
                to: to,
                subject: subject,
                msg: message
            },
            function (data, status) {
                console.log(data);
            });
    });


    $('#send').click(function () {

        switch (sendStatus) {
            case false:
                subject = $('#email_subject').val();
                message = $('#email_message').val();
                if (subject == "" || message == "") {
                    alert("Input Subject and Message!");
                    return;
                }
                sendStatus = true;
                document.getElementById("send").innerText = "STOP";
                document.getElementById("send").classList.add('btn-danger');
                sendEmail();
                break;
            case true:
                stopEmail();
                break;
        }
    });
});