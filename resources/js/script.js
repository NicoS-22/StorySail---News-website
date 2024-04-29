let search = document.querySelector("#search");

let searchIcon = document.querySelector("#searchIcon");

let isClicked = false;

searchIcon.addEventListener("click", () => {
    if (!isClicked) {
        search.classList.remove("d-none");
        search.classList.add("d-flex");
        isClicked = true;
    } else {
        search.classList.remove("d-flex");
        search.classList.add("d-none");
        isClicked = false;
    }
});
