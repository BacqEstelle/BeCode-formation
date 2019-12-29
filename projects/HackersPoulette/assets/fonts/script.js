
function validate()
{
 var error="";
 var gender = document.getElementById( "gender" );
 if( name.value == "" )
 {
  error = " You Have To Write Your Gender. ";
  document.getElementById( "error_para" ).innerHTML = error;
  return false;
 }

 var name = document.getElementById( "name" );
 if( name.value == "" )
 {
  error = " You Have To Write Your Name. ";
  document.getElementById( "error_para" ).innerHTML = error;
  return false;
 }
 var country = document.getElementById( "country" );
 if( country.value == "" )
 {
  error = " You Have To Write Your Country. ";
  document.getElementById( "error_para" ).innerHTML = error;
  return false;
 }
 var email = document.getElementById( "email" );
 if( email.value == "" || email.value.indexOf( "@" ) == -1 )
 {
  error = " You Have To Write Valid Email Address. ";
  document.getElementById( "error_para" ).innerHTML = error;
  return false;
 }
 var message = document.getElementById( "message" );
 if( message.value == "" )
 {
  error = " You Have To Write Your Message. ";
  document.getElementById( "error_para" ).innerHTML = error;
  return false;
 }


 else
 {
  return true;
 }
}
