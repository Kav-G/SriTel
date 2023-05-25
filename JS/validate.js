const fields = document.getElementsByClassName('validate');

const error = document.getElementsByClassName('error-msg');

submitbtn = document.getElementById('submitbtn');

let validity = true;

const form = document.getElementById('test');

form.addEventListener('submit', event => {

    validity = true;

    console.log('hey');
    console.log(fields);
    //gconsole.log(2);
    for(let i = 0; i < fields.length; i++){

        if(fields[i].value == ""){
            fields[i].style.border = "1px solid rgba(250, 39, 39, 0.801)";
            fields[i].style.backgroundColor = "rgba(238, 156, 156, 0.788)";
            fields[i].placeholder = "This Field is Compulsory!";
            validity = false;
        }
    }
        
    let nic_expression1 = /^[0-9]{9}[V|v]$/;
    let nic_expression2 = /^[0-9]{12}$/;
    let tel_expression = /^[0-9]{10}$/;

    if (fields[6].value != "" && fields[6].value.match(nic_expression1) == null){
        fields[6].style.border = "1px solid rgba(250, 39, 39, 0.801)";
        fields[6].style.backgroundColor = "rgba(238, 156, 156, 0.788)";
        fields[6].value = "";
        fields[6].placeholder = "Wrong NIC Format!";
        validity = false;
    }

    if (fields[0].value != "" && fields[0].value.match(tel_expression) == null){
        fields[0].style.border = "1px solid rgba(250, 39, 39, 0.801)";
        fields[0].style.backgroundColor = "rgba(238, 156, 156, 0.788)";
        fields[0].value = "";
        fields[0].placeholder = "Wrong Mobile Format!";
        validity = false;
    }

    if (fields[4].value != "" && fields[4].value.match(tel_expression) == null){
        fields[4].style.border = "1px solid rgba(250, 39, 39, 0.801)";
        fields[4].style.backgroundColor = "rgba(238, 156, 156, 0.788)";
        fields[4].value = "";
        fields[4].placeholder = "Wrong Telephone Format!";
        validity = false;
    }

    if(validity == false)
        event.preventDefault();

    return validity;

});


function checkExpressions(){

    let nic_expression1 = /^[0-9]{9}[V|v]$/;
    let nic_expression2 = /^[0-9]{10}$/;

    if(fields[6].value.match(nic_expression1) == null){

        fields[6].style.border = "1px solid rgba(250, 39, 39, 0.801)";
        fields[6].style.backgroundColor = "rgba(238, 156, 156, 0.788)";
        fields[6].value = "";
        fields[6].placeholder = "Wrong Format!";

    }

    return false;

}