<script type="text/javascript" language="javascript" charset="utf-8">var base_url = "{{base_url()}}";</script>
<script type="text/javascript" src="{{base_url()}}javascript/form_js/pre_order_delete.js"></script>
<b>{{$title}}</b>
<table style="width:800px; border:1px solid;">
 <tr>
 <th style="border:1px solid;">No</th>
 <th style="border:1px solid;">No Pre Order</th>
 <th style="border:1px solid;">Pre Order Date</th>
 <th style="border:1px solid;">Term Date</th>
 <th style="border:1px solid;">Supplier</th>
 <th style="border:1px solid;">Total</th>
 <th style="border:1px solid;">Description</th>
 <th style="border:1px solid;">Edit</th>
 <th style="border:1px solid;">Delete</th>
 </tr>
 <?php
 	$i=0;
 ?>
 @foreach ($query as $row)
 	<?php $i++; ?>
 	<tr class="record">
 		<td style="border:1px solid;">{{$i}}</td>
 		<td style="border:1px solid;">{{$row->po_number}}</td>
 		<td style="border:1px solid;">{{$row->date}}</td>
 		<td style="border:1px solid;">{{$row->term_date}}</td>
 		<td style="border:1px solid;">{{$row->supplier_name}}</td>
 		<td style="border:1px solid; text-align:right;">{{$row->total}}</td>
 		<td style="border:1px solid;">{{$row->description}}</td>
 		<td style="border:1px solid;"><a class="editbutton" id="{{$row->id}}" href="#">Edit</a></td>
 		<td style="border:1px solid;"><a class="delbutton" id="{{$row->id}}" href="#" >Delete</a></td>
 	</tr>
 @endforeach
</table>
