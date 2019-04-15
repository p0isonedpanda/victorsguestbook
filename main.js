$(document).ready(() => {
    $('#submit').click(() => {
        if ($("#name").val() != "")
            alert('Thank you ' +
                $("#name").val().split(" ")[0] + // just get the first name
                ' for signing the guest book');
    });
});