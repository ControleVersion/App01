<?php require './header.php';?>
	<!-- //header-ends -->
        <style>
            .control-label{
                text-align: left !important;
            }
            select{
                    border: 1px solid #e0e0e0;
                    padding: 5px 18px;
                    color: #616161;
                    font-size: 0.85em;
                    height: 40px;
                    width: 100%;
                    outline: none;
            }
            #qtd-prod{
                border: 1px solid #e0e0e0;
                    padding: 5px 18px;
                    color: #616161;
                    font-size: 0.85em;
                    height: 40px;
                    outline: none;
            }
            label.control-label{
                margin-left: 10px;
            }
            .glyphicon-plus-sign{
                position: relative;
                top: 11px;
                display: initial;
                font-family: 'Glyphicons Halflings';
                font-style: initial;
                font-weight: 100;
                font-size: 33px;
                line-height: 1;
                color: #80d400;
                cursor: pointer;
                -webkit-font-smoothing: antialiased;
            }
        </style>
        
   <div id="page-wrapper">     
        <div class="panel panel-info" data-widget="{&quot;draggable&quot;: &quot;false&quot;}" data-widget-static="">
            <div class="panel-heading">
                    <h2>ADICIONAR NOVO ORÇAMENTO</h2>
                    <div class="panel-ctrls" data-actions-container="" data-action-collapse="{&quot;target&quot;: &quot;.panel-body&quot;}"><span class="button-icon has-bg"><i class="ti ti-angle-down"></i></span></div>
            </div>
            <div class="panel-body no-padding" style="display: block;">
                    
                
               <div class="graphs">
					
                   <div class="well">
                       <h4 class="blank1">Informações sobre o cliente:</h4>
                   </div>
                                            <!--    resposta de validacao do formulario
                                            <div class="form-group has-success">
                                                <label class="control-label" for="inputSuccess1">Input with success</label>
                                                <input type="text" class="form-control1" id="inputSuccess1">
                                            </div>
                                            <div class="form-group has-warning">
                                                <label class="control-label" for="inputWarning1">Input with warning</label>
                                                <input type="text" class="form-control1" id="inputWarning1">
                                            </div>
                                            <div class="form-group has-error">
                                                <label class="control-label" for="inputError1">Input with error</label>
                                                <input type="text" class="form-control1" id="inputError1">
                                            </div>
                                            -->
                                                                                    
                                            
						<div class="tab-content">
						<div class="tab-pane active" id="horizontal-form">
							<form class="form-horizontal">
								<div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">Razão Social</label>
									<div class="col-sm-8">
                                                                            <input type="text" class="form-control1" id="focusedinput" placeholder="" required>
									</div>
                                                                        <!--
									<div class="col-sm-2 jlkdfj1">
										<p class="help-block">Your help text!</p>
									</div>
                                                                        -->
								</div>
								<div class="form-group">
									<label for="inputPassword" class="col-sm-2 control-label">Razão Social</label>
									<div class="col-sm-8">
                                                                            <input type="text" class="form-control1" id="focusedinput" placeholder="">
									</div>
								</div>
                                                            
                                                                <div class="form-group">
									<label for="inputPassword" class="col-sm-2 control-label">Nome Fantasia</label>
									<div class="col-sm-8">
                                                                            <input type="text" class="form-control1" id="focusedinput" placeholder="">
									</div>
								</div>
                                                            
								<div class="form-group">
									<div id="cpf-div" class="col-sm-6">
                                                                            <label for="inputPassword" class="col-sm-4 control-label">CNPJ / CPF</label>
                                                                            <div class="col-sm-8">
                                                                                <input type="text" class="form-control1" id="cpf-cnpj-emp" placeholder="" >
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-sm-6">
                                                                            <label for="inputPassword" class="col-sm-3 control-label">Insc. Municipal</label>
                                                                            <div class="col-sm-6">
                                                                                <input type="text" class="form-control1" id="insc-municipal" placeholder="" style="width: 91%;">
                                                                            </div>
                                                                            
                                                                        </div>
								</div>
                                                                
                                                                <div class="form-group">
									<label for="inputPassword" class="col-sm-2 control-label">Endereço</label>
									<div class="col-sm-8">
                                                                            <input type="text" class="form-control1" id="focusedinput" placeholder=""  required="required">
									</div>
								</div>
                                                            
                                                                <div class="form-group">
									<label for="inputPassword" class="col-sm-2 control-label">Bairro</label>
									<div class="col-sm-8">
                                                                            <input type="text" class="form-control1" id="focusedinput" placeholder=""  required="required">
									</div>
								</div>
                                                                
                                                                <div class="form-group">
									<label for="inputPassword" class="col-sm-2 control-label">Município</label>
									<div class="col-sm-8">
                                                                            <input type="text" class="form-control1" id="focusedinput" placeholder=""  required="required">
									</div>
								</div>
                                                            
                                                                <div class="form-group">
									<label class="col-sm-2 control-label">Estado</label>
									<div class="col-sm-8">
										<select  class="form-control1"  required="required">
											<option value="">Selecione</option>
                                                                                                <option value="AC">Acre</option>
                                                                                                <option value="AL">Alagoas</option>
                                                                                                <option value="AP">Amapá</option>
                                                                                                <option value="AM">Amazonas</option>
                                                                                                <option value="BA">Bahia</option>
                                                                                                <option value="CE">Ceará</option>
                                                                                                <option value="DF">Distrito Federal</option>
                                                                                                <option value="ES">Espirito Santo</option>
                                                                                                <option value="GO">Goiás</option>
                                                                                                <option value="MA">Maranhão</option>
                                                                                                <option value="MS">Mato Grosso do Sul</option>
                                                                                                <option value="MT">Mato Grosso</option>
                                                                                                <option value="MG">Minas Gerais</option>
                                                                                                <option value="PA">Pará</option>
                                                                                                <option value="PB">Paraíba</option>
                                                                                                <option value="PR">Paraná</option>
                                                                                                <option value="PE">Pernambuco</option>
                                                                                                <option value="PI">Piauí</option>
                                                                                                <option value="RJ">Rio de Janeiro</option>
                                                                                                <option value="RN">Rio Grande do Norte</option>
                                                                                                <option value="RS">Rio Grande do Sul</option>
                                                                                                <option value="RO">Rondônia</option>
                                                                                                <option value="RR">Roraima</option>
                                                                                                <option value="SC">Santa Catarina</option>
                                                                                                <option value="SP">São Paulo</option>
                                                                                                <option value="SE">Sergipe</option>
                                                                                                <option value="TO">Tocantins</option>
										</select>
									</div>
								</div>
                                                            
                                                                <div class="form-group">
									<label for="inputPassword" class="col-sm-2 control-label">Telefone fixo</label>
									<div class="col-sm-8">
                                                                            <input type="text" class="form-control1" id="focusedinput" placeholder=""  required="required">
									</div>
								</div>
                                                            
                                                                <div class="form-group">
									<label for="inputPassword" class="col-sm-2 control-label">FAX</label>
									<div class="col-sm-8">
                                                                            <input type="text" class="form-control1" id="fax-input" placeholder=""  required="required">
									</div>
								</div>
                                                                
                                                                <div class="form-group">
									<label for="txtarea1" class="col-sm-2 control-label">Observações</label>
									<div class="col-sm-8"><textarea name="observacoes1" id="observacoes1" cols="50" rows="5" class="form-control1"></textarea></div>
								</div>
								
                                                            <div class="well">
                                                                <h4 class="blank1">Informações sobre o pedido:</h4>
                                                            </div>    
                                                            
                                                                <div class="form-group">
									<label for="NUmeroPedido" class="col-sm-2 control-label">N° Pedido:</label>
									<div class="col-sm-8">
                                                                            <input type="text" value="425" class="form-control" style="width: 100px;" name="numero-pedido" id="numero-pedido" disabled="disabled">
									</div>
								</div>
                                                            
                                                                <div class="form-group">
									<label for="DataEmissao" class="col-sm-2 control-label">Data Emissão</label>
									<div class="col-sm-8">
                                                                            <input type="date" class="form-control1" id="data-emissao" placeholder=""  required="required">
									</div>
								</div>
                                                            
                                                                <div class="form-group">
									<label for="PrevisaoEntrega" class="col-sm-2 control-label">Previsão Entrega</label>
									<div class="col-sm-8">
                                                                            <input type="date" class="form-control1" id="previsao-entrega" placeholder="">
									</div>
								</div>
                                                                
                                                                <div class="form-group">
									<label for="radio" class="col-sm-2 control-label">Tabela de Preço</label>
									<div class="col-sm-8">
                                                                            <select class="form-control1">
                                                                                <option value="Não Definida">Não Definida</option>                                                             
                                                                                <option value="Padrão">Padrão</option>
                                                                            </select>
                                                                        </div>
								</div>
                                                            
                                                                <div class="form-group">
									<label for="radio" class="col-sm-2 control-label">Condição de Pagamento</label>
									<div class="col-sm-8">
                                                                            <select class="form-control1" id="cond-pag-combo">
                                                                                <option value="">Não Definida</option>                                                             
                                                                                <option value="A Vista">A Vista</option>                                                         
                                                                                <option value="Cartão de Crédito">Cartão de Crédito</option>
                                                                                <option value="Cartão de Débito">Cartão de Débito</option>
                                                                                <option value="Cheque">Cheque</option>
                                                                                <option value="Depósito">Depósito</option>
                                                                                <option value="Faturar">Faturar</option>
                                                                                <option value="Transferência">Transferência</option>
                                                                            </select>
                                                                        </div>
								</div>
                                                                
                                                                <div class="form-group" id="tipo-pg-option" style="display: none;">
									<label for="PrevisaoEntrega" class="col-sm-2 control-label">Nº Talão</label>
									<div class="col-sm-8">
                                                                            <input type="text" class="form-control1" id="numero-talao" placeholder="">
									</div>
								</div>
                                                            
                                                                <div class="form-group">
									<label for="radio" class="col-sm-2 control-label">Tipo de Frete</label>
									<div class="col-sm-8">
                                                                            <select class="form-control1" id="tipo-de-frete" name="tipo-de-frete">
                                                                                <option value="">Não Definida</option>                                                                                                                               
                                                                                <option value="Correios">Correios</option>
                                                                                <option value="Próprio">Próprio</option> 
                                                                                <option value="Transportadora">Transportadora</option>
                                                                              
                                                                            </select>
                                                                        </div>
								</div>
                                                            
                                                            <div class="well" id="info-transporte" style="display: none;">
                                                                Informações sobre o Transporte:
                                                                <hr>
                                                                <div class="form-group">
									<label for="TrasnsNome" class="col-sm-2 control-label">Transportadora Nome</label>
									<div class="col-sm-8">
                                                                            <input type="text" class="form-control1" name="transportadora-nome" id="transportadora-nome" placeholder="">
									</div>
								</div>
                                                                <div class="form-group">
									<label for="TransTel" class="col-sm-2 control-label">Transportadora Telefone</label>
									<div class="col-sm-8">
                                                                            <input type="text" class="form-control1" name="transportadora-tel" id="transportadora-tel" placeholder="">
									</div>
								</div>
                                                                <div class="form-group">
									<label for="TransEmail" class="col-sm-2 control-label">Transportadora E-mail</label>
									<div class="col-sm-8">
                                                                            <input type="text" class="form-control1" name="transportadora-email" id="transportadora-email" placeholder="">
									</div>
								</div>
                                                            </div>
                                                            
                                                            <div class="alert alert-info" role="alert">
                                                                <label class="control-label">
                                                                    Escolha o produto:
                                                                </label>
                                                                
                                                                <select class="selectpicker" name="products">
                                                                    <option value=""> ----- </option>
                                                                    <option value="1"> Aditivo de Radiador Rosa - 12 CX - R$ 4,95 </option>
                                                                    <option value="2"> Aditivo de Radiador Verde - CX - R$ 4,95 </option>
                                                                    <option value="3"> Aromatizante Gel - 60 CX - R$ 3,83 </option>
                                                                    <option value="4"> CERA COLOR - 40 cx </option>
                                                                    <option value="5"> CERA LATA - 20 cx </option>
                                                                    <option value="6"> ESPUMA AUTOMOTIVA 22X13 - 24 cx </option>
                                                                    <option value="7">Folhinha Perfumada - 24 cx</option>
                                                                    <option value="8"> JET CERA - 20 cx </option>
                                                                    <option value="9"> KIT AUTOMOTIVO 4 EM 1 10 UNID - 10 CX </option>
                                                                    <option value="10"> KIT AUTOMOTIVO 5 EM 1 - 5 CX </option>
                                                                </select>
                                                                
                                                                <label class="control-label">
                                                                    Quantidade:
                                                                </label>
                                                                <input class="form-group" id="qtd-prod" name="qtd-prod" value="" type="number" required="required" />
                                                                
                                                                <span class="glyphicon glyphicon-plus-sign" aria-hidden="true"></span>
                                                            </div>
                                                            
                                                            <div class="table-responsive">
                                                            <table class="table table-striped table-cell">
									<thead>
										<tr class="warning">
											<th>CODIGO</th>
											<th>PRODUTO</th>
											<th>QTD</th>
											<th>VALOR</th>
                                                                                        <th>SUB TOTAL</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td>1</td>
											<td>Aditivo Radiador Rosa - 12CX</td>
											<td>5</td>
											<td>4,95</td>
                                                                                        <td>R$ 24,75</td>
										</tr>
										<tr>
											<td>2</td>
											<td>Aromatizante Gel - 60cx</td>
											<td>2</td>
											<td>3,83</td>
                                                                                        <td>R$ 7,66</td>
										</tr>
										<tr>
											<td>3</td>
											<td>LIMPA VIDRO SPRAY - 20 CX</td>
											<td>10</td>
											<td>4,98</td>
                                                                                        <td>R$ 49,80</td>
										</tr>
									</tbody>
                                                                        <tfoot>
                                                                            <tr>
                                                                                <td colspan="4"><strong>TOTAL:</strong> </td>
                                                                                <td><strong>R$ 82,21 </strong></td>
                                                                            </tr>
                                                                        </tfoot>
								</table>
                                                            </div>
                                                            
                                                            <div class="panel-footer">
                                                                    <div class="row">
                                                                            <div class="col-sm-8 col-sm-offset-2">
                                                                                    <button class="btn-success btn">Cadastrar</button>
                                                                                    <button class="btn-default btn">Cancelar</button>
                                                                                    
                                                                            </div>
                                                                    </div>
                                                             </div>
								
							</form>
						</div>
					</div>
					

				</div>
			</div> 
                
                
            </div>
    </div>
   </div>
   
   <script>
        setInterval(function(){
            var larguraTela = $(window).width();
            if(larguraTela > 993){
                $('#cpf-div').attr('style',"text-align: left !important; margin-left: -8px;");
                $('#cpf-cnpj-emp').attr('style', "margin-left: 10px;");
            } else {
                $('#cpf-div').attr('style',"");
                $('#cpf-div').attr('class',"");
                $('#cpf-cnpj-emp').attr('style', "");
                $('#cpf-div label:eq(0)').attr('class', 'col-sm-2');
            }
        }, 2000);
        
        $('#cond-pag-combo').change(function(){
            var valor = $(this).val();
            if(valor =="Cheque"){
                $('#tipo-pg-option').attr('style', 'display:block;');
                $('#numero-talao').focus().attr('style', 'border: 1px solid #d64c4c !important;');
            } else {
                $('#tipo-pg-option').attr('style', 'display:none;');
                
            }
        });
        
        $('#tipo-de-frete').change(function (){
            var valor = $(this).val();
            if(valor =="Transportadora"){
                $('#info-transporte').attr('style','display: block;');
            } else {
                $('#info-transporte').attr('style','display: none;');
            }
        });
    </script>
		<div id="page-wrapper">
				
		</div>
		<!--footer section start-->
<?php require './footer.php';?>