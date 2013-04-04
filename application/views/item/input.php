<div id="form_input">
<script type="text/javascript" src="<?php echo base_url(); ?>javascript/form_js/form.js"></script>
{{form_open('item/submit','id=itemForm')}}
<table>
    <tr>
      <td>Item Name</td>
      <td colspan="2">{{form_input($item_name)}}</td>
    </tr>
    <tr>
      <td>Item Code</td>
      <td colspan="2">{{form_input($code)}}</td>
    </tr>
    <tr>
      <td>Sell Price</td>
      <td colspan="2">{{form_input($sell_price)}}</td>
    </tr>
    <tr>
    <tr>
      <td>Brand</td>
      <td colspan="2">{{form_dropdown('brand_id',$brand_list,'','id="brand_id"')}}</td>
    </tr>
    <tr>
      <td>Group</td>
      <td colspan="2">{{form_dropdown('group_id',$group_list,'','id="group_id"')}}</td>
    </tr>
    <tr>
      <td>Measure</td>
      <td colspan="2">{{form_dropdown('measure_id',$measure_list,'','id="measure_id"')}}</td>
    </tr>
    <tr>
      <td>Minimal Stock</td>
      <td colspan="2">{{form_input($min_stock)}}</td>
    </tr>
    <tr>
      <td>Item Description</td>
      <td colspan="2">{{form_textarea($desc)}}</td>
    </tr>
    <tr>
        <td>Active</td>
        <td colspan="2">{{form_checkbox('status_id','1','','id="status_id" checked="checked"')}}</td>
    </tr>
    <tr>
        <td ><input type="hidden" name="id" value="" id="item_id" /></td>
        <td >{{form_submit('submit','Save','id="submit"')}}</td>
        <td >{{form_reset('reset','Reset')}}</td>
    </tr>
</table>    
</div>
<div align="right">
    <a href="#" id="hide"><img src="{{base_url()}}images/nav.png" alt="Show / Hide " title="Show / Hide Form" /></a>
</div>
<hr>
<div id="form_show">
    @include('item/show')
</div>
  {{form_close()}}
<div id="growl"></div>
<script type="text/javascript" language="javascript" charset="utf-8">
    var base_url = "{{base_url()}}";
</script>
<script type="text/javascript" src="{{base_url()}}javascript/form_js/item_post.js"></script>
