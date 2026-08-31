import { setFieldError, clearAllErrors } from "./errorMessageHandler.js";
const fieldIds = ["currentPassword", , "newPassword", "confirmPassword"];


let profileBlock = document.querySelector("#profile-block");
let editPassword =  document.querySelector("#edit-password");
let editName = document.querySelector("#edit-name")
let editMobile = document.querySelector("#edit-mobile")
let editAddress = document.querySelector("#edit-address")



document.querySelector("#profile-changePassword-btn").addEventListener("click", () => {
    profileBlock.querySelectorAll("button").forEach(el => el.disabled = true);
    profileBlock.classList.add("edit");
    editPassword.classList.add("edit-cards");
})

document.querySelector("#profile-cancelPassword-btn").addEventListener("click", () => {
    profileBlock.querySelectorAll("button").forEach(el => el.disabled = false);
    profileBlock.classList.remove("edit");
    editPassword.classList.remove("edit-cards");
})

document.querySelector("#profile-changeName-btn").addEventListener("click", () => {
    profileBlock.querySelectorAll("button").forEach(el => el.disabled = true);
    profileBlock.classList.add("edit");
    editName.classList.add("edit-cards");
})

document.querySelector("#profile-cancelName-btn").addEventListener("click", () => {
    profileBlock.querySelectorAll("button").forEach(el => el.disabled = false);
    profileBlock.classList.remove("edit");
    editName.classList.remove("edit-cards");
})

document.querySelector("#profile-changeMobile-btn").addEventListener("click", () => {
    profileBlock.querySelectorAll("button").forEach(el => el.disabled = true);
    profileBlock.classList.add("edit");
    editMobile.classList.add("edit-cards");
})

document.querySelector("#profile-cancelMobile-btn").addEventListener("click", () => {
    profileBlock.querySelectorAll("button").forEach(el => el.disabled = false);
    profileBlock.classList.remove("edit");
    editMobile.classList.remove("edit-cards");
})

document.querySelector("#profile-changeAddress-btn").addEventListener("click", () => {
    profileBlock.querySelectorAll("button").forEach(el => el.disabled = true);
    profileBlock.classList.add("edit");
    editAddress.classList.add("edit-cards");
})

document.querySelector("#profile-cancelAddress-btn").addEventListener("click", () => {
    profileBlock.querySelectorAll("button").forEach(el => el.disabled = false);
    profileBlock.classList.remove("edit");
    editAddress.classList.remove("edit-cards");
})


const savePassBtn =  document.querySelector("#profile-savePassword-btn");

savePassBtn.addEventListener("click", async (e) => {
    e.preventDefault();
    clearAllErrors(fieldIds, "profile-");
    savePassBtn.disabled = true;
    savePassBtn.innerText = "Saving...";

    const currentPasswordVal = document.querySelector("#profile-currentPassword").value.trim();
    const newPasswordVal = document.querySelector("#profile-newPassword").value.trim();
    const confirmPasswordVal = document.querySelector("#profile-confirmPassword").value.trim();

    try{

        const formData = new FormData();
        formData.append("currentPassword", currentPasswordVal);
        formData.append("newPassword", newPasswordVal);
        formData.append("confirmPassword", confirmPasswordVal);

        const response = await fetch("../app/api/updatePassword.inc.php", {
            method: "POST",
            body: formData
        });

        const result = await response.json();

        if(result.success){
            location.reload();
        }
        else{
            if(result.message){
                alert(result.message);
            }
            else if(result.errors){
                Object.entries(result.errors).forEach(([id, msg]) => {
                    setFieldError(id, msg, "profile-");
                })
            }
            else{
                alert("Something Went Wrong. Please try again later");
            }
        }

    }catch(err){
        console.error("profile Error: ",err);
        alert("Something went wrong. Please try again later");
    }finally{
        savePassBtn.disabled = false;
        savePassBtn.innerText = "Save";
    }
})




