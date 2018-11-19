function outputHeader() {
    document.write('<header>');
    document.write('<a href="../html/userFeed.html"><img src="../images/Logo1.png" title="Agora Logo" alt="Agora Logo" id="logo"/></a>');
    document.write('<h3><a href="../html/userFeed.html">Agora</a></h3>');
    document.write('<form>');
    document.write('<label>Search: </label>');
    document.write('<input type="text" title="Search" placeholder="Input Keywords for Search"/>');
    document.write('<input type="submit" title="SubmitSearch" value="Search"/>');
    document.write('</form>');
    document.write('<a href="../html/login.html">Login</a>');
    document.write('<a href="../html/register.html">Register</a>');
    document.write('</header>');
}

function outputFooter() {
    document.write("<footer>");
    document.write("<p>&copy Bolles, Runnebohm, Sokeland, and Stull; Built for CS310 Project</p>");
    document.write("</footer>");
}