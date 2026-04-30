document.addEventListener("DOMContentLoaded", function() {
    // 1. Αυτόματη προσθήκη του reveal στα παιδιά του container
    const container = document.querySelector('main'); // ή .content
    if (container) {
        const children = container.children;
        for (let child of children) {
            child.classList.add("reveal");
        }
    }

    // 2. ΕΚΤΕΛΕΣΗ ΤΟΥ ΕΛΕΓΧΟΥ ΑΜΕΣΩΣ ΜΟΛΙΣ ΦΟΡΤΩΣΕΙ Η ΣΕΛΙΔΑ
    reveal(); 
});

function reveal() {
    var reveals = document.querySelectorAll(".reveal");
    for (var i = 0; i < reveals.length; i++) {
        var windowHeight = window.innerHeight;
        var elementTop = reveals[i].getBoundingClientRect().top;
        var elementVisible = 100; 

        // Αν το στοιχείο είναι ήδη μέσα στο "κάδρο" της οθόνης
        if (elementTop < windowHeight - elementVisible) {
            reveals[i].classList.add("active");
        }
    }
}

window.addEventListener("scroll", reveal);