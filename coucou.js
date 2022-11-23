function coucou(){
   // console.log("Coucou");
   alert("coucou");
}
function afficheErreurAge(valeurMessage){
    //recuperer ma div alert
    let div_alert_age=document.getElementById("alertAge");
   
    //modifier le style pour enlever le display none
    div_alert_age.style="";
    //TODO:modifier le message
    div_alert_age.innerHTML=valeurMessage;

    //TODO:Desactiver le bouton de création
    let btn=document.getElementById("btnValidation").disabled="disabled";
}
function cacheErreurAge(){
     //recuperer ma div alert
     let div_alert_age=document.getElementById("alertAge");
   
    //modifier le style pour ajouter le display none
    div_alert_age.style="display:none";

     //TODO:Activer le bouton de création
     let btn=document.getElementById("btnValidation").disabled="";

}

function getAge(){

   //console.log(document.getElementById("floatingAge"));
   let ageDepuisDOM=document.getElementById("floatingAge").value;
   
   let age=25;
   age=ageDepuisDOM;
   let message=""
   if(age<18){
       message="L'utilisateur dois être majeur";
       afficheErreurAge(message);
   }
   else{
       message="majeur";
       cacheErreurAge()
   }
 //  alert(message);
   //ternaire
   let message2= (age<18)?"mineur":"majeure";
   console.log(message2);
  
}
function showError(target,message){
    document.getElementById(target).innerHTML=message;
    document.getElementById(target).style.display="";
  
}
function hideError(target,message){
    document.getElementById(target).innerHTML="";
    document.getElementById(target).style.display="none";
  
}
function verifInput(inputName,regExp,message){
    let value=document.getElementById(inputName).value;
    let retour= value.match(regExp);
    if(!retour){
        showError(inputName+"Error",message)
    }
    else{
        hideError(inputName+"Error","")
    }
    return retour!=null;}
function verifNom(){
   
    return  verifInput("floatingInput",/^[A-Za-z éèêâ]+$/,"Le nom ne dois contenir que des lettres")

    /* let nomValue=document.getElementById("floatingInput").value;
    let regex=/^[A-Za-z éèêâ]+$/
    let retour= nomValue.match(regex)!=null;
    if(!retour){
        showError("floatingInputError","Le nom ne dois contenir que des lettres")
    }
    else{
        showError("floatingInputError","")
    }
    return retour;*/
}
function verifPrenom(){
    return  verifInput("floatingPrenom",/^[A-Za-z éèêâ]+$/,"Le prénom ne dois contenir que des lettres")

  /*  let prenomValue=document.getElementById("floatingPrenom").value;
    let regex=/^[A-Za-z éèêâ]+$/
    return nomValue.match(regex)!=null;*/
}
function verifContrat(){
    let nomValue=document.getElementById("contratCheck").value;
    return nomValue.checked;
}
function verifPass(){
    let passwordValue=document.getElementById("floatingPWD").value;
    let passwordValueCheck=document.getElementById("floatingPWD2").value;
    let regex=/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/
    if( passwordValue==passwordValueCheck && passwordValue!=""&&
    passwordValue.match(regex)!=null ){
       // let btn=document.getElementById("btnValidation").disabled="";
      hideError("floatingPWDError","");
        return true;
    }
    else{
        if(passwordValue.match(regex)!=null){
            showError("floatingPWDError","Mot de passe différents")
        }
        else{
            showError("floatingPWDError","Le mot de passe dois faire 8 caractères, au moins 1 chiffres, une lettre majuscule, une lettre minuscule et un caractère spécial")
      
           
        }
    }
    return false;
  
}
function verifEmail(){
    return  verifInput("floatingEmail", /^[A-Za-z0-9]+@gmail.com$/,"l'email dois être un gmail valide")

   /* let emailValue=document.getElementById("floatingEmail").value;
    const regex = /^[A-Za-z0-9]+@gmail.com$/;
    return emailValue.match(regex)!=null;*/

}
function verifForm(){
   // return verifPass()&&verifEmail()&&verifNom()&&verifPrenom()&&verifContrat();
   return verifNom()&&verifPrenom()&&verifEmail()&&verifPass();
}
//let btn=document.getElementById("btnValidation").disabled="disabled";
console.log("fdsf");

let personne = {nom:"Hoareau", prenom:"JP", age:25}; 

let texte = "";
let attribut;
for (attribut in personne) {
  texte += personne[attribut];
}
console.log(texte);

	

 