<?php



?>
<div class="col-sm-12 col-xs-12 m-auto col-md-6 col-lg-6">
    <script type="text/javascript">
        var submitted = false;
        var interval = NaN

        function sendpfi() {
            fetch('https://eawaterspayments.herokuapp.com/sendpfi', {
                method: 'POST',
                body: JSON.stringify({
                    first_name: $('#first_name').val(),
                    last_name: $('#last_name').val(),
                    phone: $('#phone_no_val').val(),
                    email: $('#email_addr').val(),
                    assoc: $('#assoc_membership').val(),
                    role: $('#role').val(),

                }),
                headers: {
                    "Content-Type": "application/json"
                }
            }).then(response => response.json()).then(response => {
                console.log(response)
            })
        }

        function paidfeedback() {
            fetch('https://eawaterspayments.herokuapp.com/paidfeedback', {
                method: 'POST',
                body: JSON.stringify({
                    first_name: $('#first_name').val(),
                    title: $('#title').val(),
                    last_name: $('#last_name').val(),
                    amount: $('#mpesa_amount').val(),
                    code: $('#mpesa_code').val(),
                    account: $('#mpesa_name').val(),
                    organization: $('#organization').val(),
                    expected: $('#expected').val(),
                    phone: $('#phone_no_val').val(),
                    email: $('#email_addr').val()
                }),
                headers: {
                    "Content-Type": "application/json"
                }
            }).then(response => response.json()).then(response => {
                console.log('DONE SENDING FEEDBACK')
            });
        }

        function registrationDone(isSubmited) {
            if (isSubmited) {


                document.getElementById('myform').style.display = 'none'
                document.getElementById('finish').style.display = 'block'
                if ($('#ispaid').val() === "YES") {
                    paidfeedback()
                } else {
                    sendpfi()
                }
            }
        }

        function stepTwo() {
            document.getElementById('first_step').style.display = 'none'
            document.getElementById('second_step').style.display = 'block'
        }


        function enableFinishInvoice() {
            document.getElementById("invoicefinishbtn").disabled = false;
        }

        function enableFinishPayment() {
            document.getElementById("finishbtn").disabled = false;
        }



        function goBackFromInvoice() {

            document.getElementById('invoice_step').style.display = 'none'
            document.getElementById('second_step').style.display = 'block'



        }

        function goBackFromMPESA() {

            document.getElementById('mpesa_step').style.display = 'none'
            document.getElementById('second_step').style.display = 'block'



        }

        function gotToInvoice() {

            document.getElementById('mpesa_step').style.display = 'none'
            document.getElementById('invoice_step').style.display = 'block'

        }

        function goBackFromStepTwo() {

            document.getElementById('second_step').style.display = 'none'
            document.getElementById('first_step').style.display = 'block'



        }

        function checkStatus() {
            fetch('https://eawaterspayments.herokuapp.com/ispaid')
                .then(response => {
                    if (response.ok) {
                        return response.json()
                    } else {
                        return
                    }
                }).then(res => {
                    if (res.status === 0) {
                        var msg = res.body
                        console.log(res)
                        if (msg.BillRefNumber.toUpperCase() === ($('#first_name').val() + " " + $('#last_name')
                                .val()).toUpperCase() ||
                            msg.MSISDN === $('#phone_no_val').val()) {

                            $('#ispaid').val('YES')

                            $('#paymentstatus').html(
                                "<div class='alert alert-success' role='alert'>Thank You Payment Received for " +
                                msg.BillRefNumber + "</div>")
                            $('#mpesa_code').val(msg.TransID)
                            $('#mpesa_name').val(msg.BillRefNumber)
                            $('#mpesa_amount').val(msg.TransAmount)
                            enableFinishPayment()
                            clearInterval(interval)
                        }
                    } else {
                        console.log('waiting for payment')
                    }
                })
        }

        function stepThree() {
            document.getElementById('second_step').style.display = 'none'
            if ($('#role').val() === "Kenyan Delegate"||$('#country').val() === "Kenya") {
                document.getElementById('mpesa_step').style.display = 'block'
                interval = setInterval(checkStatus, 100)
            } else {
                document.getElementById('invoice_step').style.display = 'block'
            }

        }

        function changeCost() {
            if ($('#role').val() === "Kenyan Delegate") {
                if ($('#assoc_membership').val() === "WASPA" || $('#assoc_membership').val() === "KWIA" ||
                    $('#assoc_membership').val() === "GSK") {
                    $('#cost').html("Kshs. 17,000")
                    $('#incost').html("Kshs. 17,000")
                    $('#expected').val("17000")

                } else {
                    $('#cost').html("Kshs. 20,000")
                    $('#incost').html("Kshs. 20,000")
                    $('#expected').val("20000")
                }
            } else {
                if ($('#role').val() === "EAC Delegate") {
                    $('#cost').html("USD 200")
                    $('#incost').html("USD 200")
                } else {
                    $('#cost').html("USD 600")
                    $('#incost').html("USD 600")
                }
            }

        }
    </script>
    <input type="hidden" id="expected">
    <iframe name="hidden_iframe" id="hidden_iframe" style="display:none;" onload="registrationDone(submitted)"></iframe>
    <div style="display: block;" id="myform">
        <form target="hidden_iframe" onsubmit="submitted=true;"
            action="https://docs.google.com/forms/d/e/1FAIpQLSfYr4NgQt6F09QUQGMas948gk9jcxtM9oiXPb2Sw4awEIABOQ/formResponse"
            method="POST" class="d-flex justify-content-center col-9 card">
            <h3 style="text-align: center;padding: 10px;font-family: 'Roboto', sans-serif">Register</h3>

            <div id="first_step" style="display: block;">
                <div class="input-group">
                    <div class="input-group-prepend">
                        <select name="entry.977342107" class="col-11 custom-select" id="title">
                            <option value="Prof.">Prof.</option>
                            <option value="Dr.">Dr.</option>
                            <option value="Eng.">Eng.</option>
                            <option selected value="Mr.">Mr.</option>
                            <option value="Ms.">Ms.</option>
                            <option value="Mrs.">Mrs.</option>
                        </select>
                    </div>
                    <input id="first_name" required name="entry.2037461548" onchange="nameChanged()" type="text"
                        class="col-12 form-control" aria-describedby="emailHelp" placeholder="First Name...">
                    <br>
                    <input id="last_name" required name="entry.1301137695" onchange="nameChanged()" type="text"
                        class="col-12 form-control" aria-describedby="emailHelp" placeholder="Last Name...">
                </div>
                <br>
                <select id="country" name="entry.40762720" class="col-6 custom-select">
                    <option selected value="Kenya" data-code="254">Kenya</option>
                    <option value="Uganda" data-code="256">Uganda</option>
                    <option value="Tanzania" data-code="255">Tanzania</option>
                    <option value="Rwanda" data-code="250">Rwanda</option>
                    <option value="Burundi" data-code="257">Burundi</option>
                    <option value="South Sudan" data-code="211">South Sudan</option>
                    <option value="United States" data-code="1">United States</option>
                    <option value="Other" data-code="254">Other</option>
                </select>
                <br>
                <br>
                <div class="input-group">
                    <span class="input-group-text" id="code">254</span>
                    <input name="entry.1401558713" type="hidden" class="form-control" id="phone_no_val">
                    <input type="tel" onkeydown="limit(this);" onkeyup="limit(this);" class="form-control" id="phone_no"
                        placeholder="Phone Number" aria-describedby="addon-wrapping">
                </div>
                <br>
                <input name="entry.374619715" type="email" class="form-control" id="email_addr" placeholder="Email...">
                <div class="d-flex">
                    <div style="cursor: pointer;" onclick="stepTwo()" class="m-3 btn btn-success">
                        Next
                    </div>
                </div>
            </div>

            <div id="second_step" style="display: none;">
                <input name="entry.509710971" type="text" class="col-10 form-control" id="organization"
                    aria-describedby="emailHelp" placeholder="Organization">
                <br>
                <input name="entry.1498630360" type="text" class="col-10 form-control" id="job_title"
                    aria-describedby="emailHelp" placeholder="Job title">
                <br>
                <select class="col-10 form-control" onchange="changeCost()" name="entry.1166315086"
                    id="assoc_membership">
                    <option selected value="N/A">Association Membership</option>
                    <option value="WASPA">WASPA</option>
                    <option value="KWIA">KWIA</option>
                    <option value="GSK">GSK</option>
                    <option value="N/A">N/A</option>

                </select>
                <br>
                <select onchange="changeCost()" name="entry.896255788" class="col-10 custom-select" id="role">
                    <option selected>Role in the Conference</option>
                    <option value="Kenyan Delegate">Kenyan Delegate</option>

                    <option value="EAC Delegate">EAC Delegate</option>
                    <option value="None EAC Delegate">Non EAC Delegate</option>
                </select>
                <div class="d-flex">
                    <div style="cursor: pointer;" onclick="goBackFromStepTwo()" class="m-3 btn btn-outline-success">
                        Back
                    </div>
                    <div style="cursor: pointer;" onclick="stepThree()" class="m-3 btn btn-success">
                        Next
                    </div>
                </div>
            </div>

            <div id="mpesa_step" style="display: none; font-size: 14px;">
                <img width="100px" src="./assets/images/lipanampesalogo.png" alt="">
                <ol>
                    <li>Go to the M-PESA Menu.</li>
                    <li>Select Pay Bill.</li>
                    <li>Enter Business No. <span class="font-weight-bold">749320 </span> Receiving Organization will be
                        KIPYA AFRICA LIMITED(organizer of the event)</li>
                    <li>Enter Account No. <span class="font-weight-bold" id="fullname"></span></li>
                    <li>Enter the Amount <span class="font-weight-bold" id="cost">Kshs. 20,000</span></li>
                    <li>Enter your M-Pesa PIN then send.</li>
                </ol>
                <div id="paymentstatus">
                    <div class="alert alert-secondary" role="alert">
                        Awaiting Payment...
                    </div>
                </div>
                <input id="mpesa_code" class="form-control" type="hidden" name="entry.1595014772"
                    placeholder="MPESA CODE">
                <input id="mpesa_name" type="hidden" name="entry.527517021" placeholder="MPESA NAME">
                <input id="mpesa_amount" type="hidden" name="entry.1830259573" placeholder="MPESA Amount">
                <div class="d-flex">
                    <div style="cursor: pointer;" onclick="goBackFromMPESA()" class="m-3 btn btn-outline-success">
                        Back
                    </div>
                    <div style="cursor: pointer;" onclick="gotToInvoice()" class="m-3 btn btn-outline-warning">
                        Pay Later
                    </div>
                    <button id="finishbtn" disabled type="submit" class="m-3 btn btn-success">
                        Finish
                    </button>
                </div>

            </div>
            <div id="invoice_step" style="display: none;padding: 20px;">

                <input onchange="enableFinishInvoice(this)" class="form-check-input" id="understand" type="checkbox"
                    name="entry.344622112">
                <label class="form-check-label" for="understand">I understand that I will be billed the Invoice
                    for <span class="font-weight-bold" id="incost">USD 600</span></label>
                <div class="d-flex">
                    <button id="prevbtn" onclick="goBackFromInvoice()" class="m-3 btn btn-outline-success">
                        Back
                    </button>
                    <button type="submit" disabled id="invoicefinishbtn" class="m-3 btn btn-success">
                        Finish
                    </button>
                </div>
            </div>




        </form>
    </div>

    <div id="finish" style="display: none">
        <div class="card alert alert-success" id="status" role="alert">
            Thank you for registering for The East Africa Water Summit 2019! We look forward to a fruitful summit.
            We have sent you an email with the fees and details of the Event.
        </div>
    </div>
    <div id="demo">

    </div>
</div>