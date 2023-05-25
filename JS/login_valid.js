let form = document.getElementById('register');

form.addEventListener('submit', event => {

    //let mobile = document.getElementsByClassName('contact');

    let mobile = document.getElementById('contact');

    console.log(mobile);

    validity = true;

    //mobile.value = "321";
        
    let tel_expression = /^[0-9]{10}$/;

    if (mobile.value.match(tel_expression) == null){
        mobile.value = "";
        mobile.placeholder = "Wrong Mobile Format!";
        validity = false;
    }

    if(validity == false)
        event.preventDefault();

    return validity;

});