<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Dashboard v3</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">Dashboard v3</li>
                </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->

<!-- Main content -->

<div class="content-wrapper">
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="col">
                <div class="card card-info">
                    <div class="card-header">
                        <h3 class="card-title">Doanh thu Chart</h3>                        
                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                <i class="fas fa-minus"></i>
                            </button>
                            <button type="button" class="btn btn-tool" data-card-widget="remove">
                                <i class="fas fa-times"></i>
                            </button>
                        </div>
                    </div>
                    <div class="card-body">
                        <div>
                            <label for="">Show by:</label>
                            <select id="selectby">                                                              
                                <option value="year" selected>Year</option>
                                <option value="month">Month</option>                                                              
                            </select>                                
                        </div>           
                        <!-- <div>
                            <label for="">Filter:</label>
                            <input type="date" name="startdate" id="">
                            <input type="date" name="enddate" id="">                                                        
                        </div>              -->
                        <hr>
                        <div class="chart">
                            <canvas id="lineChart"
                                style="min-height: 500px; height: 500px; max-height: 500px; max-width: 100%;"></canvas>
                        </div>
                    </div>
                    <!-- /.card-body -->
                </div>
            </div>

            <div class="col">
                <div class="card card-danger">
                    <div class="card-header">
                        <h3 class="card-title">Pie Chart</h3>

                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                <i class="fas fa-minus"></i>
                            </button>
                            <button type="button" class="btn btn-tool" data-card-widget="remove">
                                <i class="fas fa-times"></i>
                            </button>
                        </div>
                    </div>
                    <div class="card-body">
                        <canvas id="pieChart"
                            style="min-height: 500px; height: 500px; max-height: 500px; max-width: 100%;"></canvas>
                    </div>
                    <!-- /.card-body -->
                </div>
            </div>
            <div class="col">
                <div class="card card-success">
                    <div class="card-header">
                        <h3 class="card-title">Bar Chart</h3>

                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                <i class="fas fa-minus"></i>
                            </button>
                            <button type="button" class="btn btn-tool" data-card-widget="remove">
                                <i class="fas fa-times"></i>
                            </button>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="chart">
                            <canvas id="barChart"
                                style="min-height: 500px; height: 500px; max-height: 500px; max-width: 100%;"></canvas>
                        </div>
                    </div>
                    <!-- /.card-body -->
                </div>
            </div>

            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>



<script src="<?php echo constant('URL') ?>public/assets/plugins/chart.js/Chart.min.js"></script>
<script src="<?php echo constant('URL') ?>public/assets/plugins/jquery/jquery.min.js"></script>
<!-- jQuery -->
<script src="<?php echo constant('URL') ?>public/assets/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="<?php echo constant('URL') ?>public/assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="<?php echo constant('URL') ?>public/assets/plugins/chart.js/Chart.min.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo constant('URL') ?>public/assets/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo constant('URL') ?>public/assets/dist/js/demo.js"></script>
<script>
    $(function () {
        //var areaChartCanvas = $('#areaChart').get(0).getContext('2d')

        var areaChartData = {
            labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July'],
            datasets: [{
                    label: 'Digital Goods',
                    backgroundColor: 'rgba(60,141,188,0.9)',
                    borderColor: 'rgba(60,141,188,0.8)',
                    pointRadius: false,
                    pointColor: '#3b8bba',
                    pointStrokeColor: 'rgba(60,141,188,1)',
                    pointHighlightFill: '#fff',
                    pointHighlightStroke: 'rgba(60,141,188,1)',
                    data: [28, 48, 40, 19, 86, 27, 90]
                },
                {
                    label: 'Electronics',
                    backgroundColor: 'rgba(210, 214, 222, 1)',
                    borderColor: 'rgba(210, 214, 222, 1)',
                    pointRadius: false,
                    pointColor: 'rgba(210, 214, 222, 1)',
                    pointStrokeColor: '#c1c7d1',
                    pointHighlightFill: '#fff',
                    pointHighlightStroke: 'rgba(220,220,220,1)',
                    data: [65, 59, 80, 81, 56, 55, 40]
                },
            ]
        }

        var areaChartOptions = {
            maintainAspectRatio: false,
            responsive: true,
            legend: {
                display: false
            },
            scales: {
                xAxes: [{
                    gridLines: {
                        display: false,
                    }
                }],
                yAxes: [{
                    gridLines: {
                        display: false,
                    }
                }]
            }
        }

        // This will get the first returned node in the jQuery collection.
        // new Chart(areaChartCanvas, {
        //     type: 'line',
        //     data: areaChartData,
        //     options: areaChartOptions
        // })

        //-------------
        //- LINE CHART -
        //--------------
        var lineChartCanvas = $('#lineChart').get(0).getContext('2d')
        var lineChartOptions = $.extend(true, {}, areaChartOptions)
        var lineChartData = $.extend(true, {}, areaChartData)        
        lineChartData.datasets[0].fill = false;
        lineChartData.datasets[1].fill = false;        
        lineChartOptions.datasetFill = false;

        var lineChart = function() {
            new Chart(lineChartCanvas, {
                type: 'line',
                data: lineChartData,
                options: lineChartOptions
            })
        } 
        // lineChart();
        //-------------
        //- DONUT CHART -
        //-------------
        // Get context with jQuery - using jQuery's .get() method.
        //var donutChartCanvas = $('#donutChart').get(0).getContext('2d')
        var donutData = {
            labels: [
                'Chrome',
                'IE',
                'FireFox',
                'Safari',
                'Opera',
                'Navigator',
            ],
            datasets: [{
                data: [700, 500, 400, 600, 300, 100],
                backgroundColor: ['#f56954', '#00a65a', '#f39c12', '#00c0ef', '#3c8dbc', '#d2d6de'],
            }]
        }
        var donutOptions = {
            maintainAspectRatio: false,
            responsive: true,
        }
        //Create pie or douhnut chart
        // You can switch between pie and douhnut using the method below.
        // new Chart(donutChartCanvas, {
        //     type: 'doughnut',
        //     data: donutData,
        //     options: donutOptions
        // })

        //-------------
        //- PIE CHART -
        //-------------
        // Get context with jQuery - using jQuery's .get() method.
        var pieChartCanvas = $('#pieChart').get(0).getContext('2d')
        var pieData = donutData;
        var pieOptions = {
            maintainAspectRatio: false,
            responsive: true,
        }
        //Create pie or douhnut chart
        // You can switch between pie and douhnut using the method below.
        new Chart(pieChartCanvas, {
            type: 'pie',
            data: pieData,
            options: pieOptions
        })

        //-------------
        //- BAR CHART -
        //-------------
        var barChartCanvas = $('#barChart').get(0).getContext('2d')
        var barChartData = $.extend(true, {}, areaChartData)
        var temp0 = areaChartData.datasets[0]
        var temp1 = areaChartData.datasets[1]
        barChartData.datasets[0] = temp1
        barChartData.datasets[1] = temp0

        var barChartOptions = {
            responsive: true,
            maintainAspectRatio: false,
            datasetFill: false
        }

        new Chart(barChartCanvas, {
            type: 'bar',
            data: barChartData,
            options: barChartOptions
        })

        //---------------------
        //- STACKED BAR CHART -
        //---------------------
        //var stackedBarChartCanvas = $('#stackedBarChart').get(0).getContext('2d')
        var stackedBarChartData = $.extend(true, {}, barChartData)

        var stackedBarChartOptions = {
            responsive: true,
            maintainAspectRatio: false,
            scales: {
                xAxes: [{
                    stacked: true,
                }],
                yAxes: [{
                    stacked: true
                }]
            }
        }

        // new Chart(stackedBarChartCanvas, {
        //     type: 'bar',
        //     data: stackedBarChartData,
        //     options: stackedBarChartOptions
        // })                       
        // function getRevenueByYear(arryear, arrtotal) {                        
        //     areaChartData = {
        //         labels: arryear,
        //         datasets: [{
        //                 label: 'Revenue',
        //                 backgroundColor: 'rgba(60,141,188,0.9)',
        //                 borderColor: 'rgba(60,141,188,0.8)',
        //                 pointRadius: false,
        //                 pointColor: '#3b8bba',
        //                 pointStrokeColor: 'rgba(60,141,188,1)',
        //                 pointHighlightFill: '#fff',
        //                 pointHighlightStroke: 'rgba(60,141,188,1)',
        //                 data: arrtotal
        //             },                    
        //         ]
        //     }            
        //     lineChartOptions = $.extend(true, {}, areaChartOptions)
        //     lineChartData = $.extend(true, {}, areaChartData)        
        //     lineChartData.datasets[0].fill = false;                  
        //     lineChartOptions.datasetFill = false;
        //     lineChart();
        // }
        function ShowLineChartBy(bytime) {
            if(bytime === 'year')
            {
                $.ajax({
                    type: "POST",
                    url: '<?php echo constant('URL')?>order/getSortRevenueByYear',
                    // data: {value:value},
                    dataType: "JSON",
                    success: function(data)
                    {
                        data.data.sort(function (a,b){
                            return a.year - b.year;
                        })                                        
                        var arryear = [],arrtotal = [], i=0,j=0;
                        data.data.forEach(element => {                        
                            arryear[i++] = element.year;
                            arrtotal[j++] = element.total;
                        });                        
                        // console.log(arryear);
                        // console.log(arrtotal);
                        areaChartData = {
                            labels: arryear,
                            datasets: [{
                                    label: 'Revenue',
                                    backgroundColor: 'rgba(60,141,188,0.9)',
                                    borderColor: 'rgba(60,141,188,0.8)',
                                    pointRadius: false,
                                    pointColor: '#3b8bba',
                                    pointStrokeColor: 'rgba(60,141,188,1)',
                                    pointHighlightFill: '#fff',
                                    pointHighlightStroke: 'rgba(60,141,188,1)',
                                    data: arrtotal
                                },                                                                                    
                            ]
                        }                                     
                        lineChartOptions = $.extend(true, {}, areaChartOptions)
                        lineChartData = $.extend(true, {}, areaChartData)        
                        lineChartData.datasets[0].fill = false;                        
                        lineChartOptions.datasetFill = false;
                        lineChart();                    
                    }
                });
            }
            else
            {
                $.ajax({
                    type: "POST",
                    url: '<?php echo constant('URL')?>order/getSortRevenueByMonth',
                    // data: {value:value},
                    dataType: "JSON",
                    success: function(data)
                    {                                        
                        var arr = [],i=0;
                        data.forEach(element => {
                            color = random_rgba();                            
                            var arrdata = getdata(element);
                            arr[i++] = {
                                    label: 'Revenue in ' + element[0].year,
                                    backgroundColor: color,
                                    borderColor: color,
                                    pointRadius: false,
                                    pointColor: '#3b8bba',
                                    pointStrokeColor: 'rgba(60,141,188,1)',
                                    pointHighlightFill: '#fff',
                                    pointHighlightStroke: 'rgba(60,141,188,1)',
                                    data: arrdata
                                }                                
                        });                                        
                        // console.log(arryear);
                        // console.log(arrtotal);
                        areaChartData = {
                            labels: ['Jan','Feb','Mar','Apr','May','June','July','Aug','Sep','Oct','Nov','Dec'],
                            datasets: arr
                        }                                   
                        lineChartOptions = $.extend(true, {}, areaChartOptions)
                        lineChartData = $.extend(true, {}, areaChartData)                                
                        var z=0;
                        data.forEach(element => {
                            lineChartData.datasets[z++].fill = false;
                        })                  
                        lineChartOptions.datasetFill = false;
                        lineChart();                    
                    }
                });
            }            
        }
        function getdata(element) {
            element.sort(function(a,b){
                return a.month - b.month;
            });
            var arr = [], i=0;
            element.forEach(element => {
                arr[i++] = element.total;
            });
            return arr;
        }
        function random_rgba() {
            var o = Math.round, r = Math.random, s = 255;
            return 'rgba(' + o(r()*s) + ',' + o(r()*s) + ',' + o(r()*s) + ',0.9)';
        }        
        ShowLineChartBy('year');        
        $(document).on('change', '#selectby', function (e){
            var value = $(e.target).val();                        
            if(value === 'year')
            {
                ShowLineChartBy(value); 
            }
            else
            {
                ShowLineChartBy(value); 
            }   
        });                      
    })
    async function fetchProduct(urlEndpoint) {
        let data;
        try {
            const response = await fetch(urlEndpoint);
            data = await response.json();
            return (data);
        } catch (error) {
            console.log(error);
        }
        // return data.data;
        return data.items || data.results;
    }
    function checkDuplicate(id,columm){
        for(let i=0;i<topArr.length;i++){
            if(topArr[i][columm]==id){
                return 1;
            }
        }
        return 0;
    }
    function checkDuplicate2(id,columm){
        for(let i=0;i<topArr.length;i++){
            if(topArr[i][columm].id==id){
                return 1;
            }
        }
        return 0;
    }
    function getTop(top,sort,columm){
        topArr=[];
        var count = 1;
        for(var i=0;i<sort.length;i++){
            
            if(topArr.length==0){ //add mảng đầu tiên
                topArr.push(sort[i]);
                continue;
            }
            if(checkDuplicate(sort[i][columm],columm)){
                continue;
            }

            //nếu thỏa điều kiện thì push và tăng count 
            topArr.push(sort[i]);
            count+=1;
            console.log(count)
            if(count==top){ //nếu đủ thì dừng vòng lặp
                break; 
            }
        }
        return topArr;
    }
    function getTop2(top,sort,columm){
        topArr=[];
        var count = 1;
        for(var i=0;i<sort.length;i++){
            
            if(topArr.length==0){ //add mảng đầu tiên
                topArr.push(sort[i]);
                continue;
            }
            if(checkDuplicate2(sort[i][columm].id,columm)){
                continue;
            }

            //nếu thỏa điều kiện thì push và tăng count 
            topArr.push(sort[i]);
            count+=1;
            console.log(count)
            if(count==top){ //nếu đủ thì dừng vòng lặp
                break; 
            }
        }
        return topArr;
    }
    (async () => {
        const products = await fetchProduct(URL_API_PRODUCT);
        sort = await sortSold(products);

    })();
    async function sortSold(arrayproducts) {
        return new Promise(resolve => {
            setTimeout(function () {
                var products = arrayproducts.data;     
                products.sort(function (a, b) {
                    return b.sold - a.sold;
                });     
                resolve(products);
            });
        });
    }
</script>