function Post(userImage, userName, userId, title, text) {
    this.userImage = userImage;
    this.userName = userName;
    this.userId = userId;
    this.title = title;
    this.text = text;
}

let post1 = new Post(
    "user-face.jpg",
    "John Doe",
    "0",
    "This is an example of a post without any media and only text."
);

let post2 = new Post(
    "user2-face.jpg",
    "Jane Smith",
    "1",
    "This is an example of another post."
);

let post3 = new Post(
    "user3-face.jpg",
    "Peter Parker",
    "2",
    "Post",
);

let post4 = new Post(
    "me.jpg",
    "Austin Bolles",
    "3",
    "This website is currently under construction and it will be better than ever",
);

let allPosts = [post1, post2, post3, post4];