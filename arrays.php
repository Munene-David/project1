<?php
//Indexed or numeric array
$colors = ["Black","Green","Yellow"];

print_r($colors);
?>
<br>
<?php
$user = array("Alex","Peter","Ann");
print "<br>";
print $user[2];
?>

<pre>
    <?php print_r($user);?>
</pre>

<?php
$user_data = [
    "fullname"=>"Alex Okama",
    "email"=>"AOkama@yahoo.com",
    "phone"=>"+25456783938"
];
print $user_data["email"];
?>

<pre>
    <?php print_r($user_data); ?>
    $user_data = []
<?php
// Multidimentiaonal arrays
$User_details =[
    "Director"=>array( 
    "Fullname"=>"Ann Okama",
    "Address"=>"Nairobi",
    "Email"=>"AOkama@yahoo.com",
    "Phone"=>[
        "Home"=>"+25412345678",
        "work"=>"+25498765234",
        "Mobile"=>"+2543456789",
    ]
),
    "Secretary"=> array(
        "Fullname"=>"Ann Okama",
        "Address"=>"Nairobi",
        "Email"=>"AOkama@yahoo.com",
        "Phone"=>[
            "Home"=>"+25412345678",
            "work"=>"+25498765234",
            "Mobile"=>"+2543456789",
        ]

        ),
        "Manager"=> array(
            "Fullname"=>"kevin Okama",
            "Address"=>"Nairobi",
            "Email"=>"kOkama@yahoo.com",
            "Phone"=>[
                "Home"=>"+25412345678",
                "work"=>"+25498765234",
                "Mobile"=>"+2543456789",
            ]
    
            ),      
    ];
print $User_details["Secretary"]["Phone"]
?>
<pre>
    <?php print_r($User_details)?>
</pre>