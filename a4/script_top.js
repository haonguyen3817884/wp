
function dayHour(idem){  
    var x = ""
    
    value = dayHourArrayJS[idem];
    for (key in value)
    {
        value1 = value[key];
        x += key + ": " + value1 + '<br>';
      }
    document.getElementById(idem+"_time").innerHTML = x;
    };
    /*
  This function use to toogle all the synopsis contents.
  Specific content will pop-up when use click specific "More details" on Now Showing area.
  */
  function hide() {
      var x, i;
      x = document.querySelectorAll(".toggle");
      for (i = 0; i < x.length; i++) {
          x[i].style.display = "none";
      }
      console.log(x);
  }
  function synopsisButton(idem){
    var x = ""
    value = movieArrayJS[idem]['screening'];
    console.log(value);
    leng = Object.keys(value).length;
    console.log(leng);
    for (key in value)
    {
        value1 = value[key];
        console.log(value1)
        x += key + " " + value1;
      }
      console.log(x);
  var min = 0, max = 7
  for(i=1; i <=leng; i++, min+=7, max +=7){
      text = x.slice(min, max)
      console.log(text)
      document.getElementById(idem+'-button'+i).innerHTML = text;
      }
  }
  
  function hideBlankContent(){
    var id ="";
    for (key in dayHourArrayJS){
    console.log(key);
    for (i=1; i<8; i++){
      id = key +'-button' +i;
      x = document.getElementById(id).textContent;
      console.log(x);
      leng = x.length;
      console.log(leng);
      console.log(leng == 0);
      if (leng == 0){
        document.getElementById(id).style.display = 'none';
      }
    }
  }
  }
  
  