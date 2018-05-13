<?php
if (!isset($_SESSION["token"])) {include_once ("../../loi404.html");exit();}
?>

<div class="card cach background-container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>Danh sách biểu mẫu</h4>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12">
                            <table id="bang-bieu-mau" class="table table-bordered table-hover">
                                <thead>
                                    <tr style="background:#e9ecef;">
                                        <th class="giua">Mã số</th>
                                        <th class="giua">Tên biểu mẫu</th>
                                        <th class="giua" style="width: 80px;">Tải về</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php
                                while ($row = mysqli_fetch_assoc($bm)){
                                    echo "<tr>";
                                    echo "<th class='giua'>".$row['MABM']."</th>";
                                    echo "<td>".$row['TENBM']."</td>";
                                    if($row['FILE']!=''){
                                        echo "<td class='giua'><a href='".$qlkh['HOSTGOC']."files/".$row['FILE']."'>Tải về</a></td>";
                                    }
                                    else{
                                        echo "<td>Không có file</td>";
                                    }
                                    echo "</tr>";
                                }
                                ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="cach"></div>

<link rel="stylesheet" type="text/css" href="../css/datatables.min.css">
<script src="../js/datatables.min.js" type="text/javascript"></script>
<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript">
    $(document).ready(function(){
        $('#xembieumau').addClass('active');
        $('.tieude').html('Biểu mẫu');
    });
    $(document).ready(function() {
        $('#bang-bieu-mau').DataTable();
    } );
</script>
