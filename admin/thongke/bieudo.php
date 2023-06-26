            <div class="bieudo">
                <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
                <div
                id="myChart" style="width:100%; max-width:1200px; height:800px;">
                </div>

                <script>
                google.charts.load('current', {'packages':['corechart']});
                google.charts.setOnLoadCallback(drawChart);

                function drawChart() {
                var data = google.visualization.arrayToDataTable([
                ['Danh mục', 'Số lượng'], 

                <?php 
                    $tongdm = count($listthongke);
                    $i=0;
                    foreach($listthongke as $thongke){
                        if ($i == $tongdm) {
                            $dau  = "";
                        }else{
                            $dau = ",";
                        }
                    extract($thongke);
                    echo "['".$thongke['ten_loai']."',".$thongke['countsp']."]".$dau;
                    $i+=1;
                    }
                ?>

                ]);

                var options = {title:'Thống kê sản phẩm theo danh mục',is3D:true};
                var chart = new google.visualization.PieChart(document.getElementById('myChart'));
                chart.draw(data, options);
                }
                
                </script>
            </div>

            <div class="bieudo2">
                <div id="myChart2" style="width:100%; max-width:1200px; height:800px;"></div>
                <script>
                google.charts.load('current',{packages:['corechart']});
                google.charts.setOnLoadCallback(drawChart);

                function drawChart() {
                // Set Data
                var data = google.visualization.arrayToDataTable([
                    ['Danh mục', 'Số lượng'], 

                    <?php 
                        $tongdm = count($listthongke);
                        $i=0;
                        foreach($listthongke as $thongke){
                            if ($i == $tongdm) {
                                $dau  = "";
                            }else{
                                $dau = ",";
                            }
                        extract($thongke);
                        echo "['".$thongke['ten_loai']."',".$thongke['countsp']."]".$dau;
                        $i+=1;
                        }
                    ?>
                ]);
                // Set Options
                var options = {
                title: 'Thống kê sản phẩm theo danh mục',
                hAxis: {title: 'Danh mục'},
                vAxis: {title: 'Số lượng hàng hóa'},
                legend: 'none'
                };
                // Draw
                var chart = new google.visualization.LineChart(document.getElementById('myChart2'));
                chart.draw(data, options);
                }
                </script>
            </div>
            