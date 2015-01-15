<script src="<?php echo base_url('assets/js/bootstrap.min.js')?>"></script>    
    <div class = "container">
    <h2 id="_default"><i class="icon-accessibility on-left"></i>Appointments</h2>
    <div id="makeAppointment" class="ui primary button">Make Appointment</div>
	<div class="grid fluid">
    	<div class="row">
        	<div class="span3">
            	 <div class="calendar" id="component_id" ></div>
                 <div id="calendar-output"></div>
                 
            </div>
            <div class="span9">
            	<div class="streamer" data-role="streamer" data-scroll-bar="true" data-slide-to-group="3" data-slide-speed="500">
                        <div class="streams">
                            <div class="streams-title">
                                <div class="toolbar">
                                    <button class="button small js-show-all-streams" title="Show all streams" data-role=""><span class="icon-eye"></span></button>
                                    <button class="button small js-schedule-mode" title="On|Off schedule mode" data-role=""><span class="icon-history"></span></button>
                                    <button class="button small js-go-previous-time" title="Go to previous time interval" data-role=""><span class="icon-previous"></span></button>
                                    <button class="button small js-go-next-time" title="Go to next time interval" data-role=""><span class="icon-next"></span></button>
                                </div>
                            </div>
                            <div class="stream bg-teal">
                                <div class="stream-title">INTERNET<br />BUSINESS</div>
                                <div class="stream-number">room 1</div>
                            </div>
                            <div class="stream bg-orange">
                                <div class="stream-title">ADVERTISING<br />ANALYST<br />SEO</div>
                                <div class="stream-number">room 2</div>
                            </div>
                            <div class="stream bg-lightBlue">
                                <div class="stream-title">STARTUPS<br />E-COMMERCE</div>
                                <div class="stream-number">room 3</div>
                            </div>
                            <div class="stream bg-darkGreen">
                                <div class="stream-title">MOBILE<br />GAMES<br />USABILITY</div>
                                <div class="stream-number">room 4</div>
                            </div>
                            <div class="stream bg-pink">
                                <div class="stream-title">INTERNET<br />TECHNOLOGY</div>
                                <div class="stream-number">room 5</div>
                            </div>
                            <div class="stream bg-violet">
                                <div class="stream-title">MASTERS</div>
                                <div class="stream-number">room 6</div>
                            </div>
                        </div>

                        <div class="events">
                            <div class="events-area">
                                <div class="events-grid">
                                    <div class="event-group double">
                                        <div class="event-super padding20">
                                            <div>9:00 - 9:40</div>
                                            <h2 class="no-margin">Registration</h2>
                                        </div>
                                    </div>
                                    <div class="event-group double" id="qwerty">
                                        <div class="event-super padding20">
                                            <div>9:40 - 10:20</div>
                                            <h2 class="no-margin">Keynote speech</h2>

                                            <br />
                                            <img src="images/org-01.png">
                                            <h4 class="no-margin">Aleksandr Olshanskiy</h4>
                                            <p>Imena.UA, MiroHost</p>

                                        </div>
                                    </div>

                                    <div class="event-group">
                                        <div class="event-stream" >
                                            <div class="event" data-role="live">
                                                <div class="event-content">
                                                    <div class="event-content-logo">
                                                        <img class="icon" src="images/live1.jpg">
                                                        <div class="time">10:20</div>
                                                    </div>
                                                    <div class="event-content-data">
                                                        <div class="title">Katerina Kostereva</div>
                                                        <div class="subtitle">Terrasoft</div>
                                                        <div class="remark">Create and develop a business without external investment</div>
                                                    </div>
                                                </div>
                                                <div class="event-content">
                                                    <div class="event-content-logo">
                                                        <img class="icon" src="images/live2.jpg">
                                                        <div class="time">10:30</div>
                                                    </div>
                                                    <div class="event-content-data">
                                                        <div class="title">Vlad Voskresensky</div>
                                                        <div class="subtitle">InvisibleCRM</div>
                                                        <div class="remark">Team Building in your startup: what to do and what not</div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="event double">
                                                <div class="event-content">
                                                    <div class="event-content-logo">
                                                        <img class="icon" src="images/x.jpg">
                                                        <div class="time">10:40</div>
                                                    </div>
                                                    <div class="event-content-data">
                                                        <div class="title">Round table</div>
                                                        <div class="remark">Trends in mobile platforms</div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="event"></div>
                                            <div class="event"></div>
                                            <div class="event"></div>
                                            <div class="event"></div>
                                            <div class="event"></div>
                                            <div class="event"></div>
                                            <div class="event"></div>
                                            <div class="event double"></div>
                                            <div class="event double"></div>
                                            <div class="event"></div>
                                            <div class="event"></div>
                                            <div class="event"></div>
                                            <div class="event"></div>
                                            <div class="event double"></div>
                                            <div class="event"></div>
                                            <div class="event"></div>
                                            <div class="event"></div>
                                            <div class="event"></div>
                                        </div>

                                        <div class="event-stream" >
                                            <div class="event triple">
                                                <div class="event-content">
                                                    <div class="event-content-logo">
                                                        <img class="icon" src="images/x.jpg">
                                                        <div class="time">10:40</div>
                                                    </div>
                                                    <div class="event-content-data">
                                                        <div class="title">Round table</div>
                                                        <div class="remark">Trends in mobile platforms</div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="event">
                                                <div class="event-content">
                                                    <div class="event-content-logo">
                                                        <img class="icon" src="images/me.jpg">
                                                        <div class="time">10:20</div>
                                                    </div>
                                                    <div class="event-content-data">
                                                        <div class="title">Sergey Pimenov</div>
                                                        <div class="subtitle">Metro UI CSS</div>
                                                        <div class="remark">Create a site with interface similar to Windows 8</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="event-stream" >
                                            <div class="event" data-role="live" data-effect="slideUp" data-period="3000">
                                                <div class="event-content">
                                                    <div class="event-content-logo">
                                                        <img class="icon" src="images/me.jpg">
                                                        <div class="time">10:20</div>
                                                    </div>
                                                    <div class="event-content-data">
                                                        <div class="title">Sergey Pimenov</div>
                                                        <div class="subtitle">Metro UI CSS</div>
                                                        <div class="remark">Create a site with interface similar to Windows 8</div>
                                                    </div>
                                                </div>
                                                <div class="event-content">
                                                    <div class="event-content-logo">
                                                        <img class="icon" src="images/x.jpg">
                                                        <div class="time">10:30</div>
                                                    </div>
                                                    <div class="event-content-data">
                                                        <div class="title">Round table</div>
                                                        <div class="subtitle">Metro UI CSS</div>
                                                        <div class="remark">Discussion</div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="event double">
                                                <div class="event-content">
                                                    <div class="event-content-logo">
                                                        <img class="icon" src="images/x.jpg">
                                                        <div class="time">10:40</div>
                                                    </div>
                                                    <div class="event-content-data">
                                                        <div class="title">Round table</div>
                                                        <div class="remark">Trends in mobile platforms</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>

                                    <div class="event-group double">
                                        <div class="event-super padding20">
                                            <div>18:20</div>
                                            <h2 class="no-margin">Final ceremony</h2>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
            </div>
            <div id="myMod" class="modal fade bs-example-modal-lg">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content" style="background-color: #e7e5e3;">
                        <div class="modal-header">
                            <h4 class="modal-title">Appointment</h4>
                        </div>
                        <div class="modal-body">
                            <div class="col-md-12 column">
                                <div class="col-md-6 column">
                                    <span>Province</span>
                                        <select id="pro" class="form-group form-control" name="province" required="required">
                                                      <option value="" disabled default selected class="display-none">Select Province</option>
                                                      <?php foreach($specialization as $s):?>
                                                        <option value="<?php echo $s->ID;?>"><?php echo $s->name;?></option> 
                                                      <?php endforeach;?>                              
                                        </select>
                                    <span>Barangay</span>
                                        <div id="bcontainer">
                                            <select id="brgy" class="form-group form-control" name="barangay" required="required"></select>
                                        </div>
                                    <span>Sitio</span>
                                        <div id="scontainer">
                                            <input id="sit" class="form-group form-control" name="sitio" required="required">
                                        </div>
                                </div>
                            </div>
                        </div>
                    <div class="modal-footer">
                        <button id="savedata" type="button" name="addlist" class="btn btn-primary "> DONE </a>
                        </div>
                    </div>
                </div>  
        </div>
    
    </div>         
	<div id="modal_cont"></div> 
     
</div>







<script type="text/javascript">
$(document).ready(function(){
    
    $('#component_id').calendar({
        format: 'yyyy-mm-dd',
        multiSelect: false, //default true (multi select date)
        startMode: 'day', //year, month, day
      
        locale: 'en', // 'ru', 'ua', 'fr' or 'en', default is $.Metro.currentLocale
        otherDays: false, // show days for previous and next months,
        weekStart: 0, //start week from sunday - 0 or monday - 1
        getDates:function(data){
                var r = "", out = $("#calendar-output").html("");
                $.each(data, function(i, d){
                    r += d + "<br />";
                });
                out.html(r);
            }, // see example below
        click: function(d){
                var out = $("#calendar-output2").html("");
                out.html(d);
            } // fired when user clicked on day, in "d" stored date
    });
    $(document).on('click','#makeAppointment', function(){ 
        var cont=       '<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">'+
                        '<div class="modal-dialog">'+
                            '<div class="modal-content">'+
                                '<div class="modal-header">'+
                                    '<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>'+
                                    '<h4 class="modal-title" id="myModalLabel">Make Appointment </h4>'+
                                '</div>'+
                                '<div class="modal-body">'+
                                    '<div class="modal-footer appointmentForm" hidden="hidden">'+
                                        '<button type="button" class=" closemdl btn btn-default" data-dismiss="modal">Close</button>'+
                                        '<button type="button" class=" closemdl btn btn-primary">Save changes</button>'+
                                    '</div>'+
                                '</div>'+
                            '</div>'+
                        '</div>';

        $( "#modal_cont" ).html(cont);
        $('#myModal').modal('show');
    }); 
})
</script>