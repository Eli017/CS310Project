function generatepostlist(number, nameList, postList){
    for (let i=0;i<number;i++){
        document.write( "<tr><td></td><td><section class='post'><p class='username'>"+nameList[i]+"</p>"+postList[i]+"</section></td></tr>");
    }
}

function welcomeUser(user) {
    document.write("<a href='../pages/profile.php'>"+user+"</a>");
}

let namelist= ["Henry ford","H.G Wells","Frank Sinatra","Marc Antony","Billy Gelespie","Marco Rubio"];
let postlist= ["That’s it! You flamboyant chicken! You’ll pay for your crimes against humanity!","If your dad was so great why’d he raise such a dipshit","Them: You're very mature for your age.<br> Me: Thanks, it's the trauma.","Scottish women age gracefully. Unfortunately, you've always been a rebel.","I play golf. I’m not good at golf, I never got good. I never got a hole-in-one. But I did hit a guy, and that’s way more satisfying.","My father named me ‘additional fear’ because he wasn’t ready for parenthood."];