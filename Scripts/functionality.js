// Get the elements
const mainPage = document.getElementById('main-page');
const dataNavLink = document.getElementById('data-nav-link');
const personTable = document.getElementById('person-table');
const movieTable = document.getElementById('movie-table');
const movieNavLink = document.getElementById('movie-nav-link');
const songsNavLink = document.getElementById('songs-nav-link');
const songsTable = document.getElementById('songs-table');

// Function to handle the click event
function handleNavLinkClick(showTable, hideTable, hideTable2) {
    mainPage.classList.add('d-none');
    showTable.classList.remove('d-none');
    hideTable.classList.add('d-none');
    hideTable2.classList.add('d-none');
}

// Pages
dataNavLink.addEventListener('click', () => {
    handleNavLinkClick(personTable, movieTable, songsTable);
});

movieNavLink.addEventListener('click', () => {
    handleNavLinkClick(movieTable, personTable, songsTable);
});

songsNavLink.addEventListener('click', () => {
    handleNavLinkClick(songsTable, movieTable, personTable);
});

var currentLink = window.location.href;
const MichaelJ = document.getElementById('MichaelJ')

if (currentLink === 'https://bs-db-p.ddev.site/Michael') {
  // Show something specific for the given link
  mainPage.classList.add('d-none')
  MichaelJ.classList.remove('d-none')

} else {
  // Show a default content if the link doesn't match
  console.log("No Person found");
}




