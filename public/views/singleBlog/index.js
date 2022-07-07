

$("#sand").click(function (e) {
    e.preventDefault();
    $.post("singleBlog/save",
        {
            name: $("#name").val(),
            email: $("#email").val(),
            message: $("#comment").val(),
        }, function (o) {
            // swal("Successfully Submitted!", "You clicked the button!", "success");
            $("#name").val("");
            $("#email").val("");
            $("#comment").val("");
        }, 'json');
});