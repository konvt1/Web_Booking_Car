<?php


function cart_insert($machuyenxe,$makn,$mavexe,$ngaydatve,$tong ){

    $conn = connectdb();
  
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  
    
    $sql = "INSERT INTO vexe (machuyenxe , makn , mavexe, ngaydatve, tong) VALUES (?, ?, ?, ?,?)";
    $stmt = $conn->prepare($sql);
  
    
    $stmt->execute([$machuyenxe,$makn,$mavexe,$ngaydatve,$tong ]);
  
  
  
    $conn = null;
    return pdo_execute_id($sql,$machuyenxe,$makn,$mavexe,$ngaydatve,$tong );
  }
  

function viewcart()
{
   
    $tong=0;
    $php_cart = '';
    $i = 1;
    foreach ($_SESSION['giohang'] as $sp) {
        extract($sp);
        $tt = intval($banggia) * intval($soluong);
        $tong+=$tt;
        $php_cart .= '  <tr>
    <td>' . $i . '</td>
    <td>' . $tentuyen . '</td>
    <td>' . $diemdi . '</td>
    <td>' . $diemden . '</td>
    <td>' . $ngaykhoihanh . '</td>
    <td>' . $giokhoihanh . '</td>
    <td>' . $banggia . '</td>
    <td>' . $soluong . '</td>   
    <td>' . $tt . '</td>
    <td><a href="index.php?act=viewcart&delete_index=' . $i . '">Xóa</a></td>
    </tr>';
        $i++;
    
}
    return $php_cart;
}
function get_tong()
{
    $tong = 0;

    foreach ($_SESSION['giohang'] as $sp) {
        extract($sp);
        $tt = intval($banggia) * intval($soluong);
        $tong += $tt;
    }
    return $tong;
}


?>