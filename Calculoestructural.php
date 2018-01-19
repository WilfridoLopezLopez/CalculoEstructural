<!doctype html>
<html>
  <link href="css/main.css" rel="stylesheet" type="text/css">
  <?php require "ComplementosPHP/Head.php"; ?>
  <?php require "ComplementosPHP/Navbar.php"; ?>
  <?php require "ComplementosPHP/imput.php"; ?>
  <body onload=" pasar();" >
    <div class="row no-gutters"  >
    <div class="container">
    <!-- Columna de informacion -->
    <div class=" content  col-lg-9">
    <div class="panel panel-default">
      <div class="panel-heading" >
        Contenido
      </div>
      <div class="panel-body ">
        <!--PRUEBA WIZARD-->
        <section>
          <div class="wizard">
            <div class="wizard-inner">
              <div class="connecting-line" ></div>
              <ul  class="nav nav-tabs" role="tablist" name="arriba" >
                <li  role="presentation" class="active ">
                  <a  href="#step1" data-toggle="tab" aria-controls="step1" role="tab" title="Ingrese datos">
                  <span class="round-tab "  >
                  <i class="glyphicon glyphicon-pencil"></i>
                  </span>
                  </a>
                </li>
                <li role="presentation" class="disabled">
                  <a href="#step2" data-toggle="tab" aria-controls="step2" role="tab" title="Ingrese datos">
                  <span class="round-tab">
                  <i class="glyphicon glyphicon-eye-open"></i>
                  </span>
                  </a>
                </li>
                <li role="presentation" class="disabled">
                  <a href="#step3" data-toggle="tab" aria-controls="step3" role="tab" title="Registre datos">
                  <span class="round-tab">
                  <i class="glyphicon glyphicon-check"></i>
                  </span>
                  </a>
                </li>
                <li role="presentation" class="disabled">
                  <a href="#step4" data-toggle="tab" aria-controls="step4" role="tab" title="Registre datos">
                  <span class="round-tab">
                  <i class="glyphicon glyphicon-check"></i>
                  </span>
                  </a>
                </li>
                <li role="presentation" class="disabled">
                  <a href="#complete" data-toggle="tab" aria-controls="complete" role="tab" title="Completo">
                  <span class="round-tab">
                  <i class="glyphicon glyphicon-ok"></i>
                  </span>
                  </a>
                </li>
              </ul>
            </div>
            <form role="form" >
              <div class="tab-content">
                <div class="tab-pane active" role="tabpanel" id="step1">
                  <h3>ANÁLISIS DE CARGAS</h3>
                  <p>
                    <!-- <form> -->               
                  <div class="container col-xs-12 table-responsive" >
                    <div class="row clearfix">
                      <div class="col-md-12 column">
                        <table class="table table-striped" >
                          <thead>
                            <tr >
                              <th class="text-center" style="alignment-adjust:baseline" >
                                <div class="col-lg-9" align="center">
                                  <em style="color:#071584;font-size:10px">LOSA DE CONCRETO =</em> 
                                  <div class="input-group input-group-sm col-sm-6"> <input class="form-control input-sm" style="text-align:center" value="10" type="number" id="numLosa" onInput="cal()"> </div>
                                  CMS
                                </div>
                              </th>
                              <th class="text-center">
                                D. ESTRUCTURAL
                              </th>
                              <th class="text-center">
                                D. SISMICO
                              </th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <td>
                                <strong>PISO ACABADO:</strong><br><br><br>
                                <div align="right">
                                  <b>CARGA MUERTA</b>	
                                </div>
                              </td>
                              <td align="center">
                                <div class="input-group input-group-sm col-sm-9">
                                  <input class="form-control input-sm" value="240" type="number" id="num1"  onInput="cal()">
                                  <span class="input-group-addon">KG/M2</span>
                                </div>
                                <div class="input-group input-group-sm col-sm-9">
                                  <input class="form-control input-sm" value="150" type="number" id="num2" onInput="cal()">
                                  <span class="input-group-addon">KG/M2</span>
                                </div>
                                <div class="input-group input-group-sm col-sm-9">
                                  <input class="form-control input-sm" type="number"  id="sum" value="0" readonly>
                                  <span class="input-group-addon">KG/M2</span>
                                </div>
                              </td>
                              <td align="center">
                                <div class="input-group input-group-sm col-sm-9">
                                  <input class="form-control input-sm" value="240" type="number" id="num5"  onInput="cal()">
                                  <span class="input-group-addon">KG/M2</span>
                                </div>
                                <div class="input-group input-group-sm col-sm-9">
                                  <input class="form-control input-sm" value="150" type="number" id="num6" onInput="cal()">
                                  <span class="input-group-addon">KG/M2</span>
                                </div>
                                <div class="input-group input-group-sm col-sm-9">
                                  <input class="form-control input-sm" type="number"  id="sum2" value="0" readonly>
                                  <span class="input-group-addon">KG/M2</span>
                                </div>
                              </td>
                            </tr>
                            <!-- carga muerta  -->
                            <tr>
                              ENTREPISO
                              <td align="right">
                                <p>MAS INCREMENTO C. MUERTA</p>
                                <p>MAS INCREMENTO C. VIVA</p>
                              </td>
                              <!-- estructural -->
                              <td align="center">
                                <div class="input-group input-group-sm col-sm-9">
                                  <input class="form-control input-sm" type="number" value="40" id="num3" onInput="cal()">
                                  <span class="input-group-addon">KG/M2</span>
                                </div>
                                <div class="input-group input-group-sm col-sm-9">
                                  <input class="form-control input-sm" type="number" id="num4" value="250" onInput="cal()">
                                  <span class="input-group-addon">KG/M2</span>
                                </div>
                                <div class="input-group input-group-sm col-sm-9">
                                  <input class="form-control input-sm" type="number" id="sum1" value="0" readonly>
                                  <span class="input-group-addon">KG/M2</span>
                                </div>
                              </td>
                              <!-- termino estructural -->
                              <td align="center">
                                <div class="input-group input-group-sm col-sm-9">
                                  <input class="form-control input-sm" type="number" value="40" id="num7" onInput="cal()">
                                  <span class="input-group-addon">KG/M2</span>
                                </div>
                                <div class="input-group input-group-sm col-sm-9">
                                  <input class="form-control input-sm" type="number" id="num8" value="180" onInput="cal()">
                                  <span class="input-group-addon">KG/M2</span>
                                </div>
                                <div class="input-group input-group-sm col-sm-9">
                                  <input class="form-control input-sm" type="number" id="sum3" value="0" readonly>
                                  <span class="input-group-addon">KG/M2</span>
                                </div>
                              </td>
                            </tr>
                          </tbody>
                        </table>
                      </div>
                    </div>
                  </div>
                  <!-- </form> -->
                  <!-- <form> -->               
                  <div class="container col-xs-12 table-responsive" >
                    <div class="row clearfix">
                      <div class="col-md-12 column">
                        <table class="table ttable-responsive" >
                          <thead>
                            <tr >
                              <th class="text-center" >
                                <em style="color:#071584;font-size:10px">LOSA DE CONCRETO=</em> H = 10 CMS
                              </th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <td>
                                <strong>PISO ACABADO:</strong><br><br><br>
                                <div align="right">
                                  <b>CARGA MUERTA</b>	
                                </div>
                              </td>
                              <td align="center">
                                <div class="input-group input-group-sm col-sm-9">
                                  <input class="form-control input-sm" value="240" type="number" id="num9"  onInput="cal()">
                                  <span class="input-group-addon">KG/M2</span>
                                </div>
                                <div class="input-group input-group-sm col-sm-9">
                                  <input class="form-control input-sm" value="120" type="number" id="num10" onInput="cal()">
                                  <span class="input-group-addon">KG/M2</span>
                                </div>
                                <div class="input-group input-group-sm col-sm-9">
                                  <input class="form-control input-sm" type="number"  id="sum4" value="0" readonly>
                                  <span class="input-group-addon">KG/M2</span>
                                </div>
                              </td>
                              <td align="center">
                                <div class="input-group input-group-sm col-sm-9">
                                  <input class="form-control input-sm" value="240" type="number" id="num13"  onInput="cal()">
                                  <span class="input-group-addon">KG/M2</span>
                                </div>
                                <div class="input-group input-group-sm col-sm-9">
                                  <input class="form-control input-sm" value="120" type="number" id="num14" onInput="cal()">
                                  <span class="input-group-addon">KG/M2</span>
                                </div>
                                <div class="input-group input-group-sm col-sm-9">
                                  <input class="form-control input-sm" type="number"  id="sum6" value="0" readonly>
                                  <span class="input-group-addon">KG/M2</span>
                                </div>
                              </td>
                            </tr>
                            <!-- carga muerta  -->
                            <tr>
                              AZOTEA
                              <td align="right">
                                <p>MAS INCREMENTO C. MUERTA</p>
                                <p>MAS INCREMENTO C. VIVA</p>
                              </td>
                              <!-- estructural -->
                              <td align="center">
                                <div class="input-group input-group-sm col-sm-9">
                                  <input class="form-control input-sm" type="number" value="20" id="num11" onInput="cal()">
                                  <span class="input-group-addon">KG/M2</span>
                                </div>
                                <div class="input-group input-group-sm col-sm-9">
                                  <input class="form-control input-sm" type="number" id="num12" value="100" onInput="cal()">
                                  <span class="input-group-addon">KG/M2</span>
                                </div>
                                <div class="input-group input-group-sm col-sm-9">
                                  <input class="form-control input-sm" type="number" id="sum5" value="0" readonly>
                                  <span class="input-group-addon">KG/M2</span>
                                </div>
                              </td>
                              <!-- termino estructural -->
                              <td align="center">
                                <div class="input-group input-group-sm col-sm-9">
                                  <input class="form-control input-sm" type="number" value="20" id="num15" onInput="cal()">
                                  <span class="input-group-addon">KG/M2</span>
                                </div>
                                <div class="input-group input-group-sm col-sm-9">
                                  <input class="form-control input-sm" type="number" id="num16" value="70" onInput="cal()">
                                  <span class="input-group-addon">KG/M2</span>
                                </div>
                                <div class="input-group input-group-sm col-sm-9">
                                  <input class="form-control input-sm" type="number" id="sum7" value="0" readonly>
                                  <span class="input-group-addon">KG/M2</span>
                                </div>
                              </td>
                            </tr>
                          </tbody>
                        </table>
                      </div>
                    </div>
                  </div>
                  <!-- </form> -->                        
                  </p>
                  <table class="col-xs-12 table-responsive">
                    <caption>
                      PESO PROPIO MUROS DE TABIQUE DE 14 CMS DE ESPESOR H= 2.40 MTS.
                    </caption>
                    <tbody>
                      <tr>
                        <th width="37%" scope="col">MUROS DE 14 CMS.</th>
                        <th width="63%" scope="col">
                          <div class="input-group input-group-sm col-sm-4">
                            <input class="form-control input-sm" type="number" id="numtab1" value="230" onInput="cal()">
                            <span class="input-group-addon">KG/M2</span>
                          </div>
                        </th>
                      </tr>
                      <tr>
                        <th scope="col">MAS PESO MORTERO</th>
                        <th scope="col">
                          <div class="input-group input-group-sm col-sm-4">
                            <input class="form-control input-sm" type="number" id="numtab2" value="35" onInput="cal()">
                            <span class="input-group-addon">KG/M2</span>
                          </div>
                        </th>
                      </tr>
                      <tr>
                        <th scope="col">MAS PESO APLANADOS</th>
                        <th scope="col">
                          <div class="input-group input-group-sm col-sm-4">
                            <input class="form-control input-sm" type="number" id="numtab3" value="110" onInput="cal()">
                            <span class="input-group-addon">KG/M2</span>
                          </div>
                        </th>
                      </tr>
                      <tr>
                        <th scope="col">&nbsp;</th>
                        <th scope="col">
                          <div class="input-group input-group-sm col-sm-10">
                            <input class="form-control input-sm" type="number" id="sumtab" value="0" readonly>
                            <span class="input-group-addon ">KG/M2 x 2.4 = </span>      
                            <input style="align-content:center" class="form-control input-sm" type="number" id="sumtab1" value="0" readonly>
                            <span class="input-group-addon">KG/ML</span>
                          </div>
                        </th>
                      </tr>
                    </tbody>
                  </table>
                  <ul class="list-inline pull-right">
                    <br><br>
                    <li><button href="#arriba" onclick="peralteEfectivo1();CalculoI();"  type="button" class="btn btn-primary next-step">Continuar</button></li>
                  </ul>
                </div>
                <!-- Termino primera parte-->
                <div class="tab-pane" role="tabpanel" id="step2">
                  <caption >PESO PROPIO CADENA DE CONCRETO ARMADO DE 15x20 CMS.</caption>
                  <table class="col-xs-12 table-responsive">
                    <tbody>
                      <tr>
                        <th >
                          <div class="input-group input-group-sm col-sm-12">
                            <input class="form-control input-sm" type="number" id="numcad1" value="0.15" onInput="cal()" >
                            <span class="input-group-addon "> X</span>
                            <div class="input-group input-group-sm col-sm-12">
                              <input style="align-content:center" class="form-control input-sm" type="number" id="numcad2" value="0.20" onInput="cal()" >
                              <span class="input-group-addon "> X</span>
                              <div class="input-group input-group-sm col-sm-12">
                                <input style="align-content:center" class="form-control input-sm" type="number" id="numcad3" value="2.40" onInput="cal()" >
                                <span class="input-group-addon "> =</span>
                                <div class="input-group input-group-sm col-sm-12">
                                  <input style="align-content:center" class="form-control input-sm" type="number" id="sumcad" value="0" readonly> 
                                  <span class="input-group-addon "> KG/ML</span>
                                </div>
                              </div>
                            </div>
                          </div>
                        </th>
                      </tr>
                    </tbody>
                  </table>
                  <p><br><br><br><br>
                  <div align="center">
                    <i>LOSA DE ENTREPISO (CRITICA)</i>
                  </div>
                  <div class="scrollform">
                    <div class="col-lg-9" >
                      <canvas height="500px" width="600px" id="plano1"></canvas>
                    </div>
                    <div class="col-lg-3" align="center">
                      <table  height="380" border="0">
                        <tbody>
                          <tr>
                            <th scope="col">
                              <!-- CTM TAVO -->
                              <div class="input-group input-group-sm col-sm-12">
                                <span class="input-group-addon ">L1</span>
                                <input onInput="peralteEfectivo1();mifuncion();" onKeyPress="if(this.value.length==4) return false;" style="align-content:center" class="form-control input-sm" type="number" id="L1" value="3" maxlength="3" onChange="cal_flecha();cal();momento2();Pmin(); tabla1();"onBlur="pasar();cal_flecha();"  onfocusout="tabla1()" > <span class="input-group-addon ">MTS</span>
                              </div>
                              <div class="input-group input-group-sm col-sm-12">
                                <span class="input-group-addon ">L2</span>
                                <input onInput="peralteEfectivo1();mifuncion();" onKeyPress="if(this.value.length==4) return false;" style="align-content:center" class="form-control input-sm"  type="number" id="L2" value="5.35" onKeyUp="mifuncion();mifuncion2();" maxlength="3" onChange="cal_flecha();cal();momento2();Pmin(); tabla1();" onBlur="pasar();cal_flecha();" onfocusout="tabla1()"> <span class="input-group-addon ">MTS</span>
                              </div>
                              <!-- TERMINO DE TAVO -->
                            </th>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
                  <div class="col-lg-9" align="center">
                    <canvas height="120px" width="600px" id="plano2"></canvas>
                  </div>
                  <a data-toggle="modal" data-target="#modalLaTeX" class="btn btn-primary">Despeje de Formula</a>
                 <?php require "php/modal.php"; ?>
                  </div>
                  <!-- /.modal -->
                  <div><br /></div>
                  <div class="col-lg-5">
                    <i class="latex">
                    $$Ec\;=\;\;\;15,000.00\;\;\;\;\sqrt{F´c}$$    
                    </i>
                  </div>
                  <div class="col-lg-4">
                    <div class="input-group input-group-sm">
                      <span class="input-group-addon "><i>FC = </i></span>
                      <input onKeyPress="if(this.value.length==4) return false;" style="align-content:center" class="form-control input-sm" value="200" min="1" max="999" type="number" id="Fc" onInput="cal();peralteEfectivo1()" onChange="peralteEfectivo1()"> 
                      <span class="input-group-addon ">KG/CM2</span>
                    </div>
                  </div>
                  <br />
                  <div id="canvas2" class="col-lg-12">
                    <div class="col-lg-2 scrollform" ><i class="latex">$$\;\;I\;=\;\frac{\displaystyle\overset{\;\;\;\;\;3}{BH}}{12}$$</i></div>
                    <canvas id="plano3"  width="500" height="150"> </canvas>
                    <!--imput b -->
                    <input type="text" style="position:absolute;top:110px;left:295px;width:50px;border-radius: 5px;" id="B" onInput="cal_flecha();cal();peralteEfectivo1()" onChange="cal_flecha();mensajecom();" value="100"/>
                    <span class="input-group-addon" style="position:absolute;top:110px;left:340px;width:50px;border-radius: 3px;">cm</span>
                    <input type="text" style="position:absolute;top:35px;left:520px;width:50px;border-radius: 5px;" id="H" onInput="cal();mensajecom();peralteEfectivo1();"  onChange="mensajecom();peralteEfectivo1();" value="8"  />
                    <span class="input-group-addon" style="position:absolute;top:35px;left:565px;width:50px;border-radius: 3px;">cm</span>
                  </div>
                  <div class="col-lg-12">
                    <div class="col-lg-12 scrollform">
                      <i class="latex scrollform" id="divid_des" style="font-size:14px"></i>
                    </div>
                    <div class="col-lg-12">
                      <div class="col-lg-6" align="center">
                        <img src="img/w2.png" width="500" height="200" >
                        <a title="Para el calculo de flechas se debe convertir a Centimetros (cm) ya que este resultado esta en Metros (m)">W2 = </a> 
                        <input  title="Para el calculo de flechas se debe convertir a Centimetros (cm) ya que este resultado esta en Metros (m)" style="background-color: #ffffff; border-width:0;"  type="number" id="w2"    disabled="true"  /></br>
                        <a title="Para el calculo de flechas se debe convertir a Centimetros (cm) ya que este resultado esta en Metros (m)">L2 = </a> 
                        <input  title="Para el calculo de flechas se debe convertir a Centimetros (cm) ya que este resultado esta en Metros (m)" style="background-color: #ffffff; border-width:0;"   id="l2" onInput="cal();" readonly  />
                        <div class="latex">$$ C2=\;\frac{\;5\;W2\;L2^4}{\;\;\;\;\;384\;EI\;}\; $$</div>
                      </div>
                      <div class="col-lg-6" align="center">
                        <img src="img/w1.png" width="500" height="200" >
                        <a  title="Para el calculo de flechas se debe convertir a Centimetros (cm) ya que este resultado esta en Metros (m)">W1 = </a> 
                        <input  style="background-color: #ffffff; border-width:0;" id="w1" onInput="cal();" readonly  title="Para el calculo de flechas se debe convertir a Centimetros (cm) ya que este resultado esta en Metros (m)" /><br>
                        <a  title="Para el calculo de flechas se debe convertir a Centimetros (cm) ya que este resultado esta en Metros (m)"> L1 = </a>
                        <input style="background-color: #ffffff; border-width:0;"   id="l1" onInput="cal();" readonly  title="Para el calculo de flechas se debe convertir a Centimetros (cm) ya que este resultado esta en Metros (m)"  />
                        <div class="latex">$$  C1=\;\frac{W1\;\;L1^4\;}{185\;EI\;}\;\;\;\;\; $$</div>
                      </div>
                    </div>
                    <br>
                    <div class="col-lg-12" id="calculodeflecha">
                      <h4>CALCULO DE LAS FLECHAS</h4>
                      <div class="scrollform"><i class="latex scrollform" style="font-size:14px"id="divid"></i></div>
                    </div>
                    <div align="left">
                      <div class="latex scrollform" style="font-size:14px" id="flecha"></div>
                      <br /><br />
                      <div id="losatexto"></div>
                      <br />
                    </div>
                    <div class="col-lg12 " id="calculodemomentosepara ">
                      <h4 align="center">CALCULO DE MOMENTOS</h4>
                      <hr style="color: #0056b2;" />
                      <div class="col-lg-6" align="center" valign="top">
                        <img src="plano/momento.png" width="500" height="200">
                        <a>L1= </a> 
                        <input style="background-color: #ffffff; border-width:0;"   id="l1mom" onInput="cal();" readonly  />
                        <hr style="color: #0056b2;" />
                      </div>
                      <div class="col-lg-6" >
                        <div class="input-group input-group-sm col-sm-8" >
                          <span class="input-group-addon " style="background-color:transparent; border-width:0;">WU  = </span>
                          <input class="form-control input-sm" onInput="cal();momento1();"  onchange="momento1()" style="width:80px" type="number"  id="wu1" value="1.4" >
                          <span class="input-group-addon " style="background-color:transparent; border-width:0;">CM </span>
                          <span class="input-group-addon "   style="background-color:transparent; border-width:0;">+</span>
                          <input  style="width:80px" onInput="cal();momento1();"  onchange="momento1();" class="form-control input-sm" type="number" id="wu2" value="1.7" >
                          <span class="input-group-addon" style="background-color:transparent; border-width:0;">CV</span>  
                        </div>
                        <div class="input-group input-group-sm col-sm-8">
                          <span class="input-group-addon "  style="background-color:transparent; border-width:0;">=</span>
                          <input class="form-control input-sm" style="width:70px;background-color:transparent; border-width:0;" type="number" id="wu1fix" value="1.4"   readonly="readonly">
                          <span class="input-group-addon "  style="background-color:transparent; border-width:0;">x</span>
                          <input class="form-control input-sm" style="width:70px;background-color:transparent; border-width:0;" type="number"  title="Valor de  carga muerta mas incremento " id="cargainc" readonly >
                          <span class="input-group-addon "   style="background-color:transparent; border-width:0;">+</span>
                          <input  style="width:70px;background-color:transparent; border-width:0;" onInput="cal();"  class="form-control input-sm" type="number" id="wu2fix" value="1.7"  readonly="readonly" >
                          <span class="input-group-addon"   style="background-color:transparent; border-width:0;">x</span>
                          <input  style="width:70px;background-color:transparent; border-width:0;" onInput="cal();"  class="form-control input-sm" type="number" id="num4fix"  value="0"  readonly="readonly" >  
                        </div>
                        <div class="input-group input-group-sm col-sm-5" >
                          <span class="input-group-addon "  style="background-color:transparent; border-width:0;">=</span>
                          <a><input type="number" onInput="cal();" align="center"  id="WU" value="0" readonly style="background-color:transparent; border-width:0;width:70px;" />KG/M</a>
                        </div>
                      </div>
                      <div class="col-lg-12">
                        <div class="latex scrollform" id="momento" style="font-size:14px"></div>
                      </div>
                    </div>
                    <div class="col-lg-12">
                      <hr style="color: #0056b2;" />
                      <div class="col-lg-6" align="center" valign="top">
                        <img src="plano/momento2.png" width="500" height="200">
                        <a> L2 = </a>
                        <input style="background-color: #ffffff; border-width:0;"   id="l2mom" onInput="cal();" readonly  />
                        <hr style="color: #0056b2;" />
                      </div>
                      <div class="col-lg-6" >
                        <div class="input-group input-group-sm col-sm-8" >
                          <span class="input-group-addon " style="background-color:transparent; border-width:0;">WU  = </span>
                          <input class="form-control input-sm" onInput="cal();momento2();" onChange="momento2()"  style="width:80px" type="number"  id="wu1mom" value="1.4" >
                          <span class="input-group-addon " style="background-color:transparent; border-width:0;">CM </span>
                          <span class="input-group-addon "   style="background-color:transparent; border-width:0;">+</span>
                          <input  style="width:80px" onInput="cal();momento2();" onChange="momento2()" class="form-control input-sm" type="number" id="wu2mom" value="1.7" >
                          <span class="input-group-addon" style="background-color:transparent; border-width:0;">CV</span>  
                        </div>
                        <div class="input-group input-group-sm col-sm-8">
                          <span class="input-group-addon "  style="background-color:transparent; border-width:0;">=</span>
                          <input class="form-control input-sm" style="width:70px;background-color:transparent; border-width:0;" type="number" id="wu1fixmom" value="1.4"   readonly="readonly">
                          <span class="input-group-addon "  style="background-color:transparent; border-width:0;">x</span>
                          <input class="form-control input-sm" style="width:70px;background-color:transparent; border-width:0;" type="number"  title="Valor de  carga muerta mas incremento " id="cargaincmom" readonly >
                          <span class="input-group-addon "   style="background-color:transparent; border-width:0;">+</span>
                          <input  style="width:70px;background-color:transparent; border-width:0;" onInput="cal();"  class="form-control input-sm" type="number" id="wu2fixmom" value="1.7"  readonly="readonly" >
                          <span class="input-group-addon"   style="background-color:transparent; border-width:0;">x</span>
                          <input  style="width:70px;background-color:transparent; border-width:0;" onInput="cal();"  class="form-control input-sm" type="number" id="num4fixmom"  value="0"  readonly="readonly" >  
                        </div>
                        <div class="input-group input-group-sm col-sm-5" >
                          <span class="input-group-addon "  style="background-color:transparent; border-width:0;">=</span>
                          <a><input type="number" onInput="cal();" align="center"  id="WUmom" value="0" readonly style="background-color:transparent; border-width:0;width:70px;" />KG/M</a>
                        </div>
                      </div>
                      <div class="col-lg-12">
                        <div class="latex scrollform" id="momento2" style="font-size:14px">
                        </div>
                        <div class="col-lg-12">
                          <div class="datagrid scrollform">
                            <table>
                              <thead>
                                <tr>
                                  <th>MOMENTO ( KG-CM2 )</th>
                                  <th>B ( CM )</th>
                                  <th>D ( CM )</th>
                                  <th>P</th>
                                  <th>As ( CM2 )</th>
                                  <th>S ( CM )</th>
                                  <th>USAR</th>
                                </tr>
                              </thead>
                              <tfoot>
                                <tr>
                                  <td colspan="7">
                                    <div id="no-paging">&nbsp;</div>
                                </tr>
                              </tfoot>
                              <tbody>
                                <tr>
                                  <td id="valor1"></td>
                                  <td id="valor4"></td>
                                  <td id="valor7"></td>
                                  <td id="valor11"></td>
                                  <td id="valor13"></td>
                                  <td id="valor16"></td>
                                  <td id="valor19">data</td>
                                </tr>
                                <tr>
                                  <td id="valor2"></td>
                                  <td id="valor5"></td>
                                  <td id="valor8"></td>
                                  <td id="valor12"></td>
                                  <td id="valor14"></td>
                                  <td id="valor17"></td>
                                  <td id="valor20">data</td>
                                </tr>
                                <tr>
                                  <td id="valor3"></td>
                                  <td id="valor6"></td>
                                  <td id="valor9"></td>
                                  <td  id="valor10"></td>
                                  <td id="valor15"></td>
                                  <td id="valor18"></td>
                                  <td id="valor21">data</td>
                                </tr>
                              </tbody>
                            </table>
                          </div>
                        </div>
                      </div>
                      <div class="col-lg-12 latex"> $$ P=\;\frac{F'''\;C}{f\;v}\left[1\;^-\sqrt{\;^{1\;-}\frac{2\;\ast\;M\;u}{FR\;\ast\;B\;\ast\;D^2\;\ast\;f''\;c}}\right] $$ </div>
                      <div id="formulariodeP">
                        <div class="input-group input-group-sm col-sm-12" >
                          <span class="input-group-addon sinborde"> f´c =</span>
                          <div class="input-group input-group-sm col-sm-12">
                            <input style="text-align:center;width:70px;background-color:transparent; border-width:0;" class="form-control input-sm" type="number" id="Fcfix"  readonly >
                            <span class="input-group-addon sinborde "> KG/CM2 </span>
                            <span class="input-group-addon sinborde "> SUPONIENDO  MAX. =</span>
                            <div class="input-group input-group-sm col-sm-12">
                              <input style="text-align:center;width:70px;background-color:transparent; border-width:0;" class="form-control input-sm" type="number" id="MAX" value="2.50" onInput="cal();tabla1()" onChange="tabla1()" >
                              <span class="input-group-addon sinborde "> *  </span>
                              <!--- -->
                              <div class="input-group input-group-sm col-sm-12">
                                <input style="text-align:center;width:70px;background-color:transparent; border-width:0;"  class="form-control input-sm" type="number" id="Hfc" readonly>
                                <span class="input-group-addon sinborde "> = </span>
                                <!---->
                                <div class="input-group input-group-sm col-sm-12">
                                  <input style="text-align:center;background-color:transparent; border-width:0;" class="form-control input-sm" type="number" id="MaxR" readonly> 
                                  <span class="input-group-addon sinborde "> CMS</span>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div id="fcprima">
                        <div class="input-group input-group-sm col-sm-8" >
                          <span class="input-group-addon sinborde"> f´´c =</span>
                          <div class="input-group input-group-sm">
                            <span class="input-group-addon sinborde "> 0.8 ( 0.85 f´c) = </span>
                            <span class="input-group-addon sinborde ">
                              <texto style="color:#F00">0.8</texto>
                              *  
                              <texto style="color:#F00">0.85</texto>
                              * 
                            </span>
                            <div class="input-group input-group-sm col-sm-12">
                              <input style="text-align:left;color:#00F;width:70px;background-color:transparent; border-width:0;" class="form-control input-sm" type="number" id="Fcfix2"  readonly >
                              <span class="input-group-addon sinborde "> =  </span> 
                              <!---->
                              <div class="input-group input-group-sm  ">
                                <input style="text-align:center;width:70px;background-color:transparent; border-width:0;" class="form-control input-sm" type="number" id="FC2" readonly> 
                                <span class="input-group-addon sinborde "> KG/CM2</span>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="input-group">
                        <div class="input-group input-group-sm  ">
                          <span class="input-group-addon sinborde "> FR =</span>
                          <input style="text-align:center;width:70px;background-color:transparent; border-width:0;"  onInput="cal(); Pmin(); tabla1();" onChange="Pmin(); tabla1();" class="form-control input-sm" value="0.90" type="number" id="FR"> 
                        </div>
                      </div>
                      <div class="input-group">
                        <div class="input-group input-group-sm  ">
                          <span class="input-group-addon sinborde "> FY =</span>
                          <input style="text-align:center;width:70px;background-color:transparent; border-width:0;" onInput="cal(); Pmin(); tabla1();" onChange="Pmin(); tabla1();" class="form-control input-sm" type="number"  value="4200" id="FY"> 
                        </div>
                      </div>
                      <div class="input-group">
                        <div class="input-group input-group-sm  ">
                          <span class="input-group-addon sinborde "> As =</span>
                          <input style="text-align:center;width:70px;background-color:transparent; border-width:0;"onInput="cal(); Pmin(); tabla1();" onChange=" Pmin(); tabla1();" class="form-control input-sm" type="text"  value="PBD" readonly> 
                        </div>
                      </div>
                      <div class="input-group">
                        <div class="input-group input-group-sm  ">
                          <span class="input-group-addon sinborde "> USANDO VARILLA DE 3/8 Av= </span>
                          <input style="text-align:center;width:70px;background-color:transparent; border-width:0;" onInput="Pmin();" onChange=" Pmin()" class="form-control input-sm" type="number" id="Av"  value="0.71" > 
                        </div>
                      </div>
                      <div class="latex scrollform" id="pmin" style="font-size:14px"></div>
                      <div align="center">
                        <canvas id="planoarmado"  width="600" height="400"> </canvas>
                      </div>
                      <div  class="cuaderno col-md-10 col-md-offset-1" >
                        <h5 >
                        ESTA LOSA  SE ARMARA CON VARILLA DE 3/8" CON LAS SEPARACIONES INDICADAS.  LOS DEMAS TABLEROS DE LA LOSA DE ENTREPISO POR SER DE DIMENSIONES MUCHO MAS PEQUEÑAS SE ARMARAN CON VARILLA DE 3/8" CON LA SEPARACION MAXIMA  @ <strong><a id="varillamedida"> </a></strong> CMS EN AMBAS DIRECCIONES.</h6>
                      </div>
                    </div>
                  </div>
                  <!--FIN MODAL LATEX-->
                  <br>
                  </br>
                  </p>
                  <ul class="list-inline pull-right">
                    </br>
                    <li><button type="button" class="btn btn-default prev-step">Regresar</button></li>
                    <li><button type="button" class="btn btn-primary next-step">Continuar</button></li>
                  </ul>
                </div>
                <div class="tab-pane" role="tabpanel" id="step3">
                  <!-- Parte 2 inicio -->
                  <div class="scrollform">
                    <div class="col-lg-9" >
                      <canvas height="500px" width="600px" id="planoparte2"></canvas>
                    </div>
                    <div class="col-lg-3" align="center">
                      <table  height="380" border="0">
                        <tbody>
                          <tr>
                            <th scope="col">
                              <div class="input-group input-group-sm col-sm-12">
                                <span class="input-group-addon ">L1</span>
                                <input  onKeyPress="if(this.value.length==4) return false;" style="align-content:center" class="form-control input-sm" type="number" id="L1azotea" value="3" maxlength="3" onChange="cal();mifuncionparte2();peralteEfectivo2()" onInput="cal();mifuncionparte2();peralteEfectivo2()"  > <span class="input-group-addon ">MTS</span>
                              </div>
                              <div class="input-group input-group-sm col-sm-12">
                                <span class="input-group-addon ">L2</span>
                                <input  onKeyPress="if(this.value.length==4) return false;" style="align-content:center" class="form-control input-sm"  type="number" id="L2azotea" value="5.35" onChange="cal();mifuncionparte2();peralteEfectivo2()" onInput="cal();mifuncionparte2();peralteEfectivo2()" > <span class="input-group-addon ">MTS</span>
                              </div>
                            </th>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                    <!--- no movel aqui-->
                  </div>
                  <div align="center"><img src="plano/plano1parte2.png" width="720" height="150" alt="PlanoFormula"></div>
                  <div id="modalpanel">
                    <div class="col-md-7 col-md-offset-5"><a data-toggle="modal" data-target="#modalLaTeX2" class="btn btn-primary">Despeje de Formula</a></div>
                    <div class="col-lg-5">
                      </br>
                      <i class="latex">
                      $$Ec\;=\;\;\;15,000.00\;\;\;\;\sqrt{F´c}$$    
                      </i>
                    </div>
                    <div class="col-lg-4">
                      </br>
                      <div class="input-group input-group-sm">
                        <span class="input-group-addon "><i>FC = </i></span>
                        <input onKeyPress="if(this.value.length==4) return false;" oinput="cal();peralteEfectivo2()" onChange="cal();peralteEfectivo2()" style="align-content:center" class="form-control input-sm" value="200" min="1" max="999" type="number" id="Fcazotea"> 
                        <span class="input-group-addon ">KG/CM2</span>
                      </div>
                    </div>
                    <div class="col-lg-12">
                      <div class="col-lg-2" align="center">
                        <i class="latex">$$\;\;I\;=\;\frac{\displaystyle\overset{\;\;\;\;\;3}{BH}}{12}$$</i>
                      </div>
                      <div class="col-lg-6" align="center">
                        <img src="plano/peralteEfectivo.png" width="371" height="106" alt="peralte efectivo">
                      </div>
                      <div class="col-lg-4">
                        <div class="input-group input-group-sm col-sm-8" >
                          <span class="input-group-addon " style="background-color:transparent; border-width:0;">B = </span>
                          <input class="form-control input-sm"  style="width:80px" type="number"  id="Bazotea" value="100" oinput="cal();peralteEfectivo2()" onChange="cal();peralteEfectivo2()" >
                          <span class="input-group-addon " style="background-color:transparent; border-width:0;">CM </span>
                        </div>
                        <div class="input-group input-group-sm col-sm-8" >
                          <span class="input-group-addon " style="background-color:transparent; border-width:0;">H = </span>
                          <input class="form-control input-sm"  style="width:80px" type="number"  id="Hazotea" value="8" oinput="cal();peralteEfectivo2()" onChange="cal();peralteEfectivo2()" >
                          <span class="input-group-addon " style="background-color:transparent; border-width:0;">CM </span>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-12">
                      <div class="latex scrollform" id="perarteefectivo2" style="font-size:14px"></div>
                    </div>
                    <div class="col-lg-12">
                      <div class="col-lg-6" align="center">
                        <img src="img/w2.png" width="500" height="200" >
                        <a>W2 = </a> 
                        <input style="background-color: #ffffff; border-width:0;"   id="w2azotea" onInput="cal();" readonly  /><br>
                        <a>L2 = </a> 
                        <input style="background-color: #ffffff; border-width:0;"   id="l2graf2" onInput="cal();" readonly  />
                        <div class="latex">$$ C2=\;\frac{\;5\;W2\;L2^4}{384\;EI\;}\; $$</div>
                      </div>
                      <div class="col-lg-6" align="center">
                        <img src="img/w1.png" width="500" height="200" >
                        <a>W1 = </a> 
                        <input  style="background-color: #ffffff; border-width:0;" id="w1azotea" onInput="cal();" readonly  /><br>
                        <a> L1 = </a>
                        <input style="background-color: #ffffff; border-width:0;"   id="l1graf2" onInput="cal();" readonly  />
                        <div class="latex">$$  C1=\;\frac{W1\;\;L1^4\;}{185\;EI\;} $$</div>
                      </div>
                    </div>
                    <div class="col-lg-12" id="calculodeflecha">
                      <h4>CALCULO DE LAS FLECHAS</h4>
                      <div class="scrollform"><i class="latex scrollform" style="font-size:14px" id="cal-flecha2"></i></div>
                    </div>
                                       
                    <div align="left">

                    </div>
                    <div class="col-lg-12 " id="calculodemomentosepara ">
                      <h4 align="center">CALCULO DE MOMENTOS</h4>
                      <hr style="color: #0056b2;" />
                      <div class="col-lg-6" align="center" valign="top">
                        <img src="plano/momento.png" width="500" height="200">
                        <a>L1= </a> 
                        <input style="background-color: #ffffff; border-width:0;"   id="l1momazotea" onInput="cal();" readonly  />
                        <hr style="color: #0056b2;" />
                      </div>
                      <div class="col-lg-6" >
                        <div class="input-group input-group-sm col-sm-8" >
                          <span class="input-group-addon " style="background-color:transparent; border-width:0;">WU  = </span>
                          <input class="form-control input-sm" onInput="cal();momento1azotea();"  onchange="momento1azotea();" style="width:80px" type="number"  id="wu1azotea" value="1.4" >
                          <span class="input-group-addon " style="background-color:transparent; border-width:0;">CM </span>
                          <span class="input-group-addon "   style="background-color:transparent; border-width:0;">+</span>
                          <input  style="width:80px" onInput="cal();momento1azotea();"  onchange="momento1azotea();" class="form-control input-sm" type="number" id="wu2azotea" value="1.7" >
                          <span class="input-group-addon" style="background-color:transparent; border-width:0;">CV</span>  
                        </div>
                        <div class="input-group input-group-sm col-sm-8">
                          <span class="input-group-addon "  style="background-color:transparent; border-width:0;">=</span>
                          <input class="form-control input-sm" style="width:70px;background-color:transparent; border-width:0;" type="number" id="wu1fixazotea" value="1.4"   readonly="readonly">
                          <span class="input-group-addon "  style="background-color:transparent; border-width:0;">x</span>
                          <input class="form-control input-sm" style="width:70px;background-color:transparent; border-width:0;" type="number"  title="Valor de  carga muerta mas incremento " id="cargaazoteainc" readonly >
                          <span class="input-group-addon "   style="background-color:transparent; border-width:0;">+</span>
                          <input  style="width:70px;background-color:transparent; border-width:0;" onInput="cal();"  class="form-control input-sm" type="number" id="wu2fixazotea" value="1.7"  readonly="readonly" >
                          <span class="input-group-addon"   style="background-color:transparent; border-width:0;">x</span>
                          <input  style="width:70px;background-color:transparent; border-width:0;" onInput="cal();"  class="form-control input-sm" type="number" id="cargavivaazotea"  value="0"  readonly="readonly" >  
                        </div>
                        <div class="input-group input-group-sm col-sm-5" >
                          <span class="input-group-addon "  style="background-color:transparent; border-width:0;">=</span>
                          <a><input type="number" onInput="cal();" align="center"  id="WUazotea" value="0" readonly style="background-color:transparent; border-width:0;width:70px;" />KG/M</a>
                        </div>
                        </div>
                      </div>
                         <div class="col-lg-12">
                        <div class="latex scrollform" id="momentoazotea" style="font-size:14px"></div>
                      </div>
                                          <div class="col-lg-12">
                      <hr style="color: #0056b2;" />
                      <div class="col-lg-6" align="center" valign="top">
                        <img src="plano/momento2.png" width="500" height="200">
                        <a> L2 = </a>
                        <input style="background-color: #ffffff; border-width:0;"   id="l2momazotea" onInput="cal();" readonly  />
                        <hr style="color: #0056b2;" />
                      </div>
                      <div class="col-lg-6" >
                        <div class="input-group input-group-sm col-sm-8" >
                          <span class="input-group-addon " style="background-color:transparent; border-width:0;">WU  = </span>
                          <input class="form-control input-sm" onInput="cal();momento2azotea();" onChange="momento2azotea()"  style="width:80px" type="number"  id="wu1momazotea" value="1.4" >
                          <span class="input-group-addon " style="background-color:transparent; border-width:0;">CM </span>
                          <span class="input-group-addon "   style="background-color:transparent; border-width:0;">+</span>
                          <input  style="width:80px" onInput="cal();momento2azotea();" onChange="momento2azotea()" class="form-control input-sm" type="number" id="wu2momazotea" value="1.7" >
                          <span class="input-group-addon" style="background-color:transparent; border-width:0;">CV</span>  
                        </div>
                        <div class="input-group input-group-sm col-sm-8">
                          <span class="input-group-addon "  style="background-color:transparent; border-width:0;">=</span>
                          <input class="form-control input-sm" style="width:70px;background-color:transparent; border-width:0;" type="number" id="wu1fixmomazotea" value="1.4"   readonly="readonly">
                          <span class="input-group-addon "  style="background-color:transparent; border-width:0;">x</span>
                          <input class="form-control input-sm" style="width:70px;background-color:transparent; border-width:0;" type="number"  title="Valor de  carga muerta mas incremento " id="cargaincmomazotea" readonly >
                          <span class="input-group-addon "   style="background-color:transparent; border-width:0;">+</span>
                          <input  style="width:70px;background-color:transparent; border-width:0;" onInput="cal();"  class="form-control input-sm" type="number" id="wu2fixmomazotea" value="1.7"  readonly="readonly" >
                          <span class="input-group-addon"   style="background-color:transparent; border-width:0;">x</span>
                          <input  style="width:70px;background-color:transparent; border-width:0;" onInput="cal();"  class="form-control input-sm" type="number" id="num4fixmomazotea"  value="0"  readonly="readonly" >  
                        </div>
                        <div class="input-group input-group-sm col-sm-5" >
                          <span class="input-group-addon "  style="background-color:transparent; border-width:0;">=</span>
                          <a><input type="number" onInput="cal();" align="center"  id="WUmomazotea" value="0" readonly style="background-color:transparent; border-width:0;width:70px;" />KG/M</a>
                        </div>
                      </div>
                      </div>
                      <div class="col-lg-12">
                        <div class="latex scrollform" id="momento2azotea" style="font-size:14px">
                        </div>
                        </div>
                                                <div class="col-lg-12">
                          <div class="datagrid scrollform">
                            <table>
                              <thead>
                                <tr>
                                  <th>MOMENTO ( KG-CM2 )</th>
                                  <th>B ( CM )</th>
                                  <th>D ( CM )</th>
                                  <th>P</th>
                                  <th>As ( CM2 )</th>
                                  <th>S ( CM )</th>
                                  <th>USAR</th>
                                </tr>
                              </thead>
                              <tfoot>
                                <tr>
                                  <td colspan="7">
                                    <div id="no-paging">&nbsp;</div>
                                </tr>
                              </tfoot>
                              <tbody>
                                <tr>
                                  <td id="valor1azotea"></td>
                                  <td id="valor4azotea"></td>
                                  <td id="valor7azotea"></td>
                                  <td id="valor11azotea"></td>
                                  <td id="valor13azotea"></td>
                                  <td id="valor16azotea"></td>
                                  <td id="valor19azotea">data</td>
                                </tr>
                                <tr>
                                  <td id="valor2azotea"></td>
                                  <td id="valor5azotea"></td>
                                  <td id="valor8azotea"></td>
                                  <td id="valor12azotea"></td>
                                  <td id="valor14azotea"></td>
                                  <td id="valor17azotea"></td>
                                  <td id="valor20azotea">data</td>
                                </tr>
                                <tr>
                                  <td id="valor3azotea"></td>
                                  <td id="valor6azotea"></td>
                                  <td id="valor9azotea"></td>
                                  <td  id="valor10azotea"></td>
                                  <td id="valor15azotea"></td>
                                  <td id="valor18azotea"></td>
                                  <td id="valor21azotea">data</td>
                                </tr>
                              </tbody>
                            </table>
                          </div>
                        </div>
                       <div class="col-lg-12 latex"> $$ P=\;\frac{F'''\;C}{f\;v}\left[1\;^-\sqrt{\;^{1\;-}\frac{2\;\ast\;M\;u}{FR\;\ast\;B\;\ast\;D^2\;\ast\;f''\;c}}\right] $$ </div>
                      <div id="formulariodeP2">
                        <div class="input-group input-group-sm col-sm-12" >
                          <span class="input-group-addon sinborde"> f´c =</span>
                          <div class="input-group input-group-sm col-sm-12">
                            <input style="text-align:center;width:70px;background-color:transparent; border-width:0;" class="form-control input-sm" type="number" id="Fcfixazotea1"  readonly >
                            <span class="input-group-addon sinborde "> KG/CM2 </span>
                            <span class="input-group-addon sinborde "> SUPONIENDO  MAX. =</span>
                            <div class="input-group input-group-sm col-sm-12">
                              <input style="text-align:center;width:70px;background-color:transparent; border-width:0;" class="form-control input-sm" type="number" id="MAXazotea" value="2.50" onInput="cal();tabla1azotea()" onChange="tabla1azotea()" >
                              <span class="input-group-addon sinborde "> *  </span>
                              <!--- -->
                              <div class="input-group input-group-sm col-sm-12">
                                <input style="text-align:center;width:70px;background-color:transparent; border-width:0;"  class="form-control input-sm" type="number" id="Hfcazotea" readonly>
                                <span class="input-group-addon sinborde "> = </span>
                                <!---->
                                <div class="input-group input-group-sm col-sm-12">
                                  <input style="text-align:center;background-color:transparent; border-width:0;" class="form-control input-sm" type="number" id="MaxRazotea" readonly> 
                                  <span class="input-group-addon sinborde "> CMS</span>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        </div>
                    <!--imput b -->
                                          <div id="fcprimaazotea">
                        <div class="input-group input-group-sm col-sm-8" >
                          <span class="input-group-addon sinborde"> f´´c =</span>
                          <div class="input-group input-group-sm">
                            <span class="input-group-addon sinborde "> 0.8 ( 0.85 f´c) = </span>
                            <span class="input-group-addon sinborde ">
                              <texto style="color:#F00">0.8</texto>
                              *  
                              <texto style="color:#F00">0.85</texto>
                              * 
                            </span>
                            <div class="input-group input-group-sm col-sm-12">
                              <input style="text-align:left;color:#00F;width:70px;background-color:transparent; border-width:0;" class="form-control input-sm" type="number" id="Fcfixazotea2"  readonly >
                              <span class="input-group-addon sinborde "> =  </span> 
                              <!---->
                              <div class="input-group input-group-sm  ">
                                <input style="text-align:center;width:70px;background-color:transparent; border-width:0;" class="form-control input-sm" type="number" id="FC2azotea" readonly> 
                                <span class="input-group-addon sinborde "> KG/CM2</span>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="input-group">
                        <div class="input-group input-group-sm  ">
                          <span class="input-group-addon sinborde "> FR =</span>
                          <input style="text-align:center;width:70px;background-color:transparent; border-width:0;"  onInput="cal(); Pminazotea(); tabla1azotea();" onChange="Pminazotea(); tabla1azotea();" class="form-control input-sm" value="0.90" type="number" id="FRazotea"> 
                        </div>
                      </div>
                      <div class="input-group">
                        <div class="input-group input-group-sm  ">
                          <span class="input-group-addon sinborde "> FY =</span>
                          <input style="text-align:center;width:70px;background-color:transparent; border-width:0;" onInput="cal(); Pminazotea(); tabla1azotea();" onChange="Pminazotea(); tabla1azotea();" class="form-control input-sm" type="number"  value="4200" id="FYazotea"> 
                        </div>
                      </div>
                      <div class="input-group">
                        <div class="input-group input-group-sm  ">
                          <span class="input-group-addon sinborde "> As =</span>
                          <input style="text-align:center;width:70px;background-color:transparent; border-width:0;"onInput="cal(); Pminazotea(); tabla1azotea();" onChange=" Pminazotea(); tabla1azotea();" class="form-control input-sm" type="text"  value="PBD" readonly> 
                        </div>
                      </div>
                      <div class="input-group">
                        <div class="input-group input-group-sm  ">
                          <span class="input-group-addon sinborde "> USANDO VARILLA DE 3/8 Av= </span>
                          <input style="text-align:center;width:70px;background-color:transparent; border-width:0;" onInput="Pminazotea();" onChange=" Pminazotea()" class="form-control input-sm" type="number" id="Avazotea"  value="0.71" > 
                        </div>
                      </div>
                      <div class="latex scrollform" id="pminazotea" style="font-size:14px"></div>
                      <div align="center">
                        <canvas id="planoarmadoazotea"  width="600" height="400"> </canvas>
                      </div>

                    <!-- INICIA MODAL LATEX-->
                    <div id="modalLaTeX2" class="modal modal-wide fade" style="overflow-y: scroll;">
                      <div class="modal-dialog" >
                        <div class="modal-content">
                          <div class="modal-header" style="background-color: #333333">
                            <button type="button" class="close" data-dismiss="modal" style="color: #ffc005" aria-hidden="true">X</button>
                            <h4 class="modal-title" style="color: #ffffff">Despeje...</h4>
                          </div>
                          <div class="modal-body">
                            <p>
                            <div class="latex">
                              \begin{array}{l}C2=\;\frac{5\;W2\;L2^4}{384\;E\;I}\;\;\;\;\;\;\;\;\;\;\;\;\;\;\;\;\;\;\;\;\;\;\;\;\;\;\;\;\;C1=\;\frac{W1\;L1^4}{185\;E\;I}\\\\C1\;=\;C2\;\;\;\;\;\;\;\;C1=\;\frac{W1\;L1^4}{185\;E\;I}\;\;=\;\;\;C2=\;\frac{5\;W2\;L2^4}{384\;E\;I}\\\\W1\;L1\;=\;2.4089\;W2\;L2\;\;-\boxed1\\\\WT\;=\;W1+W2\;\;\;\;\;\;\;\;\;\;\;\;\;\;\;\;\;W2\;=\;WT-W1\\\\W1\;L1^4\;=\;2.4089\;(WT-W1)\;L2^4\;\\\\W1\;L1^4\;=\;2.4089\;WT\;L2^4\;-\;2.4089\;W1\;L2^4\\\\W1\;L1^4\;=\;2.4089\;W1\;L2^4\;=\;WT\;L2\;(2.4089)^4\\\\W1(L1^4+2.4089\;W1\;L2^4)\;=\;2.4089\;WT\;L2^4\\\\\boxed{\;W1\;=\;\frac{2.4089\;WT\;L2^4}{(L1^4\;+\;2.4089\;L2^4)}\;}\\\\DE\;IGUAL\;FORMA\;\;\;\;\;\;\;\;W1\;=\;WT\;-\;W2\;\;\;\;\;\;\;SUSTITUIR\;EN\;\;1\;\;\;\\\\(WT\;-\;W2)\;L1^4\;\;\;=\;\;2.4089\;W2\;L2^4\;\\\\W2\;(\;L1^4+2.4089\;L2^4\;)\;\;\;\;\;\;\;\;=\;WT\;L1^4\\\\\boxed{\;W2\;=\;\frac{\;WT\;L1^4}{(L1^4\;+\;2.4089\;L2^4)}\;}\\\\\;\;\end{array}       
                            </div>
                            </p>
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                          </div>
                        </div>
                        <!-- /.modal-content -->
                      </div>
                      <!-- /.modal-dialog -->
                    </div>
                    <!-- /.modal -->
                  </div>
                  <!---Termino parte 2  -->
                  <ul class="list-inline pull-right">
                    <li><button type="button" class="btn btn-default prev-step">Regresar</button></li>
                    <li><button type="button" class="btn btn-primary next-step">Continuar</button></li>
                  </ul>
                </div>
                <div class="tab-pane" role="tabpanel" id="step4">
                  <!-- Parte 2 inicio -->
                  <!---Termino parte 2  -->
                  <h3>formulario 3<img src="/calculoestructural/plano/plano2.png" width="300" height="150" alt=""/></h3>
                  <p>datos formulario 3</p>
                  <ul class="list-inline pull-right">
                    <li><button type="button" class="btn btn-default prev-step">Regresar</button></li>
                    <li><button type="button" class="btn btn-default next-step">Saltar</button></li>
                    <li><button type="button" class="btn btn-primary btn-info-full next-step">Guardar y continuar</button></li>
                  </ul>
                </div>
                <div class="tab-pane" role="tabpanel" id="complete">
                  <h3>Completo</h3>
                  <p>MOSTRAR RESULTADO.</p>
                </div>
                <div class="clearfix"></div>
              </div>
            </form>
          </div>
        </section>
      </div>
    </div>
    <!--termino wizard-->	
    <div class="col-lg-4">
    </div>
  </body>
  <?php include "ComplementosPHP/Container.php"; ?>	
</html>
<script>
var l1 = document.getElementById("L1").value;
var l2 = document.getElementById("L2").value;
var canvas, context, canvaso, contexto;
canvaso = document.getElementById('plano1');
context = canvaso.getContext('2d');
context.lineWidth = 5;
var img = new Image();
img.src = "plano/plano1.png";
context.drawImage(img, 0, 0);

context.clearRect(20, 185, 40, 20); /* borrar l1*/
var L2 = document.getElementById("L2").value;
context.fillText(L2, 255, 40);
var L1 = document.getElementById("L1").value;
context.fillText(L1, 20, 200);
/*PLANO 2*/
canvaso = document.getElementById('plano2');
context2 = canvaso.getContext('2d');
context2.lineWidth = 5;
var img2 = new Image();
img2.src = "plano/plano2.png";
context2.drawImage(img2, 0, 0);

/* plano 3*/
canvaso = document.getElementById('plano3');
context3 = canvaso.getContext('2d');
context3.lineWidth = 5;
var img3 = new Image();
img3.src = "plano/plano.png";
context3.drawImage(img3, 0, 0);
" texto - ancho - alto";
/* plano 3*/

<!---->

mifuncion();

/* plano armado*/
canvaso = document.getElementById('planoarmado');
contextplano = canvaso.getContext('2d');
contextplano.lineWidth = 5;
var imgplano = new Image();
imgplano.src = "plano/planoarmado.png";
contextplano.drawImage(imgplano, 0, 0);
" texto - ancho - alto";
contextplano.font = '12pt Arial';
contextplano.fillStyle = 'red';
contextplano.clearRect(10, 200, 50, 20); /* borrar l1*/
contextplano.fillText(L2, 270, 55);
contextplano.fillText(L1, 20, 220);
contextplano.fillText(L1, 170, 385);
contextplano.fillText(L2, 380, 385);

<!-- parte 2 -->
var canvas, context, canvaso, contexto;
canvaso = document.getElementById('planoparte2');
contextparte2 = canvaso.getContext('2d');
contextparte2.lineWidth = 5;
var imgparte2 = new Image();
imgparte2.src = "plano/plano1.png";
contextparte2.drawImage(imgparte2, 0, 0);
contextparte2.clearRect(20, 185, 40, 20); /* borrar l1*/
contextparte2.font = '12pt Arial';
contextparte2.fillStyle = 'red';
var L2azotea = document.getElementById("L2azotea").value;
contextparte2.fillText(L2azotea, 255, 40);
var L1azotea = document.getElementById("L1azotea").value;
contextparte2.fillText(L1azotea, 20, 200);
<!--- Fin parte 2-->

function mifuncion(peralteEfectivo1)
{

	context.clearRect(255, 25, 100, 15); /* borrar l2*/
	context.clearRect(20, 185, 40, 20); /* borrar l1*/
	context.font = '12pt Arial';
	context.fillStyle = 'red';
	var L2 = document.getElementById("L2").value;
	context.fillText(L2, 255, 40);
	var L1 = document.getElementById("L1").value;
	context.fillText(L1, 20, 200);
	return false;
}

function mifuncionparte2(peralteEfectivo1)
{
	contextparte2.clearRect(255, 25, 100, 15); /* borrar l2*/
	contextparte2.clearRect(20, 185, 40, 20); /* borrar l1*/
	contextparte2.font = '12pt Arial';
	contextparte2.fillStyle = 'red';
	var L2azotea = document.getElementById("L2azotea").value;
	contextparte2.fillText(L2azotea, 255, 40);
	var L1azotea = document.getElementById("L1azotea").value;
	contextparte2.fillText(L1azotea, 20, 200);
	return false;
}

function mifuncion2()
{
	var L2 = document.getElementById("L2").value;
	var L1 = document.getElementById("L1").value;
	var Avtabla = "" + Av.value + "";
	var tablamomento5 = "" + H.value + "";
	var tablamomento4 = "" + B.value + "";
	var tablamomento7 = "" + P1res.value + "";
	var s1 = document.getElementById('valor13').innerHTML = (tablamomento5 * tablamomento4 * tablamomento7).toFixed(4);
	var usar1 = Math.floor((100 * Avtabla / s1));
	var hfccan = document.getElementById("Hfc").value = document.getElementById("H").value;
	var Maxcan = Number(document.getElementById("MAX").value);
	var VARILLA = document.getElementById("varilla").value = Maxcan * hfccan;
	contextplano.clearRect(270, 40, 80, 15); /* borrar l2*/
	contextplano.clearRect(10, 200, 50, 20); /* borrar l1*/
	contextplano.clearRect(160, 370, 50, 20); /* borrar l1*/
	contextplano.clearRect(380, 370, 50, 20); /* borrar l2*/
	contextplano.fillText(L2, 270, 55);
	contextplano.fillText(L1, 20, 220);
	////PARTE DE ABAJO////
	contextplano.fillStyle = 'blue';
	contextplano.fillText(L1, 170, 385);
	contextplano.fillText(L2, 380, 385);
	contextplano.clearRect(270, 120, 50, 20); /* borrar l2*/
	contextplano.fillText(usar1, 270, 140);
	////varillas////
	contextplano.save();
	contextplano.fillStyle = 'black';
	// (x, y, width, height) //
	contextplano.clearRect(250, 210, 50, 20);
	contextplano.clearRect(110, 210, 50, 20);
	contextplano.clearRect(463, 210, 50, 20);
	contextplano.clearRect(305, 180, 30, 50);
	contextplano.clearRect(270, 300, 50, 20);
	contextplano.fillText(VARILLA, 463, 225);
	contextplano.fillText(VARILLA, 250, 225);
	contextplano.fillText(VARILLA, 110, 225);
	contextplano.rotate(-90 * Math.PI / 180);
	contextplano.fillText(VARILLA, -225, 320);
	contextplano.restore();
	contextplano.fillStyle = 'black';
	contextplano.fillText(VARILLA, 270, 315);
	return false;
}
//* dibujar en plano 2//


</script> <script type = "text/javascript" >
function pasar()
{

		document.getElementById("l1").value = document.getElementById("L1").value;
		document.getElementById("l2").value = document.getElementById("L2").value;
		document.getElementById("l1mom").value = document.getElementById("L1").value;
		document.getElementById("l2mom").value = document.getElementById("L2").value;

		cal();
	}

function cal_flecha(cal)
{
	var valor1 = document.getElementById('flecha').value;
	var valor2 = document.getElementById('c1').value;
	if (valor1 > valor2)
	{
		var eq4 = "OK";

	}
	else
	{
		var eq4 = "NO";
	}
	var num1 = document.getElementById('numLosa').value;
	var num2 = document.getElementById('H').value;
	var sum = 2;
	var suma = parseInt(num2) + parseInt(sum);
	var resta = parseInt(num2) - parseInt(sum);

	if (num1 == suma)
	{
		var mensaje = "<h5>LOSA DE CONCRETO = " + numLosa.value + " CMS<br/> SE ACEPTA EL PERALTE EFECTIVO DE " + H.value + " CMS. EL ESPESOR DE LOSA H = " + H.value +
			" + 2 = " + suma + " CMS.</h5>";
		if (valor1 > valor2)
		{
			var compa = "<h5 style='color:blue;font-size:12px;aling='center'>Cumple la Flecha Permisible</h>";
		}
		else
		{
			var compa =
				"<h5 style='aling='center''><b style='color:blue'>Pero </b><b style='color:red;font-size:12px;aling='center>No cumple la Flecha Permisible</b></h>";
		}

	}
	else
	{
		var mensaje = "<h5>LOSA DE CONCRETO = " + numLosa.value + "<br/>NO SE ACEPTA EL PERALTE EFECTIVO DE " + H.value + " CMS. EL ESPESOR DE LOSA H = " + H.value +
			" + 2 = " + suma + " CMS.</h5>";
	}
	var step = 1;
	var L1 = Number(document.getElementById("L1").value);
	var L1c1 = document.getElementById("l1c1").value = (L1 * 100).toFixed(0);
	var eq1 = "$$C2\\;\\;=\\;\\frac{5.00\\;\\;\\ast\\;" + w2c2.value + "\\;\\;\\ast\\;" + l2c2.value + "^4}{384\\;\\ast\\;" + sumEc.value + "\\;\\ast\\;" + I.value +
		"}\\;=\\;\\frac{" + divc2.value + "}{" + div2c2.value + "}\\;=\\;" + c2.value + "\\;cm $$";
	var eq2 = "$$ C1\\;=\\;\\frac{" + WcalFlecha.value + "\\ast\\;" + l1c1.value + "^4}{185\\;\\ast\\;" + sumEc.value + "\\;\\ast\\;" + I.value + "}\\;=\\;\\frac{" +
		divc1.value + "}{" + div2c1.value + "}\\;=\\;" + c1.value + "\\;cm $$";
	var eq3 = "<em> $$ Flecha\\;Permisible =    \\frac{L1\\ast100}{480}\\;\\;\\;\\;=\\frac{" + l1c1.value + "}{480}\\;\\;=\\;" + flecha.value + "\\;\\;\\;>\\;" +
		c1.value + "\\;\\;\\;\\;" + eq4 + "\\;$$ </em> ";
	document.getElementById('divid').innerHTML = eq1 + eq2 + eq3 + mensaje + compa;
	MathJax.Hub.Queue(["Typeset", MathJax.Hub, 'divid']);
	momento1();
}

function momento1(cal)
{
	var l1 = document.getElementById("L1").value;
	var l2 = document.getElementById("L2").value;
	var step = 1;
	var equation1 = "$$ W1=\\frac{2.4089\\;\\;WT\\;\\;{{L2}^4}}{(L1^4+2.4089\\;L2^4\\;)}\\;\\;\\;\\;\\;=\\;\\frac{2.4089\\;\\ast\\;" + WU.value + "\\;\\ast\\;" +
		l2 + "^4}{" + l1 + "^4\\;+\\;2.4089\\;\\ast\\;" + l2 + "^4}\\;=\\;\\frac{" + div1wu.value + "}{" + div2wu.value + "}\\;=\\;\\boxed{" + wuw1.value +
		"\\\\KG/M}$$";
	var equation2 = "$$ M\\left(-\\right)\\;=\\;\\frac{W1\\;\\ast\\;L1^2}8\\;=\\;\\frac{" + wuw1.value + "\\;\\ast\\;" + l1 + "^2}8\\;=\\frac{" + menosm.value +
		"}8\\;=" + resultm.value + "\\;\\ast\\;100\\;=\\;" + finm.value + "$$";
	var Menos = " $$ M\\left(-\\right)\\;=\\;\\boxed{\\;" + finm.value + " \\;\\;KG-CM}$$";
	var Mas = "$$M\\;\\left(+\\right)\\;=\\;\\frac{9\\;\\ast\\;W1\\;\\ast\\;L1^2}{128}\\;=\\;\\frac{9\\;\\ast\\;" + wuw1.value + "\\;\\ast\\;" + l1 +
		"^2}{128}\\;=\\;\\frac{" + masM.value + "}{128}\\;=" + resultmmas.value + "\\;\\ast100\\;=" + finMmas.value + "\\;$$ ";
	document.getElementById('momento').innerHTML = equation1 + equation2 + Menos + Mas;
	MathJax.Hub.Queue(["Typeset", MathJax.Hub, 'momento']);
	momento2();
}

function momento2(cal)
{
	var L1 = document.getElementById("L1").value;
	var L2 = document.getElementById("L2").value;
	var step = 1;
	var equation1 = "$$  W2\\;=\\;\\frac{" + WUmom.value + "\\;\\ast\\;" + L1 + "^4}{" + L1 + "^4\\;2.4089\\;\\ast\\;" + L2 + "^4}\\;=\\;\\frac{" + wumomdiv1.value +
		"}{" + wumomdiv2.value + "}\\;=\\;" + wuresult.value + "\\;KG/ML $$";
	var Mas = "$$M(+)\\;\\;=\\;\\frac{W2\\;\\ast\\;L2^2}8\\;=\\frac{\\;" + wuresult.value + "\\;" + L2 + "^2}8\\;=\\;\\frac{" + MomMmas.value + "}8\\;=\\;" +
		resmommas.value + "\\;\\ast\\;100=\\;" + resmas.value + "\\;KG-CM $$ ";
	document.getElementById('momento2').innerHTML = equation1 + Mas;
	MathJax.Hub.Queue(["Typeset", MathJax.Hub, 'momento2']);
	tabla1();
}

function tabla1(cal)
{
	var tablamomento1 = "" + finm.value + "";
	var tablamomento2 = "" + finMmas.value + "";
	var tablamomento3 = "" + resmas.value + "";
	var tablamomento4 = "" + B.value + "";
	var tablamomento5 = "" + H.value + "";
	var tablamomento6 = "" + minresult.value + "";
	var tablamomento7 = "" + P1res.value + "";
	var tablamomento8 = "" + P2res.value + "";
	var Avtabla = "" + Av.value + "";

	document.getElementById('valor1').innerHTML = tablamomento1;
	document.getElementById('valor2').innerHTML = tablamomento2;
	document.getElementById('valor3').innerHTML = tablamomento3;
	document.getElementById('valor4').innerHTML = tablamomento4;
	document.getElementById('valor5').innerHTML = tablamomento4;
	document.getElementById('valor6').innerHTML = tablamomento4;
	document.getElementById('valor7').innerHTML = tablamomento5;
	document.getElementById('valor8').innerHTML = tablamomento5;
	document.getElementById('valor9').innerHTML = tablamomento5;
	document.getElementById('valor10').innerHTML = tablamomento6;
	document.getElementById('valor11').innerHTML = tablamomento7;
	document.getElementById('valor12').innerHTML = tablamomento8;
	var s1 = document.getElementById('valor13').innerHTML = (tablamomento5 * tablamomento4 * tablamomento7).toFixed(4);
	var s2 = document.getElementById('valor14').innerHTML = (tablamomento5 * tablamomento4 * tablamomento8).toFixed(4);
	var s3 = document.getElementById('valor15').innerHTML = (tablamomento5 * tablamomento4 * tablamomento6).toFixed(4);
	document.getElementById('valor16').innerHTML = (100 * Avtabla / s1).toFixed(2);
	document.getElementById('valor17').innerHTML = (100 * Avtabla / s2).toFixed(2);
	document.getElementById('valor18').innerHTML = (100 * Avtabla / s3).toFixed(2);
	var usar1 = Math.floor((100 * Avtabla / s1));
	var usar2 = Math.floor((100 * Avtabla / s2));
	var usar3 = Math.floor((100 * Avtabla / s3));
	document.getElementById('valor19').innerHTML = usar1 + " cms";
	document.getElementById('valor20').innerHTML = usar2 + " cms";
	document.getElementById('valor21').innerHTML = usar3 + " cms";
	Pmin();
}

function mensajecom(cal)
{
	var num1 = document.getElementById('numLosa').value;
	var num2 = document.getElementById('H').value;
	var sum = 2;
	var suma = parseInt(num2) + parseInt(sum);
	var resta = parseInt(num1) - parseInt(sum);

	if (num1 == suma)
	{
		var mensaje = "<h5>LOSA DE CONCRETO = " + numLosa.value + " CMS<br/> SE ACEPTA EL PERALTE EFECTIVO DE " + H.value + " CMS. EL ESPESOR DE LOSA H = " + H.value +
			" + 2 = " + suma + " CMS.</h5>";

	}
	else
	{
		var mensaje = "<h5>LOSA DE CONCRETO = " + numLosa.value + "<br/>NO SE ACEPTA EL PERALTE EFECTIVO DE " + H.value + " CMS. EL ESPESOR DE LOSA H = " + H.value +
			" + 2 = " + suma + " CMS.</h5>"
		alert("Ingreso = " + H.value + " por lo tanto \nEl valor de " + H.value + " + 2 = " + suma + " cms.\nNo cumple la medida necesaria de  " + numLosa.value +
			" cms. Se necesita " + resta + " cms ");
		var pasar = document.getElementById("H").value = resta;
		var B = Number(document.getElementById("B").value);
		var H2 = document.getElementById("H2").value = Math.pow(pasar, 3);
		var I = document.getElementById("I").value = ((B * Math.pow(pasar, 3)) / 12).toFixed(4);
	}
	peralteEfectivo1();
	cal_flecha();
}

function Pmin(cal)
{
	var step = 1;
	var form1 = "$$ Pmin\\;=\\:\\frac{0.07\\sqrt{f'c}}{FY}\\;=\\;\\frac{0.70\\;\\sqrt{" + Fcfix3.value + "}}{" + FY.value + "}\\;=\\;\\frac{" + mindiv1.value +
		"}{" + FY.value + "}\\;=" + minresult.value + " $$";
	var form2 = "$$ S\\;=\\;\\frac{100\\;Av}{As}\\;\\;=\\;\\;\\frac{100\\;\\;*\\;" + Av.value + "}{As} $$ ";

	var form3 = "  $$ P=\\;\\frac{" + FC2.value + "}{" + FY.value + "}\\;\\left[1\\;-\\;\\sqrt{\\;{1\\;-\\;}\\frac{2\\;\\ast\\;" + finm.value + "}{" + FR.value +
		"\\;\\ast\\;" + B.value + "\\;\\ast\\;" + H.value + "^2\\;\\ast\\;" + FC2.value + "}}\\;\\right]\\;=\\;" + divF.value +
		"\\;\\left[1\\;-\\sqrt{\\;{1\\;-}\\frac{" + raizmu.value + "}{" + raizdivmu.value + "\\;}}\\;\\right]\\; $$";

	var form4 = "$$" + divF.value + "\\;\\left[1\\;-\\sqrt{\\;1\\;-\\;\\;" + divFmu.value + "}\\;\\right]\\;\\;=\\;\\;" + divF.value + "\\;\\left[1\\;-\\sqrt{\\;" +
		unomenosmu.value + "\\;}\\;\\right]\\;\\;=\\;" + divF.value + "\\;\\left[\\;" + DellRaiz.value +
		"\\;\\right]\\;\\;=\\;$$  <a style='color:red;'>$$ \\;P\\;\\;=\\;\\;" + P1res.value + " $$ </a> "

	var form5 = "<br> $$  P=\\;\\frac{" + FC2.value + "}{" + FY.value + "}\\;\\left[1\\;-\\;\\sqrt{\\;{1\\;-\\;}\\frac{2\\;\\ast\\;" + finMmas.value + "}{" + FR.value +
		"\\;\\ast\\;" + B.value + "\\;\\ast\\;" + H.value + "^2\\;\\ast\\;" + FC2.value + "}}\\;\\right]\\;=\\;" + divF.value +
		"\\;\\left[1\\;-\\sqrt{\\;{1\\;-}\\frac{" + raizmu2.value + "}{" + raizdivmu.value + "\\;}}\\;\\right]\\; $$";

	var form6 = "$$" + divF.value + "\\;\\left[1\\;-\\sqrt{\\;1\\;-\\;\\;" + divFmu2.value + "}\\;\\right]\\;\\;=\\;\\;" + divF.value +
		"\\;\\left[1\\;-\\sqrt{\\;" + unomenosmu2.value + "\\;}\\;\\right]\\;\\;=\\;" + divF.value + "\\;\\left[\\;" + DellRaiz2.value +
		"\\;\\right]\\;\\;=\\;$$  <a style='color:red;'>$$ \\;P\\;\\;=\\;\\;" + P2res.value + " $$ </a> <br> "


	document.getElementById('pmin').innerHTML = form1 + form2 + form3 + form4 + form5 + form6;
	MathJax.Hub.Queue(["Typeset", MathJax.Hub, 'pmin']);
	mifuncion2();
}

function cal_flecha2(cal)
{
	var valor1 = document.getElementById('flechaazotea').value;
	var valor2 = document.getElementById('c1azotea').value;
	if (valor1 > valor2)
	{
		var eq4 = "OK";

	}
	else
	{
		var eq4 = "NO";
	}
	var num1 = document.getElementById('numLosa').value;
	var num2 = document.getElementById('Hazotea').value;
	var sum = 2;
	var suma = parseInt(num2) + parseInt(sum);
	var resta = parseInt(num2) - parseInt(sum);

	if (num1 == suma)
	{
		var mensaje = "<h5>LOSA DE CONCRETO = " + numLosa.value + " CMS<br/> SE ACEPTA EL PERALTE EFECTIVO DE " + Hazotea.value + " CMS. EL ESPESOR DE LOSA H = " + Hazotea.value +
			" + 2 = " + suma + " CMS.</h5>";
			if(valor1 > valor2){
				if (num1 == suma)
                     	{ 
						var compa = "<h5 style='color:blue;font-size:12px;aling='center'>Cumple la Flecha Permisible</h> ";
							}
			   else  { 
					   var compa = "<h5 style='color:blue;font-size:12px;aling='center'>Cumple la Flecha Permisible <h> Pero no se acepta</h></h> ";
							}
				
				}
				else{
					var compa =
				"<h5 style='aling='center''><b style='color:blue'>Pero </b><b style='color:red;font-size:12px;aling='center>No cumple la Flecha Permisible</b></h>";
					}
		
	}
	else
	{
		var mensaje = "<h5>LOSA DE CONCRETO = " + numLosa.value + "<br/>NO SE ACEPTA EL PERALTE EFECTIVO DE " + Hazotea.value + " CMS. EL ESPESOR DE LOSA H = " + Hazotea.value +
			" + 2 = " + suma + " CMS.</h5>";
               if(valor1 > valor2){
				var compa = "<h5 style='color:blue;font-size:12px;aling='center'>Cumple la Flecha Permisible, <h5 style='color:red; >Pero no es aceptado</h5></h> ";
				}
				else{
					var compa =
				"<h5 style='aling='center''><b style='color:blue'>Pero </b><b style='color:red;font-size:12px;aling='center>No cumple la Flecha Permisible</b></h>";
					}
	}
	var step = 1;
	var eq1 = "$$C2\\;\\;=\\;\\frac{5.00\\;\\;\\ast\\;" + w2azoteadiv.value + "\\;\\;\\ast\\;" + l2c2azotea.value + "^4}{384\\;\\ast\\;" + sumEcazotea.value + "\\;\\ast\\;" + Iazotea.value +
		"}\\;=\\;\\frac{" + divc2azotea.value + "}{" + div2c2azotea.value + "}\\;=\\;" + c2azotea.value + "\\;cm $$";
	var eq2 = "$$ C1\\;=\\;\\frac{" + WcalFlechaazotea.value + "\\ast\\;" + l1azoteac.value + "^4}{185\\;\\ast\\;" + sumEcazotea.value + "\\;\\ast\\;" + Iazotea.value + "}\\;=\\;\\frac{" +
		divc1azotea.value + "}{" + div2c1azotea.value + "}\\;=\\;" + c1azotea.value + "\\;cm $$";
	var eq3 = "<em> $$ Flecha\\;Permisible =    \\frac{L1\\ast100}{480}\\;\\;\\;\\;=\\frac{" + l1azoteac.value + "}{480}\\;\\;=\\;" + flechaazotea.value + "\\;\\;\\;>\\;" +
		c1azotea.value + "\\;\\;\\;\\;" + eq4 + "\\;$$ </em> ";
	document.getElementById('cal-flecha2').innerHTML = eq1 + eq2 + eq3 + mensaje + compa;
	MathJax.Hub.Queue(["Typeset", MathJax.Hub, 'cal-flecha2']);
	momento1azotea();
}

function momento1azotea(cal)
{
	var l1azotea = document.getElementById("L1azotea").value;
	var l2azotea = document.getElementById("L2azotea").value;
	var step = 1;
	var equation1 = "$$ W1=\\frac{2.4089\\;\\;WT\\;\\;{{L2}^4}}{(L1^4+2.4089\\;L2^4\\;)}\\;\\;\\;\\;\\;=\\;\\frac{2.4089\\;\\ast\\;" + WUazotea.value + "\\;\\ast\\;" +
		l2azotea + "^4}{" + l1azotea + "^4\\;+\\;2.4089\\;\\ast\\;" + l2azotea + "^4}\\;=\\;\\frac{" + div1wuazotea.value + "}{" + div2wuazotea.value + "}\\;=\\;\\boxed{" + wuw1azotea.value +
		"\\\\KG/M}$$";
	var equation2 = "$$ M\\left(-\\right)\\;=\\;\\frac{W1\\;\\ast\\;L1^2}8\\;=\\;\\frac{" + wuw1azotea.value + "\\;\\ast\\;" + l1azotea + "^2}8\\;=\\frac{" + menosmazotea.value +
		"}8\\;=" + resultmazotea.value + "\\;\\ast\\;100\\;=\\;" + finmazotea.value + "$$";
	var Menos = " $$ M\\left(-\\right)\\;=\\;\\boxed{\\;" + finmazotea.value + " \\;\\;KG-CM}$$";
	var Mas = "$$M\\;\\left(+\\right)\\;=\\;\\frac{9\\;\\ast\\;W1\\;\\ast\\;L1^2}{128}\\;=\\;\\frac{9\\;\\ast\\;" + wuw1azotea.value + "\\;\\ast\\;" + l1azotea +
		"^2}{128}\\;=\\;\\frac{" + masMazotea.value + "}{128}\\;=" + resultmmasazotea.value + "\\;\\ast100\\;=" + finMmasazotea.value + "\\;$$ ";
	document.getElementById('momentoazotea').innerHTML = equation1 + equation2 + Menos + Mas;
	MathJax.Hub.Queue(["Typeset", MathJax.Hub, 'momentoazotea']);
	momento2azotea();
}

function momento2azotea(cal)
{
	var L1 = document.getElementById("L1").value;
	var L2 = document.getElementById("L2").value;
	var step = 1;
	var equation1 = "$$  W2\\;=\\;\\frac{" + WUmomazotea.value + "\\;\\ast\\;" + L1azotea + "^4}{" + L1azotea + "^4\\;2.4089\\;\\ast\\;" + L2azotea + "^4}\\;=\\;\\frac{" + wumomdiv1azotea.value +
		"}{" + wumomdiv2azotea.value + "}\\;=\\;" + wuresultazotea.value + "\\;KG/ML $$";
	var Mas = "$$M(+)\\;\\;=\\;\\frac{W2\\;\\ast\\;L2^2}8\\;=\\frac{\\;" + wuresultazotea.value + "\\;" + L2azotea + "^2}8\\;=\\;\\frac{" + MomMmasazotea.value + "}8\\;=\\;" +
		resmommasazotea.value + "\\;\\ast\\;100=\\;" + resmasazotea.value + "\\;KG-CM $$ ";
	document.getElementById('momento2azotea').innerHTML = equation1 + Mas;
	MathJax.Hub.Queue(["Typeset", MathJax.Hub, 'momento2azotea']);
	tabla1azotea();
}

function tabla1azotea(cal)
{
	var tablamomento1azotea = "" + finmazotea.value + "";
	var tablamomento2azotea = "" + finMmasazotea.value + "";
	var tablamomento3azotea = "" + resmasazotea.value + "";
	var tablamomento4azotea = "" + Bazotea.value + "";
	var tablamomento5azotea = "" + Hazotea.value + "";
	var tablamomento6azotea = "" + minresultazotea.value + "";
	var tablamomento7azotea = "" + P1resazotea.value + "";
	var tablamomento8azotea = "" + P2resazotea.value + "";
	var Avtablaazotea = "" + Avazotea.value + "";

	document.getElementById('valor1azotea').innerHTML = tablamomento1azotea;
	document.getElementById('valor2azotea').innerHTML = tablamomento2azotea;
	document.getElementById('valor3azotea').innerHTML = tablamomento3azotea;
	document.getElementById('valor4azotea').innerHTML = tablamomento4azotea;
	document.getElementById('valor5azotea').innerHTML = tablamomento4azotea;
	document.getElementById('valor6azotea').innerHTML = tablamomento4azotea;
	document.getElementById('valor7azotea').innerHTML = tablamomento5azotea;
	document.getElementById('valor8azotea').innerHTML = tablamomento5azotea;
	document.getElementById('valor9azotea').innerHTML = tablamomento5azotea;
	document.getElementById('valor10azotea').innerHTML = tablamomento6azotea;
	document.getElementById('valor11azotea').innerHTML = tablamomento7azotea;
	document.getElementById('valor12azotea').innerHTML = tablamomento8azotea;
	var s1azotea = document.getElementById('valor13azotea').innerHTML = (tablamomento5azotea * tablamomento4azotea * tablamomento7azotea).toFixed(4);
	var s2azotea = document.getElementById('valor14azotea').innerHTML = (tablamomento5azotea * tablamomento4azotea * tablamomento8azotea).toFixed(4);
	var s3azotea = document.getElementById('valor15azotea').innerHTML = (tablamomento5azotea * tablamomento4azotea * tablamomento6azotea).toFixed(4);
	document.getElementById('valor16azotea').innerHTML = (100 * Avtablaazotea / s1azotea).toFixed(2);
	document.getElementById('valor17azotea').innerHTML = (100 * Avtablaazotea / s2azotea).toFixed(2);
	document.getElementById('valor18azotea').innerHTML = (100 * Avtablaazotea / s3azotea).toFixed(2);
	var usar1azotea = Math.floor((100 * Avtablaazotea / s1azotea));
	var usar2azotea = Math.floor((100 * Avtablaazotea / s2azotea));
	var usar3azotea = Math.floor((100 * Avtablaazotea / s3azotea));
	document.getElementById('valor19azotea').innerHTML = usar1azotea + " cms";
	document.getElementById('valor20azotea').innerHTML = usar2azotea + " cms";
	document.getElementById('valor21azotea').innerHTML = usar3azotea + " cms";
	Pminazotea();
}
function Pminazotea(cal)
{

	var step = 1;
	var form1 = "$$ Pmin\\;=\\:\\frac{0.07\\sqrt{f'c}}{FY}\\;=\\;\\frac{0.70\\;\\sqrt{" + Fcfixazotea1.value + "}}{" + FYazotea.value + "}\\;=\\;\\frac{" + mindiv1azotea.value +
		"}{" + FYazotea.value + "}\\;=" + minresultazotea.value + " $$";
	var form2 = "$$ S\\;=\\;\\frac{100\\;Av}{As}\\;\\;=\\;\\;\\frac{100\\;\\;*\\;" + Avazotea.value + "}{As} $$ ";

	var form3 = "  $$ P=\\;\\frac{" + FC2azotea.value + "}{" + FYazotea.value + "}\\;\\left[1\\;-\\;\\sqrt{\\;{1\\;-\\;}\\frac{2\\;\\ast\\;" + finmazotea.value + "}{" + FRazotea.value +
		"\\;\\ast\\;" + Bazotea.value + "\\;\\ast\\;" + Hazotea.value + "^2\\;\\ast\\;" + FC2azotea.value + "}}\\;\\right]\\;=\\;" + divFazotea.value +
		"\\;\\left[1\\;-\\sqrt{\\;{1\\;-}\\frac{" + raizmuazotea.value + "}{" + raizdivmuazotea.value + "\\;}}\\;\\right]\\; $$";

	var form4 = "$$" + divFazotea.value + "\\;\\left[1\\;-\\sqrt{\\;1\\;-\\;\\;" + divFmuazotea.value + "}\\;\\right]\\;\\;=\\;\\;" + divFazotea.value + "\\;\\left[1\\;-\\sqrt{\\;" +
		unomenosmuazotea.value + "\\;}\\;\\right]\\;\\;=\\;" + divFazotea.value + "\\;\\left[\\;" + DellRaizazotea.value +
		"\\;\\right]\\;\\;=\\;$$  <a style='color:red;'>$$ \\;P\\;\\;=\\;\\;" + P1resazotea.value + " $$ </a> "

	var form5 = "<br> $$  P=\\;\\frac{" + FC2azotea.value + "}{" + FYazotea.value + "}\\;\\left[1\\;-\\;\\sqrt{\\;{1\\;-\\;}\\frac{2\\;\\ast\\;" + finMmasazotea.value + "}{" + FRazotea.value +
		"\\;\\ast\\;" + Bazotea.value + "\\;\\ast\\;" + Hazotea.value + "^2\\;\\ast\\;" + FC2azotea.value + "}}\\;\\right]\\;=\\;" + divFazotea.value +
		"\\;\\left[1\\;-\\sqrt{\\;{1\\;-}\\frac{" + raizmu2azotea.value + "}{" + raizdivmuazotea.value + "\\;}}\\;\\right]\\; $$";

	var form6 = "$$" + divFazotea.value + "\\;\\left[1\\;-\\sqrt{\\;1\\;-\\;\\;" + divFmu2azotea.value + "}\\;\\right]\\;\\;=\\;\\;" + divFazotea.value +
		"\\;\\left[1\\;-\\sqrt{\\;" + unomenosmu2azotea.value + "\\;}\\;\\right]\\;\\;=\\;" + divFazotea.value + "\\;\\left[\\;" + DellRaiz2azotea.value +
		"\\;\\right]\\;\\;=\\;$$  <a style='color:red;'>$$ \\;P\\;\\;=\\;\\;" + P2resazotea.value + " $$ </a> <br> "


	document.getElementById('pminazotea').innerHTML = form1 + form2 + form3 + form4 + form5 + form6;
	MathJax.Hub.Queue(["Typeset", MathJax.Hub, 'pminazotea']);

}
</script>>>>>