// ===== script.js =====


document.addEventListener("DOMContentLoaded", () => {
        const militaryBtn = document.getElementById("military-btn");
    const militarySub = document.getElementById("military-sub");
    
    if (militaryBtn && militarySub) {
        militaryBtn.addEventListener("click", () => {
   
            if (militarySub.style.display === "grid") {
                militarySub.style.display = "none";
            } else {
                militarySub.style.display = "grid";
            }
        });
    }
});

