<?php
function personalinfoe ($id){
    echo "<div class='uploadimage'>";
    echo "<form method= 'post' action='home.php' enctype='multipart/form-data'>";
    $dbimage = mysqli_connect('localhost','newuser','password','medicaldatabase');
    $sql = "SELECT * FROM population WHERE username = '$id'";
    $result = mysqli_query($dbimage, $sql);
    $today = date("Y-m-d");
    while($row = mysqli_fetch_array($result)){
        echo "<label>Personal Information</label>";
        echo "<div id= 'img_div'>";
        echo "Name:";
        echo "<p>".$row['name']."</p>";
        echo "<br>";
        echo "Surname:";
        echo "<p>".$row['surname']."</p>";
        echo "<br>";
        echo "Phone Number:";
        echo "<p>".$row['phonenumber']."</p>";
        echo "<br>";
        echo "Address:";
        echo "<p>".$row['street']."</p>";
        echo "<p>".$row['suburb']."</p>";
        echo "<p>".$row['city']."</p>";
        echo "<br>";
        echo "Date of Birth:";
        echo "<p>".$row['dob']."</p>";
        $dob = $row['dob'];
        echo "<br>";
        echo "Age:";
        $diff = date_diff(date_create($dob),date_create($today));
        echo "<p>".$diff->format('%y');"</p>";
        echo "<br>";
        echo "<br>";
        echo "Gender:";
        echo "<p>".$row['gender']."</p>";
        echo "<br>";
        echo "Race:";
        echo "<p>".$row['race']."</p>";
        echo "<br>";
        echo "Email:";
        echo "<p>".$row['email']."</p>";
        echo "<br>";
        echo "<p><a href='editpage.php?id=" .$row['username']."'> Edit Information</a></p>";
        echo "</div>";
            
        }
}
function personalinfobigboss($id){
    echo "<div class='uploadimage'>";
    echo "<form method= 'post' action='home.php' enctype='multipart/form-data'>";
    $dbimage = mysqli_connect('localhost','newuser','password','medicaldatabase');
    $sql = "SELECT * FROM population WHERE username = '$id'";
    $result = mysqli_query($dbimage, $sql);
    $today = date("Y-m-d");
    while($row = mysqli_fetch_array($result)){
        echo "<label>Personal Information</label>";
        echo "<p><a href='medicalhistory.php?id= $row[username]; 'style= 'color: purple;'>View Medical History</a></p>";
        echo "<div id= 'img_div'>";
        echo "Name:";
        echo "<p>".$row['name']."</p>";
        echo "<br>";
        echo "Surname:";
        echo "<p>".$row['surname']."</p>";
        echo "<br>";
        echo "Phone Number:";
        echo "<p>".$row['phonenumber']."</p>";
        echo "<br>";
        echo "Address:";
        echo "<p>".$row['street']."</p>";
        echo "<p>".$row['suburb']."</p>";
        echo "<p>".$row['city']."</p>";
        echo "<br>";
        echo "Date of Birth:";
        echo "<p>".$row['dob']."</p>";
        $dob = $row['dob'];
        echo "<br>";
        echo "Age:";
        $diff = date_diff(date_create($dob),date_create($today));
        echo "<p>".$diff->format('%y');"</p>";
        echo "<br>";
        echo "<br>";
        echo "Gender:";
        echo "<p>".$row['gender']."</p>";
        echo "<br>";
        echo "Race:";
        echo "<p>".$row['race']."</p>";
        echo "<br>";
        echo "Role in Society:";
        echo "<p>".$row['occupation']."</p>";
        echo "<br>";
        echo "Email:";
        echo "<p>".$row['email']."</p>";
        echo "<br>";
        echo "</div>";
        }  
}
function bigboss($id){
    searchbigboss($id);
    personalinfoe($id);
    medicalaid($id);
}
function medicalaid($id){
    echo "<div class='uploadimage'>";
    echo "<form method= 'post' enctype='multipart/form-data'>";
    $dbimage = mysqli_connect('localhost','newuser','password','medicaldatabase');
    $sql = "SELECT * FROM population WHERE username = '$id'";
    $result = mysqli_query($dbimage, $sql);
    while($row = mysqli_fetch_array($result)){
        echo "<label>Personal Medical Aid Information</label>";
        echo "<div id= 'img_div'>";
        echo "Medical:";
        echo "<p>".$row['medical']."</p>";
        echo "<br>";
        echo "Membership Number:";
        echo "<p>".$row['membershipnumber']."</p>";
        echo "<br>";
        echo "Medical Plan:";
        echo "<p>".$row['medicalplan']."</p>";
        echo "<br>";
        echo "</div>";
        }
}
function diseases($id){
    echo "<div class='uploadimage'>";
    echo "<form method= 'post' action='home.php' enctype='multipart/form-data'>";
    $dbimage = mysqli_connect('localhost','newuser','password','medicaldatabase');
    $sql = "SELECT * FROM population WHERE username = '$id'";
    $result = mysqli_query($dbimage, $sql);
    while($row = mysqli_fetch_array($result)){
        echo "<label>Communicable Diseases</label>";
        echo "<div id= 'img_div'>";
        echo "Diseases:";
        echo "<p>".$row['diseases']."</p>";
        echo "<br>";
        echo "</div>";
        }
}
function personalinfo ($id){
    echo "<div class='uploadimage'>";
    echo "<form method= 'post' action='home.php' enctype='multipart/form-data'>";
    $dbimage = mysqli_connect('localhost','newuser','password','medicaldatabase');
    $sql = "SELECT * FROM population WHERE username = '$id'";
    $result = mysqli_query($dbimage, $sql);
    $today = date("Y-m-d");
    while($row = mysqli_fetch_array($result)){
        $idfromdata = $row['username'];
        if ($idfromdata == $id){
        echo "<label>Personal Information</label>";
        echo "<p><a href='medicalhistory.php?id= $row[username]; 'style= 'color: purple;'>View Medical History</a></p>";
        echo "<div id= 'img_div'>";
        echo "Name:";
        echo "<p>".$row['name']."</p>";
        echo "<br>";
        echo "Surname:";
        echo "<p>".$row['surname']."</p>";
        echo "<br>";
        echo "Phone Number:";
        echo "<p>".$row['phonenumber']."</p>";
        echo "<br>";
        echo "Address:";
        echo "<p>".$row['street']."</p>";
        echo "<p>".$row['suburb']."</p>";
        echo "<p>".$row['city']."</p>";
        echo "<br>";
        echo "Date of Birth:";
        echo "<p>".$row['dob']."</p>";
        $dob = $row['dob'];
        echo "<br>";
        echo "Age:";
        $diff = date_diff(date_create($dob),date_create($today));
        echo "<p>".$diff->format('%y');"</p>";
        echo "<br>";
        echo "<br>";
        echo "Gender:";
        echo "<p>".$row['gender']."</p>";
        echo "<br>";
        echo "Race:";
        echo "<p>".$row['race']."</p>";
        echo "<br>";
        echo "Email:";
        echo "<p>".$row['email']."</p>";
        echo "<br>";
        echo "</div>";
        }else{
            echo "No entry";
        }
        }
}
function pharmacists ($id){
    searchpharmacists($id);
    personalinfoe($id); 
    medicalaid($id); 
}
function pathology($id){
    searchpathology($id);
    personalinfoe($id);
    medicalaid($id);

}
function government ($id){
    ?>
    <p><a href='covidstatus.php?id=<?php echo $id; ?>'style= "color: Blue;">GET COVID-19 STATS</a></p>
    <?php
    search($id);
    certificates();
    personalinfoe($id);
    medicalaid($id);
}      
function medical($id){
    searchmedical($id);
    personalinfoe($id);
} 
function patient ($id){
    personalinfoe($id);
    medicalaid($id);
}
function search($id){
    echo "<div class = 'catagories'>";
    echo "<form action='checkaccessgovernment.php' method='post' class = 'catform'>";
    echo "<label>SEARCH FOR PATIENT IN POPULATION</label>";
    echo "<center>Search for patient in population using identification number (ID): <INPUT TYPE = 'TEXT' NAME='Search' VALUE =''></center>";
    echo "<input type='hidden' name = 'iduser' value = '$id'> ";
    echo "<center><INPUT TYPE = 'Submit' Name = 'Search2' VALUE = 'Search'></center>";
    echo "</form>";  
    echo "</div>";
}
function searchbigboss($id){
    echo "<div class = 'catagories'>";
    echo "<form action='bigboss.php' method='post' class = 'catform'>";
    echo "<label>SEARCH FOR PATIENT IN POPULATION</label>";
    echo "<center>Search for patient in population using identification number (ID): <INPUT TYPE = 'TEXT' NAME='idpat' VALUE =''></center>";
    echo "<input type='hidden' name = 'iduser' value = '$id'> ";
    echo "<center><INPUT TYPE = 'Submit' Name = 'Search2' VALUE = 'Search'></center>";
    echo "</form>";  
    echo "</div>";

}
function searchmedical($iduser){
    echo "<div class = 'catagories'>";
    echo "<form action='checkaccess.php' method='post' class = 'catform'>";
    echo "<label>SEARCH FOR PATIENT IN POPULATION</label>";
    echo "<input type='hidden' name = 'iduser' value = '$iduser'> ";
    echo "<center>Search for patient in population using identification number (ID): <INPUT TYPE = 'TEXT' NAME='Searchmed' VALUE =''></center>";
    echo "<center><INPUT TYPE = 'Submit' Name = 'Search2' VALUE = 'Search'></center>";
    echo "</form>";  
    echo "</div>";

}
function searchpharmacists($iduser){
    echo "<div class = 'catagories'>";
    echo "<form action='checkaccessphar.php' method='post' class = 'catform'>";
    echo "<label>SEARCH FOR PATIENT IN POPULATION</label>";
    echo "<input type='hidden' name = 'iduser' value = '$iduser'> ";
    echo "<center>Search for patient in population using identification number (ID): <INPUT TYPE = 'TEXT' NAME='Searchpar' VALUE =''></center>";
    echo "<center><INPUT TYPE = 'Submit' Name = 'Search2' VALUE = 'Search'></center>";
    echo "</form>";  
    echo "</div>";
}
function searchpathology($iduser){
    echo "<div class = 'catagories'>";
    echo "<form action='checkpath.php' method='post' class = 'catform'>";
    echo "<label>SEARCH FOR PATIENT IN POPULATION</label>";
    echo "<input type='hidden' name = 'iduser' value = '$iduser'> ";
    echo "<center>Search for patient in population using identification number (ID): <INPUT TYPE = 'TEXT' NAME='Searchpath' VALUE =''></center>";
    echo "<center><INPUT TYPE = 'Submit' Name = 'Search2' VALUE = 'Search'></center>";
    echo "</form>";  
    echo "</div>"; 
}
function searchtokill (){
    echo "<div class = 'catagories'>";
    echo "<form action='death.php' method='post' class = 'catform'>";
    echo "<label>SEARCH FOR PATIENT IN POPULATION</label>";
    echo "<center>Search for patient in population using identification number (ID): <INPUT TYPE = 'TEXT' NAME='Searchhr' VALUE =''></center>";
    echo "<center><INPUT TYPE = 'Submit' Name = 'Search2' VALUE = 'Search'></center>";
    echo "</form>";  
    echo "</div>";

}
function certificates (){
    echo "<div class = 'catagories'>";
    echo "<form action='birth.php' method='post' class = 'catform'>";
    echo "<label>ADD A NEW BORN TO THE POPULATION</label>";
    echo "<center> <INPUT TYPE = 'Submit' Name = 'birth' VALUE = 'Birth Certificate'></center>";
    echo "</form>";  

    echo "<form action='death.php' method='post' class = 'catform'>";
    echo "<label>REMOVE SOMEONE FROM THE POPULATION</label>";
    echo "<center><INPUT TYPE = 'Submit' Name = 'death' VALUE = 'Death Certificate'></center>";
    echo "</form>";  
    echo "</div>";
}
function selectwerk($id){
    $dbsearch = mysqli_connect('localhost','newuser','password','medicaldatabase');
    $sql = "SELECT * FROM population WHERE username = '$id'";
    $result = mysqli_query($dbsearch, $sql);
    while($row = mysqli_fetch_array($result)){
    $werk = $row['occupation'];
    }
    switch ($werk){
        case "Pharmacists":
            pharmacists($id);
        break;
        case "Patient":
            patient($id);
        break;
        case "Government":
            government($id);
        break;
        case "Medical":
            medical($id);
        break;
        case "Pathology":
            pathology($id);
        break;
        case "BIGBOSS":
            bigboss($id);
        break;
        }
}
function tablegenerator ($id) {
    $dbmedical = mysqli_connect('localhost','newuser','password','medicaldatabase');
    $sql = "SELECT * FROM medicalhistory WHERE id = '$id'";
    $result = mysqli_query($dbmedical, $sql);
    ?>
    <style type="text/css">
    table {
        border-collapse: collapse;
        width: 100%;
        font-family: monospace;
        font-size: 25px;
        text-align: center;
        border: 5px solid black;
    }
    th {
        background-color: #5f9ea0;
        color: white;
        border: 5px solid black;
    }
    td{
        border: 5px solid black;
    }
    tr:nth-child(even){
        background-color: violet;
        border: 5px solid black;
    }
    </style>
    <div  class = "tablecontent">
    <table id = "table">
        <tr>
            <th>Consultation Date</th>
            <th>Physician</th>
            <th>Practice Number</th>
            <th>Symptoms</th>
            <th>Lab Tests</th>
            <th>Lab Results</th>
            <th>ICD-10 CODE</th>
            <th>Prescription</th>
            <th>Number of Repetitions</th>
        </tr>
    <?php
    $dbmedical = mysqli_connect('localhost','newuser','password','medicaldatabase');
    $sql = "SELECT * FROM medicalhistory WHERE id = '$id'";
    $result = mysqli_query($dbmedical, $sql);
    while($row = mysqli_fetch_assoc($result)){
        echo"<tr><td>".$row['condate']."</td><td>" .$row['physician']."</td><td>" .$row['practicenumber']."</td><td>" .$row['symptoms']."</td><td>" .$row['labtests']."</td><td>" 
        .$row['labresults']."</td><td>" .$row['icd10code']."</td><td>" .$row['prescription']."</td><td>" .$row['numberofrep']."</td></tr>";
    }
    echo "</table>";
}
function tablegeneratorphar($idpat,$iduser){
    $dbmedical = mysqli_connect('localhost','newuser','password','medicaldatabase');
    $sql = "SELECT * FROM medicalhistory WHERE id = '$idpat'";
    $result = mysqli_query($dbmedical, $sql);
    ?>
    <style type="text/css">
    table {
        border-collapse: collapse;
        width: 100%;
        font-family: monospace;
        font-size: 25px;
        text-align: center;
        border: 5px solid black;
    }
    th {
        background-color: #5f9ea0;
        color: white;
        border: 5px solid black;
    }
    td{
        border: 5px solid black;
    }
    tr:nth-child(even){
        background-color: violet;
        border: 5px solid black;
    }
    </style>
    <div  class = "tablecontent">
    <table id = "table">
        <tr>
            <th>Consultation Date</th>
            <th>Physician</th>
            <th>Practice Number</th>
            <th>Symptoms</th>
            <th>Lab Tests</th>
            <th>Lab Results</th>
            <th>ICD-10 CODE</th>
            <th>Prescription</th>
            <th>Number of Repetitions</th>
        </tr>
    <?php
    $dbmedical = mysqli_connect('localhost','newuser','password','medicaldatabase');
    $sql = "SELECT * FROM medicalhistory WHERE id = '$idpat'";
    $result = mysqli_query($dbmedical, $sql);
    while($row = mysqli_fetch_assoc($result)){
        $check = $row['numberofrep'];
        echo ($check > 0) ? "<tr><td>".$row['condate']."</td><td>" .$row['physician']."</td><td>" .$row['practicenumber']."</td><td>" .$row['symptoms']."</td><td>" .$row['labtests']."</td><td>" 
        .$row['labresults']."</td><td>" .$row['icd10code']."</td><td>" .$row['prescription']."</td><td>" .$row['numberofrep']."<form id = 'tableform' method='post'><input type='hidden' name = 'date' value = '$row[condate]'>
        <input type='hidden' name = 'id' value = '$iduser'><input type='hidden' name = 'idpat' value = '$row[id]'><br> <input type='number' name='data'><br><input type='submit' name='add' value='Add' />
        <input type='submit' name='sub'  value='Subtract'  /></form></td></tr>" : "<tr><td>".$row['condate']."</td><td>" .$row['physician']."</td><td>" .$row['practicenumber']."</td><td>" .$row['symptoms']."</td><td>" .$row['labtests']."</td><td>" 
        .$row['labresults']."</td><td>" .$row['icd10code']."</td><td>" .$row['prescription']."</td><td>" .$row['numberofrep']."<br><b>Presciption is done!</b></td></tr>";
    }
    echo "</table>";
    medicalaid($idpat);
    if(isset($_POST['add'])) { 
        add(); 
    }
    if(isset($_POST['sub'])) {
        subtract(); 
    }
}
function tablegeneratorpath($idpat,$iduser){
    $dbmedical = mysqli_connect('localhost','newuser','password','medicaldatabase');
    $sql = "SELECT * FROM medicalhistory WHERE id = '$idpat'";
    $result = mysqli_query($dbmedical, $sql);
    ?>
    <style type="text/css">
    table {
        border-collapse: collapse;
        width: 100%;
        font-family: monospace;
        font-size: 25px;
        text-align: center;
        border: 5px solid black;
    }
    th {
        background-color: #5f9ea0;
        color: white;
        border: 5px solid black;
    }
    td{
        border: 5px solid black;
    }
    tr:nth-child(even){
        background-color: violet;
        border: 5px solid black;
    }
    </style>
    <div  class = "tablecontent">
    <table id = "table">
        <tr>
            <th>Consultation Date</th>
            <th>Lab Tests</th>
            <th>Lab Results</th>
        </tr>
    <?php
    $dbmedical = mysqli_connect('localhost','newuser','password','medicaldatabase');
    $sql = "SELECT * FROM medicalhistory WHERE id = '$idpat'";
    $result = mysqli_query($dbmedical, $sql);
    while($row = mysqli_fetch_assoc($result)){
        $check = $row['numberofrep'];
        echo "<tr><td>".$row['condate']."</td><td>" .$row['labtests']."</td><td>".$row['labresults']."</td></tr>";
    }
    echo "</table>";
}
function check($id){
    $dbcheck = mysqli_connect('localhost','newuser','password','medicaldatabase');
    $sql = "SELECT * FROM population WHERE username = '$id'";
    $result = mysqli_query($dbcheck, $sql);
    while($row = mysqli_fetch_array($result)){
        $werk = $row['occupation'];
    }
    if($werk == "Government"){
        $allow = 0;
    }   
    if($werk == "Patient"){
        $allow = 1;
    }
}
function unemployededit ($id){
    echo "<div class='uploadimage'>";
    echo "<label>Change Personal Information</label>";
    
    $dbimage = mysqli_connect('localhost','newuser','password','medicaldatabase');
        $sql = "SELECT * FROM population WHERE username = '$id'";
        $result = mysqli_query($dbimage, $sql);
        while($row = mysqli_fetch_array($result)){
            echo "<div id= 'img_div'>";
            echo "<form method='post'>";
            echo "Name:";
            echo "<p>".$row['name']."</p>";
            echo "<br>";
            echo "Surname:";
            echo "<p>".$row['surname']."</p>";
            echo "<br>";
            echo "Phone Number:";
            echo "<p>Current: ".$row['phonenumber']."</p>";
            echo "New: <input type='text' name='phone'> ";
            echo "<br>";
            echo "<br>";
            echo "Address:";
            echo "<p>Current Street: ".$row['street']."</p>";
            echo "New Street: <input type='text' name='street'> ";
            echo "<p>Current Suburb: ".$row['suburb']."</p>";
            echo "New Suburb: <input type='text' name='suburb'> ";
            echo "<p>Current City: ".$row['city']."</p>";
            echo "New City<input type='text' name='city'> ";
            echo "<br>";
            echo "<br>";
            echo "Date of Birth:";
            echo "<p>".$row['dob']."</p>";
            echo "<br>";
            echo "Gender:";
            echo "<p>Current Gender: ".$row['gender']."</p>";
            echo "New: <input type='text' name='gender'> ";
            echo "<br>";
            echo "<br>";
            echo "Race:";
            echo "<p>Current: ".$row['race']."</p>";
            echo "New: <input type='text' name='race'> ";
            echo "<br>";
            echo "<br>";
            echo "Email:";
            echo "<p>Current: ".$row['email']."</p>";
            echo "New: <input type='text' name='email'> ";
            echo "<br>";
            echo "<br>";
            echo "<input type='hidden' name = 'id' value = '$row[username]'> ";
            echo "<input type='submit' name='add' class='button' value='Submit' />"; 
            echo "</form>";
            echo "</div>";
            
    }
    if(isset($_POST['add'])) { 
        addnew(); 
    }
}
function addnew() {
    $id = $_POST['id'];
    $phone = $_POST['phone'];
    $street = $_POST['street'];
    $suburb = $_POST['suburb'];
    $city = $_POST['city'];
    $email = $_POST['email'];
    $race = $_POST['race'];
    $gender = $_POST['gender'];
    echo "$id";
    $dbedit = mysqli_connect('localhost','newuser','password','medicaldatabase');
    $sql = "SELECT * FROM population WHERE username = '$id'";
    $result = mysqli_query($dbedit, $sql);
    $row = mysqli_fetch_array($result);
    
    if (empty($phone) || strlen((string)$phone) != 10){
        $phone = $row['phonenumber'];
    }
    if (empty($street)){
        $street = $row['street'];
    }
    if (empty($suburb)){
        $suburb = $row['suburb'];
    }
    if (empty($city)){
        $city = $row['city'];
    }
    if (empty($email)){
        $email = $row['email'];
    }
    if (empty($race)){
        $race = $row['race'];
    }
    if (empty($gender)){
        $gender = $row['gender'];
    }
    $sql1 = "UPDATE population SET phonenumber = '$phone', email = '$email', street = '$street', suburb = '$suburb', city = '$city', race= '$race', gender = '$gender' WHERE username = '$id'";
    if(mysqli_query($dbedit, $sql1)){
        echo "Records added successfully.";
        ?>
        <script type="text/javascript">
        window.location.href = 'home.php';
        </script>
        <?php
      } else{
     echo "ERROR: Could not able to execute $sql1. " . mysqli_error($db);
    }

}
function addnewmed(){
    $iduser = $_POST['iduser'];
    $idpat = $_POST['idpat'];
    $physician = $_POST['drvan'];
    $practicenumber = $_POST['pracnum'];
    $symptoms = $_POST['symp'];
    $prescription = $_POST['pres'];
    $numberofrepetitions = $_POST['numofrep'];
    $patientname = displayname($idpat);
    $labtests = $_POST['labtest'];
    $labresults = "";
    $icd10code = $_POST['icd10code'];
    $today = date('Y-m-d');
    $dbedit = mysqli_connect('localhost','newuser','password','medicaldatabase');
    $sql = "INSERT INTO medicalhistory (id,condate,physician,practicenumber,symptoms,labtests,labresults,icd10code,prescription,numberofrep)
    VALUES('$idpat','$today','$physician','$practicenumber', '$symptoms','$labtests','$labresults','$icd10code','$prescription','$numberofrepetitions')";
    if(mysqli_query($dbedit, $sql)){
        echo "Records added successfully.";
        ?>
        <script type="text/javascript">
        window.location.href = 'home.php';
        </script>
        <?php
     echo "ERROR: Could not able to execute $sql. " . mysqli_error($dbedit);
    }
    

}
function updatemed(){

    $iduser = $_POST['iduser'];
    $idpat = $_POST['idpat'];
    $physician = $_POST['drvan'];
    $practicenumber = $_POST['pracnum'];
    $condate =  $_POST['condate'];
    $symptoms = $_POST['symp'];
    $prescription = $_POST['pres'];
    $numberofrepetitions = $_POST['numofrep'];
    $patientname = displayname($idpat);
    $labtests = $_POST['labtest'];
    $labresults = "";
    $icd10code = $_POST['icd10code'];
    $today = date('Y-m-d');
    $dbedit = mysqli_connect('localhost','newuser','password','medicaldatabase');
    $sql = "SELECT * FROM medicalhistory WHERE id = '$idpat' and condate = '$condate'";
    $result = mysqli_query($dbedit, $sql);
    $row = mysqli_fetch_array($result);
    
    if (empty($practicenumber)){
        $practicenumber = $row['practicenumber'];
    }
    if (empty($symptoms)){
        $symptoms = $row['symptoms'];
    }
    if (empty($labtests)){
        $labtests = $row['labtests'];
    }
    if (empty($prescription)){
        $prescription = $row['prescription'];
    }
    if (empty($numberofrepetitions)){
        $numberofrepetitions = $row['numberofrep'];
    }
    if (empty($icd10code)){
        $icd10code = $row['icd10code'];
    }
    $sql1 = "UPDATE medicalhistory SET condate = '$condate', physician = '$physician', practicenumber = '$practicenumber', symptoms = '$symptoms', labtests = '$labtests', icd10code = '$icd10code', prescription= '$prescription', numberofrep = '$numberofrepetitions' WHERE id = '$idpat' and condate = '$condate'";
    if(mysqli_query($dbedit, $sql1)){
        echo "Records added successfully.";
        ?>
        <script type="text/javascript">
        window.location.href = 'home.php';
        </script>
        <?php
      } else{
     echo "ERROR: Could not able to execute $sql1. " . mysqli_error($dbedit);
    }
}
function birthcertificate(){
    echo "<div class='uploadimage'>";
    echo "<label>Add baby info to population</label>";
    $today = date("Y-m-d");
    echo "<div id= 'img_div'>";
    echo "<form method='post'>";

    echo "Identification Number:";
    echo "<br>";
    echo "New: <input type='text' name='id'> ";
    echo "<br>";
    echo "<br>";
    echo "Name:";
    echo "<br>";
    echo "New: <input type='text' name='name'> ";
    echo "<br>";
    echo "<br>";
    echo "Surname:";
    echo "<br>";
    echo "New: <input type='text' name='surname'> ";
    echo "<br>";
    echo "<br>";
    echo "Phone Number:";
    echo "<br>";
    echo "New: <input type='text' name='phonenumber'> ";
    echo "<br>";
    echo "<br>";
    echo "Address:";
    echo "<br>";
    echo "Street: <input type='text' name='street'> ";
    echo "<br>";
    echo "Suburb: <input type='text' name='suburb'> ";
    echo "<br>";
    echo "City: <input type='text' name='city'> ";
    echo "<br>";
    echo "<br>";
    echo "Date of Birth:";
    echo "<br>";
    echo "<p>$today</p>";
    echo "<br>";
    echo "Gender:";
    echo "<br>";
    echo "New: <input type='text' name='gender'> ";
    echo "<br>";
    echo "<br>";
    echo "Race:";
    echo "<br>";
    echo "New: <input type='text' name='race'> ";
    echo "<br>";
    echo "<br>";
    echo "Email:";
    echo "<br>";
    echo "New: <input type='text' name='email'> ";
    echo "<br>";
    echo "<br>";
    echo "Disease:";
    echo "<br>";
    echo "New: <input type='text' name='diseases'> ";
    echo "<br>";
    echo "<br>";
    echo "<br>";
    echo "<input type='submit' name='addbaby' class='button' value='Submit' />"; 
    echo "</form>";
    echo "</div>";
    if (isset($_POST['addbaby'])){
    $id = $_POST['id'];

    $name = $_POST['name'];
    $surname = $_POST['surname'];
    $password = md5($surname.'123');
    $phonenumber = $_POST['phonenumber'];
    $street = $_POST['street'];
    $subburb = $_POST['suburb'];
    $city = $_POST['city'];
    $dob = $today;
    $gender = $_POST['gender'];
    $race = $_POST['race'];
    $email = $_POST['email'];
    $diseases = $_POST['diseases'];
    $medical = "";
    $occupation = "Patient";
    $membershipnumber = "";
    $medicalplan = "";
    $authdoc = 0;
    $authgov = 0;
    $authphar = 0;
    $authpath = 0;
    $dbbirth = mysqli_connect('localhost','newuser','password','medicaldatabase');
    $sql = "INSERT INTO population (username,password,surname,name,dob,gender,race,occupation,street,suburb,city,phonenumber,email,medical,membershipnumber,medicalplan,diseases,authdoc,authpath,authgov,authphar)
    VALUES('$id','$password','$surname', '$name','$dob','$gender','$race','$occupation', '$street','$subburb','$city', '$phonenumber','$email','$medical','$membershipnumber','$medicalplan','$diseases','$authdoc','$authpath','$authgov','$authphar')";
    if(mysqli_query($dbbirth, $sql)){
         echo "Records added successfully.";
    } else{
         echo "ERROR: Could not able to execute $sql. " . mysqli_error($dbbirth);
    }
    }
}
function deathcertificate(){
    searchtokill();
    if (isset($_POST['Searchhr'])){
        $id = $_POST['Searchhr'];
    echo "<div class='uploadimage'>";
    $dbimage = mysqli_connect('localhost','newuser','password','medicaldatabase');
    $sql = "SELECT * FROM population WHERE username = '$id'";
    $result = mysqli_query($dbimage, $sql);
    $today = date("Y-m-d");
    while($row = mysqli_fetch_array($result)){
        echo "<center><label>Personal Information</label></center>";
        echo "<center><p><a href='medicalhistory.php?id= $row[username]; 'style= 'color: purple;'>View Medical History</a></p></center>";
        echo "<div id= 'img_div'>";
        echo "<form method='post'>";
        echo "Name:";
        echo "<p>".$row['name']."</p>";
        echo "<br>";
        echo "Surname:";
        echo "<p>".$row['surname']."</p>";
        echo "<br>";
        echo "Phone Number:";
        echo "<p>".$row['phonenumber']."</p>";
        echo "<br>";
        echo "Address:";
        echo "<p>".$row['street']."</p>";
        echo "<p>".$row['suburb']."</p>";
        echo "<p>".$row['city']."</p>";
        echo "<br>";
        echo "Date of Birth:";
        echo "<p>".$row['dob']."</p>";
        $dob = $row['dob'];
        echo "<br>";
        echo "Age:";
        $diff = date_diff(date_create($dob),date_create($today));
        echo "<p>".$diff->format('%y');"</p>";
        echo "<br>";
        echo "<br>";
        echo "Gender:";
        echo "<p>".$row['gender']."</p>";
        echo "<br>";
        echo "Race:";
        echo "<p>".$row['race']."</p>";
        echo "<br>";
        echo "Email:";
        echo "<p>".$row['email']."</p>";
        echo "<br>";
        echo "<br>";
        echo "<br>";
        echo "<input type='hidden' name = 'id' value = '$row[username]'> ";
        echo "<input type='submit' name='kill' class='button' value='Submit' />"; 
        echo "</form>";
        echo "</div>";
    }
    }
    if (isset($_POST['kill'])){
        $id = $_POST['id'];
        $dbbirth = mysqli_connect('localhost','newuser','password','medicaldatabase');
        $sql = "DELETE FROM population WHERE username = '$id'";
        if(mysqli_query($dbbirth, $sql)){
             echo "Records deleted successfully.";
        } else{
             echo "ERROR: Could not able to execute $sql. " . mysqli_error($dbbirth);
        }
        }
}
function check21 ($id){
    $dbcheck = mysqli_connect('localhost','newuser','password','medicaldatabase');
    $sql = "SELECT * FROM population WHERE username = '$id'";
    $result = mysqli_query($dbcheck, $sql);
    while($row = mysqli_fetch_array($result)){
        $dob = $row['dob'];
        $today = date("Y-m-d");
        $diff = date_diff(date_create($dob),date_create($today));
        $age = $diff->format('%y');

    }
    return $age;
}
function displayname($id){
    $dbcheck = mysqli_connect('localhost','newuser','password','medicaldatabase');
    $sql = "SELECT * FROM population WHERE username = '$id'";
    $result = mysqli_query($dbcheck, $sql);
    while($row = mysqli_fetch_array($result)){
        echo "<p>Name of Patient: <strong>".$row['name']."</strong> <strong>".$row['surname']."</strong> </p>";
    } 
}
function addmedicalhistory($idpat,$iduser){

    echo "<div class='uploadimage'>";
    echo "<label>Add new medical history</label><br><b><label style = 'color:red'>**Must Be ENTERED</label></b>";
    $dbimage = mysqli_connect('localhost','newuser','password','medicaldatabase');
    $sql = "SELECT * FROM population WHERE username = '$iduser'";
    $result = mysqli_query($dbimage, $sql);
    while($row = mysqli_fetch_array($result)){
            echo "<div id= 'img_div'>";
            echo "<form method='post'>";
            echo "Consulatation Date:";
            echo "<br>";
            $today = date('Y-m-d');
            echo "$today";
            echo "<br>";
            echo "<br>";
            echo "Physician:";
            echo "<br>";
            $van = $row['surname'];
            $drvan = "Dr. $van";
            echo "$drvan";
            echo "<br>";
            echo "<br>";
            echo "Practice Number:<b style='color:red'>**</b>";
            echo "<br>";
            echo "<input type='text' name='pracnum'> ";
            echo "<br>";
            echo "<br>";
            echo "Symptoms:<b style='color:red'>**</b>";
            echo "<br>";
            echo "<input type='text' name='symp'> ";
            echo "<br>";
            echo "<br>";
            echo "Lab Test:<b style='color:red'>**</b>";
            echo "<br>";
            echo "<input type='text' name='labtest'> ";
            echo "<br>";
            echo "<br>";
            echo "ICD-10 CODE:<b style='color:red'>**</b>";
            echo "<br>";
            echo "<input type='text' name='icd10code'> ";
            echo "<br>";
            echo "<br>";
            echo "Prescription:<b style='color:red'>**</b>";
            echo "<br>";
            echo "<input type='text' name='pres'> ";
            echo "<br>";
            echo "<br>";
            echo "Number of Repetitions:<b style='color:red'>**</b>";
            echo "<br>";
            echo "<input type='text' name='numofrep'> ";
            echo "<br>";
            echo "<br>";
            echo "<br>";
            echo "<br>";
            echo "<input type='hidden' name = 'drvan' value = '$drvan'> ";
            echo "<input type='hidden' name = 'idpat' value = '$idpat'> ";
            echo "<input type='hidden' name = 'iduser' value = '$row[username]'> ";
            echo "<input type='submit' name='addmed' class='button' value='Submit' />"; 
            echo "</form>";
            echo "</div>";
    }     
    echo "<div class='uploadimage'>";
    echo "<label>Update medical history</label><br><b><label style = 'color:red'>**Must Be ENTERED</label></b>";
    $dbimage = mysqli_connect('localhost','newuser','password','medicaldatabase');
    $sql = "SELECT * FROM population WHERE username = '$iduser'";
    $result = mysqli_query($dbimage, $sql);
    while($row = mysqli_fetch_array($result)){
            echo "<div id= 'img_div'>";
            echo "<form method='post'>";
            echo "Consulatation Date:<b style='color:red'>**</b>";
            echo "<br>";
            echo "<input type='text' name='condate'> ";
            echo "<br>";
            echo "<br>";
            echo "Physician:";
            echo "<br>";
            $van = $row['surname'];
            $drvan = "Dr. $van";
            echo "$drvan";
            echo "<br>";
            echo "<br>";
            echo "Practice Number:<b style='color:red'>**</b>";
            echo "<br>";
            echo "<input type='text' name='pracnum'> ";
            echo "<br>";
            echo "<br>";
            echo "Symptoms:<b style='color:red'>**</b>";
            echo "<br>";
            echo "<input type='text' name='symp'> ";
            echo "<br>";
            echo "<br>";
            echo "Lab Test:<b style='color:red'>**</b>";
            echo "<br>";
            echo "<input type='text' name='labtest'> ";
            echo "<br>";
            echo "<br>";
            echo "ICD-10 CODE:<b style='color:red'>**</b>";
            echo "<br>";
            echo "<input type='text' name='icd10code'> ";
            echo "<br>";
            echo "<br>";
            echo "Prescription:<b style='color:red'>**</b>";
            echo "<br>";
            echo "<input type='text' name='pres'> ";
            echo "<br>";
            echo "<br>";
            echo "Number of Repetitions:<b style='color:red'>**</b>";
            echo "<br>";
            echo "<input type='text' name='numofrep'> ";
            echo "<br>";
            echo "<br>";
            echo "<br>";
            echo "<br>";
            echo "<input type='hidden' name = 'drvan' value = '$drvan'> ";
            echo "<input type='hidden' name = 'idpat' value = '$idpat'> ";
            echo "<input type='hidden' name = 'iduser' value = '$row[username]'> ";
            echo "<input type='submit' name='updatemed' class='button' value='Update' />"; 
            echo "</form>";
            echo "</div>";
    }  
    echo "<div class='uploadimage'>";
    echo "<label>Update persons communicable disease</label><br><b><label style = 'color:red'>**Must Be ENTERED</label></b>";
        echo "<div id= 'img_div'>";
        echo "<form method='post'>";
        echo "<br>";
        echo "Disease:<b style='color:red'>**</b>";
        echo "<br>";
        echo "<input type='text' name='disease'> ";
        echo "<br>";
        echo "<br>";
        echo "<br>";
        echo "<br>";
        echo "<input type='hidden' name = 'drvan' value = '$iduser'> ";
        echo "<input type='hidden' name = 'idpat' value = '$idpat'> ";
        echo "<input type='submit' name='updatedisease' class='button' value='Update' />"; 
        echo "</form>";
        echo "</div>";
    
    if(isset($_POST['addmed'])) { 
       addnewmed(); 
    }
    if(isset($_POST['updatemed'])) { 
        updatemed(); 
     }
     if(isset($_POST['updatedisease'])) { 
        updatediseases(); 
     }
}
function updatepathology($idpat,$iduser){

    echo "<label>Update Lab Results</label><br><b><label style = 'color:red'>**Must Be ENTERED</label></b>";
    echo "<div id= 'img_div'>";
    echo "<form method='post'>";
    echo "Consulatation Date:<b style='color:red'>**</b>";
    echo "<br>";
    echo "<input type='text' name='condate'> ";
    echo "<br>";
    echo "<br>";
    echo "Lab Test:";
    echo "<br>";
    echo "<input type='text' name='labtest'> ";
    echo "<br>";
    echo "<br>";
    echo "Lab Results:";
    echo "<br>";
    echo "<input type='text' name='labresults'> ";
    echo "<br>";
    echo "<br>";
    echo "<br>";
    echo "<br>";
    echo "<input type='hidden' name = 'idpat' value = '$idpat'> ";
    echo "<input type='hidden' name = 'iduser' value = '$iduser'> ";
    echo "<input type='submit' name = 'updatepath' value = 'Upload'> ";
    echo "</form>";
    echo "</div>";
    if(isset($_POST['updatepath']) ) { 
       addupdatepathology(); 
    }
}
function updatediseases(){
    $idpat = $_POST['idpat'];
    $disease = $_POST['disease'];
    $dbedit = mysqli_connect('localhost','newuser','password','medicaldatabase');
    $sql = "SELECT * FROM population WHERE username = '$idpat'";
    $result = mysqli_query($dbedit, $sql);
    $row = mysqli_fetch_array($result);
    
    if (empty($disease)){
        $disease = $row['diseases'];
    }

    $sql1 = "UPDATE population SET diseases = '$disease' WHERE username = '$idpat' ";
    if(mysqli_query($dbedit, $sql1)){
        echo "Records added successfully.";
        ?>
        <script type="text/javascript">
        window.location.href = 'home.php';
        </script>
        <?php
      } else{
     echo "ERROR: Could not able to execute $sql1. " . mysqli_error($dbedit);
    }

}
function addupdatepathology(){
    $iduser = $_POST['iduser'];
    $idpat = $_POST['idpat'];
    $condate =  $_POST['condate'];
    $labtests = $_POST['labtest'];
    $labresults = $_POST['labresults'];
    $dbedit = mysqli_connect('localhost','newuser','password','medicaldatabase');
    $sql = "SELECT * FROM medicalhistory WHERE id = '$idpat' and condate = '$condate'";
    $result = mysqli_query($dbedit, $sql);
    $row = mysqli_fetch_array($result);
    if (empty($labtests)){
        $labtests = $row['labtests'];
    }
    if (empty($labresults)){
        $labresults = $row['labresults'];
    }
    $sql1 = "UPDATE medicalhistory SET condate = '$condate', labtests = '$labtests', labresults = '$labresults' WHERE (id = '$idpat' and condate = '$condate') ";
    if(mysqli_query($dbedit, $sql1)){
        echo "Records added successfully.";
        ?>
        <script type="text/javascript">
        window.location.href = 'home.php';
        </script>
        <?php
      } else{
     echo "ERROR: Could not able to execute $sql1. " . mysqli_error($dbedit);
    }

   
}
function addmedicalbutton ($id){
    echo "<div class = 'catagories'>";
    echo "<form action='medicalupdate.php' method='post' class = 'catform'>";
    echo "<label>ADD Add medical history to a patirnt</label>";
    echo "<input type='hidden' name = 'iduser' value = '$id'> ";
    echo "<center> <INPUT TYPE = 'Submit' Name = 'medicaladd' VALUE = 'Birth Certificate'></center>";
    echo "</form>";  

}
function premissionmedical($idpat){
    $dbimage = mysqli_connect('localhost','newuser','password','medicaldatabase');
    $sql = "SELECT * FROM population WHERE username = '$idpat'";
    $result = mysqli_query($dbimage, $sql);
    while($row = mysqli_fetch_array($result)){
        $authdoc = $row['authdoc'];
    }
    if($authdoc == 1){
        return true;
    }else{
        return false;
    }
}
function premissionpathology($idpat){
    $dbimage = mysqli_connect('localhost','newuser','password','medicaldatabase');
    $sql = "SELECT * FROM population WHERE username = '$idpat'";
    $result = mysqli_query($dbimage, $sql);
    while($row = mysqli_fetch_array($result)){
        $authdoc = $row['authpath'];
    }
    if($authdoc == 1){
        return true;
    }else{
        return false;
    }
}
function premissionpharmacist($idpat){
    $dbimage = mysqli_connect('localhost','newuser','password','medicaldatabase');
    $sql = "SELECT * FROM population WHERE username = '$idpat'";
    $result = mysqli_query($dbimage, $sql);
    while($row = mysqli_fetch_array($result)){
        $authdoc = $row['authphar'];
    }
    if($authdoc == 1){
        return true;
    }else{
        return false;
    }
}
function premissiongovernment($idpat){
    $dbimage = mysqli_connect('localhost','newuser','password','medicaldatabase');
    $sql = "SELECT * FROM population WHERE username = '$idpat'";
    $result = mysqli_query($dbimage, $sql);
    while($row = mysqli_fetch_array($result)){
        $authdoc = $row['authgov'];
    }
    if($authdoc == 1){
        return true;
    }else{
        return false;
    }
}
function add() { 
    $adddata = $_POST['data'];
    $idpat = $_POST['idpat'];
    $date = $_POST['date'];
    $id = $_POST['id'];
    $dbdata = mysqli_connect('localhost','newuser','password','medicaldatabase');
    $sql = "UPDATE medicalhistory SET numberofrep = numberofrep  + $adddata WHERE id = '$idpat' AND condate = '$date'";
    if(mysqli_query($dbdata, $sql)){
        echo "Records added successfully.";
        ?>
        <script type="text/javascript">
        window.location.href = 'home.php';
        </script>
        <?php
      } else{
     echo "ERROR: Could not able to execute $sql. " . mysqli_error($dbdata);
    }
    
}
function subtract() { 
    $adddata = $_POST['data'];
    $idpat = $_POST['idpat'];
    $date = $_POST['date'];
    $id = $_POST['id'];
    $dbdata = mysqli_connect('localhost','newuser','password','medicaldatabase');
    $sql = "UPDATE medicalhistory SET numberofrep = numberofrep  - $adddata WHERE id = '$idpat' AND condate = '$date'";
    if(mysqli_query($dbdata, $sql)){
        echo "Records added successfully.";
        ?>
        <script type="text/javascript">
        window.location.href = 'home.php';
        </script>
        <?php
      } else{
     echo "ERROR: Could not able to execute $sql. " . mysqli_error($dbdata);
    }

} 
function checkboxcheck($id){
    ?>
    <?php
    $dbcheck = mysqli_connect('localhost','newuser','password','medicaldatabase');
    $sql = "SELECT * FROM population WHERE username = '$id'";
    $result = mysqli_query($dbcheck, $sql);
    while($row = mysqli_fetch_array($result)){
        $dockercc = $row['authdoc'];
        $governmentcc =  $row['authgov'];
        $pathologistcc =  $row['authpath'];
        $pharmacistscc =  $row['authphar'];
    }
    ?>
    <form method = "post">
    <p>Who has the authority?</p>
    <input type="checkbox" name="dokter" value="1" <?php if($dockercc == 1) echo "checked='checked'"; ?> />
    <label> DOCTER</label><br>
    <input type="checkbox" name="government" value="1" <?php if($governmentcc == 1) echo "checked='checked'"; ?>/>
    <label> GOVERMENT</label><br>
    <input type="checkbox" name="pathologist" value="1" <?php if($pathologistcc == 1) echo "checked='checked'"; ?>/>
    <label>Pathologist</label><br>
    <input type="checkbox" name="pharmacists" value="1" <?php if($pharmacistscc == 1) echo "checked='checked'"; ?>/>
    <label>Pharmacists</label><br>
    <input type='submit' name='aut' class='button' value='Submit Selection' />
    </div>
    </form>
    </div>
 

    <?php
    $db = mysqli_connect('localhost','newuser','password','medicaldatabase');
    if(isset($_POST['aut'])){

    if(isset($_POST['dokter'])){
    $dockerc = $_POST['dokter'];
    $sql = "UPDATE population SET authdoc = '$dockerc' WHERE username= '$id'";
    mysqli_query($db, $sql);
    }else{
    $dockerc = 0;
    $sql = "UPDATE population SET authdoc = '$dockerc' WHERE username= '$id'";
    mysqli_query($db, $sql); 
    }

    if(isset($_POST['government'])){
    $governmentc = $_POST['government'];
    $sql = "UPDATE population SET authgov = '$governmentc' WHERE username= '$id'";
    mysqli_query($db, $sql);
    }else{
    $governmentc = 0;
    $sql = "UPDATE population SET authgov = '$governmentc' WHERE username= '$id'";
    mysqli_query($db, $sql); 
    }

    if(isset($_POST['pathologist'])){
    $pathologistc = $_POST['pathologist'];
    $sql = "UPDATE population SET authpath = '$pathologistc' WHERE username= '$id'";
    mysqli_query($db, $sql);
    }else{
    $pathologistc = 0;
    $sql = "UPDATE population SET authpath = '$pathologistc' WHERE username= '$id'";
    mysqli_query($db, $sql); 
    }
    if(isset($_POST['pharmacists'])){
        $pharmacistsc = $_POST['pharmacists'];
        $sql = "UPDATE population SET authphar = '$pharmacistsc' WHERE username= '$id'";
        mysqli_query($db, $sql);
        }else{
        $pharmacistsc = 0;
        $sql = "UPDATE population SET authphar = '$pharmacistsc' WHERE username= '$id'";
        mysqli_query($db, $sql); 
        }
    header("Refresh:0");
    }

}
function covidnumber(){
    $dbcheck = mysqli_connect('localhost','newuser','password','medicaldatabase');
    $bloemfontein = "Bloemfontein";
    $covid19 = "Covid-19";
    $sql = "SELECT COUNT(*) FROM population WHERE (suburb = '$bloemfontein' OR city ='$bloemfontein') AND (diseases = '$covid19') ";
    $result = mysqli_query($dbcheck, $sql);
    $nbloem = mysqli_fetch_array($result);

    $kroonstad = "Kroonstad";
    $sql = "SELECT COUNT(*) FROM population WHERE (suburb = '$kroonstad' or city ='$kroonstad') AND (diseases = '$covid19')";
    $result = mysqli_query($dbcheck, $sql);
    $nkroon = mysqli_fetch_array($result);

    $welkom = "Welkom";
    $sql = "SELECT COUNT(*) FROM population WHERE (suburb = '$welkom' or city ='$welkom') AND (diseases = '$covid19')";
    $result = mysqli_query($dbcheck, $sql);
    $nwelkom = mysqli_fetch_array($result);

    $bethlehem = "Bethlehem";
    $sql = "SELECT COUNT(*) FROM population WHERE (suburb = '$bethlehem' or city ='$bethlehem') AND (diseases = '$covid19') ";
    $result = mysqli_query($dbcheck, $sql);
    $nbethlehem = mysqli_fetch_array($result);

    $upington = "Upington";
    $sql = "SELECT COUNT(*) FROM population WHERE (suburb = '$upington' or city ='$upington') AND (diseases = '$covid19') ";
    $result = mysqli_query($dbcheck, $sql);
    $nupington = mysqli_fetch_array($result);

    $pofadder = "Pofadder";
    $sql = "SELECT COUNT(*) FROM population WHERE (suburb = '$pofadder' or city ='$pofadder') AND (diseases = '$covid19')";
    $result = mysqli_query($dbcheck, $sql);
    $npofadder = mysqli_fetch_array($result);

    $springbok = "Springbok";
    $sql = "SELECT COUNT(*) FROM population WHERE (suburb = '$springbok' or city ='$springbok') AND (diseases = '$covid19')";
    $result = mysqli_query($dbcheck, $sql);
    $nspringbok = mysqli_fetch_array($result);

    $kuruman = "Kuruman";
    $sql = "SELECT COUNT(*) FROM population WHERE (suburb = '$kuruman' or city ='$kuruman') AND (diseases = '$covid19')";
    $result = mysqli_query($dbcheck, $sql);
    $nkuruman = mysqli_fetch_array($result);

    $britstown = "Britstown";
    $sql = "SELECT COUNT(*) FROM population WHERE (suburb = '$britstown' or city ='$britstown') AND (diseases = '$covid19')";
    $result = mysqli_query($dbcheck, $sql);
    $nbritstown = mysqli_fetch_array($result);

    $hanover = "Hanover";
    $sql = "SELECT COUNT(*) FROM population WHERE (suburb = '$hanover' or city ='$hanover') AND (diseases = '$covid19')";
    $result = mysqli_query($dbcheck, $sql);
    $nhanover = mysqli_fetch_array($result);

    $kimberley = "Kimberley";
    $sql = "SELECT COUNT(*) FROM population WHERE (suburb = '$kimberley' or city ='$kimberley') AND (diseases = '$covid19')";
    $result = mysqli_query($dbcheck, $sql);
    $nkimberley = mysqli_fetch_array($result);


    $vryburg = "Vryburg";
    $sql = "SELECT COUNT(*) FROM population WHERE (suburb = '$vryburg' or city ='$vryburg') AND (diseases = '$covid19')";
    $result = mysqli_query($dbcheck, $sql);
    $nvryburg = mysqli_fetch_array($result);

    $potch = "Potchefstroom";
    $sql = "SELECT COUNT(*) FROM population WHERE (suburb = '$potch' or city ='$potch') AND (diseases = '$covid19')";
    $result = mysqli_query($dbcheck, $sql);
    $npotch = mysqli_fetch_array($result);

    $klerksdorp = "Klerksdorp";
    $sql = "SELECT COUNT(*) FROM population WHERE (suburb = '$klerksdorp' or city ='$klerksdorp') AND (diseases = '$covid19')";
    $result = mysqli_query($dbcheck, $sql);
    $nklerksdorp = mysqli_fetch_array($result);


    $mahikeng = "Mahikeng";
    $sql = "SELECT COUNT(*) FROM population WHERE (suburb = '$mahikeng' or city ='$mahikeng') AND (diseases = '$covid19')";
    $result = mysqli_query($dbcheck, $sql);
    $nmahikeng = mysqli_fetch_array($result);

    $zeerust = "Zeerust";
    $sql = "SELECT COUNT(*) FROM population WHERE (suburb = '$zeerust' or city ='$zeerust') AND (diseases = '$covid19')";
    $result = mysqli_query($dbcheck, $sql);
    $nzeerust = mysqli_fetch_array($result);

    $rustenburg = "Rustenburg";
    $sql = "SELECT COUNT(*) FROM population WHERE (suburb = '$rustenburg' or city ='$rustenburg') AND (diseases = '$covid19')";
    $result = mysqli_query($dbcheck, $sql);
    $nrustenburg = mysqli_fetch_array($result);

    $krugersdorp = "Krugersdorp";
    $sql = "SELECT COUNT(*) FROM population WHERE (suburb = '$krugersdorp' or city ='$krugersdorp') AND (diseases = '$covid19')";
    $result = mysqli_query($dbcheck, $sql);
    $nkrugersdorp = mysqli_fetch_array($result);

    $joburg = "Johannesburg";
    $sql = "SELECT COUNT(*) FROM population WHERE (suburb = '$joburg' or city ='$joburg') AND (diseases = '$covid19')";
    $result = mysqli_query($dbcheck, $sql);
    $njoburg = mysqli_fetch_array($result);

    $pretoria = "Pretoria";
    $sql = "SELECT COUNT(*) FROM population WHERE (suburb = '$pretoria' or city ='$pretoria') AND (diseases = '$covid19')";
    $result = mysqli_query($dbcheck, $sql);
    $npretoria = mysqli_fetch_array($result);

    $randfontein = "Randfontein";
    $sql = "SELECT COUNT(*) FROM population WHERE (suburb = '$randfontein' or city ='$randfontein') AND (diseases = '$covid19')";
    $result = mysqli_query($dbcheck, $sql);
    $nrandfontein = mysqli_fetch_array($result);

    $bela = "Bela-bela";
    $sql = "SELECT COUNT(*) FROM population WHERE (suburb = '$bela' or city ='$bela') AND (diseases = '$covid19')";
    $result = mysqli_query($dbcheck, $sql);
    $nbela = mysqli_fetch_array($result);

    $plokwane = "Plokwane";
    $sql = "SELECT COUNT(*) FROM population WHERE (suburb = '$plokwane' or city ='$plokwane') AND (diseases = '$covid19')";
    $result = mysqli_query($dbcheck, $sql);
    $npolokwane = mysqli_fetch_array($result);

    $musina = "Musina";
    $sql = "SELECT COUNT(*) FROM population WHERE (suburb = '$musina' or city ='$musina') AND (diseases = '$covid19')";
    $result = mysqli_query($dbcheck, $sql);
    $nmusina = mysqli_fetch_array($result);

    $nelspruit = "Nelspruit";
    $sql = "SELECT COUNT(*) FROM population WHERE (suburb = '$nelspruit' or city ='$nelspruit') AND (diseases = '$covid19')";
    $result = mysqli_query($dbcheck, $sql);
    $nnelspruit = mysqli_fetch_array($result);

    $middelburg = "Middelburg";
    $sql = "SELECT COUNT(*) FROM population WHERE (suburb = '$middelburg' or city ='$middelburg') AND (diseases = '$covid19')";
    $result = mysqli_query($dbcheck, $sql);
    $nmiddelburg = mysqli_fetch_array($result);

    $ermelo = "Ermelo";
    $sql = "SELECT COUNT(*) FROM population WHERE (suburb = '$ermelo' or city ='$ermelo') AND (diseases = '$covid19')";
    $result = mysqli_query($dbcheck, $sql);
    $nermelo = mysqli_fetch_array($result);

    $durban = "Duraban";
    $sql = "SELECT COUNT(*) FROM population WHERE (suburb = '$durban' or city ='$durban') AND (diseases = '$covid19')";
    $result = mysqli_query($dbcheck, $sql);
    $ndurban = mysqli_fetch_array($result);

    $pieter = "Pietermaritzburg";
    $sql = "SELECT COUNT(*) FROM population WHERE (suburb = '$pieter' or city ='$pieter') AND (diseases = '$covid19')";
    $result = mysqli_query($dbcheck, $sql);
    $npieter = mysqli_fetch_array($result);

    $ritch = "Richardsbaai";
    $sql = "SELECT COUNT(*) FROM population WHERE (suburb = '$ritch' or city ='$ritch') AND (diseases = '$covid19')";
    $result = mysqli_query($dbcheck, $sql);
    $nritch = mysqli_fetch_array($result);

    $ulundi = "Ulundi";
    $sql = "SELECT COUNT(*) FROM population WHERE (suburb = '$ulundi' or city ='$ulundi') AND (diseases = '$covid19')";
    $result = mysqli_query($dbcheck, $sql);
    $nulundi = mysqli_fetch_array($result);

    $port = "Port Shepstone";
    $sql = "SELECT COUNT(*) FROM population WHERE (suburb = '$port' or city ='$port') AND (diseases = '$covid19')";
    $result = mysqli_query($dbcheck, $sql);
    $nport = mysqli_fetch_array($result);

    $east = "East London";
    $sql = "SELECT COUNT(*) FROM population WHERE (suburb = '$east' or city ='$east') AND (diseases = '$covid19')";
    $result = mysqli_query($dbcheck, $sql);
    $neast = mysqli_fetch_array($result);

    $porte = "Port Elizabeth";
    $sql = "SELECT COUNT(*) FROM population WHERE (suburb = '$porte' or city ='$porte') AND (diseases = '$covid19')";
    $result = mysqli_query($dbcheck, $sql);
    $nporte = mysqli_fetch_array($result);

    $cape = "Cape Town";
    $sql = "SELECT COUNT(*) FROM population WHERE (suburb = '$cape' or city ='$cape') AND (diseases = '$covid19')";
    $result = mysqli_query($dbcheck, $sql);
    $ncape = mysqli_fetch_array($result);

    $wor = "Worcester";
    $sql = "SELECT COUNT(*) FROM population WHERE (suburb = '$wor' or city ='$wor') and (diseases = '$covid19')";
    $result = mysqli_query($dbcheck, $sql);
    $nwor = mysqli_fetch_array($result);

    $geo = "George";
    $sql = "SELECT COUNT(*) FROM population WHERE (suburb = '$geo' or city ='$geo') and (diseases = '$covid19')";
    $result = mysqli_query($dbcheck, $sql);
    $ngeo = mysqli_fetch_array($result);

    $mos = "Mosselbaai";
    $sql = "SELECT COUNT(*) FROM population WHERE (suburb = '$mos' or city ='$mos') and (diseases = '$covid19')";
    $result = mysqli_query($dbcheck, $sql);
    $nmos = mysqli_fetch_array($result);

    $bou = "Beaufort West";
    $sql = "SELECT COUNT(*) FROM population WHERE (suburb = '$bou' or city ='$bou') and (diseases = '$covid19')";
    $result = mysqli_query($dbcheck, $sql);
    $nbou = mysqli_fetch_array($result);

    $unknow = "";
    $sql = "SELECT COUNT(*) FROM population WHERE (suburb = '$unknow' or city ='$unknow') and (diseases = '$covid19') ";
    $result = mysqli_query($dbcheck, $sql);
    $nunknow = mysqli_fetch_array($result);



    ?>
    <style type="text/css">
    table {
        border-collapse: collapse;
        width: 100%;
        font-family: monospace;
        font-size: 25px;
        text-align: center;
        border: 5px solid black;
    }
    th {
        background-color: #5f9ea0;
        color: white;
        border: 5px solid black;
    }
    td{
        border: 5px solid black;
    }
    tr:nth-child(even){
        background-color: violet;
        border: 5px solid black;
    }
    </style>
    <div  class = "tablecontent">
    <table>
    <tr>
    <table>
    <th colspan="7">Northen Cape = <?php $NCT = $nupington[0] + $npofadder[0] + $nspringbok[0] + $nkuruman[0] + $nbritstown[0] +  $nhanover[0] + $nkimberley[0]; echo "$NCT";?></th><tr><td>Upington</td><td>Pofadder</td><td>Springbok</td><td>Kuruman</td><td>Britstown</td><td>Hanover</td><td>Kimberly</td></tr>
    <tr><td><?php echo "$nupington[0]"; ?></td><td><?php echo "$npofadder[0]"; ?></td><td><?php echo "$nspringbok[0]"; ?></td><td><?php echo "$nkuruman[0]"; ?></td><td><?php echo "$nbritstown[0]"; ?></td><td><?php echo "$nhanover[0]"; ?></td><td><?php echo "$nkimberley[0]"; ?></td></tr></table>
    <table>
        <br>
    <th colspan="6">Nort-West = <?php $NWT = $nvryburg[0] + $npotch[0] + $nklerksdorp[0] + $nmahikeng[0] + $nzeerust[0] + $nrustenburg[0] ; echo "$NWT";?></th><tr><td>vryburg</td><td>Potchefstroom</td><td>Klerksdorp</td><td>Mahikeng</td><td>Zeerust</td><td>Rustenburg</td></tr>
    <tr><td><?php echo "$nvryburg[0]"; ?></td><td><?php echo "$npotch[0]"; ?></td><td><?php echo "$nklerksdorp[0]"; ?></td><td><?php echo "$nmahikeng[0]"; ?></td><td><?php echo "$nzeerust[0]"; ?></td><td><?php echo "$nrustenburg[0]"; ?></td></tr></table>
    <table>
    <br>
    <th colspan="4">Gauteng = <?php $GT = $nkrugersdorp[0] + $njoburg[0] + $npretoria[0] + $nrandfontein[0]; echo "$GT";?></th><tr><td>Krugersdorp</td><td>Johannesburg</td><td>Pretoria</td><td>Randfontein</td></tr>
    <tr><td><?php echo "$nkrugersdorp[0]"; ?></td><td><?php echo "$njoburg[0]"; ?></td><td><?php echo "$npretoria[0]"; ?></td><td><?php echo "$nrandfontein[0]"; ?></td></tr></table>
    <table>
    <br>
    <th colspan="3">Limpopo = <?php $LT = $npolokwane[0] + $nmusina[0] + $nbela[0]; echo "$LT";?></th><tr><td>Bela-Bela</td><td>Plokwane</td><td>Musina</td></tr>
    <tr><td><?php echo "$nbela[0]"; ?></td><td><?php echo "$npolokwane[0]"; ?></td><td><?php echo "$nmusina[0]"; ?></td></tr></table>
    <table>
    <br>
    <th colspan="3">Mpumalanga = <?php $MT = $nnelspruit[0] + $nmiddelburg[0] + $nermelo[0]; echo "$MT";?></th><tr><td>Nelspruit</td><td>Middelburg</td><td>Ermelo</td></tr>
    <tr><td><?php echo "$nnelspruit[0]"; ?></td><td><?php echo "$nmiddelburg[0]"; ?></td><td><?php echo "$nermelo[0]"; ?></td></tr></table>
    <table>
    <br>
    <th colspan="5">Kwazulu-Natal = <?php $KNT = $ndurban[0] + $npieter[0] + $nulundi[0] + $nritch[0] + $nport[0]; echo "$KNT";?></th><tr><td>Durban</td><td>Pietermaritzburg</td><td>Richardsbaai</td><td>Ulundi</td><td>Port Shepstone</td></tr>
    <tr><td><?php echo "$ndurban[0]"; ?></td><td><?php echo "$npieter[0]"; ?></td><td><?php echo "$nritch[0]"; ?></td><td><?php echo "$nulundi[0]"; ?></td><td><?php echo "$nport[0]"; ?></td></tr></table>
    <table>
    <br>
    <th colspan="4">Vrystaat = <?php $VT = $nbloem[0] + $nkroon[0] + $nbethlehem[0] + $nwelkom[0]; echo "$VT";?></th><tr><td>Bloemfontein</td><td>Kroonstad</td><td>Welkom</td><td>Bethlehem</td></tr>
    <tr><td><?php echo "$nbloem[0]"; ?></td><td><?php echo "$nkroon[0]"; ?></td><td><?php echo "$nwelkom[0]"; ?></td><td><?php echo "$nbethlehem[0]"; ?></td></tr></table>
    <table>
    <br>
    <th colspan="2">Eastern Cape = <?php $ECT = $neast[0] + $nporte[0]; echo "$ECT";?></th><tr><td>East London</td><td>Port Elizabeth</td></tr>
    <tr><td><?php echo "$neast[0]"; ?></td><td><?php echo "$nporte[0]"; ?></td></tr></table>
    <table>
    <br>
    <th colspan="5">western Cape = <?php $WCT = $ncape[0] + $nwor[0] + $nmos[0] + $ngeo[0] + $nbou[0]; echo "$WCT";?></th><tr><td>Cape Town</td><td>Worcester</td><td>George</td><td>Mosselbaai</td><td>Beaufort West</td></tr>
    <tr><td><?php echo "$ncape[0]"; ?></td><td><?php echo "$nwor[0]"; ?></td><td><?php echo "$ngeo[0]"; ?></td><td><?php echo "$nmos[0]"; ?></td><td><?php echo "$nbou[0]"; ?></td></tr></table>
    <table>
    <br>
    <th colspan="5">Unknown Location</th>
    <tr><td><?php echo "$nunknow[0]"; ?></td></tr></table>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <table>
    <br>
    <th colspan="5">TOTAL</th>
    <tr><td><?php $Total = $NCT + $NWT + $GT + $LT + $MT + $KNT + $VT + $ECT + $WCT +$nunknow[0]; echo "$Total"; ?></td></tr></table>

    </tr>
    </table>
    <?php
}
function editrole($idpat,$iduser){
    echo "<div class='uploadimage'>";
    echo "<label>Change the Role of the Person</label><br><b><label style = 'color:red'>**Must Be ENTERED</label></b>";
            echo "<div id= 'img_div'>";
            echo "<form method='post'>";
            echo "New Role:<b style='color:red'>**</b>";
            echo "<br>";
            echo "<input type='text' name='role'> ";
            echo "<br>";
            echo "<br>";
            echo "<br>";
            echo "<br>";
            echo "<input type='hidden' name = 'idpat' value = '$idpat'> ";
            echo "<input type='hidden' name = 'iduser' value = '$iduser'> ";
            echo "<input type='submit' name='roleupdate' class='button' value='Update' />"; 
            echo "</form>";
            echo "</div>";
      
    if(isset($_POST['roleupdate'])) { 
        addroleupdate(); 
    }
}
function addroleupdate(){
    $iduser = $_POST['iduser'];
    $idpat = $_POST['idpat'];
    $role =  $_POST['role'];
    $dbedit = mysqli_connect('localhost','newuser','password','medicaldatabase');
    $sql = "SELECT * FROM medicalhistory WHERE id = '$idpat'";
    $result = mysqli_query($dbedit, $sql);
    $row = mysqli_fetch_array($result);
    $sql1 = "UPDATE medicalhistory SET occupation = '$role' ";
    if(mysqli_query($dbedit, $sql1)){
        echo "Records added successfully.";
        ?>
        <script type="text/javascript">
        window.location.href = 'home.php';
        </script>
        <?php
      } else{
     echo "ERROR: Could not able to execute $sql1. " . mysqli_error($dbedit);
    }
    

}
?>