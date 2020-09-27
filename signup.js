// Defining a function to display error message
function printError(elemId, hintMsg) {
    document.getElementById(elemId).innerHTML = hintMsg;
}

// Defining a function to validate form 
function validateForm() {
    // Retrieving the values of form elements 
    var name = document.contactForm.name.value;
    var email = document.contactForm.email.value;
    var mobile = document.contactForm.mobile.value;
    var occupation = document.contactForm.occupation.value;
    var time = document.contactForm.time.value;
    var ammenities = [];
    var checkboxes = document.getElementsByName("ammenities[]");
    for(var i=0; i < checkboxes.length; i++) {
        if(checkboxes[i].checked) {
            // Populate ammenities array with selected values
            ammenities.push(checkboxes[i].value);
        }
    }
    
  // Defining error variables with a default value
    var nameErr = emailErr = mobileErr = occupationErr = timeErr = true;
     document.getElementById("file").required = true;
     
    // Validate name
    if(name == "") {
        printError("nameErr", "Please enter your name");
    } else {
        var regex = /^[a-zA-Z\s]+$/;                
        if(regex.test(name) === false) {
            printError("nameErr", "Please enter a valid name");
        } else {
            printError("nameErr", "");
            nameErr = false;
        }
    }
    
    // Validate email address
    if(email == "") {
        printError("emailErr", "Please enter your email address");
    } else {
        // Regular expression for basic email validation
        var regex = /^\S+@\S+\.\S+$/;
        if(regex.test(email) === false) {
            printError("emailErr", "Please enter a valid email address");
        } else{
            printError("emailErr", "");
            emailErr = false;
        }
    }
    
    // Validate mobile number
    if(mobile == "") {
        printError("mobileErr", "Please enter your mobile number");
    } else {
        var regex = /^[1-9]\d{9}$/;
        if(regex.test(mobile) === false) {
            printError("mobileErr", "Please enter a valid 10 digit mobile number");
        } else{
            printError("mobileErr", "");
            mobileErr = false;
        }
    }
    
    // Validate occupation
    if(occupation == "Select") {
        printError("occupationErr", "Please select your occupation");
    } else {
        printError("occupationErr", "");
        occupationErr = false;
    }
    
    // Validate time
    if(time == "") {
        printError("timeErr", "Please select your time");
    } else {
        printError("timeErr", "");
        timeErr = false;
    }
    
    // Prevent the form from being submitted if there are any errors
    if((nameErr || emailErr || mobileErr || occupationErr || timeErr) == true) {
       return false;
    } else {
        // Creating a string from input data for preview
        var dataPreview = "You've entered the following details: \n" +
                          "Name: " + name + "\n" +
                          "Email Address: " + email + "\n" +
                          "Mobile Number: " + mobile + "\n" +
                          "occupation: " + occupation + "\n" +
                          "time: " + time + "\n";
        if(ammenities.length) {
            dataPreview += "ammenities: " + ammenities.join(", ");
        }
        console.log(dataPreview)
        // Display input data in a dialog box before submitting the form
        //alert(dataPreview);
        if(confirm(dataPreview)){

        }
        else {
          return false
        }


    }
};