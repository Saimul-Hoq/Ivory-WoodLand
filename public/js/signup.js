import { setFieldError, clearAllErrors } from "./errorMessageHandler.js";
let ids = ["name", "email", "password", "mobile", "avatar", "address"];
const signupBtn = document.querySelector("#signup-register-btn");

signupBtn.addEventListener("click", async (e) => {
    e.preventDefault();
    clearAllErrors(ids, "signup-");
    signupBtn.disabled = true;
    signupBtn.innerText = "Signing Up...";

    const name = document.querySelector("#signup-name").value.trim();
    const email = document.querySelector("#signup-email").value.trim();
    const password = document.querySelector("#signup-password").value.trim();
    const mobile = document.querySelector("#signup-mobile").value.trim();
    const avatar = document.querySelector("#signup-avatar").files[0];
    const address = document.querySelector("#signup-address").value.trim();

    try{

        const formData = new FormData();
        formData.append("name", name);
        formData.append("email", email);
        formData.append("password", password);
        formData.append("mobile", mobile);
        formData.append("address", address);
        if(avatar){
            formData.append("avatar", avatar);
        }

        const response = await fetch("../app/api/signup.inc.php", {
            method: "POST", 
            body: formData
        });

        const result = await response.json();

        if(result.success){
            alert("Account Successfully Created");
            Window.location.href = "login.php";
        }
        else{
            if(result.message){
                alert(result.message);
            }
            else if(result.errors){
                Object.entries(result.errors).forEach(([id, message]) => {
                    setFieldError(`${id}`, message, "signup-");
                })
            }
            else{
                alert("Signup Failed. Please try again");
            }
        }

    }catch(err){
        console.log("Signup Error: ", err);
        alert("Something went wrong. Please try again later");
    }finally{
        signupBtn.disabled = false;
        signupBtn.innerText = "Register";
    }

})