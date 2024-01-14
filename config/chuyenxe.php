
<?php
    function getall_chuyenxe()
    {
        $conn = connectdb();
        $sql = "SELECT * FROM chuyenxe";
        
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        
        return $result;
    }
    // function getall_chuyenxe()
    // {
    //   $conn = connectdb();
    //   $sql="SELECT * FROM chuyenxe ORDER BY id DESC";
    //   $stmt = $conn->prepare("SELECT * FROM  chuyenxe");
    //   $stmt->execute();
    //   $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    //   $kq = $stmt->fetchAll();
    //   return $kq;
    // }
?>