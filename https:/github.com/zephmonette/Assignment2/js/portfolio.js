// JavaScript File

console.log("confirm");

window.addEventListener('load', function() {
    var list = document.getElementById("itemList");

    var api = fetch('/https:/github.com/zephmonette/Assignment2/data/services/companies.php');

    api.then(((companies) => { return companies.json() }))
        .then((companies) => {
            //console.log(companies);
            for (let c of companies) {
                var txtName = document.createTextNode(" " + c.name + " ");
                var txtSym = document.createTextNode(" (" + c.symbol + ")");
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
                let link = document.createElement('a');
                let string = 'portfolio.form.php?symbol=' + c.symbol;
                link.setAttribute('href', string);
                link.appendChild(companyListItem);
                list.appendChild(link);
            }
            document.querySelector("a").addEventListener('click', function() {
                    document.querySelector("table").style.display = "block";
                    document.querySelector("selectionList").style.display = "none";
                    let row = document.createElement("tr");
                    let col = document.createElement("th");
                    let symbolimg = document.createElement("img");
                    symbolimg.setAttribute("src", "/https:/github.com/zephmonette/Assignment2/logos/" + c.symbol + ".svg");
                    symbolimg.setAttribute("alt", c.symbol);
                    symbolimg.setAttribute("class", "smallPic");
            });
        });

    
    
});

           
            