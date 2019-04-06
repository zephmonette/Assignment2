// JavaScript File

console.log("confirm");

window.addEventListener('load', function() {
    var list = document.querySelector("select");

    var api = fetch('/https:/github.com/zephmonette/Assignment2/data/services/companies.php');

    api.then(((companies) => { return companies.json() }))
        .then((companies) => {
            //console.log(companies);
            for (let c of companies) {
                //let opt = document.createElement("option");
                var txtName = document.createTextNode(" " + c.name + " ");
                var txtSym = document.createTextNode(" (" + c.symbol + ")");
                var companyListItem = document.createElement('option');
                //companyListItem.setAttribute("id", c.symbol);
                companyListItem.setAttribute("value", c.symbol);
                //console.log(companyListItem.id);
                //companyListItem.setAttribute("class", "listItem");
                var img = document.createElement('img');
                img.setAttribute("src", "/https:/github.com/zephmonette/Assignment2/logos/" + c.symbol + ".svg");
                img.setAttribute("alt", c.symbol);
                img.setAttribute("class", "smallPic");

                companyListItem.appendChild(img);
                companyListItem.appendChild(txtName);
                companyListItem.appendChild(txtSym);
                // let link = document.createElement('a');
                // let string = 'portfolio.php?symbol=' + c.symbol;
                // link.setAttribute('href', string);
                // link.appendChild(companyListItem);
                //opt.appendChild(companyListItem);
                list.appendChild(companyListItem);
            }
            document.querySelector("li.listItem").addEventListener('click', function() {
                    document.querySelector("table").style.display = "block";
                    document.querySelector("selectionList").style.display = "none";
                    // let row = document.createElement("tr");
                    // let col = document.createElement("td");
                    // let symbolimg = document.createElement("img");
                    
                    // col.appendChild(symbolimg)
                    // row.appendChild(col)
                    
                    // let col2 = document.createElement("td");
                    // let cSymbol = document.getElementByClassName("listItem").getAttribute("href");
                    
            });
        });

    
    
});

           
            