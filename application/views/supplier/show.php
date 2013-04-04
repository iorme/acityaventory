<script type="text/javascript" language="javascript" charset="utf-8">
    var base_url = "{{base_url()}}";
</script>
<script type="text/javascript" src="{{base_url()}}javascript/form_js/supplier_delete.js"></script>
{{validation_errors()}}

<b>{{$title}}</b>
<table style="width:600px; border:1px solid;">
 <tr>
 <th style="border:1px solid;">No</th>
 <th style="border:1px solid;">Name</th>
 <th style="border:1px solid;">Code</th>
 <th style="border:1px solid;">Address</th>
 <th style="border:1px solid;">Phone</th>
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
 		<td style="border:1px solid;">{{$row->name}}</td>
 		<td style="border:1px solid;">{{$row->code}}</td>
 		<td style="border:1px solid;">{{$row->address}}</td>
 		<td style="border:1px solid;">{{$row->phone}}</td>
 		<td style="border:1px solid;">{{$row->desc}}</td>
 		<td style="border:1px solid;"><a class="editbutton" id="{{$row->id}}" name="{{$row->name}}" code="{{$row->code}}" address="{{$row->address}}" phone="{{$row->phone}}" desc="{{$row->desc}}" href="#">Edit</a></td>
 		<td style="border:1px solid;"><a class="delbutton" id="{{$row->id}}" href="#" >Delete</a></td>
 	</tr>
 @endforeach
</table>
