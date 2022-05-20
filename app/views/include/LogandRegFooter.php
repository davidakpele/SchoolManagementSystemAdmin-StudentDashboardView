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
<script src="<?=ASSETS?>important__stylesheet__file/jquery.jgrowl.js"></script>
<script type="text/javascript" src="<?=ASSETS?>vendor_plugins/DataValidation.js"></script>
<script>
$(function() {
    $('.tooltip').tooltip();	
    $('.tooltip-left').tooltip({ placement: 'left' });	
    $('.tooltip-right').tooltip({ placement: 'right' });	
    $('.tooltip-top').tooltip({ placement: 'top' });	
    $('.tooltip-bottom').tooltip({ placement: 'bottom' });
    $('.popover-left').popover({placement: 'left', trigger: 'hover'});
    $('.popover-right').popover({placement: 'right', trigger: 'hover'});
    $('.popover-top').popover({placement: 'top', trigger: 'hover'});
    $('.popover-bottom').popover({placement: 'bottom', trigger: 'hover'});
    $('.notification').click(function() {
        var $id = $(this).attr('id');
        switch($id) {
            case 'notification-sticky':
                $.jGrowl("Stick this!", { sticky: true });
            break;
            case 'notification-header':
                $.jGrowl("A message with a header", { header: 'Important' });
            break;
            default:
                $.jGrowl("Hello world!");
            break;
        }
    });
});
</script>
</body>
</html>