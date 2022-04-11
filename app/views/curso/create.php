<section class="mt-4">
			<div class="titulo h5 mb-0"><h2>Formulario de Cadastro</h2></div>
				<div class="base-form">
					<div class="caixa-form">
						<form action="<?php echo URL_BASE."curso/salvar" ?>" method="POST">				
							<div class="rows">
								<div class="col-12 d-flex text-justify-center">
									<span href="" class="msg msg-verde mx-3"><i class="fas fa-check"></i> Cadastro realizado com sucesso <a href="javascrip:;" onclick="fecharMsg()" class="fas fa-times float-right"></a></span>
									<span href="" class="msg msg-vermelho mx-3"><i class="fas fa-exclamation-triangle"></i> O campo é obrigatório <a href="javascript:;" onclick="fecharMsg()" class="fas fa-times float-right"></a></span>
				
								</div>				
							</div>				
							<div class="rows msg-form">	
							  <!-- <div class="col-3 position-relative">									
									<img src="img/img-usuario.png" class="img-fluido foto">
									<div  class="foto-file">
										<input type="file" id="editarFoto"><label for="editarFoto"><span>Editar foto</span></label>
									</div>
									<small class="d-block text-center pt-1 pb-2"><b>nome_do_arquivo.jpg</b></small>
								</div> -->
								
								<div class="col-9">
								<div class="rows">
									<div class="col-8">
										<label>Curso</label>
										<input name="curso" value="<?php echo isset($curso) ? $curso->curso: "" ?>" type="text" placeholder="Insira o nome" class="form-campo">
									</div>
								<div class="col-4">
									<label>Preço</label>
									<input name="preco" value="<?php echo isset($curso) ? $curso->preco: "" ?>" type="text" placeholder="Preço" class="form-campo">
								</div>									
									<div class="col-3">
										<p>Horario</p>
										<label>De</label>
										<input name="horainicio" value="<?php echo isset($curso) ? $curso->horainicio: "" ?>" type="text" placeholder="Insira o Horario" class="form-campo">
										<label>Até</label>
										<input name="horafim" value="<?php echo isset($curso) ? $curso->horafim:""?>" type="text" placeholder="Insira o Horario" class="form-campo">
									</div>	
									<div class="col-4">
										<label>Duração</label>
										<input name="duracao" value="<?php echo isset($curso) ? $curso->duracao: "" ?>" type="text" placeholder="Insira a duração em meses" class="form-campo">
									</div>		
									<div class="col-5">
										<label>Dias da Semana</label>
										<input name="dias" value="<?php echo isset($curso) ? $curso->dias: "" ?>" type="text" placeholder="Insira os dias da semana" class="form-campo">
									</div>			
								<div class="col-6 m-auto">
									<input type="hidden" name="idcurso" value="<?php echo isset($curso) ? $curso->idcurso: null ?>" />
									<input type="submit" value="Cadastrar" class="btn btn-verde width-100">
								</div>
								
								</div>
								</div>
								
						</form>
					</div>
				</div>
			</div>
</section>