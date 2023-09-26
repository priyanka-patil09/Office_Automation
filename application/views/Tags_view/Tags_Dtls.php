
    <!-- =============== Left side End ================-->
    <div class="main-content-wrap sidenav-open d-flex flex-column">
        <!-- ============ Body content start ============= -->
        <div class="main-content mt-2">
            <div class="separator-breadcrumb border-top"></div>
            <div class="form-row ">
                <div class="col-md-12">
                    <div class="card-body p-4">
                        <div class="card-title mb-1 py-1">
                            <h2 class="mt-4">&ensp;ADD  TAGS</h2>
                        </div>

                        <form role="form" id="Form" enctype="multipart/form-data" action="" method="post">
                            <div class="card form_card mt-3 p-2">
                                <form action="">
                                    <div class="row">
                                        <div class="col-xl-3 col-lg-3 col-md-5 col-sm-6 col-6 p-1 ml-5 mt-3">
                                            <div class="form-group">
                                               
                                                <div class="field_label">Tags Name<span class="text-danger">*</span>
                                                  
                                                            <input type="text" class="form-control" id="TagNm" name="TagNm"
                                                    value="" style="border-color:black; width: 350px;"placeholder="Enter Tags Name">
                                                </div>

                                            </div>
                                        </div>
                
                                        <div class="col-md-12 text-right">
                                            <button class="btn btn-primary btn1 btn2 bt" type="button" name="btn_save"
                                                id="btn_save" style=" background-image: linear-gradient(to right, #4b6cb7 0%, #182848  51%, #4b6cb7  100%);
                                                        margin: 10px;
                                                        padding: 13px 17px;
                                                        text-align: center;
                                                        text-transform: uppercase;
                                                        transition: 0.5s;
                                                        background-size: 200% auto;
                                                        color: white;            
                                                        box-shadow: 0 0 20px #eee;
                                                        border-radius: 10px;" >
                                               <img width="20" height="20" src="<?= base_url() ?>Assets/images/logo.png" > Submit
                                            </button>
                                            <a href="<?= base_url() ?>Office/index">
                                                <button class="btn btn-primary text-white" type="button" name="cancle"
                                                    id="cancle" style= " background-image: linear-gradient(to right, #348F50 0%, #56B4D3  51%, #348F50  100%);
                                                    margin: 10px;
                                                    padding: 12px 30px;
                                                    text-align: center;
                                                    text-transform: uppercase;
                                                    transition: 0.5s;
                                                    background-size: 200% auto;
                                                    color: white;            
                                                    box-shadow: 0 0 20px #eee;
                                                    border-radius: 10px; color: #fff;">
                                                    <a href="<?= base_url() ?>Office" class="text-white">
                                                    <img width="20" height="20" src="<?= base_url() ?>Assets/images/logo2.png" > Edit</a> </button>
                                            </a>
                                        </div>
                                    </div>
                                </form>
                            </div>

                  
                                    
        

                            <script src="<?php echo base_url(); ?>Assets/js/jquery.min.js"></script>
                            <script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>


                            <script>
                                var base_path = "<?php echo base_url(); ?>";
                                var a = false;
                                $(document).ready(function () {
                                    $("#btn_save").click(function () {
                                        if (a == false) {

                                            saveperform();
                                        }
                                    });
                                });
                                function saveperform() 
                                {
                                    var TagNm = $('#TagNm').val();
                                   
                                    if (TagNm=="") 
                                    {
                                        Swal.fire(

                                            'Please enter required field!',
                                            '',
                                            'error',

                                        )
                                    }
                                    else {
                                        a = true;

                                        $.ajax({
                                            url: base_path + "Office/insertTags",
                                            type: "POST",
                                            data: $('#Form').serialize(),
                                            beforeSend: function () {
                                                $('#btn_save').prop('disabled', true);
                                                $('#btn_save').html('Loading');
                                            },
                                            success: function (result) {

                                                $('#btn_save').prop('disabled', false);
                                                $('#btn_save').html('Saved');
                                                $("#Form").trigger("reset");

                                                Swal.fire(
                                                        
                                                    'Data Submitted Successfully!',
                                                    '',
                                                    'success'
                                                
                                                )
                                                a = false;
                                            }
                                        });
                                    }
                                }
                            </script>