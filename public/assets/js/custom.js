$('document').ready(function(){


$('#reffer-by').change(function(){
var refferedName = $(this).val();

var subReffer = $('#reffer-by').val();

if(refferedName == "dr-umer-and-dr-hannan"){


$("#stamp-cat").val("DR. MUHAMMAD UMER");
$("#stamp-cat2").val("DR. MUHAMMAD HANNAN");	

var stampCat1 = $("#stamp-cat").val();
}
else{

$("#stamp-cat").val("");
$("#stamp-cat2").val("CARDIOMED ASSOCIATES");
}

if(stampCat1 == "DR. MUHAMMAD UMER"){
$("#stamp-address-1").val("MBBS, FCPS (Cardiology)");
$("#stamp-address-2").val("Consultant Cardiologist");
$("#stamp-address-3").val("Interventionist");




}
else{
$("#stamp-address-1").val("");
$("#stamp-address-2").val("");
$("#stamp-address-3").val("");



}



});

$("#sub-reffer").change(function(){
const subReffer = $(this).val();
var refferedName = $('#reffer-by').val();
 });








// var reffByResponse = $("#reff-by").val();
// var subReffResponse = $("#sub-reff").text();
// console.log(reffByResponse);

// console.log(subReffResponse);





});



