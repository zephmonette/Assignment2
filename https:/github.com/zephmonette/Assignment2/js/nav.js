window.addEventListener('load', function() {
    
    document.querySelector('#b1').addEventListener('click', () =>{
        let login= document.querySelector('#login');
        login.style.display= 'block';
        
        let other= document.querySelector('#new');
        other.style.display= 'none';
    });
    
    document.querySelector('#b2').addEventListener('click', () =>{
        let login= document.querySelector('#new');
        login.style.display= 'block';
        
        let other= document.querySelector('#login');
        other.style.display= 'none';
    });

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