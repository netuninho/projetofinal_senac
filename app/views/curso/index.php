<section class="caixa mt-4">
				<div class="titulo h5 mb-0"> <h2>Lista de Cursos</h2></div>
				<div class="base-lista">
					<div>
						<div class="text-end d-flex">
							<a href="<?php echo URL_BASE."curso/create" ?>" class="btn btn-verde d-inline-block mb-2 mx-1"><i class="fas fa fa-plus-circle" aria-hidden="true"></i> Novo Curso</a>
							<a href="" class="btn btn-azul d-inline-block mb-2 filtro"><i class="fas fa fa-filter" aria-hidden="true"></i> Filtrar</a>
						</div>
					</div>
					<div class="lst mostraFiltro" style="">
						<form action="" method="">
						<div class="rows">
								<div class="col-4">
									<select name="txt_id_empresa">
										<option selected>Selecione o valor...</option>
										<option value="1">Código</option>
										<option value="2">Curso</option>
										<option value="3">Preço</option>
										<option value="4">Horario</option>
										<!-- <option value="5">Site</option>
										<option value="6">Fone</option> -->
									</select>
								</div>
								<div class="col-6">
									<input type="text"  name="" placeholder="Valor da pesquisar..." >
								</div>
								<div class="col-2">
									<input type="submit" class="btn btn-azul" value="pesquisar">
								</div>
						</div>
						</form>
					</div>
						
				<div class="tabela-responsiva tabela">
					<table width="100%" border="0" cellspacing="0" cellpadding="0" id="dataTable">
						<thead> 
						  <tr>
						  <th align="center">ID</th>
							<th align="center">Curso</th>
							<th align="center">Preço</th>
							<th align="center">Horario</th>
							<th align="center">Duração</th>
							<th align="center">Dias da Semana</th>
							<th align="center">Ação</th>
						  </tr>
						</thead> 
						<tbody>
							<?php  foreach($lista as $curso) { ?>
							<tr>
								<td align="center"><?php echo $curso->idcurso; ?></td>
								<td align="center"><?php echo $curso->curso; ?></td>
								<td align="center">
									R$ <?php echo $curso->preco; ?>
								</td>
								<td align="center">
									<?php echo $curso->horainicio; ?>
									<p>até</p>
									<?php echo $curso->horafim ?>
							    </td>
								<td align="center"><?php echo $curso->duracao; ?></td>
								<td align="center"><?php echo $curso->dias; ?></td>
								<td align="center">
									<a href="<?php echo URL_BASE."curso/edit/".$curso->idcurso; ?>" class="btn btn-editar" title="Editar"></a>
									<a href="<?php echo URL_BASE."curso/excluir/".$curso->idcurso; ?>" class="btn btn-exlcuir" title="excluir"></a>
								</td>
							</tr>
							<?php } ?>	
												
						</tbody> 
					</table>
					</div>
								
					</div>
				</div>
			</section>