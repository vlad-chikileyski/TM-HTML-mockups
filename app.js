$(document).ready(function () {
    $(document).keyup(function (event) {
        event.target.addClass("#e20074;");
        if (event.keyCode === 13) {
            event.target.click();
        }
    });
});