  /*Val. Script*/
  
  <script>
  
  function validate(form)
 {
 	
function validateForename(field)
{
    if (field == "") { return "O campo Primeiro Nome não foi preenchido.\n"; }
    else {return "";}
};

function validateSurname(field)
 {
    if (field == "") { return "O campo Segundo Nome não foi preenchido.\n";}
    else {
    return "";}
};

function validateCompany(field)
 {
    if (field == "") { return "O campo Empresa não foi preenchido.\n";}
    else {
    return "";}
};

function validaterua(field)
 {
    if (field == "") { return "No Street was entered.\n";}
    else {
    return "";}
};
 
 function validatenumero(field)
 {
    if (field == "") { return "No no was entered.\n";}
    else {
    return "";}
};

function validatecep(field)
 {
    if (field == "") { return "No cep was entered.\n";}
    else if (field.length != 8) { return "invalido\n"; }
    else {
    return "";}
};
 
function validateCnpj(field)
 {
 
 
fator = 5;
total = 0;
for(i=0, i<12, i++) {
total += form.cnpj.charat(i)*fator;
fator--;
if(fator=2) {fator=9;}}

rest = total%11;
if(rest<2){x=0}
else {x=11-rest}

fator2 = 6
total2 = 0
for(j=0, j<13, j++) {
total2 += form.cnpj.charat(i)*fator2;
fator2--;
if(fator2=2) {fator=9;}}
rest2 = total2%11
if(rest2<2){y=0}
else {y=11-rest2}

if (field == "") { return "No Cnpj was entered.\n";}; 
 
else if (field.length != 14
	    			|| cnpj == "00000000000000" 
	    			|| cnpj == "11111111111111" 
	    			|| cnpj == "22222222222222" 
	    			|| cnpj == "33333333333333" 
	    			|| cnpj == "44444444444444" 
	    			|| cnpj == "55555555555555" 
	    			|| cnpj == "66666666666666" 
	    			|| cnpj == "77777777777777" 
	    			|| cnpj == "88888888888888" 
	    			|| cnpj == "99999999999999") {
		        return "Cnpj inválido!\n"; };

else if(x != form.cnpj.charat(12)) { return "Cnpj inválido\m"; }
else { return true; }

else if(y != form.cnpj.charat(13)) { return "Cnpj inválido\n"; }
else { return true; }

else { return "";} };


function validateEmail(field)
 {
    if (field == "") { return "No Email was entered.\n"; }

        else if (!((field.indexOf(".") > 0) &&
                   (field.indexOf("@") > 0)) ||
                  /[^a-zA-Z0-9.@_-]/.test(field)) {
        return "Por favor, insira um endereço de e-mail válido.\n"; }
        else {
    return ""; }
};

function validate_password(field) {
if (field == "") { return "No Password was entered\n"; }
else if (field != form.passtwo.value) { return "Senhas nao convergem\n"; }
else if (field.length < 6) 
{ return "Passwords must be at least 6 characters\n"; }
else { return ""; }

var fail = eval("validateForename(form.f_name.value) + validateSurname(form.l_name.value) + validateCompany(form.company.value) + validateEmail(form.email.value) + validateCnpj(form.cnpj.value) + validate_password(form.pass.value)");

if (fail == "") 
{ return true; }
else { alert('Para efetuar o cadastro o Sr(a). deve corrigir o(s) seguinte(s) erro(s):\n\n' fail); return false; }


}