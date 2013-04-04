<script type="text/javascript" language="javascript" charset="utf-8">
    var base_url = "{{base_url()}}";
</script>
<script type="text/javascript" src="{{base_url()}}javascript/form_js/item_delete.js"></script>
{{validation_errors()}}

<b>{{$title}}</b>
<table style="width:800px; border:1px solid;">
 <tr>
 <th style="border:1px solid;">No</th>
 <th style="border:1px solid;">Name</th>
 <th style="border:1px solid;">Sell Price</th>
 <th style="border:1px solid;">Brand</th>
 <th style="border:1px solid;">Group</th>
 <th style="border:1px solid;">Measure</th>
 <th style="border:1px solid;">Status</th>
 <th style="border:1px solid;">Min Stock</th>
 <th style="border:1px solid;">Description</th>
 <th style="border:1px solid;">Edit</th>
 <th style="border:1px solid;">Delete</th>
 </tr>
 <?php
 	$i=0;
 ?>
 @foreach ($query as $row)
 	<?php $i++; ?>
 	@if ($row->status=='1')
    	<?php $status = "Active"; ?>
 	@else
    	<?php $status = "Non Active"; ?>
 	@endif
 	<tr class="record">
 		<td style="border:1px solid;">{{$i}}</td>
		<td style="border:1px solid;">{{$row->name}}</td>
		<td style="border:1px solid; text-align:right;">{{$row->sell_price}}</td>
		<td style="border:1px solid;">{{$row->brand_name}}</td>
		<td style="border:1px solid;">{{$row->group_name}}</td>
		<td style="border:1px solid;">{{$row->measure_name}}</td>
		<td style="border:1px solid;">{{$status}}</td>
		<td style="border:1px solid; text-align:right;">{{$row->min_stock}}</td>
		<td style="border:1px solid;">{{$row->desc}}</td>
		<td style="border:1px solid;"><a class="editbutton" id="{{$row->id}}" href="#">Edit</a></td>
		<td style="border:1px solid;"><a class="delbutton" id="{{$row->id}}" href="#" >Delete</a></td>
 	</tr>
 @endforeach
</table>
