@extends('layout')

@section('content')
@if(Session::has('msg'))
<div class="alert alert-success"><b><?php
        echo Session::get('msg');
        Session::put('msg', NULL);
        ?></b></div>
@endif





<div class="box box-info tbl-box">

<form method="post" action="{{ URL::Route('Adminsmssend') }}">

		
		<div class="selectchoise">	

		 Driver <input type="radio" name="type" value="1" checked /> 
		  Lifter <input type="radio" name="type" value="2"/>
		</div>
		




	 <div class="leftsms" >
		<br><br>
		<!-- <input type="text" placeholder="Search driver"/> <input type="button" value="Search">
		<br><br>-->
		
		
		<select name="driver[]" multiple="multiple" size="6" class="sizeoffield">
		<?php 
		foreach($walkers as $walk)
		{
			echo '<option value="'.$walk->id.'">'.$walk->first_name.'('.$walk->email.')</option>';
		}
		
		
		?>
		
		
		</select>
	 </div>

	 <div class="rightsms" style="display:none">
		<br><br>
		<!-- <input type="text" placeholder="Search driver"/> <input type="button" value="Search">
		<br><br>-->
		
		
		<select name="passenger[]" multiple="multiple" size="6" class="sizeoffield">
		<?php 
		foreach($owner as $ow)
		{
			echo '<option value="'.$ow->id.'">'.$ow->first_name.'('.$ow->email.')</option>';
		}
		?>
		</select>
	 </div>

	 <div style="clear:both"></div>
	 
	 
	 <div class="smsbox">
	 <textarea name="sms"  maxlength='160' required rows="7" cols="60" class="textard"></textarea>
		<br/>	
	  <input type="submit" value="Send"/>
	 </div>
 
 
  </form>
</div>

<style type="text/css">

.selectchoise{
	text-align:center;
	margin-top:10px;
}

.leftsms{
	float:left;
	width:500px;
	margin-left:20px;;
}

.rightsms{
	float:left;
	width:500px;
	clear:right;
}
.sizeoffield{
width:450px;
}

.smsbox{
	margin-top:60px ;
	
}

.textard{
	text-align:left;
}

</style>

<script type="text/javascript">

$('input').on('ifClicked', function(event){

 choise =this.value;
  if(choise==1)
  {
	 $(".leftsms").css("display","block");
	 $(".rightsms").css("display","none");
  }
  else if(choise==2)
  {
	  	 $(".rightsms").css("display","block");
		 $(".leftsms").css("display","none");
  }
});




$(function() {  
    $("textarea[maxlength]").bind('input propertychange', function() {  
        var maxLength = $(this).attr('maxlength');  
        if ($(this).val().length > maxLength) {  
            $(this).val($(this).val().substring(0, maxLength));  
        }  
    })  
});






</script>




@stop
