'use strict';

/* Gets pages by year */
function get_pages_by_year(year) {

    xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById("message").innerHTML = this.responseText;
        }
    };

    xmlhttp.open("GET","includes/process/get_pages_by_year.php?s="+year,true);
    xmlhttp.send();
}

/* Gets pages by month */
function get_pages_by_month(month) {

    xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById("message").innerHTML = this.responseText;
        }
    };

    xmlhttp.open("GET","includes/process/get_pages_by_month.php?s="+month,true);
    xmlhttp.send();
}


