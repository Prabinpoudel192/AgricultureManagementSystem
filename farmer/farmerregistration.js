 
function validation(){
    let a=document.getElementsByName('fname')[0].value;
    let j=document.getElementsByName('mname')[0].value;
    let b=document.getElementsByName('lname')[0].value;
    let d=document.getElementsByName('mobile')[0].value;
    let e=document.getElementsByName('address')[0].value;
    let fa=document.getElementsByName('uname')[0].value;
    let fb=document.getElementsByName('email')[0].value;
    let rval = document.querySelector( 'input[name="gender"]:checked'); 
    let g=document.getElementsByName('password')[0].value;
    let h=document.getElementsByName('cpassword')[0].value;
    let i=document.getElementsByName('agree')[0].checked;
    document.getElementsByName('fname')[0].addEventListener('focus', function() {
        document.getElementById("msg1").innerText = "Please enter your first name";
        document.getElementById("msg1").style.color="white";
        document.getElementById("msg1").style.display = "block";
    });
    document.getElementsByName('mname')[0].addEventListener('focus',function(){
      document.getElementById("msg2").innerText="Please enter your middle name(optional)";
      document.getElementById("msg2").style.color="white";
      document.getElementById("msg2").style.display="block";
    });
    document.getElementsByName('lname')[0].addEventListener('focus',function(){
        document.getElementById("msg3").innerText="Please enter your last name";
        document.getElementById("msg3").style.color="white";
        document.getElementById("msg3").style.display="block";
      });
      document.getElementsByName('mobile')[0].addEventListener('focus',function(){
        document.getElementById("msg4").innerText="Please enter valid mobile no";
        document.getElementById("msg4").style.color="white";
        document.getElementById("msg4").style.display="block";
      });
      document.getElementsByName('address')[0].addEventListener('focus',function(){
        document.getElementById("msg5").innerText="Please enter valid address";
        document.getElementById("msg5").style.color="white";
        document.getElementById("msg5").style.display="block";
      });
      document.getElementsByName('uname')[0].addEventListener('focus',function(){
        document.getElementById("msg6").innerText="Please enter your valid username";
        document.getElementById("msg6").style.color="white";
        document.getElementById("msg6").style.display="block";
      });
      document.getElementsByName('email')[0].addEventListener('focus',function(){
        document.getElementById("msg7").innerText="Please enter your valid email";
        document.getElementById("msg7").style.color="white";
        document.getElementById("msg7").style.display="block";
      });
      document.getElementsByName('password')[0].addEventListener('focus',function(){
        document.getElementById("msg8").innerText="Please enter your password";
        document.getElementById("msg8").style.color="white";
        document.getElementById("msg8").style.display="block";
      });
      document.getElementsByName('cpassword')[0].addEventListener('focus',function(){
        document.getElementById("msg9").innerText="Please match the password you entered above";
        document.getElementById("msg9").style.color="white";
        document.getElementById("msg9").style.display="block";
      });
      //firstname Validation logic
 if(a===""){
    document.getElementById("msg1").innerText="First name must be more than 2 character consisting only alphabets";
    document.getElementById("msg1").style.color="red";
    document.getElementById("msg1").style.display="block";
    return false;

}
else if(!a.match(/^[a-zA-Z]{3,}$/)){
    document.getElementById('msg1').innerText="First name must be more than 2 character consisting only alphabets";
    document.getElementById('msg1').style.color="red";
    return false;
}
//middile name validation
else if(j!=="" && !j.match(/^[a-zA-Z]{3,}$/)){
    document.getElementById('msg2').innerText="Middle name must be more than 2 character consisting only alphabets";
    document.getElementById('msg2').style.color="red";
    return false;
}
//last name validation
else if(b===""){
    document.getElementById("msg3").innerText="Last name must be more than 2 character consisting only alphabets";
    document.getElementById("msg3").style.color="red";
    return false;
}
else if(!b.match(/^[a-zA-Z]{3,}$/)){
    document.getElementById("msg3").innerText="Last name must be more than 2 character consisting only alphabets";
    document.getElementById("msg3").style.color="red";
    return false;
}
//gender Validation
else if(rval==null){
     alert("Please select the gender");
     return false;
}
//mobile no validation
else if(d===""){
    document.getElementById("msg4").innerText="This field cannot be empty please enter your valid phone number";
    document.getElementById("msg4").style.color="red";
    return false;
    }
    else if(isNaN(d)){
        document.getElementById("msg4").innerText="Mobile number cannot contain other caracters than digits.";
        document.getElementById("msg4").style.color="red";
        return false;
    }
    else if(!(d.startsWith('98')) || d.startsWith('97')){
        document.getElementById("msg4").innerText="Mobile number always should start with 98 or 97";
        document.getElementById("msg4").style.color="red";
        return false;
    }
    else if(d.length !==10){
        document.getElementById("msg4").innerText="Mobile number must be of length of 10 digits.";
        document.getElementById("msg4").style.color="red";
        return false;
    }
      //Address validation  
      else if(e===""){
        document.getElementById("msg5").innerText="This field cannot be empty please enter your valid address";
        document.getElementById("msg5").style.color="red";
        return false;
        }
    else if(!e.match(/^[A-Za-z]{4,15}-\d{1,2} [A-Za-z]{2,15},[ ]?[nN]epal$/)){
        document.getElementById("msg5").innerText="please match the pattern [chainpur-1 chitwan,nepal]";
        document.getElementById("msg5").style.color="red";
        return false;
    }
      //Username Validation      
      else if(fa===""){
        document.getElementById("msg6").innerText="This field cannot be empty please enter your username";
        document.getElementById("msg6").style.color="red";
        return false;
        }
    else if(fa.length<=4){
        document.getElementById("msg6").innerText="Username must be of more than 4 character.";
        document.getElementById("msg6").style.color="red";
        return false;
    }
    //Email Validation
      else if(fb===""){
        document.getElementById("msg7").innerText="This field cannot be empty please enter your valid email";
        document.getElementById("msg7").style.color="red";
        return false;
        }else if(!fb.match(/^[\w.%+-]+@[\w.-]+\.[A-Za-z]{2,}$/)){
            document.getElementById("msg7").innerHTML="Your email couldn0t validate.Please enter the valid Email.";
            document.getElementById("msg7").style.color="red";
            return false;
        }
        else if(g==="" || h===""){
            if(g===""){
                document.getElementById("msg8").innerHTML="This field cannot be empty please enter your password";
                document.getElementById("msg8").style.color="red";
                return false;
                } 
                else if(h===""){
                document.getElementById("msg9").innerHTML="This field cannot be empty please repeat the password you entered above";
                document.getElementById("msg9").style.color="red";
                return false;
                }
            }
      //PassWord Validation  
else if(g!==h){
document.getElementById("msg8").innerHTML="Your password didn't match.";
document.getElementById("msg9").innerHTML="Your password didn't match.";
document.getElementById("msg8").style.color="red";
document.getElementById("msg9").style.color="red";
return false;
}
else if(g.length<=5){
document.getElementById("msg8").innerHTML="Password must be minimum of 6 characters.";
document.getElementById("msg9").innerHTML="Password must be minimum of 6 characters.";
document.getElementById("msg8").style.color="red";
document.getElementById("msg9").style.color="red";
return false;
}
else if(!i){
    alert("Please agree to our terms and conditions.");
    return false;
}
else{
    return true;
}


}