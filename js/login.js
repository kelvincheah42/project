
 function checkForm(form)
  {
    if(form.username.value == "") {
      alert("Error: Username cannot be blank!");
      form.username.focus();
      return false;
    }
 if(form.password.value == "") {
      alert("Error: Password cannot be blank!");
      form.password.focus();
      return false;
    }
      if(form.password.value.length < 6) {
        alert("Error: Password must contain at least six characters!");
        form.password.focus();
        return false;
      }
   header('Location:index.php');
    return true;
    
  }