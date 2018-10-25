function formValidation()
{
    var pass_word = document.register.pass_word;
    var user_name = document.register.user_name;
    var email = document.register.email;
    var contact=document.register.contact;
   
    if (user_name_validation(user_name, 5, 12))
    {
        if (pass_word_validation(pass_word, 5, 12))
        {
            if (allLetter(user_name))
            {
                if (allnumeric(contact,1,10))
                        {
                            if (ValidateEmail(email))
                            {
                             
                                
                            }
                        }
                    }
                }
            }
        
    
    return false;
}

function pass_word_validation(pass_word,mx,my)
{
var pass_word_len = pass_word.value.length;
if (pass_word_len == 0 ||pass_word_len >= my || pass_word_len < mx)
{
alert("Password should not be empty / length be between "+mx+" to "+my);
pass_word.focus();
return false;
}
return true;
}

function allLetter(user_name)
{ 
var letters = /^[A-Za-z]+$/;
if(user_name.value.match(letters))
{
return true;
}
else
{
alert('Username must have alphabet characters only');
user_name.focus();
return false;
}
}

function allnumeric(contact,mx,my)
{ 
var numbers = /^[0-9]+$/;
if(contact.value.match(numbers)||contact.value>=my||contact.value<mx)
{
return true;
}
else
{
alert('contact must have numeric characters only');
contact.focus();
return false;
}
}

function ValidateEmail(email)
{
var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
if(email.value.match(mailformat))
{
return true;
}
else
{
alert("You have entered an invalid email address!");
email.focus();
return false;
}
}
