function scan() {
    var str = "INCHL1033011722E37<<<<<<<<<<<0102166M2102160CHL20722965<2<5 BARAHONA<FERNANDEZ<<MANUEL<DIE";
    var res = str.split("<");
    for(var n = 0; n<10; n++){
      for( var i = 0; i < res.length; i++){
        if ( res[i] === "") {
            res.splice(i, 1); 
        }
      }
    }
    var num = res[1].match(/\d+/g);
    var letter = res[3].match(/[a-zA-Z]+/g);
    document.getElementById("nomb").value = res[5]+" "+res[6];
    document.getElementById("ap").value = letter[0]+" "+res[4];
    document.getElementById("rut").value = num[2];
    document.getElementById("ver").value = res[2]
    
  }