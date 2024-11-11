
<div id="genderChart"></div> 
<script>
   var options = {
    chart: {
        type: 'donut',
        height: 350
    },
    series: @json($gendersTotals), 
    labels: @json($gendersLabels), 
    plotOptions: {
        pie: {
            donut: {
                size: '60%' 
            }
        }
    },
    colors: ['#7EA1FF', '#FFB1B1'], 
    
};

var chart = new ApexCharts(document.querySelector("#genderChart"), options);
chart.render(); 
</script>