var kayttoaikadata;
var kokonaiskayttodata;

$(function() {
  $('input[name="daterange"]').daterangepicker({
    opens: 'left'
  }, function(start, end, label) {

$.ajax({url:"http://d1-hakemisto/time-h.json",dataType:"json"})
  .fail(function(){alert("Failure")})
  .done(function(data){
  kayttoaikadata = jQuery.parseJSON(JSON.stringify(data));

  var labels = kayttoaikadata.map(function(e) {
	   return e.date;
	});

  var data = kayttoaikadata.map(function(e) {
   		return e.minute;
	});;

	var list = [];

	for (var current = start; current <= end; current.add(1, 'd')) {
	    list.push(current.format("YYYY-MM-DD"))
	}


var ctx = document.getElementById("kayttoaika");
var myChart = new Chart(ctx, {
  type: 'line',
  data: {
    labels: list,
    datasets: [{
		         label: 'Päivittäinen käyttöaika tunneissa',
		         data: data,
		         backgroundColor: 'rgba(0, 119, 204, 0.3)'
		      }],
	xAxes: [{
		ticks: {
            min: start,
         	max: end
     	}
    }]
  }
});


	}
);  

  });
});

$.ajax({url:"http://d1-hakemisto/battery.txt"})
  .fail(function(){alert("Failure")})
  .done(function(data){
 	 kokonaiskayttodata = data;
 	 var dates = [];
 	 var batteries = [];

 	 var lines = kokonaiskayttodata.split('\n');

		for (var j = 0; j < lines.length; j++) {
			var line = lines[j];
			var date = line.substring(
		    0, 
		    line.lastIndexOf(">"));

			var battery = line.substring(line.lastIndexOf('charge":') + 8, line.lastIndexOf('"cpu"') - 2);
			batteries.push(battery);
		    dates.push(date);
		}

  var ctx3 = document.getElementById("lataus");
	var chartti = new Chart(ctx3, {
	    type: 'bar',
	    data: {
		      labels: dates,
		      datasets: [{
		         label: 'Akun lataustiedot',
		         data: batteries,
		         backgroundColor: 'rgba(0, 119, 204, 0.3)'
		      }]
	    }
	});
});  



$.ajax({url:"/kokonaisdata.php",dataType:"json"})
  .fail(function(){alert("Failure")})
  .done(function(data){
 	 kokonaiskayttodata = jQuery.parseJSON(JSON.stringify(data));
	var labels = kokonaiskayttodata.map(function(e) {
	   return e.toiminto;
	});

  labels = labels.filter(function(elem, index, self) {
      return index === self.indexOf(elem);
  });

  		var index = labels.indexOf("4");

		if (index !== -1) {
		    labels[index] = "Kävele";
		}

		var index = labels.indexOf("6");

		if (index !== -1) {
		    labels[index] = "Käänny";
		}

		var index = labels.indexOf("3");

		if (index !== -1) {
		    labels[index] = "Kysele";
		}

		var index = labels.indexOf("5");

		if (index !== -1) {
		    labels[index] = "Lue tieto antureista";
		}

	var data = kokonaiskayttodata.map(function(e) {
   		return e.kayttoaika;
	});;
  var ctx2 = document.getElementById("kokonaiskaytto");
	var myBarChart = new Chart(ctx2, {
	    type: 'bar',
	    data: {
		      labels: labels,
		      datasets: [{
		         label: 'Toimintojen kokonaiskäyttöajat (min)',
		         data: data,
		         backgroundColor: 'rgba(0, 119, 204, 0.3)'
		      }]
	    },
	    scales: {
        xAxes: [{
            stacked: true
        }],
        yAxes: [{
            stacked: true
        }]
		}
	});
});  
