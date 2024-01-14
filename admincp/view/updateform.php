<div class="main">
    <h2>Cập nhat</h2>
    <?php 
    // var_dump($kqone);
    ?>
    <form action="index.php?act=updateform" method="POST">
    <input type="hidden" name="matuyen" value="<?= $kqone[0]['matuyen'] ?>">
        <input type="text" name="tentuyen" id="" value="<?=$kqone[0]['tentuyen']?>">
        <input type="text" name="diemdau" id="" value="<?=$kqone[0]['diemdau']?>">
        <input type="text" name="thoigian" id="" value="<?=$kqone[0]['thoigian']?>">

        <input type="submit" name="themmoi" value="Thêm mới">
    </form>
    <br>
    <table class="table">
        <tr>
    
            <th>Mã tuyến</th>
            <th>Tên tuyến</th>
            <th>Điểm đậu</th>
            <th>Thời gian</th>
            <!-- <th>Hiển thị</th> -->
            <th>Hành động</th>
        </tr>
        <?php
        // var_dump($kq)
        ?>
     
        <?php
        
        
        // if (isset($kq) && (count($kq) > 1)) {
            
            foreach ($kq as $dm) {
                echo '
            <tr>
                
                <td>'.$dm['matuyen'].'</td>
                <td>'.$dm['tentuyen'].'</td>
                <td>'.$dm['diemdau'].'</td>
                <td>'.$dm['thoigian'].'</td>
                
                <td><a href="index.php?act=updateform&id='.$dm['matuyen'].'">Sửa</a> | <a href="index.php?act=deldm&id='.$dm['matuyen'].'">Xóa</a> </td>
            </tr>';
            
            }
            
        //}
        
        ?>

    </table>
</div>
