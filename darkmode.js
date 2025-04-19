let darkmode = localStorage.getItem('darkmode'); 
const themeSwitch = document.getElementById('theme-switch');

const enableDarkmode = () => {
    document.body.classList.add('darkmode');
    localStorage.setItem('darkmode', 'active');
};

const disableDarkmode = () => {
    document.body.classList.remove('darkmode');
    localStorage.setItem('darkmode', null);
};

// Default Mode
if (darkmode === "active") enableDarkmode();

// Toggle dark mode when button is clicked
themeSwitch.addEventListener("click", () => {
    darkmode = localStorage.getItem('darkmode');
    darkmode !== "active" ? enableDarkmode() : disableDarkmode();
});


 // Fun Mode (Do not uncomment the last lines of code)
/*
 setInterval(() => {
     darkmode = localStorage.getItem('darkmode');
     darkmode !== "active" ? enableDarkmode() : disableDarkmode();
 }, 10); // Toggle every 2 seconds
*/