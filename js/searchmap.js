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

function room(name) {
    if (name == "301") {
        document.getElementById("room-info").innerHTML =
            "Room: 301<br>" +
            "Room Category: Study Centre<br>" +
            "General Entry: No<br>" +
            "Seating Capacity: 40<br>" +
            "Desktop Computers: No<br>" +
            "Internet Access(Cable): Yes<br>" +
            "Power Point Access: Yes<br>" +
            "Addition Features: Projector,<br>" +
            "3D presentation room,<br>" +
            "windows,<br>" +
            "large amounts of desk space.<br>";
    }
    if (name == "302") {
        document.getElementById("room-info").innerHTML =
            "Room: 302<br>" +
            "Room Category: Presentation and Learning Centre<br>" +
            "General Entry: Yes<br>" +
            "Seating Capacity: 162<br>" +
            "Desktop Computers: No<br>" +
            "Internet Access (Cable): No<br>" +
            "Power Point Access: Yes<br>" +
            "Addition Features: Interactive displays, lecture podium,<br>" +
            "whiteboards, windows, group work focused,<br>" +
            "room can be split to accommodate two presenters, moveable tables.<br>";
    }
    if (name == "316") {
        document.getElementById("room-info").innerHTML =
            "Room: 316<br>" +
            "Room Category: Interactive Learning Centre<br>" +
            "General Entry: Yes<br>" +
            "Seating Capacity: 48<br>" +
            "Desktop Computers: Yes<br>" +
            "Internet Access (Cable): No<br>" +
            "Power Point Access: Yes<br>" +
            "Addition Features: Interactive displays, lecture podium, visualiser, <br>" +                       "whiteboards, windows, group work focused.<br>";
    }
    if (name == "317") {
        document.getElementById("room-info").innerHTML =
            "Room: 316A<br>" +
            "Room Category: Interactive Learning Centre<br>" +
            "General Entry: Yes<br>" +
            "Seating Capacity: 48<br>" +
            "Desktop Computers: Yes<br>" +
            "Internet Access (Cable): No<br>" +
            "Power Point Access: Yes<br>" +
            "Addition Features: Interactive displays, visualiser , lecture podium,<br>" +                       "whiteboards, windows, group work focused.<br>";
    }
    if (name == "200") {
        document.getElementById("room-info").innerHTML =
            "Room: 200<br>" +
            "Room Category: Lecture Hall<br>" +
            "General Entry: Yes<br>" +
            "Seating Capacity: 200<br>" +
            "Desktop Computers: No<br>" +
            "Internet Access (Cable): No<br>" +
            "Power Point Access: No<br>" +
            "Addition Features: Large seating capacity, duel projectors, visualiser.<br>";
    }
}

function changeImage() {
    document.getElementById("floor-image").src = "img/Level3_V2.png";
}

function changeImage2() {
    document.getElementById("floor-image").src = "img/Level4.png";
}

room('316');