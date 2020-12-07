$(document).ready(function(){
			$("#outstock").hide();

			$(".btnavailable").click(function(){
				$("#available").show();
				$("#outstock").hide();
				$(".btnout").css({"background-color" : "white", "color" : "#BE9C83"});
				$(".btnavailable").css({"background-color" : "#BE9C83", "color" : "white"});

		});
			$(".btnout").click(function(){
				$("#outstock").show();
				$("#available").hide();
				$(".btnavailable").css({"background-color" : "white", "color" : "#BE9C83"});
				$(".btnout").css({"background-color" : "#BE9C83", "color" : "white"});
		});

			$(".F1").click(function(){
				$(".F1").remove();
			});
			$(".F2").click(function(){
				$(".F2").remove();
			});
			$(".F3").click(function(){
				$(".F3").remove();
			});
			$(".F4").click(function(){
				$(".F4").remove();
			});
			$(".F5").click(function(){
				$(".F5").remove();
			});
			$(".F6").click(function(){
				$(".F6").remove();
			});
	});