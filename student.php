<?php

class student
{
    private $pdo;

    public function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;
    }

    public function contact($firstName, $lastName, $email, $msg)
    {
       
         // Validate the contact form
         $errors = [];
        
         if ($firstName == ' ') {
             $errors[] = "Please enter your First Name.";
         }
         if (empty($lastName)) {
            $errors[] = "Please enter your Last Name.";
        }
         if (empty($email)) {
             $errors[] = "Please enter your email address.";
         }
         if (empty($msg)) {
             $errors[] = "Please enter your message.";
         }
         
         if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
             $errors[] = "Please enter a valid email address.";
         }

        if(empty($errors)){
        $query = "INSERT INTO contact (firstName, lastName, email, msg) VALUES (:firstName, :lastName, :email, :msg)";
       
        // Use a try-catch block to handle any exceptions that may occur during the query execution
        try {
            // Prepare the SQL statement for execution
            $stmt = $this->pdo->prepare($query);

            // Bind the values to the placeholders in the prepared statement
            $stmt->bindParam(':firstName', $firstName);
            $stmt->bindParam(':lastName', $lastName);
            $stmt->bindParam(':email', $email);
            $stmt->bindParam(':msg', $msg);
             
            // Execute the prepared statement
            $stmt->execute();

            // Return the ID of the newly created post
            return true;
        } catch(PDOException $e) {
            // Handle any exceptions that may occur during the query execution
            echo $e->getMessage();
            return $errors;
        }
    }
   
    
}

    public function apply($firstName, $lastName, $email, $city, $state, $zip, $degree, $yearOfBirth, $monthOfBirth, $dayOfBirth)
    {
       
         // Validate the contact form
         $errors = [];
        
         if (empty($firstName)) {
             $errors[] = "Please enter your First Name.";
         }
         if (empty($lastName)) {
            $errors[] = "Please enter your Last Name.";
        }
         if (empty($email)) {
             $errors[] = "Please enter your Email.";
         }
         if (empty($city)) {
             $errors[] = "Please enter your city.";
         }
         if (empty($state)) {
            $errors[] = "Please enter your state.";
        }
        if (empty($zip)) {
            $errors[] = "Please enter your zip.";
        }
         if (empty($degree)) {
            $errors[] = "Please enter your Degree.";
        }
        if (empty($yearOfBirth)) {
            $errors[] = "Please enter your Year of Birth.";
        }
        if (empty($monthOfBirth)) {
            $errors[] = "Please enter your Month of Birth.";
        }
        if (empty($dayOfBirth)) {
            $errors[] = "Please enter your Day of Birth.";
        }
         
        


        if(empty($errors)){
        $query = "INSERT INTO apply (firstName, lastName, email, city, state, zip, degree, yearOfBirth, monthOfBirth, dayOfBirth) VALUES (:firstName, :lastName, :email, :city, :state, :zip, :degree, :yearOfBirth, :monthOfBirth, :dayOfBirth)";
       
        // Use a try-catch block to handle any exceptions that may occur during the query execution
        try {
            // Prepare the SQL statement for execution
            $stmt = $this->pdo->prepare($query);

            // Bind the values to the placeholders in the prepared statement
            $stmt->bindParam(':firstName', $firstName);
            $stmt->bindParam(':lastName', $lastName);
            $stmt->bindParam(':email', $email);
            $stmt->bindParam(':city', $city);
            $stmt->bindParam(':state', $state);
            $stmt->bindParam(':zip', $zip);
            $stmt->bindParam(':degree', $degree);
            $stmt->bindParam(':yearOfBirth', $yearOfBirth);
            $stmt->bindParam(':monthOfBirth', $monthOfBirth);
            $stmt->bindParam(':dayOfBirth', $dayOfBirth);
             
            // Execute the prepared statement
            $stmt->execute();

            // Return the ID of the newly created post
            return true;
        } catch(PDOException $e) {
            // Handle any exceptions that may occur during the query execution
            echo $e->getMessage();
            return $errors;
        }
    }
    }
}



?>