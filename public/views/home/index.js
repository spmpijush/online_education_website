
$(document).ready(function () {
    $("#all").addClass("on_select_button");
    $(".all_button_action").click(function (e) {
        e.preventDefault();
        $(".all_button_action").removeClass("on_select_button");
        $("#software").hide();
        $("#business").hide();
        $("#hardware").hide();
        $(this).addClass("on_select_button");
        idname = $(this).attr("id")
        $("." + idname).show();
        if (idname == "all") {
            $("#software").show();
            $("#business").show();
            $("#hardware").show();
        }

    });
});



$(function () {
    $("#nameerror").hide();
    $("#submit").click(function (e) {
        alert("jhdf");
        e.preventDefault();
        var name = $("#name").val();
        var email = $("#email").val();
        var number = $("#number").val();
        var message = $("#message").val();


        // name field validation 
        if (name == "") {
            $("#nameerror").html("Please Enter Details").slideDown();
            $("#name").css("borderColor", "red");
        } else if (name.length < 3) {
            $("#nameerror").html("Name Min 3 char").slideDown();
            $("#name").css("borderColor", "red");
            $("#name").addClass("shakeerror");
        } else {
            $("#nameerror").slideUp();
            $("#name").css("borderColor", "green");
        }

        //  email field validation 
        if (email == "") {
            $("#emailerror").html("Please Enter Details").slideDown();
            $("#email").css("borderColor", "red");
        } else if (!email.match(
            /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/
        )) {
            $("#emailerror").html("Please Enter Valid Email Address").slideDown();
            $("#email").css("borderColor", "red");
            $("#email").addClass("shakeerror");
        } else {
            $("#emailerror").slideUp();
            $("#email").css("borderColor", "green");
        }


        //  number field validation 
        if (number == "") {
            $("#numbererror").html("Please Enter Details").slideDown();
            $("#number").css("borderColor", "red");
        } else if (number.length != 10) {
            $("#numbererror").html("Mobile Number Must be 10 Digit").slideDown();
            $("#number").css("borderColor", "red");
            $("#number").addClass("shakeerror");
        } else {
            $("#numbererror").slideUp();
            $("#number").css("borderColor", "green");
        }


        //  message field validation 
        if (message == "") {
            $("#messageerror").html("Please Enter Details").slideDown();
            $("#message").css("borderColor", "red");
        } else if (message.length < 6) {
            $("#messageerror").html("Name Min 6 char").slideDown();
            $("#message").css("borderColor", "red");
            $("#message").addClass("shakeerror");
        } else {
            $("#messageerror").slideUp();
            $("#message").css("borderColor", "green");
        }
    });
});