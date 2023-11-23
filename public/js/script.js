$(document).ready(function(){
	function format_rupiah(string){
		const formatter = new Intl.NumberFormat(undefined, {
		  style: 'currency',
		  currency: 'IDR',
		  minimumFractionDigits: 2
		})


		return formatter.format(string);
	}

	$(".week").click(function(){
		var bulan = $(this).parent().attr("data-bulan");
		var tahun = $(this).parent().parent().parent().attr("data-year");
		var awal_interval = $(this).attr("interval-awal");
		var akhir_interval = $(this).attr("interval-akhir");

		tanggal_awal = tahun + "-" + bulan + "-" + awal_interval;
		tanggal_akhir = tahun + "-" + bulan + "-" + akhir_interval;

		array_data = {
			'tanggal_awal' : tanggal_awal,
			'tanggal_akhir' : tanggal_akhir
		};

		$.post("http://localhost/20190103_income/fungsi/get_rein", array_data, function(d){
			console.log(d);
			var total = 0;
			var teks = "<div class='top-stat'><div class='left-table'><table border='1'><thead><td>Nomor</td><td>Tanggal</td><td>Keterangan</td><td>Pendapatan</td></thead>";
			for(var j=0;j<d['income'].length;j++){
				teks += "<tr><td>" + (parseInt(j)+1) + "</td><td>" + d['income'][j]['tanggal'] + "</td><td>" + d['income'][j]['keterangan'] + "</td><td>" + format_rupiah(d['income'][j]['nominal']) + "</td></tr>";
				total += parseInt(d['income'][j]['nominal']);
			}
			teks += "<tr><td colspan='3'>Total</td><td>" + format_rupiah(total) + "</td></tr>";
			teks += "</table></div>";

			total_revenue = 0;

			var teks2 = "<div class='right-table'><table border='1'><thead><td>Nomor</td><td>Tanggal</td><td>Keterangan</td><td>Pengeluaran</td></thead>";
			for(var j=0;j<d['revenue'].length;j++){
				teks2 += "<tr><td>" + (parseInt(j)+1) + "</td><td>" + d['revenue'][j]['tanggal'] + "</td><td>" + d['revenue'][j]['keterangan'] + "</td><td>" + format_rupiah(d['revenue'][j]['nominal']) + "</td></tr>";
				total_revenue += parseInt(d['revenue'][j]['nominal']);
			}
			teks2 += "<tr><td colspan='3'>Total</td><td>" + format_rupiah(total_revenue) + "</td></tr>";
			teks2 += "</table></div></div>";
			teks3 = "";

			if(total == 0 && total_revenue == 0){
				tinggi_pendapatan = 0;
				tinggi_pengeluaran = 0;
			}else{
				if(total_revenue<total){
					nice_height = total*2;
				}else{
					nice_height = total_revenue*2;
				}
				tinggi_pendapatan = (total/nice_height) * 100;
				tinggi_pengeluaran = (total_revenue/nice_height) * 100;
			}

			teks3 += "<div class='bottom-stat'>";
			teks3 += "<span>Total pendapatan</span><span>:</span><span>" + format_rupiah(parseInt(total)-parseInt(total_revenue)) + "</span>";
			teks3 += "<span>Pengeluaran Terbesar</span><span>:</span><span>" + format_rupiah(d['stat']['large_number']['nominal']) + "</span>";
			teks3 += "</div>";
			teks4 = "<div class='graph'>";
			teks4 += "<div class='pendapatan-graph' style='height:" + tinggi_pendapatan + "px;'></div>";
			teks4 += "<div class='pengeluaran-graph' style='height:" + tinggi_pengeluaran + "px;'></div>";
			teks4 += "</div>";
			$(".result").html(teks + teks2 + teks3 + teks4);
		},"json")
		.fail(function(d){
			alert("gagal");
			console.log(d);
		});
	});

	$(".hari td").click(function(){
		var hari = parseInt($(this).attr("value"))+1;
		if(hari==8){
			hari = 1;
		}
		var bulan = $(this).parent().attr("data-bulan");
		var tahun = $(this).parent().parent().parent().attr("data-year");		
		array_data = {
			'bulan' : bulan,
			'tahun' : tahun,
			'hari' : hari
		};

		$.post("http://localhost/20190103_income/fungsi/get_rein", array_data, function(d){
			var total = 0;
			var teks = "<div class='top-stat'><div class='left-table'><table border='1'><thead><td>Nomor</td><td>Tanggal</td><td>Keterangan</td><td>Pendapatan</td></thead>";
			for(var j=0;j<d['income'].length;j++){
				teks += "<tr><td>" + (parseInt(j)+1) + "</td><td>" + d['income'][j]['tanggal'] + "</td><td>" + d['income'][j]['keterangan'] + "</td><td>" + format_rupiah(d['income'][j]['nominal']) + "</td></tr>";
				total += parseInt(d['income'][j]['nominal']);
			}
			teks += "<tr><td colspan='3'>Total</td><td>" + format_rupiah(total) + "</td></tr>";
			teks += "</table></div>";

			total_revenue = 0;

			var teks2 = "<div class='right-table'><table border='1'><thead><td>Nomor</td><td>Tanggal</td><td>Keterangan</td><td>Pengeluaran</td></thead>";
			for(var j=0;j<d['revenue'].length;j++){
				teks2 += "<tr><td>" + (parseInt(j)+1) + "</td><td>" + d['revenue'][j]['tanggal'] + "</td><td>" + d['revenue'][j]['keterangan'] + "</td><td>" + format_rupiah(d['revenue'][j]['nominal']) + "</td></tr>";
				total_revenue += parseInt(d['revenue'][j]['nominal']);
			}
			teks2 += "<tr><td colspan='3'>Total</td><td>" + format_rupiah(total_revenue) + "</td></tr>";
			teks2 += "</table></div></div>";
			teks3 = "";

			if(total == 0 && total_revenue == 0){
				tinggi_pendapatan = 0;
				tinggi_pengeluaran = 0;
			}else{
				if(total_revenue<total){
					nice_height = total*2;
				}else{
					nice_height = total_revenue*2;
				}
				tinggi_pendapatan = (total/nice_height) * 100;
				tinggi_pengeluaran = (total_revenue/nice_height) * 100;
			}

			teks3 += "<div class='bottom-stat'>";
			teks3 += "<span>Total pendapatan</span><span>:</span><span>" + format_rupiah(parseInt(total)-parseInt(total_revenue)) + "</span>";
			teks3 += "</div>";
			teks4 = "<div class='graph'>";
			teks4 += "<div class='pendapatan-graph' style='height:" + tinggi_pendapatan + "px;'></div>";
			teks4 += "<div class='pengeluaran-graph' style='height:" + tinggi_pengeluaran + "px;'></div>";
			teks4 += "</div>";
			$(".result").html(teks + teks2 + teks3 + teks4);
		},"json")
		.fail(function(d){
			alert("gagal");
			console.log(d);
		});
	})

	$(".terisi").click(function(){
		var tangal = $(this).html();
		var bulan = $(this).parent().attr("data-bulan");
		var tahun = $(this).parent().parent().parent().attr("data-year");

		var complete_date = tahun+"-"+bulan+"-"+tangal;
		array_data = {
			'tanggal' : complete_date
		}

		$(".statistik").attr("data-tanggal",complete_date);

		$.post("http://localhost/20190103_income/fungsi/get_rein", array_data, function(d){
			var total = 0;
			var teks = "<div class='top-stat'><div class='left-table'><table border='1'><thead><td>Nomor</td><td>Tanggal</td><td>Keterangan</td><td>Pendapatan</td></thead>";
			for(var j=0;j<d['income'].length;j++){
				teks += "<tr><td>" + (parseInt(j)+1) + "</td><td>" + d['income'][j]['tanggal'] + "</td><td>" + d['income'][j]['keterangan'] + "</td><td>" + format_rupiah(d['income'][j]['nominal']) + "</td></tr>";
				total += parseInt(d['income'][j]['nominal']);
			}
			teks += "<tr><td colspan='3'>Total</td><td>" + format_rupiah(total) + "</td></tr>";
			teks += "</table></div>";

			total_revenue = 0;

			var teks2 = "<div class='right-table'><table border='1'><thead><td>Nomor</td><td>Tanggal</td><td>Keterangan</td><td>Pengeluaran</td></thead>";
			for(var j=0;j<d['revenue'].length;j++){
				teks2 += "<tr><td>" + (parseInt(j)+1) + "</td><td>" + d['revenue'][j]['tanggal'] + "</td><td>" + d['revenue'][j]['keterangan'] + "</td><td>" + format_rupiah(d['revenue'][j]['nominal']) + "</td></tr>";
				total_revenue += parseInt(d['revenue'][j]['nominal']);
			}
			teks2 += "<tr><td colspan='3'>Total</td><td>" + format_rupiah(total_revenue) + "</td></tr>";
			teks2 += "</table></div></div>";
			teks3 = "";

			if(total == 0 && total_revenue == 0){

			}else{
				if(total_revenue<total){
					nice_height = total*2;
				}else{
					nice_height = total_revenue*2;
				}
			}

			tinggi_pendapatan = (total/nice_height) * 100;
			tinggi_pengeluaran = (total_revenue/nice_height) * 100;

			teks3 += "<div class='bottom-stat'><span>Total pendapatan</span><span>:</span><span>" + format_rupiah(parseInt(total)-parseInt(total_revenue)) + "</span></div>";
			teks4 = "<div class='graph'>";
			teks4 += "<div class='pendapatan-graph' style='height:" + tinggi_pendapatan + "px;'></div>";
			teks4 += "<div class='pengeluaran-graph' style='height:" + tinggi_pengeluaran + "px;'></div>";
			teks4 += "</div>";
			$(".result").html(teks + teks2 + teks3 + teks4);
		},"json")
		.fail(function(d){
			alert("gagal");
			console.log(d);
		});
	});

	$(".month").click(function(){
		var bulan = $(this).attr("data-bulan");
		var tahun = $(this).parent().parent().parent().attr("data-year");

		array_data = {
			'bulan' : bulan,
			'tahun' : tahun
		}

		$(".statistik").attr("data-bulan",bulan);

		$.post("http://localhost/20190103_income/fungsi/get_rein", array_data, function(d){
			var total = 0;
			var teks = "<div class='top-stat'><div class='left-table'><table border='1'><thead><td>Nomor</td><td>Tanggal</td><td>Keterangan</td><td>Pendapatan</td></thead>";
			for(var j=0;j<d['income'].length;j++){
				teks += "<tr><td>" + (parseInt(j)+1) + "</td><td>" + d['income'][j]['tanggal'] + "</td><td>" + d['income'][j]['keterangan'] + "</td><td>" + format_rupiah(d['income'][j]['nominal']) + "</td></tr>";
				total += parseInt(d['income'][j]['nominal']);
			}
			teks += "<tr><td colspan='3'>Total</td><td>" + format_rupiah(total) + "</td></tr>";
			teks += "</table></div>";

			total_revenue = 0;

			var teks2 = "<div class='right-table'><table border='1'><thead><td>Nomor</td><td>Tanggal</td><td>Keterangan</td><td>Pengeluaran</td></thead>";
			for(var j=0;j<d['revenue'].length;j++){
				teks2 += "<tr><td>" + (parseInt(j)+1) + "</td><td>" + d['revenue'][j]['tanggal'] + "</td><td>" + d['revenue'][j]['keterangan'] + "</td><td>" + format_rupiah(d['revenue'][j]['nominal']) + "</td></tr>";
				total_revenue += parseInt(d['revenue'][j]['nominal']);
			}
			teks2 += "<tr><td colspan='3'>Total</td><td>" + format_rupiah(total_revenue) + "</td></tr>";
			teks2 += "</table></div></div>";
			teks3 = "";

			if(total == 0 && total_revenue == 0){

			}else{
				if(total_revenue<total){
					nice_height = total*2;
				}else{
					nice_height = total_revenue*2;
				}
			}

			tinggi_pendapatan = (total/nice_height) * 100;
			tinggi_pengeluaran = (total_revenue/nice_height) * 100;

			teks3 += "<div class='bottom-stat'>";
			teks3 += "<span>Total pendapatan</span><span>:</span><span>" + format_rupiah(parseInt(total)-parseInt(total_revenue)) + "</span>";
			teks3 += "</div>";
			teks4 = "<div class='graph'>";
			teks4 += "<div class='pendapatan-graph' style='height:" + tinggi_pendapatan + "px;'></div>";
			teks4 += "<div class='pengeluaran-graph' style='height:" + tinggi_pengeluaran + "px;'></div>";
			teks4 += "</div>";
			$(".result").html(teks + teks2 + teks3 + teks4);
		},"json")
		.fail(function(d){
			alert("gagal");
			console.log(d);
		});
	});

	$(".submit").click(function(e){
		e.preventDefault();
		var nominal = $("form .nominal").val();
		var rein = $("form select.type").find(":selected").attr("value");
		var tipe_ket = $("form select.tipe_ket").find(":selected").attr("value");
		var ket = $("form textarea").val();
		var tangal = $(".date").val();
		var time = $(".time").val();

		data = {
			'rein' : rein,
			'nominal' : nominal,
			'ket' : ket,
			'tipe_ket' : tipe_ket,
			'tanggal' : tangal + " " + time + ":00"
		};

		console.log(data);

		$.post("http://localhost/20190103_income/fungsi/insert_rein", data, function(d){
			window.location.href = "http://localhost/20190103_income";
		},"json")
		.fail(function(d){
			alert("gagal");
			console.log(d);
		});
	});
})