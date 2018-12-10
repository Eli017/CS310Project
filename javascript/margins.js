function outputHeader() {
    document.write('<header>');
    document.write('<a href="../pages/userFeed.php"><img src="../assets/Logo1.png" title="Agora Logo" alt="Agora Logo" id="logo"/></a>');
    document.write('<a href="../pages/userFeed.php">Agora</a>');
    document.write('<form>');
    document.write('<label>Search: </label>');
    document.write('<input type="text" title="Search" placeholder="Input Keywords for Search" id="searchBar"/>');
    document.write('<input type="submit" title="SubmitSearch" value="Search" onClick="search()" />');
    document.write('</form>');
    document.write('<a href="../pages/login.html" class="userLoginRegister">Login</a>');
    document.write('<a href="../php/register.php" class="userLoginRegister">Register</a>');
    welcomeUser();
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