
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


/* Gets pages by month */
function save_page() {
	
	var search = document.getElementById("myEditor").value;
    
    xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById("message").innerHTML = this.responseText;
        }
    };

    xmlhttp.open("POST","save_page.php",true);
    xmlhttp.send();
}

/* Gets pages by month */
function change_image() {
    alert("asdasda")
    document.getElementById("picture_upload").click();
    

}



/* Opens login modal */
const SIGN_IN = document.getElementById('SIGN_IN');
const LOGIN_MODAL = document.getElementById('LOGIN_MODAL');
const LOGIN_MODAL_CLOSE = document.getElementById('LOGIN_MODAL_CLOSE');
const profile_image = document.getElementById('profile_image');

SIGN_IN.addEventListener('click', e => {
    LOGIN_MODAL.classList.toggle('-show');
});

LOGIN_MODAL_CLOSE.addEventListener('click', e => {
    LOGIN_MODAL.classList.toggle('-show');
});

LOGIN_MODAL.addEventListener('click', e => {
    if(e.target !== e.currentTarget) return;
    LOGIN_MODAL.classList.toggle('-show');
});

profile_image.addEventListener('click', e => {
    alert("casdfcdaf");
});











//---------------------------------------------------------------------------
/* If the button to add a picture to a note is pressed */
function find_file() {
    var file;
    document.getElementById('selectfile').click();
    document.getElementById('selectfile').onchange = function() {
        file = document.getElementById('selectfile').files[0];
      //avatar_upload(file);
    };
  }
 
/* Uploads the picture to the database. */
function file_upload(file, type) {
    if(file != undefined) {
        var form_data = new FormData();                  
        form_data.append('file', file);

        xmlhttp = new XMLHttpRequest();
        
        xmlhttp.onreadystatechange = function() {
            document.getElementById("image").innerHTML = this.responseText;
        };

        show_alert();

        if (type == 1) {
            xmlhttp.open("POST","includes/process/upload_profile_picture.php",true);
        }
        if (type == 2) {
            xmlhttp.open("POST","includes/process/upload_game.php",true);
        }
        
        xmlhttp.send(form_data);

    }
  }

/* This will get the marked text from the window */
function get_selection_text() {
    var text = "";
    if (window.getSelection) {
        text = window.getSelection().toString();
    } else if (document.selection && document.selection.type != "Control") {
        text = document.selection.createRange().text;
    }

    return text;
}

