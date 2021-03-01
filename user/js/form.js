var m_strUpperCase = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
var m_strLowerCase = "abcdefghijklmnopqrstuvwxyz";
var m_strNumber = "0123456789";
var m_strCharacters = "!@#$%^&*?_~"

function passStrength()
{
	document.querySelector("#pass1str").style.display="block";	
	document.querySelector("#pass1msg").style.display="block";
	runPassword(document.querySelector("#pass1").value);
}

const registrationFormValidator=function(event){
    let regexAlpha=/^[A-Za-z]+$/;
    let regexMail=/^[a-zA-Z0-9+_.-]+@[a-zA-Z0-9.-]+$/;
    let regexPhone=/^[789]\d{9}$/;
    if(!regexAlpha.test(document.getElementById("fullname").value)){
        console.log("Invalid Name");
        return false;
    }else if(!regexMail.test(document.getElementById("emailid").value)){
        console.log("Invalid Email");
        return false;
    }else if(!regexPhone.test(document.getElementById("mobile").value)){
        console.log("Invalid Mobile");
        return false;
    }else if(document.getElementById("gender").value!='m' && document.getElementById("gender").value!='f'){
        console.log("Please select your gender");
        return false;
    }else if(document.getElementById("pass1").value!=document.getElementById("pass2").value){
        console.log("Please confirm your Password");
        return false;
    }else if(checkPassword(document.getElementById("pass1").value)<=50){
        console.log("Please select a strong Password..!");
        return false;
    }
    // console.log
    return true;
    // if(!validation){
    // event.preventDefault();
    // }
}

function checkPassword(strPassword)
{
    // Reset combination count
    var nScore = 0;
    // Password length
    // -- length Less than 4 characters
    if (strPassword.length < 5)
    {
        nScore += 5;
    }
    // -- length 5 to 7 characters
    else if (strPassword.length > 4 && strPassword.length < 8)
    {
        nScore += 10;
    }
    // -- length 8 or more
    else if (strPassword.length > 7)
    {
        nScore += 25;
    }
    var nUpperCount = countContain(strPassword, m_strUpperCase);
    var nLowerCount = countContain(strPassword, m_strLowerCase);
    var nLowerUpperCount = nUpperCount + nLowerCount;
    // -- Letters are all lower case
    if (nUpperCount == 0 && nLowerCount != 0) 
    { 
        nScore += 10; 
    }
    // -- Letters are upper case and lower case
    else if (nUpperCount != 0 && nLowerCount != 0) 
    { 
        nScore += 20; 
    }
    // Numbers
    var nNumberCount = countContain(strPassword, m_strNumber);
    // -- 1 number
    if (nNumberCount == 1)
    {
        nScore += 10;
    }
    // -- 3 or more numbers
    if (nNumberCount >= 3)
    {
        nScore += 20;
    }
    // Characters
    var nCharacterCount = countContain(strPassword, m_strCharacters);
    // -- 1 character
    if (nCharacterCount == 1)
    {
        nScore += 10;
    }   
    // -- More than 1 character
    if (nCharacterCount > 1)
    {
        nScore += 25;
    }
    // Bonus
    // -- Letters and numbers
    if (nNumberCount != 0 && nLowerUpperCount != 0)
    {
        nScore += 2;
    }
    // -- Letters, numbers, and characters
    if (nNumberCount != 0 && nLowerUpperCount != 0 && nCharacterCount != 0)
    {
        nScore += 3;
    }
    // -- Mixed case letters, numbers, and characters
    if (nNumberCount != 0 && nUpperCount != 0 && nLowerCount != 0 && nCharacterCount != 0)
    {
        nScore += 5;
    }
    return nScore;
}
function runPassword(str) 
{
    var nScore = checkPassword(str);
	var color='black';
	var txt='';
    if (nScore >= 90)
    {
        var txt = "Very Secure";
        var color = "#0ca908";
    }
    // -- Secure
    else if (nScore >= 80)
    {
        var txt = "Secure";
        var color = "#7ff67c";
    }
    // -- Very Strong
    else if (nScore >= 80)
    {
        var txt = "Very Strong";
        var color = "#008000";
    }
    // -- Strong
    else if (nScore >= 60)
    {
        var txt = "Strong";
        var color = "#006000";
    }
    // -- Average
    else if (nScore >= 40)
    {
        var txt = "Average";
        var color = "#e3cb00";
    }
    // -- Weak
    else if (nScore >= 20)
    {
        var txt = "Weak";
        var color = "#Fe3d1a";
    }
    // -- Very Weak
    else
    {
        var txt = "Very Weak";
        var color = "#e71a1a";
    }
    if(str.length == 0)
    {
    	document.querySelector("#pass1str").style.display="none";
    	document.querySelector("#pass1msg").style.display="none";
    }
else
    {
	document.querySelector("#pass1str").style.display="block"
	document.querySelector("#pass1str").value=nScore;
    document.querySelector("#pass1msg").style.color= color;
	document.querySelector("#pass1msg").innerHTML=txt;
}
}

function countContain(strPassword, strCheck)
{ 
    var nCount = 0;
    for (i = 0; i < strPassword.length; i++) 
    {
        if (strCheck.indexOf(strPassword.charAt(i)) > -1) 
        { 
                nCount++;
        } 
    } 
    return nCount; 
}
function confirmPassword()
{
	if(document.querySelector("#pass1").value!=document.querySelector("#pass2").value)
        document.querySelector("#pass2msg").innerHTML="Passwords Dismatch...!";
	else
        document.querySelector("#pass2msg").innerHTML="";
}