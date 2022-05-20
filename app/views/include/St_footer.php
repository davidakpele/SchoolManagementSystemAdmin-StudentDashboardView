<!-- footer div starts here -->
    <div class="container footer-wrap">
        <div class="row">
            <div class="col-md-6 text-left footer-left pull-left">
                <p style="color:black;">&copy; All Right Reserved</p> 
            </div>
            <div class="col-md-6 text-right footer-right pull-right">
                <p style="color:#f03c02;">Powered by 
                    <a href="#" style="color:#2383ad; text-decoration:underline">MidTech</a>
                </p>     
            </div>
        </div>
    </div>
<!-- footer div ends here -->
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
      $.widget.bridge('uibutton', $.ui.button)
    </script>
    <!-- Bootstrap 4 -->
    <script src="<?=ASSETS?>plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- ChartJS -->
    <script src="<?=ASSETS?>plugins/chart.js/Chart.min.js"></script>
    <!-- Sparkline -->
    <script src="<?=ASSETS?>plugins/sparklines/sparkline.js"></script>
    <!-- Select2 -->
    <script src="<?=ASSETS?>plugins/select2/js/select2.full.min.js"></script>
    <!-- JQVMap -->
    <script src="<?=ASSETS?>plugins/jqvmap/jquery.vmap.min.js"></script>
    <script src="<?=ASSETS?>plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
    <!-- jQuery Knob Chart -->
    <script src="<?=ASSETS?>plugins/jquery-knob/jquery.knob.min.js"></script>
    <!-- daterangepicker -->
    <script src="<?=ASSETS?>plugins/moment/moment.min.js"></script>
    <script src="<?=ASSETS?>plugins/daterangepicker/daterangepicker.js"></script>
    <!-- Tempusdominus Bootstrap 4 -->
    <script src="<?=ASSETS?>plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
    <!-- Summernote -->
    <script src="<?=ASSETS?>plugins/summernote/summernote-bs4.min.js"></script>
    <script src="<?=ASSETS?>plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="<?=ASSETS?>plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="<?=ASSETS?>plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
    <script src="<?=ASSETS?>plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
    <!-- overlayScrollbars -->
    <!-- AdminLTE App --> 
  <script src="<?=ASSETS?>plugins/js/adminlte.js"></script>
<script>
    $(function(){
        $('#search').on('input',function(){
            let keyword = $(this).val().toLocaleString()
            $('#exam-list .exam-item').each(function(){

                if(($(this).text().toLowerCase()).includes(keyword) == true){
                    $(this).toggle(true)
                }else{
                    $(this).toggle(false)
                }
            })
            if($('#exam-list .exam-item:visible').length <= 0){
                $('#noData').removeClass('d-none')
            }else{
                $('#noData').addClass('d-none')
            }
        })
        $('#exam-list .exam-item').click(function(){
            uni_modal("Examination ID :- <b>"+$(this).attr('data-code')+"</b>","<?=ROOT?>Student/ExamModal?id="+$(this).attr('data-code'),"mid-large")
        })
    })
  $(document).ready(function(){
    window.uni_modal = function($title= '', $url='', $size=""){
        start_loader()
        $.ajax({
            url:$url,
            method: 'POST',
            error:err=>{
                console.log()
                alert("An error occured")
            },
            success:function(resp){
                if(resp){
                    $('#uni_modal .modal-title').html($title)
                    $('#uni_modal .modal-body').html(resp)
                    if($size != ''){
                        $('#uni_modal .modal-dialog').addClass($size+'  modal-dialog-centered')
                    }else{
                        $('#uni_modal .modal-dialog').removeAttr("class").addClass("modal-dialog modal-md modal-dialog-centered")
                    }
                    $('#uni_modal').modal({
                      show:true,
                      backdrop:'static',
                      keyboard:false,
                      focus:true
                    })
                    end_loader()
                }
            }
        })
    }
    window._conf = function($msg='',$func='',$params = []){
       $('#confirm_modal #confirm').attr('onclick',$func+"("+$params.join(',')+")")
       $('#confirm_modal .modal-body').html($msg)
       $('#confirm_modal').modal('show')
    }
  })
</script>
</body>
</html>