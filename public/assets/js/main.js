const nav_item = document.getElementById("nav_item");
const nav_bar = document.getElementById("hamberger");

nav_bar.addEventListener("click",()=>{
    nav_item.classList.toggle('top-[56px]');
});

const profilePic = document.getElementById('profile_pic');
const inputFile = document.getElementById('input-file');

inputFile.onchange = function()
{
    profilePic.src = URL.createObjectURL(inputFile.files[0]);
}

const dropDown = document.getElementById("dropdown");
const dropMenu = document.getElementById("drop-menu");

dropMenu.addEventListener("click",()=>{
    dropDown.classList.toggle('hidden');
});