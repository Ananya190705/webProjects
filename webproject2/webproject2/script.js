$(document).ready(function () {
    $("#regForm").submit(function (event) {
        // Validate phone number (simple check)
        var phone = $("#phone").val();
        if (!/^[0-9]{10}$/.test(phone)) {
            alert("Please enter a valid 10-digit phone number");
            event.preventDefault();
            return false;
        }

        // Disable submit button to avoid multiple clicks
        $("#submitBtn").prop("disabled", true).text("Submitting...");
    });
});
