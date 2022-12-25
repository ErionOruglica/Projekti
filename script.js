function validate(){
    let emaili = document.getElementById("adresaEmailit").value;
    let password = document.getElementById("pass").value;
		var atposition=emaili.indexOf("@");  
        var dotposition=emaili.lastIndexOf(".");  
    if(emaili==''){
        alert('Ju lutem shenoni E-mailin tuaj');
    }
    else if(atposition<1 || dotposition<atposition+2 || dotposition+2>=emaili.length){
        alert('E-maili duhet te permbaje @ dhe gjithashtu se paku 2 shkronja pas pikes');
    }
    else if(password==''){
        alert('Ju lutem mbushni fushen e fjalekalimit');
    }
    else if(document.getElementById("pass").value.length<6){
        alert("Fjalekalimi duhet te jete me i gjate se 6 karaktere");
    }
    else{
        alert("Jeni kycur me sukses! Tani do te ktheheni ne Home page");
        window.location="index.html";
    }
}