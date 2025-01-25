function addErrorStyle(elementId) {
    $("#" + elementId).css("border", "1px solid red");
}

function removeErrorStyle(elementId) {
    $("#" + elementId).css("border", "");
}

function getCurrentDate() {
    const today = new Date();
    const year = today.getFullYear();
    let month = today.getMonth() + 1;
    let day = today.getDate();
    month = month < 10 ? "0" + month : month;
    day = day < 10 ? "0" + day : day;

    return `${year}-${month}-${day}`;
}

function formatDate(dateString) {
    var date = new Date(dateString);
    var day = date.getDate();
    var month = date.getMonth() + 1;
    var year = date.getFullYear();

    day = day < 10 ? "0" + day : day;
    month = month < 10 ? "0" + month : month;

    return day + "-" + month + "-" + year;
}

function isFileTypeAllowed(filename) {
    var allowedTypes = [
        "jpg",
        "jpeg",
        "png",
        "svg",
        "JPG",
        "JPEG",
        "PNG",
        "SVG",
        "webp",
        "WEBP",
    ];
    var extension = filename.split(".").pop().toLowerCase();
    return allowedTypes.includes(extension);
}

function chkfile(value, id) {
    if (!isFileTypeAllowed(value)) {
        addErrorStyle(id);
        $("#" + id).val("");
        Swal.fire({
            icon: "error",
            title: "Image Type Not Allowed !",
            html: "Please choose a valid image type.<br>Supported image file types are: png, jpg, jpeg.",
            confirmButtonText: "OK",
        });
    }
}

function tost(icon, title, customClass) {
    const toast = Swal.mixin({
        toast: true,
        icon: icon,
        title: title,
        animation: true,
        position: "top-right",
        showConfirmButton: false,
        timer: 3000,
        timerProgressBar: true,
        customClass: {
            title: customClass,
        },
        didOpen: (toast) => {
            toast.addEventListener("mouseenter", Swal.stopTimer);
            toast.addEventListener("mouseleave", Swal.resumeTimer);
        },
    });
    toast.fire();
}

function isVidioTypeAllowed(filename) {
    var allowedTypes = ["mp4", "avi", "mov"];
    var extension = filename.split(".").pop().toLowerCase();
    return allowedTypes.includes(extension);
}

function chkvidio(value, id) {
    if (!isVidioTypeAllowed(value)) {
        addErrorStyle(id);
        $("#" + id).val("");
        Swal.fire({
            icon: "error",
            title: "Video Type Not Allowed !",
            html: "Please choose a valid video file type.<br>Supported video file types are: mp4, avi, mov.",
            confirmButtonText: "OK",
        });
    }
}
