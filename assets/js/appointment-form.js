$(document).ready(function(){
    // When the dropdown changes
    $("#appointmentType").change(function(){
        // If "Specify Service" is selected, show the additional input field
        if($(this).val() === "custom") {
            $("#specifyServiceInput").show();
        } else {
            // If another option is selected, hide the additional input field
            $("#specifyServiceInput").hide();
        }
    });
});