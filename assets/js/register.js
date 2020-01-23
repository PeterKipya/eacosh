
var current_fs, next_fs, previous_fs;
var left, opacity, scale;
// var submitted = false;
var interval = NaN


function sendpfi() {
//     let headers = new Headers();

//   headers.append('Content-Type', 'application/json');
//   headers.append('Accept', 'application/json');

//   headers.append('Access-Control-Allow-Origin', 'http://localhost:3000');
//   headers.append('Access-Control-Allow-Credentials', 'true');

//   headers.append('GET', 'POST', 'OPTIONS');

//   headers.append('Authorization', 'Basic ' + base64.encode(username + ":" + password));

  
    fetch('https://eawaterspayments.herokuapp.com/sendpfi', {
        method: 'POST',
        body: JSON.stringify({
            first_name: $('#first_name').val(),
            last_name: $('#last_name').val(),
            phone: $('#phone_no_val').val(),
            email: $('#email_addr').val(),
            assoc: "GAK",
            role: $('#role').val(),

        }),
        headers: {
            "Content-Type": "application/json"
        }
    }).then(response => response.json()).then(response => {
        console.log(response)
    })
}
function registrationDone() {
    document.getElementById("reg_form").style.display="none";
    document.getElementById("success_message").style.display="block";
    sendpfi()
}