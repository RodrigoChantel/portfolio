var popoverTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="popover"]'));
var popoverList = popoverTriggerList.map(function (popoverTriggerEl) {
return new bootstrap.Popover(popoverTriggerEl);
});



document.addEventListener('DOMContentLoaded', function() {
    window.addEventListener('load', function() {
        document.getElementById("loading-box").style.display = "none";
        document.getElementById("main").style.display = "block";
        document.getElementById("header").style.display = "block";
        document.getElementById("footer").style.display = "block";
    });
});