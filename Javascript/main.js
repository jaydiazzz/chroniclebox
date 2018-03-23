var con = document.querySelector(".container");
con.onclick = function(){
  con.classList.toggle("change");
  document.querySelector(".nav").classList.toggle("open");
}
function onReady(callback){
  var intervalID=window.setInterval(checkReady,1000);
  function checkReady(){
    if("#cb"[0]!==undefined){
      window.clearInterval(intervalID);
      callback.call(this);
    }
  }
}
function show(id,value){
  document.getElementById(id).style.opacity=value?"1":"0";
}
onReady(function(){
  show("body",!0);
  show("cb",!1);
  document.querySelector("#cb").style.zIndex = "-10";
  document.querySelector("#body").style.height = 100 + "%";
});
document.querySelector("#hideshow").onclick = function(event){
  document.querySelector("#mc_embed_signup").style.display = "block";
};
document.querySelector(".hideshow").onclick = function(event){
  document.querySelector("#mc_embed_signup").style.display = "none";
};
window.addEventListener( 'keypress', (function() {
  var strToType = 'chronicle',
      strTyped = '';
  return function( event ) {
      var character = String.fromCharCode(event.which);
      strTyped += character;
      if (strToType.indexOf(strTyped) === -1) strTyped = '';
      else if (strTyped === strToType) {
          strTyped = '';
          var burgers = document.createElement("div");
          document.body.appendChild(burgers);
          burgers.classList.add("easter");
          var h1 = document.createElement("video");
          document.querySelector(".easter").appendChild(h1);
      }
  };
}()) );
