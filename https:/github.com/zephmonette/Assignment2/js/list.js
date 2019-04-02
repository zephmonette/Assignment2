// JavaScript File
window.addEventListener('load', function(){
    
 
    
    
var pre = document.querySelectorAll(".postLoad");
for(let p of pre){
    console.log(p);
    p.style.display = "none";
    
}    
  var list = document.getElementById("itemList");

            var api = fetch('/https:/github.com/zephmonette/Assignment2/data/services/companies.php');
            
            api.then(((companies) => {return companies.json()}))
            .then((companies)=>{
                console.log(companies);
                for(let c of companies){
                                var txtName = document.createTextNode(" " + c.name + " ");
                                var txtSym = document.createTextNode(" (" + c.symbol+ ")");
                                var companyListItem = document.createElement('li');
                                companyListItem.setAttribute("id", c.name);
                                //console.log(companyListItem.id);
                                companyListItem.setAttribute("class", "listItem");
            var img = document.createElement('img');
            img.setAttribute("src", "/https:/github.com/zephmonette/Assignment2/logos/" + c.symbol + ".svg");
            img.setAttribute("alt", c.symbol);
            img.setAttribute("class", "smallPic");

img.addEventListener('mouseover', function(t){
    
    bigPic(t.target.alt);
    
  var x = t.clientX;
  var y = t.clientY;
  movePic(x,y);
  
});
img.addEventListener('mouseout', function(){
    
    killPic();
});
img.addEventListener('mousemove', function(t){
    
  var x = t.clientX;
  var y = t.clientY;
  movePic(x,y);
});
            companyListItem.appendChild(img);
            companyListItem.appendChild(txtName);
            companyListItem.appendChild(txtSym);
        list.appendChild(companyListItem);
                }
            });
            
            document.getElementById("filterSub").addEventListener('click', function(){
                
               filter(); 
            });
            
                        document.getElementById("unfilter").addEventListener('click', function(){
                
               unfilter(); 
            });
            
for(let p of pre){
    console.log(p);
    p.style.display = "";
    
}    
document.getElementById("preLoad").style.display = "none";


});
//console.log("test");

function bigPic(altTxt){
    var mouse = document.getElementById('mouse');   
    //console.log(altTxt);
    var img2 = document.createElement('img');
    img2.setAttribute("src", "/https:/github.com/zephmonette/Assignment2/logos/" + altTxt + ".svg");
    img2.setAttribute("id", "mousePic");
    mouse.appendChild(img2);

  

}

function killPic(){
    var mouse = document.getElementById('mouse'); 
    var pic = mouse.children;
    for(let p of pic){
        p.remove();
    }
}

function movePic(x,y){
    
    console.log(x + " " + y);
     var mouse = document.getElementById('mousePic'); 
     var newX = parseInt(x, 10);
     var newY = parseInt(y, 10);
     mouse.style.left = `${newX}px`;
     mouse.style.top = `${newY}px`;
}

function filter(){
    console.log("click");
    var filterText = document.getElementById("filter").value.toLowerCase();
    console.log(filterText);
    var le = filterText.length;
    console.log(le);
    var listItems = document.querySelectorAll(".listItem");
    console.log(listItems);
    for(let i of listItems){
        
        var sub = i.id.substring(0,le).toLowerCase();
        console.log(filterText +  " " + sub);
        var res = sub.localeCompare(filterText);
        if(res != 0){
            i.style.display = "none";
        }
    }
    
}



function unfilter(){
    var listItems = document.querySelectorAll(".listItem");
    for(let i of listItems){
        i.style.display = "";
    }
}