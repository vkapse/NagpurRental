
//validation for rental adpost


function validateform_rental()
{  
var name=document.rental_adpost.fname.value;  
var email=document.rental_adpost.email.value;  
var contact=document.rental_adpost.contact.value;  
var reason=(rental_adpost.reason.value); 
var descrip=document.rental_adpost.descrip.value; 


if (name==null || name=="")
{  
  alert("Name can't be blank");  
  return false;  
}
else if(email==null || email=="")
{  
  alert("email cant be blank.");  
  return false;  
 }  

else if(contact==null || contact=="")
{  
  alert("contact cant be blank.");  
  return false;  
 }  
else if(reason=="-1")
{  
  alert("reason cant be blank.");  
  return false;  
  }  

else if(descrip==null || descrip=="")
{  
  alert("description cant be blank.");  
  return false;  
  }
   return true;
} 

//rental search
function validateform_rental_search()
{  
var name=document.rental_search.fname.value;  
var email=document.rental_search.email.value;  
var contact=document.rental_search.contact.value;  
var reason=(rental_search.reason.value); 
var descrip=document.rental_search.descrip.value; 


if (name==null || name=="")
{  
  alert("Name can't be blank");  
  return false;  
}
else if(email==null || email=="")
{  
  alert("email cant be blank.");  
  return false;  
 }  

else if(contact==null || contact=="")
{  
  alert("contact cant be blank.");  
  return false;  
 }  
else if(reason=="-1")
{  
  alert("reason cant be blank.");  
  return false;  
  }  

else if(descrip==null || descrip=="")
{  
  alert("description cant be blank.");  
  return false;  
  }
   return true;
} 



// property ad_post

function validateform_property()
{  
var name=document.property_adpost.fname.value;  
var email=document.property_adpost.email.value;  
var contact=document.property_adpost.contact.value;  
var reason=(property_adpost.reason.value); 
var descrip=document.property_adpost.descrip.value; 


if (name==null || name=="")
{  
  alert("Name can't be blank");  
  return false;  
}
else if(email==null || email=="")
{  
  alert("email cant be blank.");  
  return false;  
 }  

else if(contact==null || contact=="")
{  
  alert("contact cant be blank.");  
  return false;  
 }  
else if(reason=="-1")
{  
  alert("reason cant be blank.");  
  return false;  
  }  

else if(descrip==null || descrip=="")
{  
  alert("description cant be blank.");  
  return false;  
  }
   return true;
} 

//property search

function validateform_property_search()
{  
var name=document.property_search.fname.value;  
var email=document.property_search.email.value;  
var contact=document.property_search.contact.value;  
var reason=(property_search.reason.value); 
var descrip=document.property_search.descrip.value; 


if (name==null || name=="")
{  
  alert("Name can't be blank");  
  return false;  
}
else if(email==null || email=="")
{  
  alert("email cant be blank.");  
  return false;  
 }  

else if(contact==null || contact=="")
{  
  alert("contact cant be blank.");  
  return false;  
 }  
else if(reason=="-1")
{  
  alert("reason cant be blank.");  
  return false;  
  }  

else if(descrip==null || descrip=="")
{  
  alert("description cant be blank.");  
  return false;  
  }
   return true;
} 

