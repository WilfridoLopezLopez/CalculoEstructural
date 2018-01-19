	$(document).ready( function() {
    $('#myCarousel').carousel({
    	interval:   7000
	});
	
	var clickEvent = false;
	$('#myCarousel').on('click', '.nav a', function() {
			clickEvent = true;
			$('.nav li').removeClass('active');
			$(this).parent().addClass('active');		
	}).on('slid.bs.carousel', function(e) {
		if(!clickEvent) {
			var count = $('.nav').children().length -1;
			var current = $('.nav li.active');
			current.removeClass('active').next().addClass('active');
			var id = parseInt(current.data('slide-to'));
			if(count == id) {
				$('.nav li').first().addClass('active');	
			}
		}
		clickEvent = false;
	});
});
/* para navegador derecho*/
(function($){
    $(document).ready(function(){
		$('ul.dropdown-menu [data-toggle=dropdown]').on('click', function(event) {
			event.preventDefault(); 
			event.stopPropagation(); 
			$(this).parent().siblings().removeClass('open');
			$(this).parent().toggleClass('open');
		});
	});
})(jQuery);

/*WIZARD*/
$(document).ready(function () {
    //Initialize tooltips
    $('.nav-tabs > li a[title]').tooltip();
    
    //Wizard
    $('a[data-toggle="tab"]').on('show.bs.tab', function (e) {

        var $target = $(e.target);
    
        if ($target.parent().hasClass('disabled')) {
            return false;
        }
    });

    $(".next-step").click(function (e) {

        var $active = $('.wizard .nav-tabs li.active');
        $active.next().removeClass('disabled');
        nextTab($active);

    });
    $(".prev-step").click(function (e) {

        var $active = $('.wizard .nav-tabs li.active');
        prevTab($active);

    });
});

function nextTab(elem) {
    $(elem).next().find('a[data-toggle="tab"]').click();
}
function prevTab(elem) {
    $(elem).prev().find('a[data-toggle="tab"]').click();
}

 /*script mouse hover*/
$(document).ready(function () {
$('.navbar .dropdown').hover(function () {
        $(this).find('.dropdown-menu').first().stop(true, true).slideDown(150);
    }, function () {
        $(this).find('.dropdown-menu').first().stop(true, true).slideUp(105)
    });
});


/*Realiza calculos*/
function cal(){
	/* Entrepiso 1 En Estructural*/
var a = Number(document.getElementById("num1").value);
var b = Number(document.getElementById("num2").value);
var sum= document.getElementById("sum").value = a+b;

var c = Number(document.getElementById("num3").value);
var d = Number(document.getElementById("num4").value);
var sum1= document.getElementById("sum1").value = c+d+sum;


	/* Entrepiso 2 En Sismico*/
var e = Number(document.getElementById("num5").value);
var f = Number(document.getElementById("num6").value);
var sum2= document.getElementById("sum2").value = e+f;

var g = Number(document.getElementById("num7").value);
var h = Number(document.getElementById("num8").value);
var sum3= document.getElementById("sum3").value = g+h+sum2;

	/* Azotea 1 En Estructural*/
var i = Number(document.getElementById("num9").value);
var j = Number(document.getElementById("num10").value);
var sum4= document.getElementById("sum4").value = i+j;

var k = Number(document.getElementById("num11").value);
var m = Number(document.getElementById("num12").value);
var sum5= document.getElementById("sum5").value = k+m+sum4;

	/* Azotea 2 En Sismico*/
var n = Number(document.getElementById("num13").value);
var l = Number(document.getElementById("num14").value);
var sum6= document.getElementById("sum6").value = n+l;

var o = Number(document.getElementById("num15").value);
var p = Number(document.getElementById("num16").value);
var sum7= document.getElementById("sum7").value = o+p+sum6;

	/* MUROS DE TABIQUE*/
var q = Number(document.getElementById("numtab1").value);
var r = Number(document.getElementById("numtab2").value);
var s = Number(document.getElementById("numtab3").value);
var sumtab= document.getElementById("sumtab").value = q+r+s;
var sumtab1= document.getElementById("sumtab1").value = sumtab * 2.40;

	/* CADENA DE CONCRETO ARMADO*/

/* CADENA DE CONCRETO ARMADO mejorado */
var B29 = Number(document.getElementById("numcad1").value);
var F29 = Number(document.getElementById("numcad2").value);
var J29 = Number(document.getElementById("numcad3").value);
var sumcadena= document.getElementById("sumcad").value = (B29*F29*J29)*1000;


var Fc1 = Number(document.getElementById("Fc").value);
var fcraiz= document.getElementById("fcraiz").value = Math.sqrt(Fc1).toFixed(4);
var fcraiz2= document.getElementById("fcraiz1").value = Math.sqrt(Fc1).toFixed(4);
var sumEc1= document.getElementById("sumEc").value = 15000*(Math.sqrt(Fc1)).toFixed(5);

var B = Number(document.getElementById("B").value);
var B2= document.getElementById("B2").value = B;
var H = Number(document.getElementById("H").value);
var H = Number(document.getElementById("H").value);
var H2= document.getElementById("H2").value = Math.pow(H, 3);
var H3= document.getElementById("H3").value = Math.pow(H, 3);
var I= document.getElementById("I").value = (B*(H*H*H))/12;

var L1 = Number(document.getElementById("L1").value);
var L2 = Number(document.getElementById("L2").value);
var div1 = document.getElementById("div1").value = ((2.4089* Math.pow(L2, 4)) * sum1).toFixed(4);
var div2 = document.getElementById("div2").value = (Math.pow(L1, 4)+2.4089*Math.pow(L2, 4)).toFixed(4);
var div3 = document.getElementById("div3").value = ((Math.pow(L1, 4)) * sum1).toFixed(4);
var div4 = document.getElementById("div4").value = (Math.pow(L1, 4)+2.4089*Math.pow(L2, 4)).toFixed(4);
var W1 = document.getElementById("w1").value = (div1/div2).toFixed(4);
var W2 = document.getElementById("w2").value = (div3/div4).toFixed(4);


var C2= document.getElementById("c2").value = (5*(W2/100)*((L2*L2*L2*L2)*100))/(384*sumEc1*I);
var C1= document.getElementById("c1").value = ((W1/100)*((L1*L1*L1*L1)*100))/(185*sumEc1*I);
var Flecha= document.getElementById("flecha").value = (L1*100)/480;

	/* CALCULOS DE MOMENTO*/
var WU= document.getElementById("WU").value = 1.4*(sum+c)+1.7*d;
var W1A= document.getElementById("W1A").value = (2.4089*WU*(L2*L2*L2*L2))/((L1*L1*L1*L1)+2.4089*(L2*L2*L2*L2));
var MN= document.getElementById("MN").value = (W1A*(L1*L1))/8;
var CMN= document.getElementById("CMN").value = MN*100;
var MP= document.getElementById("MP").value = (9*W1A*(L1*L1))/128;
var CMP= document.getElementById("CMP").value = MP*100;
var WUA= document.getElementById("WUA").value = 1.4*(sum2+g)+1.7*d;
var W2A= document.getElementById("W2A").value = (WU*(L1*L1*L1*L1))/((L1*L1*L1*L1)+2.4089*(L2*L2*L2*L2));
var MP2= document.getElementById("MP2").value = (W2A*(L2*L2))/8;
var CMP2= document.getElementById("CMP2").value = MP2*100;

	/* Datos De la Tabla*/
var MAX = Number(document.getElementById("MAX").value);
var MAXR= document.getElementById("MAXR").value = MAX*H;
var FC = Number(document.getElementById("FC").value);
var FC2= document.getElementById("FC2").value = 0.8*0.85*FC;
var FY = Number(document.getElementById("FY").value);
var Pmin= document.getElementById("Pmin").value = ((0.07*(Math.sqrt(FC)))*10)/FY;
var FR = Number(document.getElementById("FR").value);
var P= document.getElementById("P").value = (FC2/FY)*(1-(Math.sqrt((1-((2*CMN)/(FR*B*(H*H)*FC2))))));
var P2= document.getElementById("P2").value = (FC2/FY)*(1-(Math.sqrt((1-((2*CMP)/(FR*B*(H*H)*FC2))))));

    /* Tabla 1*/
var t1= document.getElementById("t1").value = CMN;
var t2= document.getElementById("t2").value = CMP;
var t3= document.getElementById("t3").value = CMP2;
var t4= document.getElementById("t4").value = B;
var t5= document.getElementById("t5").value = B;
var t6= document.getElementById("t6").value = B;
var t7= document.getElementById("t7").value = H;
var t8= document.getElementById("t8").value = H;
var t9= document.getElementById("t9").value = H;
var t10= document.getElementById("t10").value = P;
var t11= document.getElementById("t11").value = P2;
var t12= document.getElementById("t12").value = Pmin;
var t13= document.getElementById("t13").value = B*H*P;
var t14= document.getElementById("t14").value = B*H*P2;
var t15= document.getElementById("t15").value = B*H*Pmin;
var t16= document.getElementById("t16").value = (100*0.71)/t13;
var t17= document.getElementById("t17").value = (100*0.71)/t14;
var t18= document.getElementById("t18").value = (100*0.71)/t15;

    /* AZOTEA*/
var L1A = Number(document.getElementById("L1A").value);
var L2A = Number(document.getElementById("L2A").value);
var RW1= document.getElementById("RW1").value = (2.4089*sum5*(L2A*L2A*L2A*L2A))/((L1A*L1A*L1A*L1A)+2.4089*(L2A*L2A*L2A*L2A));
var RW2= document.getElementById("RW2").value = (sum5*(L1A*L1A*L1A*L1A))/((L1A*L1A*L1A*L1A)+2.4089*(L2A*L2A*L2A*L2A));
var BA = Number(document.getElementById("BA").value);
var HA = Number(document.getElementById("HA").value);
var IA= document.getElementById("IA").value = (BA*(HA*HA*HA))/12;
var AFC = Number(document.getElementById("AFC").value);
var AEC= document.getElementById("AEC").value = 15000*(Math.sqrt(AFC));

    /* CALCULO DE FLECHA AZOTEA*/
var AC= document.getElementById("RAC").value = ((RW1/100)*((L1A*L1A*L1A*L1A)*100))/(185*AEC*IA);
var AC2= document.getElementById("RAC2").value = (5*(RW2/100)*((L2A*L2A*L2A*L2A)*100))/(384*AEC*IA);
var FlechaA= document.getElementById("flechaA").value = (L1A*100)/480;

    /* CALCULO DE MOMENTOS*/
var AWU= document.getElementById("AWU").value = 1.4*(sum4+k)+1.7*m;
var RW3= document.getElementById("RW3").value = (2.4089*AWU*(L2A*L2A*L2A*L2A))/((L1A*L1A*L1A*L1A)+2.4089*(L2A*L2A*L2A*L2A));
var MN3= document.getElementById("MN3").value = (RW3*(L1A*L1A))/8;
var CMN3= document.getElementById("CMN3").value = MN3*100;
var MP4= document.getElementById("MP4").value = (9*RW3*(L1A*L1A))/128;
var CMP4= document.getElementById("CMP4").value = MP4*100;
var RW4= document.getElementById("RW4").value = (AWU*(L1A*L1A*L1A*L1A))/((L1A*L1A*L1A*L1A)+2.4089*(L2A*L2A*L2A*L2A));
var MP5= document.getElementById("MP5").value = (RW4*(L2A*L2A))/8;
var CMP5= document.getElementById("CMP5").value = MP5*100;

    /* Datos De la Tabla 2*/
var MAXA = Number(document.getElementById("MAXA").value);
var MAXRA= document.getElementById("MAXRA").value = MAXA*HA;
var FCA = Number(document.getElementById("FCA").value);
var FC2A= document.getElementById("FC2A").value = 0.8*0.85*FCA;
var FYA = Number(document.getElementById("FYA").value);
var PminA= document.getElementById("PminA").value = ((0.07*(Math.sqrt(FCA)))*10)/FYA;
var FRA = Number(document.getElementById("FRA").value);
var PA= document.getElementById("PA").value = (FC2A/FYA)*(1-(Math.sqrt((1-((2*CMN3)/(FRA*BA*(HA*HA)*FC2A))))));
var P2A= document.getElementById("P2A").value = (FC2A/FYA)*(1-(Math.sqrt((1-((2*CMP4)/(FRA*BA*(HA*HA)*FC2A))))));

    /* Tabla 2*/
var t1A= document.getElementById("t1A").value = CMN3;
var t2A= document.getElementById("t2A").value = CMP4;
var t3A= document.getElementById("t3A").value = CMP5;
var t4A= document.getElementById("t4A").value = BA;
var t5A= document.getElementById("t5A").value = BA;
var t6A= document.getElementById("t6A").value = BA;
var t7A= document.getElementById("t7A").value = HA;
var t8A= document.getElementById("t8A").value = HA;
var t9A= document.getElementById("t9A").value = HA;
var t10A= document.getElementById("t10A").value = PA;
var t11A= document.getElementById("t11A").value = P2A;
var t12A= document.getElementById("t12A").value = PminA;
var t13A= document.getElementById("t13A").value = BA*HA*PA;
var t14A= document.getElementById("t14A").value = BA*HA*P2A;
var t15A= document.getElementById("t15A").value = BA*HA*PminA;
var t16A= document.getElementById("t16A").value = (100*0.71)/t13A;
var t17A= document.getElementById("t17A").value = (100*0.71)/t14A;
var t18A= document.getElementById("t18A").value = (100*0.71)/t15A;

/* ÁREAS TRIBUTARIAS*/
var DATO1= Number(document.getElementById("DATO1").value);
var DATO2= Number(document.getElementById("DATO2").value);
var metro1= document.getElementById("metro1").value = (WU*DATO1)/DATO2;
var DATO3= Number(document.getElementById("DATO3").value);
var DATO4= Number(document.getElementById("DATO4").value);
var metro2= document.getElementById("metro2").value = (WU*DATO3)/DATO4;
var totalmetro= document.getElementById("totalmetro").value = metro1+metro2;

var DATO5= Number(document.getElementById("DATO5").value);
var DATO6= Number(document.getElementById("DATO6").value);
var metro3= document.getElementById("metro3").value = (WU*DATO5)/DATO6;
var DATO7= Number(document.getElementById("DATO7").value);
var DATO8= Number(document.getElementById("DATO8").value);
var metro4= document.getElementById("metro4").value = (WU*DATO7)/DATO8;
var totalmetro2= document.getElementById("totalmetro2").value = metro3+metro4;

var BA2 = Number(document.getElementById("BA2").value);
var HA2 = Number(document.getElementById("HA2").value);
var IA2= document.getElementById("IA2").value = (BA2*(HA2*HA2*HA2))/12;
var AC3= document.getElementById("AC3").value = BA2*HA2 ;
var AFC2 = Number(document.getElementById("AFC2").value);
var AEC2= document.getElementById("AEC2").value = 15000*(Math.sqrt(AFC2));

var X2= document.getElementById("X2").value = DATO2;
var X3= document.getElementById("X3").value = DATO2+DATO6;

var AR1= document.getElementById("AR1").value = AC3;
var AR2= document.getElementById("AR2").value = AC3;

var INE1= document.getElementById("INE1").value = IA2;
var INE2= document.getElementById("INE2").value = IA2;

var MOD51= document.getElementById("MOD1").value = AEC2;
var MOD2= document.getElementById("MOD2").value = AEC2;

var CAR1= document.getElementById("CAR1").value = totalmetro;
var CAR2= document.getElementById("CAR2").value = totalmetro2;

var FINAL1= document.getElementById("FINAL1").value = DATO2;
var FINAL2= document.getElementById("FINAL2").value = DATO6;

/*Distacias de claro a claro.*/
var AB= document.getElementById("AB").value = DATO2;
var BD= document.getElementById("BD").value = DATO6;

/*Rigidez del claro.*/
var AB1= document.getElementById("AB1").value = 4/AB;
var BD1= document.getElementById("BD1").value = 4/BD;

/*Calcular la suma de las reacciones de los nodos*/
var KA= document.getElementById("KA").value = AB1;
var KB= document.getElementById("KB").value = AB1+BD1;

/*Calculo del factor de distribución*/
var KAB= document.getElementById("KAB").value = AB1/KA;
var KBA= document.getElementById("KBA").value = AB1/KB;
var KBD= document.getElementById("KBD").value = BD1/KB;
var KF= document.getElementById("KF").value = KBA+KBD;

/*Calculo de la viga hiperestatica*/
var WL= document.getElementById("WL").value = (totalmetro*DATO2*DATO2)/12;
var WL1= document.getElementById("WL1").value = (totalmetro2*DATO6*DATO6)/12;

/* TABLA DE 32 DATOS*/
var FD1= document.getElementById("FD1").value = KAB;
var M1= document.getElementById("M1").value = -(WL);
var FD2= document.getElementById("FD2").value = KBA;
var M2= document.getElementById("M2").value = WL;
var FD3= document.getElementById("FD3").value = KBD;
var FD4= document.getElementById("FD4").value = KF;
var M4= document.getElementById("M4").value = WL1;
var M3= document.getElementById("M3").value = -(M4);


/*1 - EQ= Distribución del momento*/
var A= document.getElementById("A").value = -(M1*FD1);
var BIZQ= document.getElementById("BIZQ").value = -(-(M2)-(M3))*FD2;
var BDER= document.getElementById("BDER").value = -(M2+(M3))*FD3;
var D= document.getElementById("D").value =-(M4)*FD4;


}

/* modal */
$(".modal-wide").on("show.bs.modal", function() {
  var height = $(window).height() - 200;
  $(this).find(".modal-body").css("max-height", height);
});
/* latext */

$ ( function  ( )  { 
    $ ( ".latex" ) . latex ( ) ; 
} ) ;

function getone(cal) {
  var l1 = document.getElementById("L1").value;
  var l2 = document.getElementById("L2").value;
  var equation1 = "$$ W1=\\frac{2.4089\\;\\;WT\\;\\;{\\displaystyle\\overset4{L2}}}{(L1^4+2.4089\\;L2^4\\;)}\\;\\;\\;\\;\\;=\\;\\frac{2.4089\\;\\ast\\;"+ sum1.value +"\\;\\ast\\;"+l2+"^4}{"+l1+"^4\\;+\\;2.4089\\;\\ast\\;"+l2+"^4}\\;=\\;\\frac{"+div1.value+"}{"+div2.value+"}\\;=\\;\\boxed{"+w1.value+"\\\\KG/M}$$";
  var equation2 = "$$ W2=\\frac{WT\\;\\;{{L1^4}}}{(L1^4+2.4089\\;L2^4\\;)}\\;\\;\\;\\;\\;=\\;\\frac{"+ sum1.value +"\\;\\ast\\;"+l1+"^4}{"+l1+"^4\\;+\\;2.4089\\;\\ast\\;"+l2+"^4}\\;=\\;\\frac{"+div3.value+"}{"+div4.value+"}\\;=\\;\\boxed{"+w2.value+"\\\\KG/M}$$";
  document.getElementById('divid_des').innerHTML =  equation1 + equation2 ;
  MathJax.Hub.Queue(["Typeset",MathJax.Hub,'divid_des']);
}

	
