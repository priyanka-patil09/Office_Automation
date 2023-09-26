<link rel="stylesheet" href="<?=base_url() ?>Assets/css/dataTables.min.css">  

<script src="<?=base_url() ?>Assets/js/jquery-3.7.0.js"></script>


<!-- =============== Left side End ================-->
    <div class="main-content-wrap sidenav-open d-flex flex-column">
        <!-- ============ Body content start ============= -->
<div class="main-content mt-2">
    <div class="separator-breadcrumb border-top"></div>
        <div class="form-row ">
            <div class="col-md-12">
            
                    <div class="card-body p-4">


                        <div class="card-title mb-1 py-1">
                            <h2>&ensp;PRIORITY INFORMATION</h2>
                        </div>

                        <div class="col-md-12 text-right">
                          <a href="<?=base_url() ?>Office/index4"><button class="btn btn-primary" type="button" name="btn_new" id="btn_new" style="background-color: #d41574;color:white">
                          <i class="fa-regular fa-square-plus"></i> Add New
                            </button></a>

                        </div> 


                <div class="card form_card mt-3 p-5">
                                                            
                <table id="table" class="table table-striped table-bordered table-hover">
                    <thead>
                        <tr>
                        <th>Priority Id</th>
                        <th>Priority Name</th>
                      </tr>
                    </thead>

                    <tbody>
                    <?php 
                        
                        foreach($data as $rw=>$value){
           
                
                         echo "<tr>";
                        //  echo  '<td><a href="'.base_url().'admin/Keychain/update/'.$value->keychainId.'"><i class="fas fa-eye" style="font-size: 16px;"></i></a> </td>';
                         echo "<td>".$value->PrioId."</td>";  
                         echo "<td>".$value->PrioName."</td>";
                        
                         
                         echo "</tr>";                        
                     }
                     ?> 

                    </tbody>
                </table>
            


                <!-- <div class="col-md-12 text-right p-5">
                            <button class="btn btn-primary" type="button" name="btn_save" id="btn_save" style="background-color: #d41574;color:white">
                                <i class="fa-regular fa-floppy-disk"></i> Submit
                            </button>
                            
                            <button class="btn btn-primary text-white" type="button" name="cancle" id="cancle">
                            <a href="#" class="text-white">
                            <i class="fa-solid fa-ban"></i> Cancel</a> </button>

                </div>  -->

        
    </div>
    
</div>
</div>



<script  src="<?=base_url() ?>Assets/js/dataTables.min.js"></script>

<script>
new DataTable('#table');
</script>









