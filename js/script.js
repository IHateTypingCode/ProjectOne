var countDownDate = new Date("Sep 18, 2025 13:05:00").getTime();

var counter = document.getElementById("countdown");

var x = setInterval(function() {

    var now = new Date().getTime();

    var distance = countDownDate - now;

    var days = Math.floor(distance / (1000 * 60 * 60 * 24));
    var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
    var seconds = Math.floor((distance % (1000 * 60)) / 1000);

    counter.innerHTML = days + "يوم " + hours + "ساعة "
    + minutes + "دقيقة " + seconds + "ثانية ";

    if (distance < 0) {
        clearInterval(x);
        counter.innerHTML = "<h1><b>انتهى السحب</b></h1>";
        document.getElementById("winner").classList.remove("d-none");
    }
}, 1000);





console.log("script.js loaded");