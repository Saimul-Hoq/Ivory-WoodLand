// document.querySelectorAll(".info-field .btn-icon").forEach(btn => {
//     btn.addEventListener("click", () => {
//         document.querySelector("#profile-block").classList.toggle("edit");
//     });
// });

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

document.querySelector("#profile-cancelPass-btn").addEventListener("click", () => {
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