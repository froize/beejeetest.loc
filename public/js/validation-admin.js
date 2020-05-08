$(function () {
    $("form[name='login']").validate({
        rules: {
            name: "required",
            password: {
                required: true
            }
        },
        messages: {
            name: "Please enter your name",
            password: {
                required: "Please provide a password"
            }
        },
        submitHandler: function (form) {
            form.submit();
        }
    });
});
