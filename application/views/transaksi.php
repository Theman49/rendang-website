<div id="transaksi-page" class="container overflow-auto mb-5">
	<table class="border-white table table-striped text-center bg-dark text-light">
		<thead>
			<tr class="bg-secondary">
				<th>No</th>
				<th>Order ID</th>
				<th>Nama</th>
				<th>Gross Amount</th>
				<th>Payment Type</th>
				<th>Bank</th>
				<th>VA number</th>
				<th>Transaction Time</th>
				<th>Expire Time</th>
				<th>Status</th>
				<th>Panduan</th>
			</tr>
		</thead>
		<tbody>
			<?php
			    date_default_timezone_set('Asia/Jakarta');
				$number = 0;
				foreach($midtrans as $row){
					$number += 1;
					$jumlah = 0;
					foreach($checkout as $item){
						if($item['order_id'] == $row['order_id']){
							$jumlah += 1;
						}
					}

					?>
						<tr  class="text-light">
							<td class="bg-secondary" rowspan="<?=$jumlah+1?>"><?=$number?></td>
							<td><?=$row['order_id']?></td>
							<td><?=$row['nama_pembeli']?></td>
							<td class="text-right"><?=$row['gross_amount']?></td>
							<td><?=$row['payment_type']?></td>
							<td><?=strtoupper($row['bank'])?></td>
							<td class="text-right"><?=$row['va_number']?></td>
							<td><?=date("j M Y",$row['transaction_time'])?><br><?=date("H:i",$row['transaction_time'])?></td>
							<td><?=date("j M Y",$row['expire_time'])?><br><?=date("H:i",$row['expire_time'])?></td>
							<td><p class="m-0 btn 
							    <?php
							         if($row['status_code'] == 201 && time() > $row['expire_time']){
							            echo "btn-danger";
							        }else if ($row['status_code'] == 201 && time() < $row['expire_time']){
							            echo "btn-warning";
							        }else if ($row['status_code'] == 200){
							            echo "btn-success";
							        }
							    
							    ?>">
							    
							    <?php
							        if($row['status_code'] == 201 && time() > $row['expire_time']){
							            echo "canceled";
							        }else if ($row['status_code'] == 201 && time() < $row['expire_time']){
							            echo "unpaid";
							        }else if ($row['status_code'] == 200){
							            echo "paid";
							        }
							    ?>
							    </p></td>
							<td><a class="btn <?php
							    if($row['status_code'] == 201 && time() > $row['expire_time']){
							            echo "text-light disabled";
						        }else if ($row['status_code'] == 201 && time() < $row['expire_time']){
						            echo "text-primary";
						        }else if ($row['status_code'] == 200){
						            echo "text-light disabled";
						        }
							?>" href="<?=$row['pdf_url']?>" target="_blank"><i class="fa fa-download"></i></a></td>
						</tr>
						
						
						<?php
							$no = 0;
							foreach($checkout as $item){
								if($item['order_id'] == $row['order_id']){
									$no += 1;
									$sql = "SELECT * FROM catalog WHERE id_menu = ".$item['id_menu'];
									$selected = $this->ModelCatalog->getDataFromQuery($sql);

									?>
									<tr class="text-dark bg-light">
										<?=($no == 1) ? "<td rowspan=\"$jumlah\">detail</td>" : ""?>
										
										<td><?=$selected[0]['nama_menu']?> x <?=$item['jumlah_order']?></td>
										<td class="text-right">Rp. <?=$item['total_harga']?>,-</td>
									
									</tr>	
									<?php
								}
							}
						?>

						<tr class="bg-warning">
							<td colspan="11"></td>
						</tr>

					<?php
				}
			?>
		</tbody>
	</table>
</div>