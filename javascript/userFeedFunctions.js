function outputPost(userImage, userName, userId, title, text) {
        document.write("<article class='post'>");
            document.write("<img src='../assets/"+userImage+"' alt='Profile Picture' title='Profile Picture' class='profilePicture'>");
            document.write("<h4><a href='../pages/profile.php?id="+userId+"'>"+userName+"</a></h4>");
            document.write("<p class='title'><a href='../pages/page.html'>"+title+"</a></p>");
            document.write("<hr/>");
            document.write("<p>"+text+"</p>");
        document.write("</article>");
}

function displayAllPosts() {
    document.write("<section class='allPosts'>");
    for (let i = 0; i < allPosts.length; i++) {
        let currentPost = allPosts[i];
        outputPost(currentPost.userImage, currentPost.userName, currentPost.userId, currentPost.title, currentPost.text);
    }
    document.write("</section>");
}