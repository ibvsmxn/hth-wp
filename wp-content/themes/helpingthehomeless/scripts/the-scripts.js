// Dismissing Splash Screen when page fully loads

function splashScreenDismiss() {
    document.getElementById("splash-screen").style.animation = "1.5s cubic-bezier(1, 0.02, 0.04, 1.03) 3s 1 SplashMoveUp forwards";
}

// End of Splash Screen Dismiss

// Open Navigation Menu 

function openNav() {
    document.getElementById("myNav").style.top = "0%";
    document.getElementById("myNav-2").style.bottom = "0%";
}

function closeNav() {
    document.getElementById("myNav").style.top = "-100%";
    document.getElementById("myNav-2").style.bottom = "-100%";
}

// Close Navigation Menu 

// Smooth Scroll to the top of the page

function scrollToTop() {
	window.scrollTo(0, 0);
	console.log("Successfully scrolled to the top of the page");
}

// End Scroll to the top of the page

// Initialization of Skrollr 

var s = skrollr.init();
console.log("Skrollr has been successfully initalized.")

// End of Initilization of Skrollr

// Time-based greeting

function timeGreet() {
    var greeting;
    var time = new Date().getHours();
    if (time < 7) {
        greeting = "Hello.";
    } else if (time < 12) {
        greeting = "Good morning";
    } else if (time < 15) {
        greeting = "Good afternoon.";
    } else if (time < 17) {
        greeting = "Hello.";
    } else {
        greeting = "Good evening.";
    }
document.getElementById("timed-greeting").innerHTML = greeting;
}

// End of Time-based greeting