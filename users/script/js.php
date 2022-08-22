<!-- Mainly scripts -->
<script src="master/js/jquery-3.1.1.min.js"></script>
<script src="master/js/popper.min.js"></script>
<script src="master/js/bootstrap.js"></script>
<script src="master/js/plugins/metisMenu/jquery.metisMenu.js"></script>
<script src="master/js/plugins/slimscroll/jquery.slimscroll.min.js"></script>
<!-- Flot -->
<script src="master/js/plugins/flot/jquery.flot.js"></script>
<script src="master/js/plugins/flot/jquery.flot.tooltip.min.js"></script>
<script src="master/js/plugins/flot/jquery.flot.spline.js"></script>
<script src="master/js/plugins/flot/jquery.flot.resize.js"></script>
<script src="master/js/plugins/flot/jquery.flot.pie.js"></script>
<!-- Peity -->
<script src="master/js/plugins/peity/jquery.peity.min.js"></script>
<script src="master/js/demo/peity-demo.js"></script>
<!-- Custom and plugin javascript -->
<script src="master/js/inspinia.js"></script>
<script src="master/js/plugins/pace/pace.min.js"></script>
<!-- jQuery UI -->
<script src="master/js/plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- GITTER -->
<script src="master/js/plugins/gritter/jquery.gritter.min.js"></script>
<!-- ChartJS-->
<script src="master/js/plugins/chartJs/Chart.min.js"></script>
<!-- Toastr -->
<script src="master/js/plugins/toastr/toastr.min.js"></script>

<script>
    var ctx4 = document.getElementById("doughnutChart2").getContext("2d");
    new Chart(ctx4, {
        type: 'doughnut',
        data: doughnutData,
        options: doughnutOptions
    });
});
</script>