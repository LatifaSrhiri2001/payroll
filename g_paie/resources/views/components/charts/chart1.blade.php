
    

 <div id="line-chart"></div>

<script>
    // Récupérer les données 
    var data = @json($deductionsData);
    var dates = data.map(item => item.date);
    var amounts = data.map(item => item.montant);

  
    var options = {
        chart: {
            type: 'area',
            height: 350,
            width: '100%',

            toolbar: {
                    show: false 
                }
        },
        series: [{
            name: 'Montant des déductions',
            data: amounts
        }],
        xaxis: {
            categories: dates,
            title: { text: 'Dates' }
        },
        yaxis: {
            title: { text: 'Montant' }
        },
        fill: {
                type: "gradient",
                gradient: {
                    shadeIntensity: 1,
                    opacityFrom: 1,
                    opacityTo: 1,
                    stops: [0, 90, 100]
                }
            },
            grid: {
                show: false
            },
            markers: {
                size: 0
            },
            dataLabels: {
                enabled: false
            },
        stroke: {
            curve: 'smooth'
        }
    };


    var chart = new ApexCharts(document.querySelector("#line-chart"), options);
    chart.render();
</script>

