function Post(userImage, userName, userId, title, text) {
    this.userImage = userImage;
    this.userName = userName;
    this.userId = userId;
    this.title = title;
    this.text = text;
}

let post1 = new Post(
    "profileFiller.jpg",
    "John Doe",
    "0",
    "Post Title 1",
    "This is an example of a post without any media and only text."
);

let post2 = new Post(
    "profileFiller.jpg",
    "Jane Smith",
    "1",
    "Post Title 2",
    "This is an example of another post."
);

let post3 = new Post(
    "profileFiller.jpg",
    "Peter Parker",
    "2",
    "Post 3",
    "Post",
);

let allPosts = [post1, post2, post3];