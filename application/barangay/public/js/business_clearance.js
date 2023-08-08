// Get the form element
const form = document.getElementById("yourForm");

// Listen for the submit event
form.addEventListener("submit", function (event) {
    if (!form.checkValidity()) {
        // If the form is not valid, show the validation errors
        
        event.preventDefault();
        return;
    }
    event.preventDefault(); // Prevent the form from being submitted normally

    // Show the modal
    $("#loadingModal").modal("show");

    // Get the form data
    const formData = new FormData(form);

    // Make the AJAX request
    $.ajax({
        type: "POST",
        url: form.action,
        data: formData,
        processData: false,
        contentType: false,
        success: function (response) {
            // Hide the modal
            $("#loadingModal").modal("hide");
            Swal.fire({
                title: "<h4>YOUR REQUEST IS SUCCESSFULY SUBMITTED</h4>",
                icon: "success",
                html: response.message,
                showCloseButton: false,
                showCancelButton: false,
                confirmButtonColor: "#AA0F0A",
            }).then((result) => {
                if (result.value) {
                    window.location.href = "/userDashboard";
                }
            });
        },
        error: function (error) {
            // Hide the modal
            $("#loadingModal").modal("hide");

            // Handle the error (e.g. show an error message)
        },
    });
});

var tooltipTriggerList = [].slice.call(
    document.querySelectorAll('[data-bs-toggle="tooltip"]')
);
var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
    return new bootstrap.Tooltip(tooltipTriggerEl);
});
function price_change() {
    priceView = document.getElementById("price_view");
    price = document.getElementById("price");
    select = document.getElementById("applicationType").value;
    if (select == "") {
        priceView.value = "";
        price.value = "";
    }
    if (select == "SINGLE PROPRIETORSHIP (New)") {
        priceView.value = "Php. 500.00";
        price.value = 500;
    } else if (select == "SINGLE PROPRIETORSHIP (Renewal)") {
        priceView.value = "Php. 700.00";
        price.value = 700;
    }
    if (select == "CORPORATION (New") {
        priceView.value = "Php. 1500.00";
        price.value = 1500;
    } else if (select == "CORPORATION (Renewal)") {
        priceView.value = "Php. 2000.00";
        price.value = 2000;
    }
}
// Example starter JavaScript for disabling form submissions if there are invalid fields
(() => {
    "use strict";

    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    const forms = document.querySelectorAll(".needs-validation");

    // Loop over them and prevent submission
    Array.from(forms).forEach((form) => {
        form.addEventListener(
            "submit",
            (event) => {
                if (!form.checkValidity()) {
                    event.preventDefault();
                    event.stopPropagation();
                }
                form.classList.add("was-validated");
            },
            false
        );
    });
})();
function isCheck() {
    var checkbox = document.getElementById("agree").checked;
    if (checkbox) {
        document.getElementById("btn").disabled = false;
    } else {
        document.getElementById("btn").disabled = true;
    }
}
var select = document.getElementById("applicationType");
select.addEventListener("change", showDiv);

function showDiv() {
    var value = this.value;
    var div = document.getElementById("upload_id");
    if (value != "") {
        div.style.display = "block";
        document.getElementById("formFile").required = true;
    } else {
        div.style.display = "none";
        document.getElementById("formFile").required = false;
    }
}

function preview() {
    frame.src = URL.createObjectURL(event.target.files[0]);
    frame.width = "400";
    frame.height = "200";
}

function clearImage() {
    document.getElementById("formFile").value = null;
    frame.src = "";
    frame.width = "";
    frame.height = "";
}
var textarea = document.getElementById("myTextarea");
textarea.addEventListener("input", resizeTextarea);

function resizeTextarea() {
    this.style.height = "auto";
    this.style.height = this.scrollHeight + "px";
}

const fileInput = document.querySelector("#formFile");

        fileInput.addEventListener("change", function() {
            const file = fileInput.files[0];
            const acceptedImageTypes = ["image/jpeg", "image/png"];

            if (!acceptedImageTypes.includes(file.type)) {
                Swal.fire({
                    title: "Invalid file type",
                    text: "Please select an image file (JPEG, PNG).",
                    icon: "error",
                    confirmButtonColor: "#d33",
                });
                fileInput.value = "";
                frame.src = "";
            }
        });
