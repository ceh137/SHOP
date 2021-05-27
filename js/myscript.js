function AddMore(id) {
    $.ajax({
        type: "POST",
        url: 'M/ajaxmodels.php',
        data: {
            "last_id": id
        },
        success: function (data) {
            $('#cars').append(data);

        }
    })
}


function stopDefAction(evt) {
    evt.preventDefault();
}
document.getElementById('regSubmit').addEventListener('click', stopDefAction, false);

function ValidateReg() {

    let validated = false;

    let form = document.getElementById('form_reg');

    let pass1 = document.getElementById('InputPassword1').value;
    let pass2 = document.getElementById('InputPassword2').value;

        if (pass1 != pass2) {
            document.getElementById("passHelp").innerHTML="";
            document.getElementById("passHelp").append("Insert a nice password");

        } else if(pass1.length<8 || pass2.length<8) {
            document.getElementById("passHelp").innerHTML="";
            document.getElementById("passHelp").append("It is too short(");
        } else {
            validated = true;
        }

    if (validated == true) {
        form.submit();
    }

}

