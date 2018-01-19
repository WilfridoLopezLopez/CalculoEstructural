	$(document).ready(function() {
	    $('#myCarousel').carousel({
	        interval: 7000
	    });

	    var clickEvent = false;
	    $('#myCarousel').on('click', '.nav a', function() {
	        clickEvent = true;
	        $('.nav li').removeClass('active');
	        $(this).parent().addClass('active');
	    }).on('slid.bs.carousel', function(e) {
	        if (!clickEvent) {
	            var count = $('.nav').children().length - 1;
	            var current = $('.nav li.active');
	            current.removeClass('active').next().addClass('active');
	            var id = parseInt(current.data('slide-to'));
	            if (count == id) {
	                $('.nav li').first().addClass('active');
	            }
	        }
	        clickEvent = false;
	    });
	});
	/* para navegador derecho*/
	(function($) {
	    $(document).ready(function() {
	        $('ul.dropdown-menu [data-toggle=dropdown]').on('click', function(event) {
	            event.preventDefault();
	            event.stopPropagation();
	            $(this).parent().siblings().removeClass('open');
	            $(this).parent().toggleClass('open');
	        });
	    });
	})(jQuery);

	/*WIZARD*/
	$(document).ready(function() {
	    //Initialize tooltips
	    $('.nav-tabs > li a[title]').tooltip();

	    //Wizard
	    $('a[data-toggle="tab"]').on('show.bs.tab', function(e) {

	        var $target = $(e.target);

	        if ($target.parent().hasClass('disabled')) {
	            return false;
	        }
	    });

	    $(".next-step").click(function(e) {

	        var $active = $('.wizard .nav-tabs li.active');
	        $active.next().removeClass('disabled');
	        nextTab($active);

	    });
	    $(".prev-step").click(function(e) {

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
	$(document).ready(function() {
	    $('.navbar .dropdown').hover(function() {
	        $(this).find('.dropdown-menu').first().stop(true, true).slideDown(150);
	    }, function() {
	        $(this).find('.dropdown-menu').first().stop(true, true).slideUp(105)
	    });
	});


	/*Realiza calculos*/
	function cal() {
	    /* Entrepiso 1 En Estructural*/
	    var Losa = Number(document.getElementById("numLosa").value);
	    var a = Number(document.getElementById("num1").value);
	    var b = Number(document.getElementById("num2").value);
	    var sum = document.getElementById("sum").value = a + b;

	    var c = Number(document.getElementById("num3").value);
	    var d = Number(document.getElementById("num4").value);
	    var sum1 = document.getElementById("sum1").value = c + d + sum;


	    /* Entrepiso 2 En Sismico*/
	    var e = Number(document.getElementById("num5").value);
	    var f = Number(document.getElementById("num6").value);
	    var sum2 = document.getElementById("sum2").value = e + f;

	    var g = Number(document.getElementById("num7").value);
	    var h = Number(document.getElementById("num8").value);
	    var sum3 = document.getElementById("sum3").value = g + h + sum2;

	    /* Azotea 1 En Estructural*/
	    var i = Number(document.getElementById("num9").value);
	    var j = Number(document.getElementById("num10").value);
	    var sum4 = document.getElementById("sum4").value = i + j;

	    var k = Number(document.getElementById("num11").value);
	    var m = Number(document.getElementById("num12").value);
	    var sum5 = document.getElementById("sum5").value = k + m + sum4;

	    /* Azotea 2 En Sismico*/
	    var n = Number(document.getElementById("num13").value);
	    var l = Number(document.getElementById("num14").value);
	    var sum6 = document.getElementById("sum6").value = n + l;

	    var o = Number(document.getElementById("num15").value);
	    var p = Number(document.getElementById("num16").value);
	    var sum7 = document.getElementById("sum7").value = o + p + sum6;

	    /* MUROS DE TABIQUE*/
	    var q = Number(document.getElementById("numtab1").value);
	    var r = Number(document.getElementById("numtab2").value);
	    var s = Number(document.getElementById("numtab3").value);
	    var sumtab = document.getElementById("sumtab").value = q + r + s;
	    var sumtab1 = document.getElementById("sumtab1").value = sumtab * 2.40;

	    /* CADENA DE CONCRETO ARMADO*/

	    /* CADENA DE CONCRETO ARMADO mejorado */
	    var B29 = Number(document.getElementById("numcad1").value);
	    var F29 = Number(document.getElementById("numcad2").value);
	    var J29 = Number(document.getElementById("numcad3").value);
	    var sumcadena = document.getElementById("sumcad").value = (B29 * F29 * J29) * 1000;


	    var Fc1 = Number(document.getElementById("Fc").value);
	    document.getElementById("Fcfix").value = document.getElementById("Fc").value;
	    document.getElementById("Fcfix2").value = document.getElementById("Fc").value;
	    var fcraiz = document.getElementById("fcraiz").value = Math.sqrt(Fc1).toFixed(5);
	    var fcraiz2 = document.getElementById("fcraiz1").value = Math.sqrt(Fc1).toFixed(5);
	    var sumEc1 = document.getElementById("sumEc").value = (15000 * fcraiz).toFixed(2);

	    var B = Number(document.getElementById("B").value);
	    var B2 = document.getElementById("B2").value = B;
	    var H = Number(document.getElementById("H").value);
	    var H2 = document.getElementById("H2").value = Math.pow(H, 3);
	    var H3 = document.getElementById("H3").value = Math.pow(H, 3);
	    var I = document.getElementById("I").value = ((B * Math.pow(H, 3)) / 12).toFixed(4);

	    var L1 = Number(document.getElementById("L1").value);
	    var L2 = Number(document.getElementById("L2").value);
	    var L2c2 = document.getElementById("l2c2").value = (L2 * 100).toFixed(4);
	    var L1c1 = document.getElementById("l1c1").value = (L1 * 100).toFixed(0);
	    var div1 = document.getElementById("div1").value = ((2.4089 * Math.pow(L2, 4)) * sum1).toFixed(4);
	    var div2 = document.getElementById("div2").value = (Math.pow(L1, 4) + 2.4089 * Math.pow(L2, 4)).toFixed(4);
	    var div3 = document.getElementById("div3").value = ((Math.pow(L1, 4)) * sum1).toFixed(4);
	    var div4 = document.getElementById("div4").value = (Math.pow(L1, 4) + 2.4089 * Math.pow(L2, 4)).toFixed(4);
	    var W1 = document.getElementById("w1").value = (div1 / div2).toFixed(4);
	    var W2 = document.getElementById("w2").value = (div3 / div4).toFixed(4);
	    var W2C2 = document.getElementById("w2c2").value = (W2 / 100).toFixed(4);
	    var divc2 = document.getElementById("divc2").value = ((5 * Math.pow(L2c2, 4)) * W2C2).toFixed(4);
	    var div2c2 = document.getElementById("div2c2").value = (384 * sumEc1 * I).toFixed(4);
		var WcalFlecha = document.getElementById("WcalFlecha").value = (W1 / 100)
	    var divc1 = document.getElementById("divc1").value = (WcalFlecha * Math.pow(L1c1, 4)).toFixed(4);
	    var div2c1 = document.getElementById("div2c1").value = (185 * sumEc1 * I).toFixed(4);


	    var C2 = document.getElementById("c2").value = (divc2 / div2c2).toFixed(4);
	    var C1 = document.getElementById("c1").value = (divc1 / div2c1).toFixed(4);
	    var Flecha = document.getElementById("flecha").value = L1c1 / 480;

	    /* CALCULOS DE MOMENTO*/
	    var WU1 = Number(document.getElementById("wu1").value);
	    var WU2 = Number(document.getElementById("wu2").value);
	    document.getElementById("num4fix").value = document.getElementById("num4").value;
	    document.getElementById("wu1fix").value = document.getElementById("wu1").value;
	    document.getElementById("wu2fix").value = document.getElementById("wu2").value;


	    var CARGAINC = document.getElementById("cargainc").value = (sum + c);
	    var Wu = document.getElementById("WU").value = WU1 * CARGAINC + WU2 * d;
	    var div1wu1 = document.getElementById("div1wu").value = ((2.4089 * Math.pow(L2, 4)) * Wu).toFixed(4);
	    var div1wu2 = document.getElementById("div2wu").value = (Math.pow(L1, 4) + 2.4089 * Math.pow(L2, 4)).toFixed(4);
	    var WUW1 = document.getElementById("wuw1").value = (div1wu1 / div1wu2).toFixed(4);
	    var MenosM = document.getElementById("menosm").value = (WUW1 * Math.pow(L1, 2)).toFixed(2);;
	    var ResultM = document.getElementById("resultm").value = (MenosM / 8).toFixed(4);
	    var Finm = document.getElementById("finm").value = (ResultM * 100).toFixed(4);
	    var MasM = document.getElementById("masM").value = (WUW1 * Math.pow(L1, 2) * 9).toFixed(2);
	    var ResultMmas = document.getElementById("resultmmas").value = (MasM / 128).toFixed(4);
	    var FinmMas = document.getElementById("finMmas").value = (ResultMmas * 100).toFixed(4);
	    /* calculo de momento 2 */
	    var WU1mom = Number(document.getElementById("wu1mom").value);
	    var WU2mom = Number(document.getElementById("wu2mom").value);
	    document.getElementById("num4fixmom").value = document.getElementById("num4").value;
	    document.getElementById("wu1fixmom").value = document.getElementById("wu1mom").value;
	    document.getElementById("wu2fixmom").value = document.getElementById("wu2mom").value;
	    var CARGAINCmom = document.getElementById("cargaincmom").value = (sum + c);
	    var Wumom = document.getElementById("WUmom").value = WU1mom * CARGAINCmom + WU2mom * d;
	    var Wumondiv1 = document.getElementById("wumomdiv1").value = ((Wumom * Math.pow(L1, 4))).toFixed(4);
	    var Wumondiv2 = document.getElementById("wumomdiv2").value = ((Math.pow(L1, 4) + 2.4089 * Math.pow(L2, 4))).toFixed(4);
	    var Wuresult = document.getElementById("wuresult").value = (Wumondiv1 / Wumondiv2).toFixed(4);
	    var Mommmas = document.getElementById("MomMmas").value = ((Wuresult * Math.pow(L2, 2))).toFixed(4);
	    var Resmommas = document.getElementById("resmommas").value = (Mommmas / 8).toFixed(4);
	    var Resmas = document.getElementById("resmas").value = (Resmommas * 100).toFixed(4);


	    /* Datos De la Tabla*/

	    var hfc = document.getElementById("Hfc").value = document.getElementById("H").value;
	    var FCC = document.getElementById("Fcfix3").value = document.getElementById("Fc").value;
	    var Max = Number(document.getElementById("MAX").value);
	    var MAXR = document.getElementById("MaxR").value = Max * hfc;
	    document.getElementById("varillamedida").innerHTML = MAXR;
	    var FC = Number(document.getElementById("Fc").value);
	    var FC2 = document.getElementById("FC2").value = 0.8 * 0.85 * FCC;
	    var Fy = Number(document.getElementById("FY").value);
	    var Pmin1 = document.getElementById("mindiv1").value = (0.70 * Math.sqrt(FCC)).toFixed(4);
	    var Pmin = document.getElementById("minresult").value = (Pmin1 / Fy).toFixed(4);
	    var Fr = Number(document.getElementById("FR").value);
	    var AV = Number(document.getElementById("Av").value);
	    var DivF = document.getElementById("divF").value = (FC2 / Fy).toFixed(5);
	    var RaizMU = document.getElementById("raizmu").value = (2 * Finm).toFixed(5);
	    var RaizMU2 = document.getElementById("raizmu2").value = (2 * FinmMas).toFixed(5);
	    var Raizdivmu = document.getElementById("raizdivmu").value = (Fr * B * Math.pow(hfc, 2) * FC2);
	    var DivFmu = document.getElementById("divFmu").value = (RaizMU / Raizdivmu).toFixed(5);
	    var DivFmu2 = document.getElementById("divFmu2").value = (RaizMU2 / Raizdivmu).toFixed(5);
	    var Unomenosmu = document.getElementById("unomenosmu").value = (1 - DivFmu).toFixed(4);
	    var Unomenosmu2 = document.getElementById("unomenosmu2").value = (1 - DivFmu2).toFixed(4);
	    var Dellraiz = document.getElementById("DellRaiz").value = (1 - Math.sqrt(Unomenosmu)).toFixed(4);
	    var Dellraiz2 = document.getElementById("DellRaiz2").value = (1 - Math.sqrt(Unomenosmu2)).toFixed(4);
	    var resP = document.getElementById("P1res").value = (DivF * Dellraiz).toFixed(5);
	    var resP2 = document.getElementById("P2res").value = (DivF * Dellraiz2).toFixed(5);



	    //
	    //var P= document.getElementById("P").value = (FC2/FY) * (1-(Math.sqrt((1-((2*CMN) / (FR*B*(H*H)*FC2))))));
	    //var P2= document.getElementById("P2").value = (FC2/FY)*(1-(Math.sqrt((1-((2*CMP)/(FR*B*(H*H)*FC2))))));
	    //
	    //    /* AZOTEA*/
	    //var L1A = Number(document.getElementById("L1A").value);
	    //var L2A = Number(document.getElementById("L2A").value);
	    //var RW1= document.getElementById("RW1").value = (2.4089*sum5*(L2A*L2A*L2A*L2A))/((L1A*L1A*L1A*L1A)+2.4089*(L2A*L2A*L2A*L2A));
	    //var RW2= document.getElementById("RW2").value = (sum5*(L1A*L1A*L1A*L1A))/((L1A*L1A*L1A*L1A)+2.4089*(L2A*L2A*L2A*L2A));
	    //var BA = Number(document.getElementById("BA").value);
	    //var HA = Number(document.getElementById("HA").value);
	    //var IA= document.getElementById("IA").value = (BA*(HA*HA*HA))/12;
	    //var AFC = Number(document.getElementById("AFC").value);
	    //var AEC= document.getElementById("AEC").value = 15000*(Math.sqrt(AFC));
	    //
	    //    /* CALCULO DE FLECHA AZOTEA*/
	    //var AC= document.getElementById("RAC").value = ((RW1/100)*((L1A*L1A*L1A*L1A)*100))/(185*AEC*IA);
	    //var AC2= document.getElementById("RAC2").value = (5*(RW2/100)*((L2A*L2A*L2A*L2A)*100))/(384*AEC*IA);
	    //var FlechaA= document.getElementById("flechaA").value = (L1A*100)/480;
	    //
	    //    /* CALCULO DE MOMENTOS*/
	    //var AWU= document.getElementById("AWU").value = 1.4*(sum4+k)+1.7*m;
	    //var RW3= document.getElementById("RW3").value = (2.4089*AWU*(L2A*L2A*L2A*L2A))/((L1A*L1A*L1A*L1A)+2.4089*(L2A*L2A*L2A*L2A));
	    //var MN3= document.getElementById("MN3").value = (RW3*(L1A*L1A))/8;
	    //var CMN3= document.getElementById("CMN3").value = MN3*100;
	    //var MP4= document.getElementById("MP4").value = (9*RW3*(L1A*L1A))/128;
	    //var CMP4= document.getElementById("CMP4").value = MP4*100;
	    //var RW4= document.getElementById("RW4").value = (AWU*(L1A*L1A*L1A*L1A))/((L1A*L1A*L1A*L1A)+2.4089*(L2A*L2A*L2A*L2A));
	    //var MP5= document.getElementById("MP5").value = (RW4*(L2A*L2A))/8;
	    //var CMP5= document.getElementById("CMP5").value = MP5*100;
	    //
	    //    /* Datos De la Tabla 2*/
	    //var MAXA = Number(document.getElementById("MAXA").value);
	    //var MAXRA= document.getElementById("MAXRA").value = MAXA*HA;
	    //var FCA = Number(document.getElementById("FCA").value);
	    //var FC2A= document.getElementById("FC2A").value = 0.8*0.85*FCA;
	    //var FYA = Number(document.getElementById("FYA").value);
	    //var PminA= document.getElementById("PminA").value = ((0.07*(Math.sqrt(FCA)))*10)/FYA;
	    //var FRA = Number(document.getElementById("FRA").value);
	    //var PA= document.getElementById("PA").value = (FC2A/FYA)*(1-(Math.sqrt((1-((2*CMN3)/(FRA*BA*(HA*HA)*FC2A))))));
	    //var P2A= document.getElementById("P2A").value = (FC2A/FYA)*(1-(Math.sqrt((1-((2*CMP4)/(FRA*BA*(HA*HA)*FC2A))))));
	    //
	    //    /* Tabla 2*/
	    //var t1A= document.getElementById("t1A").value = CMN3;
	    //var t2A= document.getElementById("t2A").value = CMP4;
	    //var t3A= document.getElementById("t3A").value = CMP5;
	    //var t4A= document.getElementById("t4A").value = BA;
	    //var t5A= document.getElementById("t5A").value = BA;
	    //var t6A= document.getElementById("t6A").value = BA;
	    //var t7A= document.getElementById("t7A").value = HA;
	    //var t8A= document.getElementById("t8A").value = HA;
	    //var t9A= document.getElementById("t9A").value = HA;
	    //var t10A= document.getElementById("t10A").value = PA;
	    //var t11A= document.getElementById("t11A").value = P2A;
	    //var t12A= document.getElementById("t12A").value = PminA;
	    //var t13A= document.getElementById("t13A").value = BA*HA*PA;
	    //var t14A= document.getElementById("t14A").value = BA*HA*P2A;
	    //var t15A= document.getElementById("t15A").value = BA*HA*PminA;
	    //var t16A= document.getElementById("t16A").value = (100*0.71)/t13A;
	    //var t17A= document.getElementById("t17A").value = (100*0.71)/t14A;
	    //var t18A= document.getElementById("t18A").value = (100*0.71)/t15A;
	    //
	    ///* ÁREAS TRIBUTARIAS*/
	    //var DATO1= Number(document.getElementById("DATO1").value);
	    //var DATO2= Number(document.getElementById("DATO2").value);
	    //var metro1= document.getElementById("metro1").value = (WU*DATO1)/DATO2;
	    //var DATO3= Number(document.getElementById("DATO3").value);
	    //var DATO4= Number(document.getElementById("DATO4").value);
	    //var metro2= document.getElementById("metro2").value = (WU*DATO3)/DATO4;
	    //var totalmetro= document.getElementById("totalmetro").value = metro1+metro2;
	    //
	    //var DATO5= Number(document.getElementById("DATO5").value);
	    //var DATO6= Number(document.getElementById("DATO6").value);
	    //var metro3= document.getElementById("metro3").value = (WU*DATO5)/DATO6;
	    //var DATO7= Number(document.getElementById("DATO7").value);
	    //var DATO8= Number(document.getElementById("DATO8").value);
	    //var metro4= document.getElementById("metro4").value = (WU*DATO7)/DATO8;
	    //var totalmetro2= document.getElementById("totalmetro2").value = metro3+metro4;
	    //
	    //var BA2 = Number(document.getElementById("BA2").value);
	    //var HA2 = Number(document.getElementById("HA2").value);
	    //var IA2= document.getElementById("IA2").value = (BA2*(HA2*HA2*HA2))/12;
	    //var AC3= document.getElementById("AC3").value = BA2*HA2 ;
	    //var AFC2 = Number(document.getElementById("AFC2").value);
	    //var AEC2= document.getElementById("AEC2").value = 15000*(Math.sqrt(AFC2));
	    //
	    //var X2= document.getElementById("X2").value = DATO2;
	    //var X3= document.getElementById("X3").value = DATO2+DATO6;
	    //
	    //var AR1= document.getElementById("AR1").value = AC3;
	    //var AR2= document.getElementById("AR2").value = AC3;
	    //
	    //var INE1= document.getElementById("INE1").value = IA2;
	    //var INE2= document.getElementById("INE2").value = IA2;
	    //
	    //var MOD51= document.getElementById("MOD1").value = AEC2;
	    //var MOD2= document.getElementById("MOD2").value = AEC2;
	    //
	    //var CAR1= document.getElementById("CAR1").value = totalmetro;
	    //var CAR2= document.getElementById("CAR2").value = totalmetro2;
	    //
	    //var FINAL1= document.getElementById("FINAL1").value = DATO2;
	    //var FINAL2= document.getElementById("FINAL2").value = DATO6;
	    //
	    ///*Distacias de claro a claro.*/
	    //var AB= document.getElementById("AB").value = DATO2;
	    //var BD= document.getElementById("BD").value = DATO6;
	    //
	    ///*Rigidez del claro.*/
	    //var AB1= document.getElementById("AB1").value = 4/AB;
	    //var BD1= document.getElementById("BD1").value = 4/BD;
	    //
	    ///*Calcular la suma de las reacciones de los nodos*/
	    //var KA= document.getElementById("KA").value = AB1;
	    //var KB= document.getElementById("KB").value = AB1+BD1;
	    //
	    ///*Calculo del factor de distribución*/
	    //var KAB= document.getElementById("KAB").value = AB1/KA;
	    //var KBA= document.getElementById("KBA").value = AB1/KB;
	    //var KBD= document.getElementById("KBD").value = BD1/KB;
	    //var KF= document.getElementById("KF").value = KBA+KBD;
	    //
	    ///*Calculo de la viga hiperestatica*/
	    //var WL= document.getElementById("WL").value = (totalmetro*DATO2*DATO2)/12;
	    //var WL1= document.getElementById("WL1").value = (totalmetro2*DATO6*DATO6)/12;
	    //
	    ///* TABLA DE 32 DATOS*/
	    //var FD1= document.getElementById("FD1").value = KAB;
	    //var M1= document.getElementById("M1").value = -(WL);
	    //var FD2= document.getElementById("FD2").value = KBA;
	    //var M2= document.getElementById("M2").value = WL;
	    //var FD3= document.getElementById("FD3").value = KBD;
	    //var FD4= document.getElementById("FD4").value = KF;
	    //var M4= document.getElementById("M4").value = WL1;
	    //var M3= document.getElementById("M3").value = -(M4);
	    //
	    //
	    ///*1 - EQ= Distribución del momento*/
	    //var A= document.getElementById("A").value = -(M1*FD1);
	    //var BIZQ= document.getElementById("BIZQ").value = -(-(M2)-(M3))*FD2;
	    //var BDER= document.getElementById("BDER").value = -(M2+(M3))*FD3;
	    //var D= document.getElementById("D").value =-(M4)*FD4;




	    <!-- parte 2-->
	    var l1azotea = document.getElementById("L1azotea").value;
	    var l2azotea = document.getElementById("L2azotea").value;
		var L2c2azotea = document.getElementById("l2c2azotea").value = (l2azotea * 100).toFixed(4);
	    var L1c1azotea = document.getElementById("l1c1azotea").value = (l1azotea * 100).toFixed(0);
	    var Fc1azotea = Number(document.getElementById("Fcazotea").value);
	    var fcraizazotea = document.getElementById("fcraizazotea").value = Math.sqrt(Fc1azotea).toFixed(5);
	    var sumEc1azotea = document.getElementById("sumEcazotea").value = (15000 * fcraizazotea).toFixed(2);
	    <!-- formula 2 -->
	    var Bazotea = Number(document.getElementById("Bazotea").value);
	    var B2azotea = document.getElementById("B2azotea").value = Bazotea;
	    var Hazotea = Number(document.getElementById("Hazotea").value);
	    var H2azotea = document.getElementById("H2azotea").value = Math.pow(Hazotea, 3);
	    var H3azotea = document.getElementById("H3azotea").value = Math.pow(Hazotea, 3);
	    var Iazotea = document.getElementById("Iazotea").value = ((Bazotea * Math.pow(Hazotea, 3)) / 12).toFixed(4);
	    var div1azotea = document.getElementById("div1azotea").value = ((2.4089 * Math.pow(l2azotea, 4)) * sum5).toFixed(4);
	    var div2azotea = document.getElementById("div2azotea").value = (Math.pow(l1azotea, 4) + 2.4089 * Math.pow(l2azotea, 4)).toFixed(4);
	    var W1azotea = document.getElementById("w1azotea").value = (div1azotea / div2azotea).toFixed(4);
	    var div3azotea = document.getElementById("div3azotea").value = ((Math.pow(l1azotea, 4)) * sum5).toFixed(4);
	    var div4azotea = document.getElementById("div4azotea").value = (Math.pow(l1azotea, 4) + 2.4089 * Math.pow(l2azotea, 4)).toFixed(4);
	    var W2azotea = document.getElementById("w2azotea").value = (div3azotea / div4azotea).toFixed(4);
		<!--  calculo de flecha --->
		var L1c1azotea = document.getElementById("l1c1azotea").value = (l1azotea * 100).toFixed(0);
		var L1azoteac = document.getElementById("l1azoteac").value = (l1azotea * 100).toFixed(0);
		var L2c1azotea = document.getElementById("l2c1azotea").value = (l2azotea * 100).toFixed(0);
		var w2azoteadiv = document.getElementById("w2azoteadiv").value = (W2azotea / 100).toFixed(4);
		var WcalFlechaazotea = document.getElementById("WcalFlechaazotea").value = (W1azotea / 100) ;
		
		
		var divc2azotea = document.getElementById("divc2azotea").value = ((5 * Math.pow(L2c1azotea, 4)) * w2azoteadiv ).toFixed(4);
	    var div2c2azotea = document.getElementById("div2c2azotea").value = (384 *sumEc1azotea * Iazotea).toFixed(4);
	    var divc1azotea = document.getElementById("divc1azotea").value = (WcalFlechaazotea * Math.pow(L1azoteac, 4)).toFixed(4);
	    var div2c1azotea = document.getElementById("div2c1azotea").value = (185 * sumEc1azotea * Iazotea).toFixed(4);


	    var C2azotea = document.getElementById("c2azotea").value = (divc2azotea / div2c2azotea).toFixed(4);
	    var C1azotea = document.getElementById("c1azotea").value = (divc1azotea / div2c1azotea).toFixed(4);
		var Flechaazotea = document.getElementById("flechaazotea").value = L1c1azotea / 480;
		
	    document.getElementById("l1graf2").value = document.getElementById("L1azotea").value;
	    document.getElementById("l2graf2").value = document.getElementById("L2azotea").value;
		document.getElementById("l1momazotea").value = document.getElementById("L1azotea").value;
		document.getElementById("l2momazotea").value = document.getElementById("L2azotea").value;
		
		var WU1azotea = Number(document.getElementById("wu1azotea").value);
	    var WU2azotea = Number(document.getElementById("wu2azotea").value);
		document.getElementById("wu1fixazotea").value = document.getElementById("wu1azotea").value;
	    document.getElementById("wu2fixazotea").value = document.getElementById("wu2azotea").value;
		document.getElementById("cargavivaazotea").value = document.getElementById("num12").value;
		var CARGAINCazotea = document.getElementById("cargaazoteainc").value = (sum4 + k);
		var Wuazotea = document.getElementById("WUazotea").value = WU1azotea * CARGAINCazotea + WU2azotea * m;

	    var div1wu1azotea = document.getElementById("div1wuazotea").value = ((2.4089 * Math.pow(L2azotea, 4)) * Wuazotea).toFixed(4);
	    var div1wu2azotea = document.getElementById("div2wuazotea").value = (Math.pow(L1azotea, 4) + 2.4089 * Math.pow(L2azotea, 4)).toFixed(4);
	    var WUW1azotea = document.getElementById("wuw1azotea").value = (div1wu1azotea / div1wu2azotea).toFixed(4);
		
		var MenosMazotea = document.getElementById("menosmazotea").value = (WUW1azotea * Math.pow(L1azotea, 2)).toFixed(2);;
	    var ResultMazotea = document.getElementById("resultmazotea").value = (MenosMazotea / 8).toFixed(4);
	    var Finmazotea = document.getElementById("finmazotea").value = (ResultMazotea * 100).toFixed(4);
		
	    var MasMazotea = document.getElementById("masMazotea").value = (WUW1azotea * Math.pow(L1azotea, 2) * 9).toFixed(2);
	    var ResultMmasazotea = document.getElementById("resultmmasazotea").value = (MasMazotea / 128).toFixed(4);
	    var FinmMasazotea = document.getElementById("finMmasazotea").value = (ResultMmasazotea * 100).toFixed(4);
		
/* calculo de momento 2 */
	    var WU1momazotea = Number(document.getElementById("wu1momazotea").value);
	    var WU2momazotea = Number(document.getElementById("wu2momazotea").value);
	    document.getElementById("num4fixmomazotea").value = document.getElementById("num12").value;
	    document.getElementById("wu1fixmomazotea").value = document.getElementById("wu1momazotea").value;
	    document.getElementById("wu2fixmomazotea").value = document.getElementById("wu2momazotea").value;
	    var CARGAINCmomazotea = document.getElementById("cargaincmomazotea").value = (sum4 + k);
	    var Wumomazotea = document.getElementById("WUmomazotea").value = WU1momazotea * CARGAINCmomazotea + WU2momazotea * m;
	    var Wumondiv1azotea = document.getElementById("wumomdiv1azotea").value = ((Wumomazotea * Math.pow(L1azotea, 4))).toFixed(4);
	    var Wumondiv2azotea = document.getElementById("wumomdiv2azotea").value = ((Math.pow(L1azotea, 4) + 2.4089 * Math.pow(L2azotea, 4))).toFixed(4);
	    var Wuresultazotea = document.getElementById("wuresultazotea").value = (Wumondiv1azotea / Wumondiv2azotea).toFixed(4);
	    var Mommmasazotea = document.getElementById("MomMmasazotea").value = ((Wuresultazotea * Math.pow(L2azotea, 2))).toFixed(4);
	    var Resmommasazotea = document.getElementById("resmommasazotea").value = (Mommmasazotea / 8).toFixed(4);
	    var Resmasazotea = document.getElementById("resmasazotea").value = (Resmommasazotea * 100).toFixed(4);
		
	    var hfcazotea = document.getElementById("Hfcazotea").value = document.getElementById("Hazotea").value;
		var fcazoteafix = document.getElementById("Fcfixazotea2").value = document.getElementById("Fcazotea").value;
	    var FCCazoteafix = document.getElementById("Fcfixazotea1").value = document.getElementById("Fcazotea").value;
	    var FC2azotea = document.getElementById("FC2azotea").value = 0.8*0.85*Fc1azotea;
	    var Pmin1azotea = document.getElementById("mindiv1azotea").value = (0.70 * Math.sqrt(Fc1azotea)).toFixed(4);
	    var Maxazotea = Number(document.getElementById("MAXazotea").value);
	    var MAXRazotea = document.getElementById("MaxRazotea").value = Maxazotea * hfcazotea;
	    document.getElementById("varillamedidaazotea").innerHTML = MAXRazotea;
	    var Fyazotea = Number(document.getElementById("FYazotea").value);
	    var Pmin1azotea = document.getElementById("mindiv1azotea").value = (0.70 * Math.sqrt(Fc1azotea)).toFixed(4);
	    var PminAZOTEA = document.getElementById("minresultazotea").value = (Pmin1azotea / Fyazotea).toFixed(4);
	    var Frazotea = Number(document.getElementById("FRazotea").value);
	    var AVazotea = Number(document.getElementById("Avazotea").value);
	    var DivFazotea = document.getElementById("divFazotea").value = (FC2azotea / Fyazotea).toFixed(5);
	    var RaizMUazotea = document.getElementById("raizmuazotea").value = (2 * Finmazotea).toFixed(5);
	    var RaizMU2azotea = document.getElementById("raizmu2azotea").value = (2 * FinmMasazotea).toFixed(5);
	    var Raizdivmuazotea = document.getElementById("raizdivmuazotea").value = (Frazotea * Bazotea * Math.pow(hfcazotea, 2) * FC2azotea);
	    var DivFmuazotea = document.getElementById("divFmuazotea").value = (RaizMUazotea / Raizdivmuazotea).toFixed(5);
	    var DivFmu2azotea = document.getElementById("divFmu2azotea").value = (RaizMU2azotea / Raizdivmuazotea).toFixed(5);
	    var Unomenosmuazotea = document.getElementById("unomenosmuazotea").value = (1 - DivFmuazotea).toFixed(4);
	    var Unomenosmu2azotea = document.getElementById("unomenosmu2azotea").value = (1 - DivFmu2azotea).toFixed(4);
	    var Dellraizazotea = document.getElementById("DellRaizazotea").value = (1 - Math.sqrt(Unomenosmuazotea)).toFixed(4);
	    var Dellraiz2azotea = document.getElementById("DellRaiz2azotea").value = (1 - Math.sqrt(Unomenosmu2azotea)).toFixed(4);
	    var resPazotea = document.getElementById("P1resazotea").value = (DivFazotea * Dellraizazotea).toFixed(5);
	    var resP2azotea = document.getElementById("P2resazotea").value = (DivFazotea * Dellraiz2azotea).toFixed(5);

	    <!-- termino 2 -->



	}

	/* modal */
	$(".modal-wide").on("show.bs.modal", function() {
	    var height = $(window).height() - 200;
	    $(this).find(".modal-body").css("max-height", height);
	});
	/* latext */

	$(function() {
	    $(".latex").latex();
	});

	function peralteEfectivo1(cal) {

	    var step = 1;
	    var l1 = document.getElementById("L1").value;
	    var l2 = document.getElementById("L2").value;
	    document.getElementById("WUfix").value = document.getElementById("WU").value;
	    document.getElementById("WU").value = document.getElementById("WU").value;

	    var formula0 = "<a>$$ WT\\;=\\;" + sum1.value + "\\;KG/m\\;\\;\\;\\;\\;\\;\\;\\;L1=\\;" + l1 + "\\;M\\;\\;\\;\\;\\;\\;\\;L2=\\;" + l2 + "\\;\\;M\\; $$ </a>";
	    var formula1 = "$$   Ec\\;=\\;15,000.00\\;\\ast\\sqrt{F´c}\\;=\\;15,000.00\\;\\ast\\sqrt{" + Fc.value + "}\\;=\\;15,000.00\\;\\ast\\;" + fcraiz1.value + "\\;=\\;" + sumEc.value + "\\; KG/CM2 $$";
	    var formula2 = "$$ I\\;=\\;\\frac{\\displaystyle\\overset{\\;\\;\\;\\;\\;3}{BH}}{12}\\;=\\;\\frac{" + B.value + "\\;\\ast\\;" + H.value + "^3}{12}\\;=\\;\\frac{" + B.value + "\\;\\;\\ast\\;" + H2.value + "}{12}\\;=\\;" + I.value + "\\;CM4$$ ";
	    var equation1 = "$$ W1=\\frac{2.4089\\;\\;WT\\;\\;{\\displaystyle\\overset4{L2}}}{(L1^4+2.4089\\;L2^4\\;)}\\;\\;\\;\\;\\;=\\;\\frac{2.4089\\;\\ast\\;" + sum1.value + "\\;\\ast\\;" + l2 + "^4}{" + l1 + "^4\\;+\\;2.4089\\;\\ast\\;" + l2 + "^4}\\;=\\;\\frac{" + div1.value + "}{" + div2.value + "}\\;=\\;\\boxed{" + w1.value + "\\\\KG/M}$$";
	    var equation2 = "$$ W2=\\frac{WT\\;\\;{{L1^4}}}{(L1^4+2.4089\\;L2^4\\;)}\\;\\;\\;\\;\\;=\\;\\frac{" + sum1.value + "\\;\\ast\\;" + l1 + "^4}{" + l1 + "^4\\;+\\;2.4089\\;\\ast\\;" + l2 + "^4}\\;=\\;\\frac{" + div3.value + "}{" + div4.value + "}\\;=\\;\\boxed{" + w2.value + "\\\\KG/M}$$";
	    document.getElementById('divid_des').innerHTML = formula1 + formula2 + formula0 + equation1 + equation2;
	    MathJax.Hub.Queue(["Typeset", MathJax.Hub, 'divid_des']);
	    cal_flecha();
	    peralteEfectivo2();

	}


	<!--parte 2 -->
	function peralteEfectivo2(cal) {

	    var l1azotea = document.getElementById("L1azotea").value;
	    var l2azotea = document.getElementById("L2azotea").value;

	    var step = 1;
	    var peralte0 = "<a>$$ WT\\;=\\;" + sum5.value + "\\;KG/m\\;\\;\\;\\;\\;\\;\\;\\;L1=\\;" + l1azotea + "\\;M\\;\\;\\;\\;\\;\\;\\;L2=\\;" + l2azotea + "\\;\\;M\\; $$ </a>";
	    var peralte1 = "$$  Ec\\;=\\;15,000.00\\;\\ast\\sqrt{F´c}\\;=\\;15,000.00\\;\\ast\\sqrt{" + Fcazotea.value + "}\\;=\\;15,000.00\\;\\ast\\;" + fcraizazotea.value + "\\;=\\;" + sumEcazotea.value + "\\; KG/CM2 $$";
	    var peralte2 = "$$ I\\;=\\;\\frac{\\displaystyle\\overset{\\;\\;\\;\\;\\;3}{BH}}{12}\\;=\\;\\frac{" + Bazotea.value + "\\;\\ast\\;" + Hazotea.value + "^3}{12}\\;=\\;\\frac{" + Bazotea.value + "\\;\\;\\ast\\;" + H2azotea.value + "}{12}\\;=\\;" + Iazotea.value + "\\;CM4$$ ";
	    var peralte3 = "$$ W1=\\frac{2.4089\\;\\;WT\\;\\;{\\displaystyle\\overset4{L2}}}{(L1^4+2.4089\\;L2^4\\;)}\\;\\;\\;\\;\\;=\\;\\frac{2.4089\\;\\ast\\;" + sum5.value + "\\;\\ast\\;" + l2azotea + "^4}{" + l1azotea + "^4\\;+\\;2.4089\\;\\ast\\;" + l2 + "^4}\\;=\\;\\frac{" + div1azotea.value + "}{" + div2azotea.value + "}\\;=\\;\\boxed{" + w1azotea.value + "\\\\KG/M}$$";
	    var peralte4 = "$$ W2=\\frac{WT\\;\\;{{L1^4}}}{(L1^4+2.4089\\;L2^4\\;)}\\;\\;\\;\\;\\;=\\;\\frac{" + sum5.value + "\\;\\ast\\;" + l1azotea + "^4}{" + l1azotea + "^4\\;+\\;2.4089\\;\\ast\\;" + l2azotea + "^4}\\;=\\;\\frac{" + div3azotea.value + "}{" + div4azotea.value + "}\\;=\\;\\boxed{" + w2azotea.value + "\\\\KG/M}$$";
	    document.getElementById('perarteefectivo2').innerHTML = peralte1 + peralte2 + peralte0 + peralte3 + peralte4;
	    MathJax.Hub.Queue(["Typeset", MathJax.Hub, 'perarteefectivo2']);
		cal_flecha2();

	}