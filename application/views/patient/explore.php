<?php echo link_tag('assets/css/l&g.css');
	  echo link_tag('assets/css/dimmer.min.css');
	
	  
 ?>

  <script src="<?php echo base_url('assets/js/dimmer.min.js')?>"></script>



<div class="container">
    <div class="grid fluid">
        <div class="row">
            <div class="span3">
            </br></br>
                <nav class="sidebar light">
                    <ul>
                        <li class="stick bg-red"><a href="#"><i class="icon-cog"></i>Doctors</a></li>
                        <li class="stick bg-yellow"><a href="#"><i class="icon-cog"></i>Clinic</a></li>
                    </ul>
            	</nav>
            </div>
            <div class="span9">
          	  <div class="lg"> 
                    <header>                 
                        <h1>Doctors</h1>       
                    </header>
			
            	    <ul id="products" class="grid clearfix">
              	      <!-- row 1 -->
                      <?php
				foreach($results as $data) {
    			?>
				<li class="clearfix dims">
                    	 <div class="ui dimmer">
                          	<div class="content">
                             	<div class="center">
                              		 <div class="viewProfile ui primary button">View Profile</div>
                                     <input  type="hidden" id="id" value="<?php echo $data->id; ?>"/>
                                     <input  type="hidden" id="fname" value="<?php echo $data->fname; ?>"/>
                                     <input  type="hidden" id="lname" value="<?php echo $data->lname;?>"/>
                                     <input  type="hidden" id="avatar" value="<?php echo $data->avatar; ?>"/>
                                     <input  type="hidden" id="specialization" value="<?php echo $data->specialist; ?>"/>
                                     <input  type="hidden" id="room_num" value="<?php echo $data->contact_num; ?>"/>
                                   
                                    
                                     
                             	</div>
                            </div>
                         </div>
                          
                        <section class="left">
						<div class="thumb"> <?php echo img($data->avatar);?> </div>
              <?php echo '             <h3>'.$data->fname.'</h3>                      
                        </section>
                        <section class="right">
                       <span class="price">'.$data->specialist.' </span>
                        </section>
                    </li>';
			
				}
?>
                    
                    
               
                    
         
                </ul>
                
                <footer>   
                <br />
               
                  <div class="pagination small">
                  
                   <?php echo $links; ?>
                
                </div>
                </footer>
                    
            </div>
            	
            </div>
        </div>
</div>
        
   
   
   <div id="modal_cont"></div>
    
</div>



<script type="text/javascript">


$( document ).ready(function() {	
				   
 	$('.dims')
  .dimmer({
    on: 'hover',
	duration    : {
  	show : 0,
	 hide : 10
	}
  });			
		

$(document).on('click','.viewProfile', function(){
	var $bla = $(this).parents('td').prev();
	
	var lname = $(this).siblings('#lname').val();
	var fname = $(this).siblings('#fname').val();
	var email = $(this).siblings('#id').val();
	var specialization = $(this).siblings('#specialization').val();
	var Cnum = $(this).siblings('#room_num').val();
	var Rnum = $(this).siblings('#cont_num').val();
	var avatar = $(this).siblings('#avatar').val();
	
	var id = $(this).siblings('#id').val();
	
	var cont= '	<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">'+
				  '<div class="modal-dialog">'+
					'<div class="modal-content">'+
					 ' <div class="modal-header">'+
						'<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>'+
						'<h4 class="modal-title" id="myModalLabel">Doctor </h4>'+
					'  </div>'+
					'  <div class="modal-body">'+
							'<div class="thumb" style="margin: 0 auto;"><img  class="scale" src = "<?php echo base_url()?>'+avatar+'" ></div>'+

							'<dl class="horizontal" style="margin: 0 auto;">'+
								'<dt>Name:</dt>'+
									'<dd>'+ fname+'  '+lname+'</dd>'+
								'<dt>Specialization:</dt>'+
									'<dd>'+specialization+'</dd>'+
								'<dt>Contact num:</dt>'+
									'<dd>'+Cnum+'</dd>'+
								'<dt>Room num:</dt>'+
									'<dd>'+Rnum+'</dd>'+
								'<dt></dt>'+
									'<dd><button class="default makeAppointment">lalala</button></dd>'+
							  '</dl>'+
							  
							  '<form action="<?php echo base_url('admin/blabla'); ?>" method="POST"  class="appointmentForm" hidden="hidden">' +
                '<label>id</label>' +
                '<div class="input-control text"><input type="text" name="date" value="">'+
               ' <button class="btn-clear"></button></div> ' +
			     '<label>email</label>' +
                '<div class="input-control text"><input type="email"  value= "" name="time" required>'+
               ' <button class="btn-clear"></button></div> ' +
			     '<label>first name</label>' +
                '<div class="input-control text"><input type="text" value = "" name="message"  required>'+
               ' <button class="btn-clear"></button></div> ' +
                '</form>'+
					 ' </div>'+
					 ' <div class="modal-footer appointmentForm" hidden="hidden">'+
						'<button type="button" class=" closemdl btn btn-default" data-dismiss="modal">Close</button>'+
						'<button type="button" class=" closemdl btn btn-primary">Save changes</button>'+
					 ' </div>'+
					'</div>'+
				  '</div>'+
			'</div>';
	$( "#modal_cont" ).html(cont);
	$('#myModal').modal('show');
	
	
});	


$(document).on('click','.makeAppointment', function(){
  $(".appointmentForm").show();
});

$(document).on('click','.closemdl', function(){
  $(".appointmentForm").hide();
});
			
			
			
});//ready end
					

					

</script>
     
