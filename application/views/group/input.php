{{form_open('group/submit','id=groupForm')}}
<div id="form_input">
<table>
    <tr>
      <td>Group Name</td>
      <td colspan="2">{{form_input($group_name)}}</td>
    </tr>
    <tr>
      <td>Group Description</td>
      <td colspan="2">{{form_textarea($desc)}}</td>
    </tr>
    <tr>
        <td ><input type="hidden" name="id" value="" id="group_id" /></td>
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
    @include('group/show')
</div>
{{form_close()}}
<div id="growl"></div>
<script type="text/javascript" language="javascript" charset="utf-8">
    var base_url = "{{base_url()}}";
</script>
<script type="text/javascript" src="{{base_url()}}javascript/form_js/group_post.js"></script>
<script type="text/javascript" src="{{base_url()}}javascript/form_js/form.js"></script>
