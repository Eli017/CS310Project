function outputHeader() {
    document.write('<header>');
    document.write('<a href="../pages/userFeed.html"><img src="../assets/Logo1.png" title="Agora Logo" alt="Agora Logo" id="logo"/></a>');
    document.write('<a href="../pages/userFeed.html">Agora</a>');
    document.write('<form>');
    document.write('<label>Search: </label>');
    document.write('<input type="text" title="Search" placeholder="Input Keywords for Search"/>');
    document.write('<input type="submit" title="SubmitSearch" value="Search"/>');
    document.write('</form>');
    document.write('<a href="../pages/login.html">Login</a>');
    document.write('<a href="../pages/register.html">Register</a>');
    document.write('</header>');
}

function outputFooter() {
    document.write("<footer>");
    document.write("<p>&copy Bolles, Runnebohm, Sokeland, and Stull; Built for CS310 Project</p>");
    document.write("</footer>");
}