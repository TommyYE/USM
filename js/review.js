function marshall() {

    var arr = [];
        for (var i = 1; i < 31; i++) { 
        if (document.getElementById(i.toString()).className.match(/(?:^|\s)highlight(?!\S)/)) {
            arr.push("1");
        } else {
            arr.push("0");
        }
    }
    
    arr.push(document.getElementById("comment").value);



    $.post('submitreview.php', {
            'client_info': arr
        },
        function (data) {
            document.getElementById("response").innerHTML = data;
        }
    );
}

function reset2() {
    $("#4").removeClass("highlight");
    $("#5").removeClass("highlight");
    $("#8").removeClass("highlight");
    $("#9").removeClass("highlight");
}

function reset3() {
    $("#6").removeClass("highlight");
    $("#7").removeClass("highlight");
    $("#10").removeClass("highlight");
    $("#11").removeClass("highlight");
    $("#temp-2").hide('0');
    $("#temp-4").hide('0');
}

$("#1").click(function () {
    $(this).toggleClass("highlight");
    $("#2").removeClass("highlight");
    $("#3").removeClass("highlight");
    reset2();
    reset3();
    $("#temp-1").toggle('500');
    $("#temp-3").hide('500');
});

$("#2").click(function () {
    $(this).toggleClass("highlight");
    $("#1").removeClass("highlight");
    $("#3").removeClass("highlight");
    reset2();
    reset3();
    $("#temp-1").hide('500');
    $("#temp-3").hide('500');
});

$("#3").click(function () {
    $(this).toggleClass("highlight");
    $("#1").removeClass("highlight");
    $("#2").removeClass("highlight");
    reset2();
    reset3();
    $("#temp-3").toggle('500');
    $("#temp-1").hide('500');
});

$("#4").click(function () {
    $(this).toggleClass("highlight");
    $("#5").removeClass("highlight");
    reset3();
    $("#temp-2").hide('500');
});

$("#5").click(function () {
    $(this).toggleClass("highlight");
    $("#4").removeClass("highlight");
    $("#temp-2").toggle('500');
});
$("#6").click(function () {
    $(this).toggleClass("highlight");
    $("#7").removeClass("highlight");
});
$("#7").click(function () {
    $(this).toggleClass("highlight");
    $("#6").removeClass("highlight");
});
$("#8").click(function () {
    $(this).toggleClass("highlight");
    $("#9").removeClass("highlight");
    $("#10").removeClass("highlight");
    $("#11").removeClass("highlight");
    $("#temp-4").hide('500');
});
$("#9").click(function () {
    $(this).toggleClass("highlight");
    $("#8").removeClass("highlight");
    $("#temp-4").toggle('500');
});
$("#10").click(function () {
    $(this).toggleClass("highlight");
    $("#11").removeClass("highlight");
});
$("#11").click(function () {
    $(this).toggleClass("highlight");
    $("#10").removeClass("highlight");
});

function reset2Light() {
    $("#15").removeClass("highlight");
    $("#16").removeClass("highlight");
    $("#19").removeClass("highlight");
    $("#20").removeClass("highlight");
}

function reset3Light() {
    $("#17").removeClass("highlight");
    $("#18").removeClass("highlight");
    $("#21").removeClass("highlight");
    $("#22").removeClass("highlight");
    $("#light-2").hide('0');
    $("#light-4").hide('0');
}

function reset4Light() {
    $("#23").removeClass("highlight");
    $("#24").removeClass("highlight");
    $("#light-5").hide('0');
}

$("#12").click(function () {
    $(this).toggleClass("highlight");
    $("#13").removeClass("highlight");
    $("#14").removeClass("highlight");
    reset2Light();
    reset3Light();
    reset4Light();
    $("#light-1").toggle('500');
    $("#light-3").hide('500');
});

$("#13").click(function () {
    $(this).toggleClass("highlight");
    $("#12").removeClass("highlight");
    $("#14").removeClass("highlight");
    reset2Light();
    reset3Light();
    reset4Light();
    $("#light-1").hide('500');
    $("#light-3").hide('500');
});

$("#14").click(function () {
    $(this).toggleClass("highlight");
    $("#12").removeClass("highlight");
    $("#13").removeClass("highlight");
    reset2Light();
    reset3Light();
    reset4Light();
    $("#light-3").toggle('500');
    $("#light-1").hide('500');
});

$("#15").click(function () {
    $(this).toggleClass("highlight");
    $("#16").removeClass("highlight");
    $("#17").removeClass("highlight");
    $("#18").removeClass("highlight");
    $("#light-2").hide('500');
});

$("#16").click(function () {
    $(this).toggleClass("highlight");
    $("#15").removeClass("highlight");
    $("#light-2").toggle('500');
});
$("#17").click(function () {
    $(this).toggleClass("highlight");
    $("#18").removeClass("highlight");
});
$("#18").click(function () {
    $(this).toggleClass("highlight");
    $("#17").removeClass("highlight");
});
$("#19").click(function () {
    $(this).toggleClass("highlight");
    $("#20").removeClass("highlight");
    reset3Light();
    reset4Light();
    $("#light-4").hide('500');
});
$("#20").click(function () {
    $(this).toggleClass("highlight");
    $("#19").removeClass("highlight");
    $("#light-4").toggle('500');
});
$("#21").click(function () {
    $(this).toggleClass("highlight");
    $("#22").removeClass("highlight");
    reset4Light();
    $("#light-5").hide('500');
});
$("#22").click(function () {
    $(this).toggleClass("highlight");
    $("#21").removeClass("highlight");
    $("#23").removeClass("highlight");
    $("#24").removeClass("highlight");
    $("#light-5").toggle('500');
});
$("#23").click(function () {
    $(this).toggleClass("highlight");
    $("#24").removeClass("highlight");
});
$("#24").click(function () {
    $(this).toggleClass("highlight");
    $("#23").removeClass("highlight");
});

function reset2Noise() {
    $("#27").removeClass("highlight");
    $("#28").removeClass("highlight");
}

function reset3Noise() {
    $("#29").removeClass("highlight");
    $("#30").removeClass("highlight");
    $("#noise-2").hide('0');
}


$("#25").click(function () {
    $(this).toggleClass("highlight");
    $("#26").removeClass("highlight");
    reset2Noise();
    reset3Noise();
    $("#noise-1").toggle('500');
});

$("#26").click(function () {
    $(this).toggleClass("highlight");
    $("#25").removeClass("highlight");
    reset2Noise();
    reset3Noise();
    $("#noise-1").hide('500');
});

$("#27").click(function () {
    $(this).toggleClass("highlight");
    $("#28").removeClass("highlight");
    reset3Noise();
});

$("#28").click(function () {
    $(this).toggleClass("highlight");
    $("#27").removeClass("highlight");
    reset3Noise();
    $("#noise-2").toggle('500');
});

$("#29").click(function () {
    $(this).toggleClass("highlight");
    $("#30").removeClass("highlight");
});

$("#30").click(function () {
    $(this).toggleClass("highlight");
    $("#29").removeClass("highlight");
});