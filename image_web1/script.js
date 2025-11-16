$(document).ready(function () {
    // Ensures the DOM is fully loaded before running the code
    $("#showMore").click(function () {
        // When the element with id="showMore" is clicked
        $("#extraInfo").slideToggle();
        // Toggles visibility of element with id="extraInfo"
        // using a sliding animation (smooth show/hide)
    });
});
