var portfolio = document.getElementById('portfolio');
var about = document.getElementById('about');
var contact = document.getElementById('contact');
var contents = document.getElementById('contents');

var contentAbout = document.getElementById('contentAbout');
var contentPortfolio = document.getElementById('contentPortfolio');
var contentContact = document.getElementById('contentContact');

var portfolioLink = document.getElementById('portfolioLink');
var aboutLink = document.getElementById('aboutLink');
var contactLink = document.getElementById('contactLink');

about.addEventListener('click', showAbout);
portfolio.addEventListener('click', showPortfolio);
contact.addEventListener('click', showContact);

function showAbout(){
    contentAbout.style.display = "block";
    contentPortfolio.style.display = "none";
    contentContact.style.display = "none";

    portfolioLink.className = "nav-link text-white";
    aboutLink.className = "text-danger nav-link";
    contactLink.className = "nav-link text-white";
}

function showPortfolio(){
    contentAbout.style.display = "none";
    contentPortfolio.style.display = "block";
    contentContact.style.display = "none";

    portfolioLink.className = "text-danger nav-link";
    aboutLink.className = "nav-link text-white";
    contactLink.className = "nav-link text-white";
}

function showContact(){
    contentAbout.style.display = "none";
    contentPortfolio.style.display = "none";
    contentContact.style.display = "block";

    portfolioLink.className = "nav-link text-white";
    aboutLink.className = "nav-link text-white";
    contactLink.className = "text-danger nav-link";
}