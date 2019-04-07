// JavaScript File

//console.log("confirm");

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
                list.appendChild(companyListItem);
            }
            document.querySelector("#addStocks").addEventListener('click', function() {
                    document.querySelector("form").style.display = "block";
                    document.getElementById("stockButton").style.display = "none";
                    document.getElementById("totalValue").style.display = "none";
                    
            });
            document.querySelector("form").addEventListener('submit', function(){
                document.querySelector("#form").style.display = 'none';
                document.querySelector("totalValue").style.display = "block";
                document.querySelector("table").style.display = "block";
            });
        });
        
        function addToStockList(array, name, stockNumber){
            let row = document.createElement("tr");
            let col = document.createElement("td");
            let col2 = document.createElement("td");
            let col3 = document.createElement("td");
            let col4 = document.createElement("td");
            let col5 = document.createElement("td");
            let col6 = document.createElement("td");
            
            col4.textContent = stockNumber;
            col3.textContent = name;
            col2.textContent = array;
            col6.textContent = "";
            row.appendChild(col);
            row.appendChild(col2);
            row.appendChild(col3);
            row.appendChild(col4);
            row.appendChild(col5);
            row.appendChild(col6);
        }
});

           
            