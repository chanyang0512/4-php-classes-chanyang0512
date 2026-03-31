<?php
/*
    classes/Customer.php
    고객 관리 클래스
*/
class Customer {
    // 고객의 속성
    public string $first_name;
    public string $last_name;
    public string $email;
    public string $accounts; // 배열?
    private string $password; // 비고개로

    // 메소드
    public function __construct(
        string $first_name = '',
        string $last_name = '',
        string $email = '',
        string $account = '',
        string $password = ''
    ) {
        $this -> first_name = $first_name;        
        $this -> last_name = $last_name;
        $this -> email_name = $email;
        $this -> account_name = $account;
        $this -> password = $password;        
    }

    public function getFullName(): string {
        return $this -> first_name . ' ' . $this -> last_name;
    }

}
?>