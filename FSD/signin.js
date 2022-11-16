function validate()
{
  //var nr=/^[a-zA-Z]+[." "][a-zA-Z" ".]$/;
 // var ur=/^\w+[@_]{1}[0-9]+$/;
  //var pr=/^[6789]{1}\d{9}$/;
  var er=/^[A-Za-z0-9]+@gmail.com$/;
  var par=/^\w+[@&£#$¥€]{1}[0-9]+$/;
  //var nu=nr.test(document.getElementById("name").value)
 // var ru=ur.test(document.getElementById("user").value)
  //var rp=pr.test(document.getElementById("phone").value)
  var re1=er.test(document.getElementById("email1").value)
  var rpa1=par.test(document.getElementById("pass1").value)
  var re2=er.test(document.getElementById("email2").value)
  var rpa2=par.test(document.getElementById("pass2").value)
  var re3=er.test(document.getElementById("email3").value)
  var rpa3=par.test(document.getElementById("pass3").value)
  
  if(re1!=true||rpa1!=true)
  {
    alert("enter correct details");
    return false;
  }
  else if(re2!=true||rpa2!=true)
  {
    alert("enter correct details");
    return false;
  }
  else if(re3!=true||rpa3!=true)
  {
    alert("enter correct details");
    return false;
  }
}