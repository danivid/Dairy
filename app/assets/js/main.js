
/* Opens login modal */
const SIGN_IN = document.getElementById('SIGN_IN');
const LOGIN_MODAL = document.getElementById('LOGIN_MODAL');
const LOGIN_MODAL_CLOSE = document.getElementById('LOGIN_MODAL_CLOSE');
const SIGN_UP_CLOSE_MODAL = document.getElementById('SIGN_UP_CLOSE_MODAL');

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

SIGN_UP_CLOSE_MODAL.addEventListener('click', e => {
    LOGIN_MODAL.classList.toggle('-show');
});

/* If the image to add a picture to a note is pressed */
function find_file() {
    var file;
    document.getElementById('selectfile').click();
    alert("dsfsdfaadd");
    document.getElementById('selectfile').onchange = function() {
        file = document.getElementById('selectfile').files[0];
        file_upload(file);

    };
  }
 
/* Uploads the picture to the database. */
function file_upload(file) {
    if(file != undefined) {
        var form_data = new FormData();                  
        form_data.append('file', file);

        xmlhttp = new XMLHttpRequest();
        
        xmlhttp.onreadystatechange = function() {
            document.getElementById("image").innerHTML = this.responseText;
        };

            xmlhttp.open("POST","includes/processes/upload_profile_picture.php",true);
        
        xmlhttp.send(form_data);

    }
  }


