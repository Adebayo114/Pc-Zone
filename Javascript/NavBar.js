    function toggleMenu() {
        const menuOverlay = document.getElementById("menuOverlay");
        menuOverlay.style.display = menuOverlay.style.display === "flex" ? "none" : "flex";
    }
    
    function openSearch() {
        document.getElementById("searchOverlay").style.display = "flex";
    }
    
    function closeSearch() {
        document.getElementById("searchOverlay").style.display = "none";
    }
    