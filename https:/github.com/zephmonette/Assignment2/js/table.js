window.addEventListener('load', function(info){
    let cSym = document.querySelector("#cSymbol").innerHTML;
    api1 = "https://api.iextrading.com/1.0/stock/" + cSym + "/chart/1m";
    fetch(api1)
    .then(function(response){
        return response.json();
    })
    .then(function(data){
    insertStock(data);
    //calculateSummary(data);
    });

    //Month Stock Data insert
    function insertStock(data){
        document.querySelector("div.stockNav section").style.display = "block";
        let date = document.querySelector("#date");
        sortByDate(date);
        let open = document.querySelector("#open");
        sortByOpen(open);
        let close = document.querySelector("#close");
        sortByClose(close);
        let high = document.querySelector("#high");
        sortByHigh(high);
        let low = document.querySelector("#low");
        sortByLow(low);
        let volume = document.querySelector("#volume");
        sortByVolume(volume);
        
        let body = document.querySelector("div.stockNav #update");
        body.innerHTML = "";
        for(let d of data){
            let row = document.createElement("tr");
            body.appendChild(row);
            
            let cDate = document.createElement("td");
            cDate.innerHTML = d.date;
            row.appendChild(cDate);
            
            let cOpen = document.createElement("td");
            cOpen.innerHTML = "$" + d.open + " USD";
            row.appendChild(cOpen);
            
            let cClose = document.createElement("td");
            cClose.innerHTML = "$" + d.close + " USD";
            row.appendChild(cClose);
            
            let cHigh = document.createElement("td");
            cHigh.innerHTML = "$" + d.high + " USD";
            row.appendChild(cHigh);
            
            let cLow = document.createElement("td");
            cLow.innerHTML = "$" + d.low + " USD";
            row.appendChild(cLow);
            
            let cVol = document.createElement("td");
            cVol.innerHTML = d.volume;
            row.appendChild(cVol);
        }
    }

    //SORTING CODE
    //event handler to sort by open
    function sortByOpen(openLink){
        openLink.addEventListener("click", function(e){
            e.preventDefault();
            let num = 1;
            tableSort(num);
        });
    }
    
    //event handler to sort by close
    function sortByClose(closeLink){
        closeLink.addEventListener("click", function(e){
            e.preventDefault();
            let num = 2;
            tableSort(num);
        });
    }
    
    //event handler to sort by date
    function sortByDate(dateLink){
        dateLink.addEventListener("click", function(e){
            e.preventDefault();
            let num = 0;
            tableSort(num);
        });
    }
    
    //event handler to sort by high
    function sortByHigh(highLink){
        highLink.addEventListener("click", function(e){
            e.preventDefault();
            let num = 3;
            tableSort(num);
        });
    }
    
    //event handler to sort by low
    function sortByLow(lowLink){
        lowLink.addEventListener("click", function(e){
            e.preventDefault();
            let num = 4;
            tableSort(num);
        });
    }
    
    //event handler to sort by volume
    function sortByVolume(volumeLink){
        volumeLink.addEventListener("click", function(e){
            e.preventDefault();
            let num = 5;
            tableSort(num);
        });
    }
    
    //TABLE SORT
    // Taken from https://www.w3schools.com/howto/howto_js_sort_table.asp
    function tableSort(num){
        let table = document.querySelector("#stockTable");
        let rows, switching, i, x, y, shouldSwitch;
        switching = true;
        
        while (switching) {
            switching = false;
            rows = table.rows;
            for (i = 1; i < (rows.length - 1); i++) {
                shouldSwitch = false;
                x = rows[i].getElementsByTagName("TD")[num];
                y = rows[i + 1].getElementsByTagName("TD")[num];
                if (x.innerHTML.toLowerCase() > y.innerHTML.toLowerCase()) {
                    shouldSwitch = true;
                    break;
                }
            }
            if (shouldSwitch) {
                rows[i].parentNode.insertBefore(rows[i + 1], rows[i]);
                switching = true;
            }
        }
    }
});