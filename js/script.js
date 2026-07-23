// ================================
// MOBILE MENU
// ================================
const menuBtn = document.querySelector(".menu-btn");
const navLinks = document.querySelector(".nav-links");
menuBtn.addEventListener("click", () => {
    navLinks.classList.toggle("active");
});
// ================================
// CLOSE MENU
// ================================
document.querySelectorAll(".nav-links a").forEach(link => {
    link.addEventListener("click", () => {
        navLinks.classList.remove("active");
    });
});
// ================================
// STICKY NAVBAR
// ================================
const navbar = document.querySelector(".navbar");
window.addEventListener("scroll", () => {
    if (window.scrollY > 50)
        navbar.classList.add("sticky");
    else
        navbar.classList.remove("sticky");
});
// ================================
// ACTIVE NAVBAR
// ================================
const sections = document.querySelectorAll("section");
const navItems = document.querySelectorAll(".nav-links a");
window.addEventListener("scroll", () => {
    let current = "";
    sections.forEach(section => {
        const sectionTop = section.offsetTop - 150;
        if (window.scrollY >= sectionTop)
            current = section.id;
    });
    navItems.forEach(link => {
        link.classList.remove("active");
        if (link.getAttribute("href") === "#" + current)
            link.classList.add("active");
    });
});
// ================================
// SCROLL TO TOP
// ================================
const scrollBtn = document.getElementById("scrollTopBtn");
window.addEventListener("scroll", () => {
    if (window.scrollY > 500)
        scrollBtn.classList.add("show");
    else
        scrollBtn.classList.remove("show");
});
scrollBtn.addEventListener("click", () => {
    window.scrollTo({
        top:0,
        behavior:"smooth"
    });
});
// ================================
// REVEAL ANIMATION
// ================================
const reveals = document.querySelectorAll("section");
function revealSections(){
    const trigger = window.innerHeight * 0.85;
    reveals.forEach(section=>{
        const top = section.getBoundingClientRect().top;
        if(top < trigger){
            section.classList.add("reveal");
            setTimeout(()=>{
                section.classList.add("active");
            },100);
        }
    });
}
window.addEventListener("scroll",revealSections);
window.addEventListener("load",revealSections);

function openCertificate(pdf){

    document.getElementById("certificateModal").style.display = "block";

    document.getElementById("certificateFrame").src = pdf;

}



function closeCertificate(){

    document.getElementById("certificateModal").style.display = "none";

    document.getElementById("certificateFrame").src = "";

}
window.onclick = function(event){

    let modal = document.getElementById("certificateModal");

    if(event.target == modal){

        closeCertificate();

    }

}