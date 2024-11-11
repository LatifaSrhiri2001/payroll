

<div id="congeChart"></div> 
<script>
   var options = {
    chart: {
        type: 'donut',
        height: 350
    },
    series: @json($congesTotals), 
    labels: @json($congesLabels), 
    plotOptions: {
        pie: {
            donut: {
                size: '80%' 
            }
        }
    },
    colors: ['#0D92F4', '#B9E5E8', '#024CAB'], 
    tooltip: {
        y: {
            formatter: function (val) {
                return val + ' jours'; 
            }
        }
    }
};

var chart = new ApexCharts(document.querySelector("#congeChart"), options);
chart.render(); 
</script>