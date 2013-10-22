/**
 * Created with JetBrains PhpStorm.
 * User: Josh
 * Date: 10/22/13
 * Time: 4:27 PM
 * To change this template use File | Settings | File Templates.
 */
function order_validate(){

    if (document.getElementById("name").value == ""){
        document.getElementById("name_label").style.color = "red";
        document.getElementById("name_label").innerHTML = "Your Name is Required";
    }else
    if (document.getElementById("address").value == ""){
        document.getElementById("address_label").style.color = "red";
        document.getElementById("address_label").innerHTML = "Your Address is Required";
    }else
    if (document.getElementById("city").value == ""){
        document.getElementById("city_label").style.color = "red";
        document.getElementById("city_label").innerHTML = "Your City is Required";
    }else
    if (document.getElementById("state").value == ""){
        document.getElementById("state_label").style.color = "red";
        document.getElementById("state_label").innerHTML = "Your State is Required";
    }else
    if (document.getElementById("zipcode").value == ""){
        document.getElementById("zipcode_label").style.color = "red";
        document.getElementById("zipcode_label").innerHTML = "Your Zipcode is Required";
    }else
    if (document.getElementById("email").value == ""){
        document.getElementById("email_label").style.color = "red";
        document.getElementById("email_label").innerHTML = "Your Email is Required";
    }else
    if (document.getElementById("creaditcard").value ==""){
        document.getElementById("creditcard_label").style.color = "red";
        document.getElementById("creditcard_label").innerHTML = "Your Credit Card Number is Required";
    }else{
        window.location.replace("order_thanks.php");
    }
}
