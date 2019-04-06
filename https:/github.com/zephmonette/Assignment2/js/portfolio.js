// JavaScript File

console.log("confirm");

window.addEventListener('load', function(){
    
 
    
    

  var list = document.getElementById("itemList");

            var api = fetch('/https:/github.com/zephmonette/Assignment2/data/services/companies.php');
            
            api.then(((companies) => {return companies.json()}))
            .then((companies)=>{
                //console.log(companies);
                for(let c of companies){
                                var txtName = document.createTextNode(" " + c.name + " ");
                                var txtSym = document.createTextNode(" (" + c.symbol+ ")");
                                var companyListItem = document.createElement('li');
                                companyListItem.setAttribute("id", c.symbol);
                                //console.log(companyListItem.id);
                                companyListItem.setAttribute("class", "listItem");
            var img = document.createElement('img');
            img.setAttribute("src", "/https:/github.com/zephmonette/Assignment2/logos/" + c.symbol + ".svg");
            img.setAttribute("alt", c.symbol);
            img.setAttribute("class", "smallPic");



            companyListItem.appendChild(img);
            companyListItem.appendChild(txtName);
            companyListItem.appendChild(txtSym);
            let link= document.createElement('a');
            let string= 'portfolio.php?symbol='+c.symbol;
            link.setAttribute('href', string);
            link.appendChild(companyListItem);
        list.appendChild(link);
        

                }
                       
                
            });
            
document.querySelector("a").addEventListener('click', function() {
    let i = document.querySelector('#itemList');
    let p = document.querySelector("form")
    i.style.display = "none";
    p.style.display = "block";
    let f = document.querySelector("#companyForm")
    document.querySelector("table#portfolioTable").style.display = "block";
})

            
   



});

           
            