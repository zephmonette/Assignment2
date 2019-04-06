 window.addEventListener('load', function() {   

 document.querySelector('#edit').addEventListener('click', () =>{
        
        let other= document.querySelector('#edit');
        other.style.display= 'none';
        
        other= document.querySelector('#fav');
        other.style.display= 'none';
        
        other= document.querySelector('#stock');
        other.style.display= 'none';
        
        other= document.querySelector('#sub');
        other.style.display= 'none';
        
        other= document.querySelector('#change');
        other.style.display= 'block';
    });
    
    
    
    document.querySelector('#cancel').addEventListener('click', () =>{
        
        let other= document.querySelector('#edit');
        other.style.display= 'inline-block';
        
        other= document.querySelector('#fav');
        other.style.display= 'inline-block';
        
        other= document.querySelector('#stock');
        other.style.display= 'inline-block';
        
        other= document.querySelector('#sub');
        other.style.display= 'block';
        
        other= document.querySelector('#change');
        other.style.display= 'none';
    });
    
    
});