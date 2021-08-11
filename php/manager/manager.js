$(document).ready(function () {
  $("#load").hide();
  $("#load1").hide();
  $("#load2").hide();
  var table = $("#example23").DataTable({
    dom: "Bfrtip",
    buttons: ["copy", "csv", "excel", "pdf", "print"],
    displayLength: 20,
    ajax: `php/manager/get_user.php`
  });


  var table = $("#example23").DataTable();

  $("#example23 tbody").on("click", "#delete", function () {
    var trNode = $(this).parents("tr");
    var username = trNode.children()[3].innerHTML;
    var email = trNode.children()[4].innerHTML;
    table
      .row($(this).parents("tr"))
      .remove()
      .draw();
    $.ajax({
      url: "php/manager/delete_user.php",
      data: {
        username: username,
        email: email
      },
      type: "GET",
      success: function (response) {
        alert(response);
      }
    });
  });

  var First;
  var Last;
  var Username;
  var Eamil;
  var Password;
  var Member;

  $("#example23 tbody").on("click", "#edit", function () {
    var trNode = $(this).parents("tr");
    First = trNode.children()[1].innerHTML;
    Last = trNode.children()[2].innerHTML;
    Username = trNode.children()[3].innerHTML;
    Eamil = trNode.children()[4].innerHTML;
    Password = trNode.children()[5].innerHTML;
    Member = trNode.children()[6].innerHTML;

    $("#sign_first").val(First);
    $("#sign_last").val(Last);
    $("#sign_name").val(Username);
    $("#sign_email").val(Eamil);
    $("#sign_password").val(Password);
    $("#sign_member").val(Member);
  });

  $("#savechange").click(function () {
    var first = $("#sign_first").val();
    var last = $("#sign_last").val();
    var username = $("#sign_name").val();
    var email = $("#sign_email").val();
    var password = $("#sign_password").val();
    var member = $("#sign_member").val();

    if (first == "" || last == "" || username == "" || email == "" || password == "") {
      alert("Please enter All information");
      return;
    }

    $("#load").fadeIn();
    $.post(
      "php/manager/edit_user.php", {
        first: first,
        last: last,
        oldname: Username,
        username: username,
        email: email,
        password: password,
        member: member,
        forums: ""
      },
      function (data, status) {
        $("#load").hide();
        alert(data);
        if (data == "You have updated successfully.") {
          table.ajax.url(`php/manager/get_user.php`);
          table.ajax.reload();
        }
      }
    );
  });

  $("#addnew").click(function () {
    var first = $("#sign_first").val();
    var last = $("#sign_last").val();
    var username = $("#sign_name").val();
    var email = $("#sign_email").val();
    var password = $("#sign_password").val();
    var member = $("#sign_member").val();

    if (first == "" || last == "" || username == "" || email == "" || password == "") {
      alert("Please enter All information");
      return;
    }

    $("#load1").fadeIn();
    $.post(
      "php/manager/add_user.php", {
        first: first,
        last: last,
        username: username,
        email: email,
        password: password,
        member: member,
        forums: ""
      },
      function (data, status) {
        $("#load1").hide();
        alert(data);
        if (data == "You have updated successfully.") {
          table.ajax.url(`php/manager/get_user.php`);
          table.ajax.reload();
        }
      }
    );
  });

  $("#send").click(function () {
    $('#load2').fadeIn();
    var message = $("#message").val();
    var subject = $("#subject").val();

    var data = new Array();
    $("#example23 tbody").find("tr").each(function (i, el) {
      var $tds = $(this).find("td");
      var check =  $tds.eq(0).find("input").prop('checked');
      var first = $tds.eq(1).text();
      var last = $tds.eq(2).text();
      var email = $tds.eq(4).text();
      if (check) {
        data.push({
          first:first,
          last:last,
          email:email
        });
      }
    });
    console.log(data);

    $.post(
      "php/manager/send_email.php", {
        subject: subject,
        message: message,
        data:data
      },
      function (data, status) {
        $('#load2').hide();
      }
    );
  });
});