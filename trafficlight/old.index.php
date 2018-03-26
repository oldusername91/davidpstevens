<div id="main">
  <div id="controls">
    <div class="cb" id="gored" onclick="gored()">
      Red
    </div>
    <div class="cb" id="gogreen" onclick="gogreen()">
      Green
    </div>
  </div>
  <div id="mcontainer">
    <div class="light" id="red">
    </div>

    <div class="light off" id="yellow">
    </div>

    <div class="light off" id="green">
    </div>
  </div>
</div>
<script>
  function gogreen()
  {

    if (document.getElementById('green').classList.contains('off'))
    {
      window.setTimeout(function(){
        r = document.getElementById('red');
        g = document.getElementById('green');

        r.classList.add('off');
        g.classList.remove('off');
      }, 500);
    }
  }

  function gored()
  {
    if (document.getElementById('red').classList.contains('off'))
    {
      window.setTimeout(function(){
        y = document.getElementById('yellow');
        g = document.getElementById('green');

        g.classList.add('off');
        y.classList.remove('off');

        window.setTimeout(function(){
          r = document.getElementById('red');
          y = document.getElementById('yellow');

          y.classList.add('off');
          r.classList.remove('off');
        }, 3000);
      }, 500);
    }
  }
</script>
<style>

#main{
  margin: 0 auto;
  display: flex;
  height: 100%;
}
.cb{
  cursor:pointer;
  width:60%;
  text-align: center;
  height:50%;
  font-size: 30px;
  display:flex;
  align-items:center;
  margin: 5px auto;
  border:1px solid black;
  border-radius: 10px;
  background-color: white;
  justify-content:space-evenly;
}
#controls{
  width:200px;
  height:200px;
  background-color:silver;
  display: flex;
  flex-direction: column;
}
#mcontainer{
  padding; 0;
  background-color:black;
  width:500px;
  height:100%;
  display:flex;
  flex-direction: column;
  border-radius: 10px;
}
.light{
  flex: 1 1 auto;
  border-radius: 50%;
  margin: 2% 20%;

}
#gored{
  color:red;
}
#goreen{
  color:green;
}
#red{
  background-color:red;
}
#yellow{
  background-color:yellow;
}
#green{
  background-color:green;
}
.off{
  opacity:.02;
}

#Controls{
  display:flex;
  flex-direction: row;
  flex-grow: 1;
}
</style>
