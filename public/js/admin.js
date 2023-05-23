$(document).ready(function () {
    $("#weekbtn").click(function() {
        $("#weekbtn").addClass("active");
        $("#monthbtn").removeClass("active");
        $("#yearbtn").removeClass("active");
        $("#datamethod1").removeClass("none");
        $("#datamethod2").addClass("none");
        $("#datamethod3").addClass("none");
    });

    $("#monthbtn").click(function() {
        $("#monthbtn").addClass("active");
        $("#weekbtn").removeClass("active");
        $("#yearbtn").removeClass("active");
        $("#datamethod2").removeClass("none");
        $("#datamethod1").addClass("none");
        $("#datamethod3").addClass("none");
    });

    $("#yearbtn").click(function() {
        $("#yearbtn").addClass("active");
        $("#weekbtn").removeClass("active");
        $("#monthbtn").removeClass("active");
        $("#datamethod3").removeClass("none");
        $("#datamethod1").addClass("none");
        $("#datamethod2").addClass("none");
    });

    function previewImage(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function (e) {
                $('#preview').attr('src', e.target.result).show();
                $('#default-image').hide();
            }
            reader.readAsDataURL(input.files[0]);
        }
    }
});