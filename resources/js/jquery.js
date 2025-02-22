import $ from "jquery";

const Btn = $("#btnReset");
Btn.on("click", function () {
    $("input[type='text'], input[type='number'], textarea").val("");
    $("select").prop("selectedIndex", 0);
    return;
});

$(document).ready(function () {
    $("#close-error").click(function () {
        $("#error-box").fadeOut();
    });
});
