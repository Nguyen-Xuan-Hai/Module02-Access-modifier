<?php
class Application {//Cach 1 : chúng ta không khởi tạo đối tượng của lớp Application sử dụng constructor mà sử dụng một phương thức static là getInstance(). Biến $instance giúp cho chúng ta trỏ đến một đối tượng duy nhất của Application, và cũng chỉ có một đối tượng duy nhất được sinh ra. Ở những lần sau, khi gọi phương thức getInstance() thì đối tượng có sẵn đó sẽ được trả về mà không tạo thêm đối tượng mới.


    private static $instance;

    public static function getInstance() {
        if(self::$instance === null) {
            self::$instance = new Application();
        }
        return self::$instance;
    }
}

$app1 = Application::getInstance();
$app2 = Application::getInstance();



//class Application {//Cach 2 :Ở đoạn mã đã cải tiến này, hàm __construct() đã được khai báo là private, do đó sẽ không được phép khởi tạo đối tượng sử dụng constructor nữa, mà bắt buộc phải sử dụng phương thức getInstance().
//    private static $instance;
//
//    private function __construct()
//    {
//    }
//
//    public static function getInstance() {
//        if(self::$instance === null) {
//            self::$instance = new Application();
//            echo 'alo';
//        }
//        return self::$instance;
//    }
//}
//
//$app1 = Application::getInstance();
//$app2 = Application::getInstance();
//$app3 = new Application(); //Error