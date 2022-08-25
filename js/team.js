function show(id) {
    document.getElementById(id).classList.remove("d-none");
}
let profiles = document.getElementsByClassName("profile");
for(let i = 0; i < profiles.length; i++) {
    profiles[i].getElementsByClassName('close')[0].addEventListener("click", ()=>{
        profiles[i].classList.add("d-none");
    });
}