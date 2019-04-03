window.addEventListener('load', function() {

    window.addEventListener('resize', function() {
        let x = document.getElementById("links");
        if (window.innerWidth <= 640) {
            if (x.style.display === "block") {
                x.style.display = "none";
            }
        } else if (window.innerWidth > 640) {
            if (x.style.display === "none") {
                x.style.display = "block";
            }
        }
    });

    document.querySelector('.icon').addEventListener('click', () => {
        let x = document.getElementById("links");
        if (x.style.display === "block") {
            x.style.display = "none";
        } else {
            x.style.display = "block";
        }
    }); 
    
    
    
});
    