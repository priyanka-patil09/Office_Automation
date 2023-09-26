    
            <!-- =============== Left side End ================-->
            <div class="main-content-wrap sidenav-open d-flex flex-column">
                <!-- ============ Body content start ============= -->
        <div class="main-content mt-2">
            <div class="separator-breadcrumb border-top"></div>
                <div class="form-row ">
                    <div class="col-md-12">
                    
                            <div class="card-body p-4">


                                <div class="card-title mb-1 py-1">
                                    <h2>&ensp;Employee Information</h2>
                                </div>

                                <form  id="Form" enctype="multipart/form-data">

                                <input type="hidden" class="form-control" id="leaveid" placeholder="" name="leaveid" value=""><br>

                                <input type="hidden" class="form-control" id="registrationId" placeholder="" name="registrationId" value="24">

                                    <div class="card form_card mt-3 p-2">
                                            <form action="">
                                                <div class="row">
                                                    <div class="col-xl-4 col-lg-4 col-md-3 col-sm-3 col-12 ">

                                                        <div class="form-group">
                                                        <div class="field_label">Employee Name<span class="text-danger">*</span>
                                                  
                                                  <input type="text" class="form-control" id="EmpNm" name="EmpNm"
                                          value="" style="border-color:black; width: 300px;"placeholder="Enter Employee Name">
                                      </div>
                                                        </div>
                                                    </div>


                                                    <div class="col-xl-4 col-lg-4 col-md-3 col-sm-3 col-12 ">

                                                        <div class="form-group">

                                                        <div class="field_label">Primary Mobile<span class="text-danger">*</span>
                                                  
                                                  <input type="text" class="form-control" id="PriNo" name="PriNo"
                                          value="" style="border-color:black; width: 300px;"placeholder="Enter Primary Mobile No">
                                      </div>

                                                        </div>
                                                    </div>


                                                    <div class="col-xl-3 col-lg-3 col-md-5 col-sm-6 col-6 px-1">

                                                        <div class="form-group">


                                                            <input type="text" class="form-control" id="wardno" name="wardno"
                                                                value="">

                                                            <div class="field_label">Email <span class="text-danger">*</span></div>
                                                        </div>
                                                    </div>

                                                    <div class="col-xl-4 col-lg-4 col-md-3 col-sm-3 col-8 ">

                                                    <div class="form-group">

                                                        <select class="select2 form-control form-control-sm" id="malmattaNo"
                                                            name="malmattaNo" style="width: 100%;height: 31px;"
                                                            autofocus="autofocus">
                                                            <option value="0">Select Malmatta No.</option>

                                                            <option value="1">one</option>
                                                            <option value="2">two</option>
                                                            <option value="3">three</option>


                                                        </select>
                                                        <div class="field_label">मालमत्ता क्रमांक  <span
                                                                class="text-danger">*</span></div>

                                                    </div>
                                                    </div>
                                                    <div class="col-xl-1 col-lg-1 col-md-2 col-sm-1 col-4 px-1"
                                                        style="padding-top: 6px;">

                                                        <div class="input-group">

                                                        <button class="btn btn-primary">शोधा </button>
                                                        </div>
                                                </div>

                                                    <div class="col-xl-3 col-lg-3 col-md-5 col-sm-6 col-6 px-1">

                                                        <div class="form-group">


                                                            <input type="text" class="form-control" id="fkId"
                                                                name="fkId" value="">

                                                            <div class="field_label">मालमत्ता धारकाचे नाव <span
                                                                    class="text-danger">*</span></div>
                                                        </div>
                                                    </div>

                                                
                                                    <div class="col-xl-3 col-lg-3 col-md-5 col-sm-6 col-6 px-1">

                                                        <div class="form-group">


                                                            <input type="text" class="form-control" id="fkwifeId"
                                                                name="fkwifeId" value="">

                                                            <div class="field_label">पत्नीचे नाव <span
                                                                    class="text-danger"></span></div>
                                                        </div>
                                                    </div>

                                                    <div class="col-xl-4 col-lg-4 col-md-3 col-sm-3 col-12 ">

                                                        <div class="form-group">

                                                            <select class="select2 form-control form-control-sm"
                                                                id="fkbhogvataId" name="fkbhogvataId"
                                                                style="width: 100%;height: 31px;">
                                                                <option value="0">Select bhogvataName</option>

                                                                <option value="1"> प्रज्वल पाटील</option>
                                                                <option value="2">One</option>
                                                                <option value="3"> One</option>


                                                            </select>
                                                            <div class="field_label">भोगवटा धारकाचे नाव <span
                                                                    class="text-danger"></span></div>

                                                        </div>
                                                    </div>


                                                    <div class="col-xl-3 col-lg-3 col-md-5 col-sm-6 col-6 px-1">

                                                        <div class="form-group">


                                                            <input type="text" class="form-control" id="mobileno"
                                                                name="mobileno" value="">

                                                            <div class="field_label">मोबाईल क्र <span
                                                                    class="text-danger"></span></div>
                                                        </div>
                                                    </div>

                                                    <div class="col-xl-3 col-lg-3 col-md-5 col-sm-6 col-6 px-1">

                                                        <div class="form-group">

                                                            <input type="text" class="form-control" id="citysury"
                                                                name="citysury" value="">

                                                            <div class="field_label">सिटी सर्वे क्रमांक <span
                                                                    class="text-danger"></span></div>
                                                        </div>
                                                    </div>

                                                </div>


                                    <div class="col-md-12 text-right p-5">
                                                <button class="btn btn-primary" type="button" name="btn_save" id="btn_save" style="background-color: #d41574;color:white">
                                                    <i class="fa-regular fa-floppy-disk"></i> Submit
                                                </button>
                                                
                                                <button class="btn btn-primary text-white" type="button" name="cancle" id="cancle">
                                                <a href="<?=base_url() ?>Dash/create" class="text-white">
                                                <i class="fa-solid fa-ban"></i> Cancel</a> </button>

                                    </div>

                </form>
            </div>
            
        </div>
    </div>
                    

    <script  src="https://ComtranseUserPanel.karbhariamruttulyachaha.com/web_resources/dist/js/jquery.min.js"></script>

    <script src="<?=base_url() ?>assets2/js/dataTables.min.js"></script>





    <script  src="<?php echo base_url();?>Assets/js/jquery.min.js"></script>    
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>       


    <script>
        var base_path="<?php echo base_url();?>";
        var a=false;
    $(document).ready(function(){
    $("#btn_save").click(function(){
    if(a==false){
        
        saveperform();
    }
    }); 
    });


    function saveperform() 
    {
        var fkvillagenm=$('#fkvillagenm').val();
        var fkroadId=$('#fkroadId').val();
        var wardno=$('#wardno').val();
        var malmattaNo=$('#malmattaNo').val();
        var fkId=$('#fkId').val();
        var fkwifeId=$('#fkwifeId').val();
        var fkbhogvataId=$('#fkbhogvataId').val();
        var mobileno=$('#mobileno').val();
        var citysury=$('#citysury').val();
        var malmattaId=$('#malmattaId').val();

    
    
        // if(fkvillagenm=="" ||fkvillagenm==0) 

        if(fkvillagenm==0 ||fkroadId==0 ||wardno=="" ||malmattaNo==0 ||fkId==""
        ||fkwifeId=="" ||fkbhogvataId==0 ||mobileno=="" ||citysury=="") 
        {
        
            Swal.fire(
            'Please enter requird field!',
            '',
            'error', 
            )

    }

    
    
            else
            {
                a=true;
                
                $.ajax({
            url:base_path+"Dash/insertDash",
            type: "POST",
            data: $('#Form').serialize(),
            beforeSend: function(){
                $('#btn_save').prop('disabled', true);
                $('#btn_save').html('Loading');
            }, 
            success: function(result) {
            
            $('#btn_save').prop('disabled', false);
            $('#btn_save').html('Data Saved');
            $("#Form").trigger("reset");

            Swal.fire(
                'Data Submitted Successfully!',
                '',
                'success'
                )
            
            a=false;

            }
        });
            }
        }
    

    </script>

                    
                        
        