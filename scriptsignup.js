function validate(){
    let emaili = document.getElementById("adresaEmailit").value;
    let password = document.getElementById("pass").value;
    let konfirmo = document.getElementById("cnfrmPass").value;
    let emri = document.getElementById("emri").value;
    let mbiemri = document.getElementById("mbiemri").value;
    let check = document.getElementById("cnfrmPass").value;
		var atposition=emaili.indexOf("@");  
        var dotposition=emaili.lastIndexOf(".");  
        var pwd_expression = /^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$%^&*-])/;
		var shkronjat = /^[A-Za-z]+$/;
    if(emaili==''){
        alert('Ju lutem shenoni E-mailin tuaj');
    }
    else if(atposition<1 || dotposition<atposition+2 || dotposition+2>=emaili.length){
        alert('E-maili duhet te permbaje @ dhe gjithashtu se paku 2 shkronja pas pikes');
    }
    else if(password==''){
        alert('Ju lutem mbushni fushen e fjalekalimit');
    }
    else if(konfirmo=='')
		{
			alert('Plotesoni fushen e Konfirmimit');
		}
		else if(!pwd_expression.test(konfirmo))
		{
			alert ('Nje karakter duhet te filloj me shkronje te madhe, Nje me shkronje te vogel, Nje karakter special dhe nje numer duhet te shenohet ne fushen e fjalekalimit');
		}
		else if(password != konfirmo)
		{
			alert ('Fjalekalimet nuk perputhen');
		}
		else if(document.getElementById("pass").value.length < 6)
		{
			alert ('Fjalekalimi duhet te jete me i gjate se 6 karaktere');
		}
		else if(document.getElementById("pass").value.length > 12)
		{
			alert ('Gjatesia maksimale e fjalekalimit duhet te jete 12 karaktere');
		}
        else if(emri==''){
            alert("Ju lutem mbushni fushen e emrit")
        }
        else if(!shkronjat.test(emri)){
            alert("Emri duhet te permbaje vetem shkronja")
        }
        else if(mbiemri==''){
            alert("Ju lutem mbushni fushen e mbiemrit")
        }
        else if(!shkronjat.test(mbiemri)){
            alert("Mbiemri duhet te permbaje vetem shkronja")
        }
    else{
        alert("Jeni kycur me sukses! Tani do te ktheheni ne Home page");
        window.location="loginpage.html";
    }
}