function outputHeader() {
    document.write('<header>');
    document.write('<a href="../html/userFeed.html"><img src="../images/Logo1.png" title="Agora Logo" alt="Agora Logo" id="logo"/></a>');
    document.write('<h3><a href="../html/userFeed.html">Agora</a></h3>');
    document.write('<form>');
    document.write('<label>Search: </label>');
    document.write('<input type="text" title="Search" placeholder="Input Keywords for Search"/>');
    document.write('<input type="submit" title="SubmitSearch" value="Search"/>');
    // welcomeUser("user"); //Will change based on user
    document.write('</form>');
    document.write('<form action="../html/login.html" class="userLoginRegister">');
    document.write('<input type="submit" value="Login" title="Login"/>');
    document.write('</form>');
    document.write('<form action="../html/register.html" class="userLoginRegister">');
    document.write('<input type="submit" value="Register" title="Register"/>');
    document.write('</form>');
    document.write('</header>');
}

function outputFooter() {
    document.write("<footer>");
    document.write("<p>&copy Bolles, Runnebohm, Sokeland, and Stull</p>");
    document.write("<p>Built for CS310 Project</p>");
    document.write("</footer>");
}