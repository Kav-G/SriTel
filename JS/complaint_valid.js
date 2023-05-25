let form = document.getElementById('com_form');

form.addEventListener('submit', event => {

    //let mobile = document.getElementsByClassName('contact');

    let mobile = document.getElementById('contact');
    validity = true;

    //mobile.value = "321";
        
    let tel_expression = /^[0-9]{10}$/;

    if (mobile.value.match(tel_expression) == null){
        mobile.style.border = "1px solid rgba(250, 39, 39, 0.801)";
        mobile.style.backgroundColor = "rgba(238, 156, 156, 0.788)";
        mobile.value = "";
        mobile.placeholder = "Wrong Mobile Format!";
        validity = false;
    }

    if(validity == false)
        event.preventDefault();

    return validity;

});