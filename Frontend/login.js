function showTab(tab) {
    document.querySelectorAll(".form").forEach(f => f.classList.remove("active"));
    document.querySelectorAll(".tab").forEach(t => t.classList.remove("active"));

    document.getElementById(tab).classList.add("active");

    if(tab === "login"){
        document.querySelectorAll(".tab")[0].classList.add("active");
    } else {
        document.querySelectorAll(".tab")[1].classList.add("active");
    }
}