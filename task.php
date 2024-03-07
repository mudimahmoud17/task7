<?php



$users=[
    [
        "id"=>"1",
        "fname"=>"Mahmoud",
        "lname"=>"Samir",
        "salary"=>"3000",
        "email"=>"1@gmail.com",
        "isActive"=>"true",
    ],
    [
        "id"=>"2",
        "fname"=>"Ahmed",
        "lname"=>"Samir",
        "salary"=>"5000",
        "email"=>"2@gmail.com",
        "isActive"=>"false",
    ],
    [
        "id"=>"3",
        "fname"=>"Mahmoud",
        "lname"=>"Ahmed",
        "salary"=>"10000",
        "email"=>"3@gmail.com",
        "isActive"=>"true",
    ],
    [
        "id"=>"4",
        "fname"=>"Mahmoud",
        "lname"=>"Samir1",
        "salary"=>"13000",
        "email"=>"4@gmail.com",
        "isActive"=>"true",
    ],
    [
        "id"=>"5",
        "fname"=>"Mahmoud",
        "lname"=>"Samir2",
        "salary"=>"6000",
        "email"=>"5@gmail.com",
        "isActive"=>"true",
    ],
    [
        "id"=>"6",
        "fname"=>"Mahmoud",
        "lname"=>"Samir3",
        "salary"=>"2000",
        "email"=>"6@gmail.com",
        "isActive"=>"true",
    ],
    [
        "id"=>"7",
        "fname"=>"Mahmoud",
        "lname"=>"Samir4",
        "salary"=>"9000",
        "email"=>"7@gmail.com",
        "isActive"=>"true",
    ],
    [
        "id"=>"8",
        "fname"=>"Mahmoud",
        "lname"=>"Samir5",
        "salary"=>"8000",
        "email"=>"8@gmail.com",
        "isActive"=>"true",
    ],
    [
        "id"=>"9",
        "fname"=>"Mahmoud",
        "lname"=>"Samir6",
        "salary"=>"15000",
        "email"=>"9@gmail.com",
        "isActive"=>"true",
    ],
    [
        "id"=>"10",
        "fname"=>"Mahmoud",
        "lname"=>"Samir7",
        "salary"=>"20000",
        "email"=>"10@gmail.com",
        "isActive"=>"true",
    ],
    
    ];
    

function knownjob($salary){
    if($salary <= 5000){
        return "Junior";
    } elseif ($salary <= 10000) {
        return "Senior";
    } else {
        return "Tech Lead";
    }
}


session_start();


foreach ($users as $key => $value) {
    $title = knownjob($value['salary']);

    echo "First Name: " . $value['fname'] . ", Last Name: " . $value['lname'] . ", Salary: " . $value['salary'] . ", Email: " . $value['email'] . ", Active: " . $value['isActive'] . ", Job Title: " . $title . "<br>";
    
    if ($value['isActive'] === "true") {
        
        $_SESSION['active'][] = $value['id'];
    }

    
   

}

echo "Active user IDs: " . implode(", ", $_SESSION['active']) . "<br>";


foreach ($users as $key => $value) {
    
    if ($value['isActive'] === "true") {
        echo $value['fname'] . " " . $value['lname'] . " Active<br>";
        
    }


}
