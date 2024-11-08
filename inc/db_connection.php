<?php
class database{
private $hostname = "localhost";
private $username = "root"; // Mặc định là root
private $password = ""; // Mặc định để trống
private $dbname = "thphone";
private $conn = NULL;
private $result = NULL;
private $rel = NULL;

// Tạo kết nối
public function connect(){
    $this -> conn = new mysqli($this -> hostname, $this -> username, $this -> password, $this -> dbname);
    
// Kiểm tra kết nối
    if(!$this ->conn) {
        echo "Kết nối thất bại";
        exit();
    }
    else {
        mysqli_set_charset($this -> conn, 'utf8');
    }
    return $this -> conn;
}
public function disconnect(){
    if($this ->conn) {
        mysqli_close($this -> conn);
    }
}
// đếm số bản ghi trong danh sách
public function num_rows(){
    if($this -> result) {
        $num = mysqli_num_rows($this-> result);
    }else {
        $num = 0;
    }
    return $num;
}
// phuongw thức lấy dữ liệu (get data)
public function showlist($tblTable){
    $sql = "SELECT * FROM $tblTable";
    $this ->execute($sql);
    if($this -> num_rows() == 0){
        $data = 0; 
    }else {
        while($datas = $this -> getData()){
            $data[] = $datas;
        }
    }
    return $data;
}
// Thực hiện các câu lệnh truy vấn
public function execute($sql){
    $this-> result = $this->conn -> query($sql);
}

// Lấy dữ liệu từ CSDL : 
    public function getData(){
        if($this -> result) {
            $data = mysqli_fetch_assoc($this -> result);
        }else {
            $data = 0;
        }
        return $data;
    }
    // Phương thức thành viên
    public function add($sql) {
        return $this -> execute($sql);
    }
}

?>
