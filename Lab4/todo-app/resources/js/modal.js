window.onload = function () {
    const modal = document.getElementById("modal");

    modal.classList.remove("-mt-20");
    modal.classList.add("mt-4");

    setTimeout(function () {
        modal.classList.remove("mt-4");
        modal.classList.add("-mt-20");
    }, 3000);
};
