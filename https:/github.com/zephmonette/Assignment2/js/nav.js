window.addEventListener('load', function() {

    window.onresize = function() {
        var x = document.getElementById("links");
        if (window.innerWidth <= 640) {
            if (x.style.display === "block") {
                x.style.display = "none";
            }
        } else if (window.innerWidth > 640) {
            if (x.style.display === "none") {
                x.style.display = "block";
            }
        }
    };
    

    document.querySelector('.icon').addEventListener('click', () => {
        var x = document.getElementById("links");
        if (x.style.display === "block") {
            x.style.display = "none";
        } else {
            x.style.display = "block";
        }
    });
});