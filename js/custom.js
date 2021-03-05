// This is the custom javascript that is added to the website

function navbar_opacity() {
    var scroll_pos = jQuery(this).scrollTop();
    if (jQuery("#navbar-button-id").hasClass("collapsed")) {
        if (scroll_pos > 20) {
            // make the navbar visible
            jQuery(".navbar-visible").addClass("navbar-show");
        } else {
            // make the navbar invisible
            jQuery(".navbar-visible").removeClass("navbar-show");
        }
    }
}

// this function runs when the navbar hamberger button is pressed
// basically just ensures that the navbar becomes visible when the menu is opened
function navbar_button_opacity() {
    var scroll_pos = jQuery(this).scrollTop();
    if (!jQuery("#navbar-button-id").hasClass("collapsed")) {
        if (scroll_pos > 20) {
            jQuery(".navbar-visible").addClass("navbar-show");
        } else {
            jQuery(".navbar-visible").removeClass("navbar-show");
        }
    } else {
        jQuery(".navbar-visible").addClass("navbar-show");
    }
}

// function navbar_opacity() {
//     var scroll_pos = jQuery(this).scrollTop();
//     var opacity = 0;
//     var increment = 1 / 100;
//     if(scroll_pos > 20) {
//         // make the navbar visible
//         jQuery(".navbar-visible").css('background-color', 'rgba(70, 86, 100,'+opacity+')');
//     } else {
//         // make the navbar invisible
//         jQuery(".navbar-visible").removeClass("navbar-show");
//         // jQuery(".navbar-visible").css('background-color', 'red');
//     }
// }

// this is for resizing all the event divs on page, this applies to all events on the page
function resize_divs() {
    jQuery('.flip-card').each(function() {
        var img = jQuery(this).children(".flip-card-inner").children(".flip-card-front").children('.flip-card-image');
        if (img.length != 0) {
            var height = Math.floor( img[0].clientHeight );
            jQuery(this).css("height", height );
        }
    });
}

// resizes the event divs on the event page however you need to input a specific event for it to work
function resize_single_div(object) {
    object.parentElement.parentElement.parentElement.style.height = (Math.floor(object.clientHeight)) + "px";
}

function mobile_event_div() {
    var window_width = window.innerWidth
    || document.documentElement.clientWidth
    || document.body.clientWidth;

    if (window_width < 768 && window.global_width_flag==false) {
        jQuery(".flip-card-back-content").each(function () {
            jQuery(this).children("p").addClass("text-hidden");
            var num_removed = jQuery(this).children("p").length * -1;
            jQuery(this).children(".wp-block-buttons").css("margin-top", num_removed+"px");
            window.global_width_flag = true;
        });
    } else if (window_width >= 768 && window.global_width_flag==true) {
        jQuery(".flip-card-back-content").each(function () {
            jQuery(this).children("p").removeClass("text-hidden");
            jQuery(this).children(".wp-block-buttons").css("margin-top", "0");
            window.global_width_flag = false;
        });
    }
}

// for the collapsible section on the about us page
function aboutUsImageLoaded(object) {
    object.addEventListener("click", function() {
        this.classList.toggle("active");
        // this line below may need changing if the format of the divs are changed because it uses a relative position
        var content = this.parentElement.parentElement.nextElementSibling;
        if (content.style.maxHeight){
            content.style.maxHeight = null;
        } else {
            content.style.maxHeight = content.scrollHeight + "px";
        } 
    });
}

function aboutUsModalClose(element_ID) {
    // alert(element_ID);
    document.getElementById(element_ID).style.display='none';
}

// the below triggers when the webpage is scrolled
window.addEventListener("scroll", function () {
    navbar_opacity();
}, false);

// this triggers when the webpage is resized 
// this only activates on the events page
if (window.location.pathname=='/events/' || window.location.pathname=='/partnerships/') {
    window.addEventListener("resize", function () {
        resize_divs();
        mobile_event_div();
    });
}


window.onload = function() {
    document.getElementById("navbar-button-id").addEventListener("click", function () {
        navbar_button_opacity();
    });

    if (window.innerWidth < 768 || document.documentElement.clientWidth < 768 || document.body.clientWidth < 768) {
        window.global_width_flag = true;
    } else {
        window.global_width_flag = false;
    }
    window.global_width_flag = !window.global_width_flag;
    mobile_event_div();
    window.global_width_flag = !window.global_width_flag;
};

// window.addEventListener('DOMContentLoaded', (event) => {
//     jQuery("")
// });
