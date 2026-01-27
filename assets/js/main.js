const searchInput = document.getElementById("search");
const resultsDiv = document.getElementById("courseResults");

searchInput.addEventListener("keyup", function () {
    const query = this.value;

    const xhr = new XMLHttpRequest();
    xhr.open("GET", "search.php?q=" + encodeURIComponent(query), true);

    xhr.onload = function () {
        if (this.status === 200) {
            resultsDiv.innerHTML = this.responseText;
        }
    };

    xhr.send();
});
