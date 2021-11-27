<?php
    $Metrics = new Metrics;
?>
<script>
      
        var options = {
            series: [{
            data: [
              <?php $return = $Metrics->graphics(); ?>
            ]
          }],
          chart: {
              toolbar: {
                show: false,
              },
            id: 'area-datetime',
            type: 'area',
            height: 350,
            zoom: {
              autoScaleYaxis: true
            },
            foreColor: '#ccc',
            fontFamily: 'Poppins, sans-serif'
          },
          stroke: {
            curve: 'smooth',
            colors: ['#9b04be'],
            width: 1,
          },
          annotations: {
            yaxis: [{
              y: 30,
              borderColor: '#999',
              label: {
                show: true,
                text: 'Support',
                style: {
                  color: "#fff",
                  background: '#2e2e3a'
                }
              }
            }]
          },
          dataLabels: {
            enabled: false
          },
          markers: {
            size: 0,
            style: 'hollow',
          },
          xaxis: {
            tickAmount: 1,
          },
          fill: {
            type: 'gradient',
            colors: ['#bc0ecf','#25252e'],
          },
          grid: {
            show: true,
            borderColor: 'rgba(255, 255, 255, 0.171)',
            strokeDashArray: 0,
            position: 'back',
          },
          };
  
          var chart = new ApexCharts(document.querySelector("#chart-timeline"), options);
          chart.render();
        
        
          var resetCssClasses = function(activeEl) {
          var els = document.querySelectorAll('button')
          Array.prototype.forEach.call(els, function(el) {
            el.classList.remove('active')
          })
        
          activeEl.target.classList.add('active')
        }
        
</script>