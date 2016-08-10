<?php require './header.php';?>
	<!-- //header-ends -->
        <style>
            .control-label{
                text-align: left !important;
            }
        </style>
			<div id="page-wrapper">
				<div class="graphs">
					<h3 class="blank1">Cadastro de Clientes</h3>
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
									<label for="focusedinput" class="col-sm-2 control-label">Nome da Empresa</label>
									<div class="col-sm-8">
                                                                            <input type="text" class="form-control1" id="focusedinput" placeholder="Nome Fantasia" required>
									</div>
                                                                        <!--
									<div class="col-sm-2 jlkdfj1">
										<p class="help-block">Your help text!</p>
									</div>
                                                                        -->
								</div>
								
								<div class="form-group">
									<label for="inputPassword" class="col-sm-2 control-label">CNPJ / CPF</label>
									<div class="col-sm-8">
                                                                            <input type="text" class="form-control1" id="focusedinput" placeholder="CNPJ / CPF">
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
										<select multiple="" class="form-control1"  required="required">
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
									<label for="checkbox" class="col-sm-2 control-label">Segmento</label>
									<div class="col-sm-8">
										<div class="checkbox-inline1"><label><input type="checkbox"> Autopeças</label></div>
										<div class="checkbox-inline1"><label><input type="checkbox" checked=""> Motocicletas</label></div>
										<div class="checkbox-inline1"><label><input type="checkbox" disabled=""> Mecânica Geral</label></div>
										<div class="checkbox-inline1"><label><input type="checkbox" disabled="" checked=""> Outro</label></div>
									</div>
								</div>
                                                                <div class="form-group">
                                                                    <hr>
								</div>
                                                                <div class="form-group">
									<label for="inputPassword" class="col-sm-2 control-label">Nome do responsável</label>
									<div class="col-sm-8">
                                                                            <input type="text" class="form-control1" id="focusedinput" placeholder="Nome Completo"  required="required">
									</div>
								</div>
                                                            
                                                                <div class="form-group">
									<label for="inputPassword" class="col-sm-2 control-label">Celular</label>
									<div class="col-sm-8">
                                                                            <input type="text" class="form-control1" id="focusedinput" placeholder=""  required="required">
									</div>
								</div>
                                                            
                                                                <div class="form-group">
									<label for="inputPassword" class="col-sm-2 control-label">Email</label>
									<div class="col-sm-8">
                                                                            <input type="email" class="form-control1" id="focusedinput" placeholder="">
									</div>
								</div>
                                                                
                                                                <div class="form-group">
									<label for="radio" class="col-sm-2 control-label">Sexo do responsável</label>
									<div class="col-sm-8">
										<div class="radio block"><label><input type="radio"> Masculino</label></div>
										<div class="radio block"><label><input type="radio" checked=""> Feminino</label></div>
									</div>
								</div>
								
								
								
								<div class="form-group">
									<label for="txtarea1" class="col-sm-2 control-label">Observações</label>
									<div class="col-sm-8"><textarea name="txtarea1" id="txtarea1" cols="50" rows="4" class="form-control1"></textarea></div>
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
		<!--footer section start-->
<?php require './footer.php';?>
