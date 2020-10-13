document.getElementById("form-button").onclick=formValidation;

function formValidation(){
  
  let name=document.getElementById("form-name");
  let email=document.getElementById("form-email");
  let subject=document.getElementById("form-Subject");
  let textArea=document.getElementById("form-text");

  
  if (name_Validation(name)){
    if (email_Validation(email)){
        if (subject_Validation(subject)){
            if(textArea_Validation(textArea)){

            }
        }
    }
  }
    return false;
  
}

function name_Validation(name){
    var letters = /^[a-zA-Z ]*$/;

    if (name.value==""|| name.value==null){
        document.getElementById("name_validate").innerHTML="Please enter your name*";
        name.focus();
        return false;
    }
    else if(name.value.match(letters))
    {
        return true;
    }
    else
    {
        document.getElementById("name_validate").innerHTML='Username must have alphabet characters only';
        name.focus();
        return false;
    }
}

function email_Validation(email){
    var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
    if (email.value==""|| email.value==null){
        document.getElementById("email_validate").innerHTML="Enter email address*";
        email.focus();
        return false;
    }
    else if(email.value.match(mailformat))
    {
        return true;
    }
    else
    {
        document.getElementById("email_validate").innerHTML="You have entered an invalid email address!";
        email.focus();
        return false;
    }
}

function subject_Validation(subject){
    if (subject.value==""|| subject.value==null){
        document.getElementById("subject_validate").innerHTML="Please enter a subject for the message! ";
        subject.focus();
        return false;

    }
}

function textArea_Validation(textArea){
    if (textArea.value==""|| textArea.value==null){
        document.getElementById("textarea_validate").innerHTML="Please enter the message! " ;
        textArea.focus();
        return false;  
    }
    else{
        alert("Form Submitted successfully");
        window.location.reload();
        return true;
    }
}