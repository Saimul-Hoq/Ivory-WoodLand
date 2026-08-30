import { setFieldError, clearAllErrors } from "./errorMessageHandler.js";
let ids = ["email", "password"];
const loginBtn = document.querySelector("#login-btn");

loginBtn.addEventListener("click", async function(e) {

    e.preventDefault();
    clearAllErrors(ids, "login-");
    loginBtn.disabled = true;
    loginBtn.innerText = "Logging In...";

    const email = document.querySelector("#login-email").value.trim();
    const password = document.querySelector("#login-password").value.trim();

    try{

        const formData = new FormData();
        formData.append("email", email);
        formData.append("password", password);

        const response = await fetch("../app/api/login.inc.php", {
            method: "POST",
            body: formData
        });

        const result = await response.json();

        if(result.success){
            window.location.replace("dashboard.php");
        }
        else{
            if(result.message){
                alert(result.message);
            }
            else if(result.errors){
                Object.entries(result.errors).forEach(([id, msg]) => {
                    setFieldError(id, msg, "login-");
                })
            }
            else{
                alert("Something Went Wrong. Please try again later");
            }
        }

    }catch(err){
        console.error("Login Error: ",err);
        alert("Something went wrong. Please try again later");
    }finally{
        loginBtn.disabled = false;
        loginBtn.innerText = "Login";
    }
    
})