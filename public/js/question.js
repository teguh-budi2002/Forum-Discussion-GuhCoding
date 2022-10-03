const myForm = document.getElementById('formPost');
myForm.addEventListener('submit', handleSubmit);
var submitTimer;

function handleSubmit(event) {
    event.preventDefault();
    submitTimer = setTimeout(() => {
        this.submit();
    }, 2800)
};
$(document).ready(function () {
    $("#buttonPost").on("click", function () {
        $(this).hide();
        $(".spiner-group").show();
        $(".spiner-group").attr("disabled", true);
    });
});