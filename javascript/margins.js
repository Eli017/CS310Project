function outputHeader(name) {
    document.write('<header>');
    document.write('<a href="../pages/userFeed.php"><img src="../assets/Logo1.png" title="Agora Logo" alt="Agora Logo" id="logo"/></a>');
    document.write('<a href="../pages/userFeed.php">Agora</a>');
    welcomeUser(name);
    document.write('</header>');
}

function outputFooter() {
    document.write("<footer>");
    document.write("<p>&copy Bolles, Runnebohm, Sokeland, and Stull; Built for CS310 Project</p>");
    document.write("</footer>");
}

let searchTerm ="tacos";

function search(){
    let term = document.getElementById("searchBar").value;
    searchTerm=term;
    window.open("../pages/searchResults.html")
}