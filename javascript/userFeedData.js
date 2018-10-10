function Post(userImage, userName, title, media, text) {
    this.userImage = userImage;
    this.userName = userName;
    this.title = title;
    this.media = media;
    this.text = text;
}

let post1 = new Post(
    "profileFiller.jpg",
    "John Doe",
    "Post Title 1",
    null,
    "This is an example of a post without any media and only text."
);

let post2 = new Post(
    "profileFiller.jpg",
    "Jane Smith",
    "Post Title 2",
    "mukip.gif",
    "This is an example of a post with media, such as a GIF."
);

let post3 = new Post(
    "profileFiller.jpg",
    "Peter Parker",
    "Post Without Text",
    "postExample2.jpg",
    null
);
