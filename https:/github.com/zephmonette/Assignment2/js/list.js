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
                                var txtSym = document.createTextNode(" " + c.symbol);
                                var companyListItem = document.createElement('li');
            var img = document.createElement('img');
            img.setAttribute("src", "/https:/github.com/zephmonette/Assignment2/logos/" + c.symbol + ".svg");
            img.setAttribute("alt", c.symbol);
            img.setAttribute("class", "smallPic");

            companyListItem.appendChild(img);
            companyListItem.appendChild(txtName);
            companyListItem.appendChild(txtSym);
        list.appendChild(companyListItem);
                }
            });
            
for(let p of pre){
    console.log(p);
    p.style.display = "";
    
}    
document.getElementById("preLoad").style.display = "none";
});
//console.log("test");