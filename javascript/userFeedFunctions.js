function outputPost(userImage, userName, title, text) {
        document.write("<article class='post'>");
            document.write("<img src='../images/"+userImage+"' alt='Profile Picture' title='Profile Picture' class='profilePicture'>");
            document.write("<h4>"+userName+"</h4>");
            document.write("<h5 class='title'>"+title+"</h5>");
            document.write("<hr/>");
            document.write("<p>"+text+"</p>");
        document.write("</article>");
}

function displayAllPosts() {
    document.write("<section class='allPosts'>");
    for (let i = 0; i < allPosts.length; i++) {
        let currentPost = allPosts[i];
        outputPost(currentPost.userImage, currentPost.userName, currentPost.title, currentPost.text);
    }
    document.write("</section>");
}