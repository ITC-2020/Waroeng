// Counter
var output = document.getElementById("count")
var min = document.getElementById("min")
var plus = document.getElementById("plus"),
  count = 1;
plus.onclick = function() {
  count += 1;
  output.innerHTML = count;
  document.getElementById('jumlahProduk').value = count;
}
min.onclick = function(){
  if (count==1)
  {
    count=1;
    output.innerHTML = count;
  document.getElementById('jumlahProduk').value = count;}
  else{
    count -= 1;
    output.innerHTML = count;
  document.getElementById('jumlahProduk').value = count;}
};


// Navigasi Submenu
$( function() {
    $(".Discussion").css({"border-bottom": "5px solid #BE9C83","font-weight" : "600"});
    $(".Discription").css({"border-bottom": "none","font-weight" : "300"});
    $(".Review").css({"border-bottom": "none","font-weight" : "300"});

    $("#dsikusi").show();
    $("#diskripsi").hide();
    $("#Reviewe").hide();

    $(".Discussion").click(function(){
    $(".Discussion").css({"border-bottom": "5px solid #BE9C83","font-weight" : "600"});
    $(".Discription").css({"border-bottom": "none","font-weight" : "300"});
    $(".Review").css({"border-bottom": "none","font-weight" : "300"});

    $("#dsikusi").show();
    $("#diskripsi").hide();
    $("#Reviewe").hide();
    });

    $(".Discription").click(function(){
    $(".Discription").css({"border-bottom": "5px solid #BE9C83","font-weight" : "600"});
    $(".Discussion").css({"border-bottom": "none","font-weight" : "300"});
    $(".Review").css({"border-bottom": "none","font-weight" : "300"});

    $("#dsikusi").hide();
    $("#diskripsi").show();
    $("#Reviewe").hide();
    });

    $(".Review").click(function(){
    $(".Review").css({"border-bottom": "5px solid #BE9C83","font-weight" : "600"});
    $(".Discription").css({"border-bottom": "none","font-weight" : "300"});
    $(".Discussion").css({"border-bottom": "none","font-weight" : "300"});
    $("#dsikusi").hide();
    $("#diskripsi").hide();
    $("#Reviewe").show();
    });
 });


// Review
$(document).ready(function(){
    $(".starnavAll").click(function(){
      $(".starnavAll").css({"background-color" : "#BE9C83", "color" : "white"});
      $(".starnav1").css({"background-color" : "white", "color" : "#BE9C83"});
      $(".starnav2").css({"background-color" : "white", "color" : "#BE9C83"});
      $(".starnav3").css({"background-color" : "white", "color" : "#BE9C83"});
      $(".starnav4").css({"background-color" : "white", "color" : "#BE9C83"});
      $(".starnav5").css({"background-color" : "white", "color" : "#BE9C83"});
       $(".star5").show();
       $(".star4").show();
       $(".star3").show();
       $(".star2").show();
       $(".star1").show();
    });
    $(".starnav5").click(function(){
      $(".starnav5").css({"background-color" : "#BE9C83", "color" : "white"});
      $(".starnav1").css({"background-color" : "white", "color" : "#BE9C83"});
      $(".starnav2").css({"background-color" : "white", "color" : "#BE9C83"});
      $(".starnav3").css({"background-color" : "white", "color" : "#BE9C83"});
      $(".starnav4").css({"background-color" : "white", "color" : "#BE9C83"});
      $(".starnavAll").css({"background-color" : "white", "color" : "#BE9C83"});
       $(".star5").show();
       $(".star4").hide();
       $(".star3").hide();
       $(".star2").hide();
       $(".star1").hide();
    });
    $(".starnav4").click(function(){
      $(".starnav4").css({"background-color" : "#BE9C83", "color" : "white"});
      $(".starnav5").css({"background-color" : "white", "color" : "#BE9C83"});
      $(".starnav1").css({"background-color" : "white", "color" : "#BE9C83"});
      $(".starnav2").css({"background-color" : "white", "color" : "#BE9C83"});
      $(".starnav3").css({"background-color" : "white", "color" : "#BE9C83"});
      $(".starnavAll").css({"background-color" : "white", "color" : "#BE9C83"});
       $(".star5").hide();
       $(".star4").show();
       $(".star3").hide();
       $(".star2").hide();
       $(".star1").hide();
    });
    $(".starnav3").click(function(){
      $(".starnav3").css({"background-color" : "#BE9C83", "color" : "white"});
      $(".starnav5").css({"background-color" : "white", "color" : "#BE9C83"});
      $(".starnav1").css({"background-color" : "white", "color" : "#BE9C83"});
      $(".starnav2").css({"background-color" : "white", "color" : "#BE9C83"});
      $(".starnav4").css({"background-color" : "white", "color" : "#BE9C83"});
      $(".starnavAll").css({"background-color" : "white", "color" : "#BE9C83"});
       $(".star5").hide();
       $(".star4").hide();
       $(".star3").show();
       $(".star2").hide();
       $(".star1").hide();
    });
    $(".starnav2").click(function(){
      $(".starnav2").css({"background-color" : "#BE9C83", "color" : "white"});
      $(".starnav5").css({"background-color" : "white", "color" : "#BE9C83"});
      $(".starnav1").css({"background-color" : "white", "color" : "#BE9C83"});
      $(".starnav3").css({"background-color" : "white", "color" : "#BE9C83"});
      $(".starnav4").css({"background-color" : "white", "color" : "#BE9C83"});
      $(".starnavAll").css({"background-color" : "white", "color" : "#BE9C83"});
       $(".star5").hide();
       $(".star4").hide();
       $(".star3").hide();
       $(".star2").show();
       $(".star1").hide();
    });
    $(".starnav1").click(function(){
      $(".starnav1").css({"background-color" : "#BE9C83", "color" : "white"});
      $(".starnav5").css({"background-color" : "white", "color" : "#BE9C83"});
      $(".starnav2").css({"background-color" : "white", "color" : "#BE9C83"});
      $(".starnav3").css({"background-color" : "white", "color" : "#BE9C83"});
      $(".starnav4").css({"background-color" : "white", "color" : "#BE9C83"});
      $(".starnavAll").css({"background-color" : "white", "color" : "#BE9C83"});
       $(".star5").hide();
       $(".star4").hide();
       $(".star3").hide();
       $(".star2").hide();
       $(".star1").show();
    });

 });