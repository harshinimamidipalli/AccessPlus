$(document).ready(function () {

    $("#regForm").validate({
        rules: {
            fullname: {
                required: true,
                minlength: 3
            },
            usn: {
                required: true,
                pattern: /^[1-9][A-Z]{2}\d{2}[A-Z]{2}\d{3}$/
            },
            semester: {
                required: true
            },
            branch: {
                required: true
            },
            email: {
                required: true,
                email: true
            },
            team_size: {
                required: true
            }
        },

        messages: {
            fullname: {
                required: "Please enter your name",
                minlength: "Enter at least 3 characters"
            },
            usn: {
                required: "USN is required",
                pattern: "Invalid USN format (Ex: 1CR23CS123)"
            },
            semester: "Please select semester",
            branch: "Please select branch",
            email: {
                required: "Email required",
                email: "Enter a valid email"
            },
            team_size: "Select team size"
        },

        errorElement: "span",
        errorPlacement: function (error, element) {
            error.addClass("text-warning small");
            error.insertAfter(element);
        }
    });

});
