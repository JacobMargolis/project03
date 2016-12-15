
function validate()
{

   if( document.myForm.name.value == "" )
   {
      alert( "Please provide your name!" );
      document.myForm.name.focus() ;
      return false;
   }
   
   if( document.myForm.email.value == "" )
   {
      alert( "Please provide your Email!" );
      document.myForm.email.focus() ;
      return false;
   }
   
   if( document.myForm.number.value == "" ||
   isNaN( document.myForm.number.value ) ||
   document.myForm.number.value.length != 10 )
   {
      alert( "Please provide a phone in the format ##########." );
      document.myForm.number.focus() ;
      return false;
   }
   
   return( true );
}