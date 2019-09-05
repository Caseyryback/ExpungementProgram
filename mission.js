function imgRandom() {
   
   var target = document.getElementById("target");
     
   var myImages = new Array();
    myImages[5] = "_images/people1.jpg";
    myImages[1] = "_images/people2.jpg";
    myImages[2] = "_images/people3.jpg";
    myImages[3] = "_images/people4.jpg";
    myImages[4] = "_images/people5.jpg";
     
     
    var rnd = Math.floor(Math.random() * myImages.length);
    if (rnd == 0) {
        rnd = 1;
    }
    console.log(rnd);
    target.src=(myImages[rnd]);
}
    document.getElementById("submit").addEventListener("click", imgRandom);