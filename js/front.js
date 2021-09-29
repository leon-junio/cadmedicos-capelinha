var checkin = true;

function device() {
    var screenWidth = window.innerWidth;
    var screenHeight = window.innerHeight;
    if (screenHeight < 600 || screenWidth < 990) {
        setAnimation();
    } else {
        document.getElementById('anim1').style.opacity = 100;
        document.getElementById('anim1').style.pointerEvents = "all";
    }
    if (screen.width < 1000 || screen.height < 480) {
        setAnimation();
    } else if (/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent)) {
        setAnimation();
    } else if (navigator.userAgentData != undefined && navigator.userAgentData.mobile) {
        setAnimation();
    }
}

function listenerEvt() {
    window.addEventListener('resize', function() {
        device();
    });
}

function setAnimation() {
    checkin = false;
    document.getElementById('anim1').style.opacity = 0;
    document.getElementById('anim1').style.pointerEvents = "none";
}

function raiane(a, b) {
    if (checkin) {
        var i = document.getElementById(a);
        var ix = document.getElementById(b);
        i.style.opacity = 100;
        ix.style.opacity = 0;
    }
}

function leon(a, b) {
    if (checkin) {
        var i = document.getElementById(a);
        var ix = document.getElementById(b);
        i.style.opacity = 0;
        ix.style.opacity = 100;
    }
}