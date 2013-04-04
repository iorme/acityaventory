<script type="text/javascript" src="{{base_url()}}javascript/form_js/form.js"></script>
{{form_open('warehouse/submit','id=warehouseForm')}}
<div id="form_input">
<table>
    <tr>
      <td>Warehouse Name</td>
      <td colspan="2">{{form_input($warehouse_name)}}</td>
    </tr>
    <tr>
      <td>Warehouse Code</td>
      <td colspan="2">{{form_input($code)}}</td>
    </tr>
    <tr>
    <tr>
      <td>Warehouse Address</td>
      <td colspan="2">{{form_input($address)}}</td>
    </tr>
    <tr>
      <td>Warehouse Phone</td>
      <td colspan="2">{{form_input($phone)}}</td>
    </tr>
      <td>Brand Description</td>
      <td colspan="2">{{form_textarea($desc)}}</td>
    </tr>
    <tr>
        <td ><input type="hidden" name="id" value="" id="warehouse_id" /></td>
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
    @include('warehouse/show')
</div>
{{form_close()}}
<div id="growl"></div>
<script type="text/javascript" language="javascript" charset="utf-8">
    var base_url = "{{base_url()}}";
</script>
<script type="text/javascript" src="{{base_url()}}javascript/form_js/warehouse_post.js"></script>
