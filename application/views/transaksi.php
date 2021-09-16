<div id="transaksi-page" class="container">
	<table class="table table-striped text-center">
		<thead>
			<tr>
				<th>Order ID</th>
				<th>Nama</th>
				<th>Gross Amount</th>
				<th>Payment Type</th>
				<th>Bank</th>
				<th>VA number</th>
				<th>Transaction Time</th>
				<th>Status</th>
				<th>Panduan</th>
			</tr>
		</thead>
		<tbody>
			<?php
				foreach($contentData as $row){
					?>
						<tr>
							<td><?=$row['order_id']?></td>
							<td><?=$row['nama_pembeli']?></td>
							<td class="text-right"><?=$row['gross_amount']?></td>
							<td><?=$row['payment_type']?></td>
							<td><?=strtoupper($row['bank'])?></td>
							<td class="text-right"><?=$row['va_number']?></td>
							<td><?=$row['transaction_time']?></td>
							<td><?=$row['order_id']?></td>
							<td><a href="<?=$row['pdf_url']?>" target="_blank"><i class="fa fa-download"></i></a></td>
						</tr>
					<?php
				}
			?>
		</tbody>
	</table>
</div>