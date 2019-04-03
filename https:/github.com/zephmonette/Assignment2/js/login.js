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
});