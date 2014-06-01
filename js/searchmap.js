$("#1").click(function () {
    $(this).toggleClass("highlight");
    $("#2").removeClass("highlight");
    $("#3").removeClass("highlight");
    $("#4").removeClass("highlight");
});
$("#2").click(function () {
    $(this).toggleClass("highlight");
    $("#1").removeClass("highlight");
    $("#3").removeClass("highlight");
    $("#4").removeClass("highlight");
});
$("#3").click(function () {
    $(this).toggleClass("highlight");
    $("#2").removeClass("highlight");
    $("#1").removeClass("highlight");
    $("#4").removeClass("highlight");
});
$("#4").click(function () {
    $(this).toggleClass("highlight");
    $("#2").removeClass("highlight");
    $("#3").removeClass("highlight");
    $("#1").removeClass("highlight");
});