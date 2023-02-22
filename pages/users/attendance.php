  <div class="container bg-light" aria='hidden'>
  <div class="col-md-12 text-center">
  <div class="clock h1">
  </div>
	<p id="date" class="h1"></p>
<script>
    function clock() {// We create a new Date object and assign it to a variable called "time".
    var time = new Date(),
        
        // Access the "getHours" method on the Date object with the dot accessor.
        hours = time.getHours(),
        
        // Access the "getMinutes" method with the dot accessor.
        minutes = time.getMinutes(),
        
        
        seconds = time.getSeconds();
    
    document.querySelectorAll('.clock')[0].innerHTML = harold(hours) + ":" + harold(minutes) + ":" + harold(seconds);
    
      function harold(standIn) {
        if (standIn < 10) {
          standIn = '0' + standIn
        }
        return standIn;
      }
    }
    setInterval(clock, 1000);
</script>

<script>
    var hari = ["Minggu", "Senin", "Selasa", "Rabu", "Kamis", "Jum'at", "Sabtu"]
    var bulan = ["Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember"]

    var date = new Date();
	var current_date = hari[date.getDay()]+", "+date.getDate()+" "+(bulan[date.getMonth()])+" "+ date.getFullYear();
	document.getElementById("date").innerHTML = current_date;  
</script>
<!-- <input type="button" value="ATTENDANCE NOW!" id="btn-center"> -->

  <a href="action_in.php" class="btn btn-primary btn-lg"><i class="fa fa-sign-in-alt"></i> ATTENDANCE IN NOW!</a>
  <a href="action_out.php" class="btn btn-danger btn-lg"><i class="fas fa-sign-out-alt"></i>ATTENDANCE OUT NOW!</a>
  </div>
</div>