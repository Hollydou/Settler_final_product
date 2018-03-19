$(function () {
    //BEGIN PLUGINS DATE RANGE PICKER
    $('input[name="daterangepicker-default"]').daterangepicker();
    $('input[name="daterangepicker-date-time"]').daterangepicker({ timePicker: true, timePickerIncrement: 30, format: 'MM/DD/YYYY h:mm A' });
    $('.reportrange').daterangepicker(
        {
            ranges: {
                'Today': [moment(), moment()],
                'Yesterday': [moment().subtract('days', 1), moment().subtract('days', 1)],
                'Last 7 Days': [moment().subtract('days', 6), moment()],
                'Last 30 Days': [moment().subtract('days', 29), moment()],
                'This Month': [moment().startOf('month'), moment().endOf('month')],
                'Last Month': [moment().subtract('month', 1).startOf('month'), moment().subtract('month', 1).endOf('month')]
            },
            startDate: moment().subtract('days', 29),
            endDate: moment(),
            opens: 'left'
        },
        function(start, end) {
            $('.reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
            $('input[name="datestart"]').val(start.format("YYYY-MM-DD"));
            $('input[name="endstart"]').val(end.format("YYYY-MM-DD"));
        }
    );
    $('.reportrange span').html(moment().subtract('days', 29).format('MMMM D, YYYY') + ' - ' + moment().format('MMMM D, YYYY'));
    //END PLUGINS DATE RANGE PICKER

    //BEGIN PLUGINS DATE PICKER
    $('.datepicker-default').datepicker();
    $('.datepicker-years').datepicker({
        startView: 1,
        minViewMode: 2
    });
    $('.input-daterange').datepicker({
        format: "dd-mm-yyyy"
    });
    $('.datepicker-inline').datepicker({
        format: "dd-mm-yyyy",
        startView: 2,
        minViewMode: 1
    });
    //END PLUGINS DATE PICKER

    //BEGIN PLUGINS DATETIME PICKER
    $('.datetimepicker-default').datetimepicker();
    $('.datetimepicker-disable-date').datetimepicker({
        pickDate: false
    });
    $('.datetimepicker-disable-time').datetimepicker({
        pickTime: false
    });
    $('.datetimepicker-start').datetimepicker();
    $('.datetimepicker-end').datetimepicker();
    $('.datetimepicker-start').on("change.dp",function (e) {
        $('.datetimepicker-end').data("DateTimePicker").setStartDate(e.date);
    });
    $('.datetimepicker-end').on("change.dp",function (e) {
        $('.datetimepicker-start').data("DateTimePicker").setEndDate(e.date);
    });
    //END PLUGINS DATETIME PICKER

    //BEGIN PLUGINS TIME PICKER
    $('.timepicker-default').timepicker();
    $('.timepicker-24hr').timepicker({
        autoclose: true,
        minuteStep: 1,
        showSeconds: true,
        showMeridian: false
    });
    //END PLUGINS TIME PICKER



});
