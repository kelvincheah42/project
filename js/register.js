function checkForm(form)
  {
    if(form.username.value == "") {
      alert("Error: Username cannot be blank!");
      form.username.focus();
      return false;
    }
   var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    if(!re.test(form.email.value)) {
      alert("Error:Email is blank or invaild format");
      form.email.focus();
      return false;
    }
    if(form.pwd1.value == "") {
      alert("Error: Password cannot be blank!");
      form.pwd1.focus();
      return false;
    }
      if(form.pwd1.value.length < 6) {
        alert("Error: Password must contain at least six characters!");
        form.pwd1.focus();
        return false;
      }
      if(form.pwd1.value == form.username.value) {
        alert("Error: Password must be different from Username!");
        form.pwd1.focus();
        return false;
      }
      var x=form.pwd1.value;
var y=form.pwd2.value;
var z=x.length;
if((x!=y || !x))
{
alert("Password does not match!!! Please give correct password");
return false;
}
    
    return true;
  }
