$(document).ready(function () {
    $("#load").hide();
    $("#load_comment").hide();
    $("#load_update").hide();

    var forumId;

    $.post(
        "php/dashboard/post_get.php", {},
        function (data, status) {
            var str = "";
            JSON.parse(data).data.forEach(element => {
                str += `<div class="sl-item" id="post_` + element[7] + `">
                <div class="sl-left"> <img src="assets/images/avatar.png" alt="user" class="img-circle" /> </div>
                <div class="sl-right">
                    <div>
                        <a class="link" data-toggle='modal' data-target='#responsive-modal_user' id="` + element[1] + `">` + element[1] + `</a> <span class="sl-date">` + element[2] + `</span>
                        <h5 class="m-t-10"><a>` + element[3] + `</a></h5>
                        <p class="m-t-10">` + element[4] + `</p>
                    </div>
                    <div class="like-comm m-t-20">
                        <a class="link m-r-10 edit" id="` + element[7] + `" data-toggle='modal' data-target='#responsive-modal'>` + element[5] + ` comment</a>
                    </div>
                </div>
            </div>
            <hr>`
            });
            $(".posttimeline").append(str);

            $(".edit").click(function () {
                console.log(this.id);
                forumId = this.id;

                var str = $("#post_" + forumId ).html() + "<hr>";
                console.log(str);

                $(".commenttimeline").empty();
                $.post(
                    "php/dashboard/comment_get.php", {
                        forumId: forumId
                    },
                    function (data, status) {
                        JSON.parse(data).data.forEach(element => {
                            str += `<div class="sl-item">
                            <div class="sl-left"> <img src="assets/images/avatar.png" alt="user" class="img-circle" /> </div>
                            <div class="sl-right">
                                <div>
                                    <a href="#" class="link">` + element[1] + `</a> <span class="sl-date">` + element[2] + `</span>
                                    <p class="m-t-10">` + element[3] + `</p>
                                </div>
                            </div>
                        </div>
                        <hr>`
                        });
                        $(".commenttimeline").append(str);
                    }
                );
            });

            $(".link").click(function () {
                console.log(this.id);
                user = this.id;
                $.post(
                    "php/dashboard/user_get.php", {
                        user: user
                    },
                    function (data) {
                        console.log(JSON.parse(data));
                        $("#user_user").text(JSON.parse(data)[0]);
                        $("#user_member").text(JSON.parse(data)[1]);
                        $("#user_linkedin").text(JSON.parse(data)[2]);
                        $("#user_facebook").text(JSON.parse(data)[3]);
                        $("#user_quora").text(JSON.parse(data)[4]);
                        $("#user_message").text(JSON.parse(data)[5]);
                    }
                );
            });
        }
    );

    $("#send").click(function () {
        $('#load').fadeIn();
        var subject = $("#subject").val();
        var message = $("#message").val();
        $.post(
            "php/dashboard/post_add.php", {
                subject: subject,
                message: message
            },
            function (data, status) {
                console.log(data);
                $('#load').hide();
                alert(data);
            }
        );
    });

    $("#update").click(function () {
        $('#load_update').fadeIn();
        var user = $("#update_user").val();
        var first = $("#update_first").val();
        var last = $("#update_last").val();
        var pass = $("#update_password").val();
        var linkedin = $("#update_linkedin").val();
        var facebook = $("#update_facebook").val();
        var quora = $("#update_quora").val();
        var bio = $("#update_bio").val();

        $.post(
            "php/dashboard/user_update.php", {
                user: user,
                first: first,
                last: last,
                pass: pass,
                linkedin: linkedin,
                facebook: facebook,
                quora: quora,
                user: user,
                bio: bio
            },
            function (data, status) {
                console.log(data);
                $('#load_update').hide();
                alert(data);
            }
        );
    });


    $("#reply").click(function (event) {
        $('#load_comment').fadeIn();
        var message = $("#comment").val();
        console.log(message);
        $.post(
            "php/dashboard/comment_add.php", {
                message: message,
                forumId: forumId
            },
            function (data, status) {
                console.log(data);
                $('#load_comment').hide();
                alert(data);
            }
        );
    });
});