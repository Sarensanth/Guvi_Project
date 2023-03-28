$(document).ready( function()
{
   
         $("#loginForm").validate({
             // in 'rules' user have to specify all the constraints for respective fields
             rules: {
                 username: {
                     required: true,
                  },
                 password: {
                     required: true,
                    
                 },
                 
             },
             // in 'messages' user have to specify message as per rules
             messages: {
                  username: {
                     required:"Please enter a username",
                   
                 },
                 password: {
                     required: " Please enter a password",
                  
                 },
                 
                 }
         });

           });
