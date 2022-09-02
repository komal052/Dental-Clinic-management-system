<script type="text/javascript">
function calcular() {
  var n = parseInt(document.getElementById('n01').value);
  // var n2 = parseInt(document.getElementById('n2').value);
  document.getElementById('t').value = n ;
}
</script>
<form action="" method="post">
  N1: <input type="text" id="n01"  /> <br> <!-- N2: <input type="text" id="n2"   /> --> <br>

  <input type="text" id="t" name="t" onclick="calcular()">
</form>