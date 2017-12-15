


     function imgRandom() {
         
       var myImages = new Array();
        myImages[5] = "_images/people1.jpg";
        myImages[1] = "_images/people2.jpg";
        myImages[2] = "_images/people3.jpg";
        myImages[3] = "_images/people4.jpg";
        myImages[4] = "_images/people5.jpg";
         
         
            var rnd = Math.floor(Math.random() * people1.length);
    if (rnd == 0) {
            rnd = 1;
    }
    document.write(<img class="img-rounded" src="_images/people[i]">);
}
     